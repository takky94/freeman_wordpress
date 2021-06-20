<?php

add_action('init', 'fm_head_cleanup');
add_action('admin_print_scripts', 'fm_admin_scripts');
add_action('wp_enqueue_scripts', 'fm_basic_scripts_and_styles');
add_action('wp_head', 'fm_favicon');
add_action('wp_head', 'fm_meta_ogp');

/*
デフォルトのhead整理
********************************************************************/
function fm_head_cleanup(){
  // フィード削除
  remove_action('wp_head', 'feed_links_extra', 3);

  // Windows Live Writer用リンク削除
  remove_action('wp_head', 'wlwmanifest_link');

  // rel link削除
  remove_action('wp_head', 'parent_post_rel_link', 10, 0);
  remove_action('wp_head', 'start_post_rel_link', 10, 0);
  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
  remove_action('wp_head', 'rel_canonical');

  // WPのバージョン表示削除
  remove_action('wp_head', 'wp_generator');

  // WordPressのバージョンを消す
  add_filter('style_loader_src', 'fm_remove_cssjs_ver', 9999);
  add_filter('script_loader_src', 'fm_remove_cssjs_ver', 9999);

  // canonical
  add_action('wp_head', 'fm_add_canonical');

  function fm_remove_cssjs_ver($src) {
    if(strpos($src,'ver=')) $src = remove_query_arg('ver',$src);
    return $src;
  }

  // canonical URL設定
  function fm_add_canonical() {
    $canonical = null;
    if(is_home() || is_front_page()) {
      $canonical = home_url();
    } elseif (is_category()) {
      $canonical = get_category_link( get_query_var('cat') );
    } elseif (is_search()) {
      $canonical = get_search_link();
    } elseif (is_singular() ) {
      $canonical = get_permalink();
    } else{
      $canonical = home_url();
    }
    echo '<link rel="canonical" href="'.$canonical.'">'."\n";
  }
}// fm_head_cleanup()

/*
基本スタイルとJSの読み込み
********************************************************************/
if (!function_exists('fm_basic_scripts_and_styles')){
  function fm_basic_scripts_and_styles() {
    // メインCSS
    wp_enqueue_style(
      'fm-stylesheet-main',
      get_template_directory_uri() . '/style/compressed/main.min.css',
      array(),
      '',
      'all'
    );
    // jQuery
    wp_enqueue_script('jquery');

    // 未ログイン時Gutenberg用CSSを読み込まない
    // if (!is_admin()) {
    //   wp_deregister_style('wp-block-library');
    //   wp_dequeue_style('wp-block-library');
    // } //is_admin()
  }
}//fm_basic_scripts_and_styles()

/*
管理画面での読み込み
********************************************************************/
if (!function_exists('fm_admin_scripts')){
  function fm_admin_scripts(){
    if (get_post_type() === 'post'){
      wp_enqueue_script(
        'fm-validation',
        get_template_directory_uri().'/js/backend/post-validation.js',
        array(
			    'wp-data', 'wp-editor', 'wp-edit-post'
        )
      );
    }

    if (get_post_type() === 'news'){
      wp_enqueue_script(
        'fm-validation',
        get_template_directory_uri().'/js/backend/news-validation.js',
        array(
			    'wp-data', 'wp-editor', 'wp-edit-post'
        )
      );
    }

    global $taxonomy;
    if($taxonomy === 'category') {
      wp_enqueue_script('fm-upload', get_template_directory_uri().'/js/backend/upload.js');
      wp_enqueue_script('fm-category', get_template_directory_uri().'/js/backend/parent-category.js');
      wp_enqueue_media();
      wp_enqueue_script('media-upload');
      wp_enqueue_script('thickbox');
    }
  }
}//fm_admin_scripts

/*
デフォルトのhead整理 OGP周り
********************************************************************/

