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

  // 検索画面タイトル変更
  add_theme_support('title-tag');
  add_filter('document_title_parts', 'fm_custom_title');

  function fm_custom_title($title){
    if (is_search()){
      $title['title'] = get_search_query().'の検索結果';
    } elseif (is_404()){
      $title['title'] = 'お探しのページは見つかりませんでした。';
    }
    return $title;
  };


} // fm_theme_support()