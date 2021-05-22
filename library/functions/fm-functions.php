<?php

/*
汎用メソッドなど
********************************************************************/

// 現在のページのURLを取得する
if (!function_exists('fm_get_current_url')){
  function fm_get_current_url() {
    if (is_front_page() || is_home()){ // トップページ
      return home_url();
    } elseif (is_category()){ // カテゴリーページ
      return get_category_link(get_query_var('cat'));
    } elseif (is_post_type_archive(array('news', 'product'))){
      return get_post_type_archive_link(get_post_type());
    } elseif (is_singular( array('news', 'products'))){ // カスタム投稿
      return get_post_permalink();
    } else { // 投稿ページ等
      return get_permalink();
    }
  }
}


// 現在のページのタイトルを取得する
if (!function_exists('fm_get_page_title')){
  function fm_get_page_title(){


    if (is_front_page() || is_home()){
      $catchy = (get_bloginfo('description')) ? '｜' . get_bloginfo('description') : "";
      return get_bloginfo('name') . $catchy;
    }
    if (is_category()){
      $category = get_the_category();
      $cat_name = $category[0] -> cat_name;
      return $cat_name . '｜' . get_bloginfo('name');
    }
    if (is_post_type_archive(array('news', 'product'))){
      $post_obj = get_post_type_object(get_post_type());
      return apply_filters('post_type_archive_title', $post_obj -> labels -> name ).'一覧';
    }
    if (is_archive()){
      return get_the_archive_title();
    }

    global $post;
    if ($post){ // 投稿ページ
      return $post->post_title;
    }
    // 見つからなかった場合はサイトタイトルだけ返す
    return get_bloginfo('name');
  }
}

/*
アイキャッチ画像
********************************************************************/

// アイキャッチのURLをトリミングしたサイズのURLに書き換える
// ex) ~/example.png -> ~/example-520x300.png
if (!function_exists('replace_custom_size_thumbnail_url')) {
  function replace_custom_size_thumbnail_url($url, $width, $height) {
    $exts = array('.jpg', '.jpeg', '.png', '.gif', '.bmp');
    $replace_exts = array();
    foreach ($exts as $ext) {
      $replace_exts[] = '-' . $width . 'x' . $height . $ext;
    }
    return str_replace($exts, $replace_exts, $url);
  }
}
if (!function_exists('replace_thumbnail_src')) {
  function replace_thumbnail_src($src, $size){
    if ($size == "thumb-600") return replace_custom_size_thumbnail_url($src, "600", "400");
    if ($size == "thumb-200") return replace_custom_size_thumbnail_url($src, "200", "130");
  }
}

// サイズを指定して画像のURLを取得
if (!function_exists('fm_default_thumb')) {
  function fm_default_thumb($size, $id = null){
    // アイキャッチが登録されていればそれを表示
    if (has_post_thumbnail($id)) return get_the_post_thumbnail_url($id, $size);

    // 登録されていなければテーマ内設置のデフォルト画像
    $template_image_path = get_template_directory_uri().'/images/article/';
    if($size == 'thumb-600') return $template_image_path.'default-600x400.png';
    if($size == 'thumb-200') return $template_image_path.'default-200x130.png';
    return $template_image_path.'default.png';
  }
} // fm_default_thumb

/*
記事にNEWマーク
********************************************************************/

if (!function_exists('fm_newmark')) {
  function fm_newmark(){
    $days = 3; // 記事投稿日から3日経ってない場合にNEWマークつける
    $days_sec = $days * 86400;

    $today = time();
    $entry = get_the_time('U');
    $days_ago = $today - $entry;

    if ($days_ago < $days_sec) {
      echo '<span class="meta__label--new font-robot">NEW</span>';
    }
  }
}

/*
文字数制限
********************************************************************/

if (!function_exists('fm_trim_text')) {
  function fm_trim_text($text, $size){
    $str = strip_tags($text);
    if (mb_strlen($text, 'UTF-8') < $size){
      $str = mb_substr(strip_tags($text), 0, $size, 'UTF-8');
      echo $str.'…';
    } else {
      echo strip_tags($str);
    }
  }
}

/*
画像遅延読み込みラップ
********************************************************************/

if (!function_exists('fm_lazyload')) {
  function fm_lazyload(){
    echo 'loading="lazy"';
  }
}