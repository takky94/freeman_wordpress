<?php

fm_theme_support();

/*
WP拡張
********************************************************************/
function fm_theme_support(){
  // サムネイル画像を使用可能に
  add_theme_support('post-thumbnails');

  function fm_custom_image_sizes($sizes){
    return array_merge($sizes, array(
      'thumb-600' => '600 x 400px',
      'thumb-420' => '420 x 275px',
      'thumb-330' => '330 x 220px',
      'thumb-140' => '140 x 90px',
      'thumb-100' => '100 x 65px',
    ));
  }
  add_filter('image_size_names_choose', 'fm_custom_image_sizes');

  // rssリンクをhead内に出力
  add_theme_support('automatic-feed-links');


} // fm_theme_support()