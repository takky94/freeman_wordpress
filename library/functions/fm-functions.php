<?php

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
if (!function_exists('featured_image_src')) {
  function featured_image_src($size, $id = null){
    // アイキャッチが登録されていればそれを表示
    if (has_post_thumbnail($id)) return get_the_post_thumbnail_url($id, $size);

    // 登録されていなければテーマ内設置のデフォルト画像
    $template_image_path = get_template_directory_uri().'/images/article/';
    if($size == 'thumb-600') return $template_image_path.'default-600x400.png';
    if($size == 'thumb-200') return $template_image_path.'default-200x130.png';
    return $template_image_path.'default.png';
  }
} // featured_image_src