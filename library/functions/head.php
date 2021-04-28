<?php

add_action('init', 'fm_head_cleanup');
add_action('wp_enqueue_scripts', 'fm_basic_scripts_and_styles', 1 );

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

  // WPのバージョン表示削除
  remove_action('wp_head', 'wp_generator');

  // WordPressのバージョンを消す
  add_filter('style_loader_src', 'fm_remove_cssjs_ver', 9999);
  add_filter('script_loader_src', 'fm_remove_cssjs_ver', 9999);

  function fm_remove_cssjs_ver($src) {
    if(strpos($src,'ver=')) $src = remove_query_arg('ver',$src);
    return $src;
  }
}// fm_head_cleanup()

/*
基本スタイルとJSの読み込み
********************************************************************/
if (!function_exists('fm_basic_scripts_and_styles')){
  function fm_basic_scripts_and_styles() {
      // メインCSS
      wp_enqueue_style(
        'fm-stylesheet',
        get_template_directory_uri() . '/style.css',
        array(),
        '',
        'all'
      );
      // jQuery
      wp_enqueue_script('jquery');

    // 未ログイン時Gutenberg用CSSを読み込まない
    if (!is_admin()) {
      wp_deregister_style('wp-block-library');
      wp_dequeue_style('wp-block-library');
    } //is_admin()
  }
}//fm_basic_scripts_and_styles()