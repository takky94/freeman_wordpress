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
    } elseif (is_post_type_archive(array('news'))){
      return get_post_type_archive_link(get_post_type());
    } elseif (is_singular( array('news'))){ // カスタム投稿
      return get_post_permalink();
    } else { // 投稿ページ等
      return get_permalink();
    }
  }
}


// 現在のページのタイトルを取得する
if (!function_exists('fm_get_page_title')){
  function fm_get_page_title(){
    $site_name = get_bloginfo('name');
    $sep = ' | ';

    if (is_home() || is_front_page()){
      $title = get_bloginfo('description').$sep.$site_name;
      // カテゴリページ
    } elseif (is_category()){
      $category = get_queried_object();
      $category_id = $category ->  term_id;
      $category_name = $category -> cat_name;
      $title = $category_name;
      if ($category -> category_parent !== 0){ // 親カテゴリを持つ場合
        $ancestors = array_reverse(get_ancestors($category_id, 'category'));
        foreach ($ancestors as $ancestor){
          $title .= $sep.get_cat_name($ancestor);
        } // foreach
      }
      $title .= $sep.$site_name;
      // NEWS個別ページ
    } elseif (is_singular('news')){
      global $post;
      $title = get_the_title();
      $category = get_the_terms($post -> ID, 'news_category');
      $category_name = $category[0] -> name;
      $title .= $sep.$category_name.$sep.'鋳造用材料/製品の日本フリーマン';
      // 投稿ページ
    } elseif (is_single()){
      global $post;
      $title = get_the_title();
      $category = get_the_category();
      $category = $category[0];
      $category_id = $category -> cat_ID;
      $category_name = $category -> cat_name;
      $title .= $sep.$category_name;
      if ($category -> parent !== 0){ // 親カテゴリを持つ場合
        $ancestors = array_reverse(get_ancestors($category_id, 'category'));
        foreach ($ancestors as $ancestor){
          $title .= $sep.get_cat_name($ancestor);
        } // foreach
      }
      // 固定ページ
    } elseif (is_page()){
      global $post;
      $title = get_the_title();
      // NEWSのカテゴリごとのアーカイブページ
    } elseif (is_tax()){
      // $category = get_query_var('news_category');
      // var_dump($category);
      $title = 'test';
      // NEWSのアーカイブページ
    } elseif (is_archive()){
      $title = 'NEWS一覧';
    } elseif (is_search()){
      $title = get_search_query().'の検索結果';
    } elseif (is_404()){
      $title = 'お探しのページは見つかりませんでした。';
    }
    return $title;
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
    if ($size == "thumb-300") return replace_custom_size_thumbnail_url($src, "300", "200");
    if ($size == "thumb-250") return replace_custom_size_thumbnail_url($src, "250", "250");
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
    if($size == 'thumb-300') return $template_image_path.'default-300x200.png';
    if($size == 'thumb-250') return $template_image_path.'default-250x250.png';
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

/*
スラッグからアンダーバーを削除して空白に(子カテゴリトップなどで使用)
********************************************************************/

if (!function_exists('fm_remove_underbar')) {
  function fm_remove_underbar($text) {
    $text = str_replace('_', ' ', $text);
    $text = str_replace('-', ' ', $text);
    return $text;
  }
}

/*
引数の文字列がURLに含まれるか
********************************************************************/

if (!function_exists('fm_is_active_page')) {
  function fm_is_active_page($str){
    $pattern = '/(mold|sand_casting|investment_casting|jewelry|new_field|company)/';
    $result = preg_match($pattern, fm_get_current_url(), $matches);
    if ($result){
      if ($matches[0] === $str) return "active";
    }
  }
}

/*
URLの末尾のスラッグを取得
********************************************************************/

if (!function_exists('fm_get_last_slug')){
  function fm_get_last_slug(){
    $uri = rtrim($_SERVER["REQUEST_URI"], '/');
    $uri = substr($uri, strrpos($uri, '/') + 1);
    return $uri;
  }
}