if (!function_exists('fm_favicon')) {
  function fm_favicon() {
    $icon32 = get_template_directory_uri().'/images/favicon/32x32.png';
    $icon192 = get_template_directory_uri().'/images/favicon/192x192.png';
    $icon300 = get_template_directory_uri().'/images/favicon/300x300.png';
    $icon384 = get_template_directory_uri().'/images/favicon/384x384.png';
    $insert = '';

    // favicon各種
    $insert .= '<link rel="icon" sizes="32x32" href="'.$icon32.'" />'."\n";
    $insert .= '<link rel="icon" sizes="192x192" href="'.$icon192.'" />'."\n";
    $insert .= '<link rel="apple-touch-icon" href="'.$icon300.'" />'."\n";
    $insert .= '<meta name="msapplication-TileImage" content="'.$icon300.'" />'."\n";

    // 出力
    echo $insert;
  } // fm_favicon
}

/*
デフォルトのhead整理 OGP周り
********************************************************************/

// og:image
if (!function_exists('fm_set_ogp_image')){
  function fm_set_ogp_image(){
    // 投稿(post)、カスタム投稿タイプ、固定ページでアイキャッチが設定されてればそれを表示
    if (is_singular()){
      $thumbnail = fm_default_thumb('large');
      if(strpos($thumbnail,'default') === false) return $thumbnail;
    }
    return get_template_directory_uri().'/images/ogp.png';
  }
}

// og:url
if (!function_exists('fm_set_ogp_url')) {
  function fm_set_ogp_url() {
    return fm_get_current_url();
  }
}

// og:title
if (!function_exists('fm_set_ogp_title_tag')) {
  function fm_set_ogp_title_tag() {
    return fm_get_page_title();
  }
}


// meta description
if (!function_exists('fm_get_meta_description')) {
  function fm_get_meta_description() {
    global $post;
    if (is_singular('news', 'product') || is_single() || is_page()){ // 各投稿
      $description = $post -> post_content;
      if (empty($description)) return null;
      $description = str_replace(array("\r\n","\r","\n","&nbsp;"),'',$description);
      $description = wp_strip_all_tags($description);
      $description = mb_strimwidth($description,0,220,"...");
      return $description;
    } elseif (is_front_page() || is_home()){ // トップページ
      if (get_bloginfo('description')) return get_bloginfo('description');
    } elseif(is_category()) { // カテゴリページ
      $category = get_the_category();
      $cat_name = $category[0] -> cat_name;
      return $cat_name . 'の説明ページです。';
    }
    return null;
  }
}

if (!function_exists('fm_meta_ogp')) {
  function fm_meta_ogp() {
    $insert = '';
    if (fm_get_meta_description()) {
      $insert = '<meta name="description" content="'.esc_attr(fm_get_meta_description()).'" />';
    }
    $ogp_descr = fm_get_meta_description();
    $ogp_img = fm_set_ogp_image();
    $ogp_title = fm_set_ogp_title_tag();
    $ogp_url = fm_set_ogp_url();
    $ogp_type = (is_front_page() || is_home()) ? 'website' : 'article';

    // 出力するOGPタグをまとめる
    $insert .= '<meta property="og:title" content="' . esc_attr($ogp_title) . '" />' . "\n";
    $insert .= '<meta property="og:description" content="' . esc_attr($ogp_descr) . '" />' . "\n";
    $insert .= '<meta property="og:type" content="' . $ogp_type . '" />' . "\n";
    $insert .= '<meta property="og:url" content="' . esc_url($ogp_url) . '" />' . "\n";
    $insert .= '<meta property="og:image" content="' . esc_url($ogp_img) . '" />' . "\n";
    $insert .= '<meta name="thumbnail" content="' . esc_url($ogp_img) . '" />' . "\n";
    $insert .= '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . '" />' . "\n";
    $insert .= '<meta name="twitter:card" content="summary_large_image" />' . "\n";

    // 出力
    if (is_front_page() || is_home() || is_singular('news') || is_single() || is_page() || is_category() || is_archive() || is_tag()){
      echo $insert;
    }

  } // fm_meta_ogp
}