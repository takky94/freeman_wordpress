<?php

fm_theme_support();

/*
WP拡張
********************************************************************/
function fm_theme_support(){
  // サムネイル画像を使用可能に
  add_theme_support('post-thumbnails');
  add_image_size('thumb-1280', 1280, 300); // 記事ヘッダーの背景
  add_image_size('thumb-600', 600, 400, true); // 個別ページのアイキャッチ(タイトル左部)や関連記事(大)
  add_image_size('thumb-200', 200, 130, true); //関連記事(小)

  function fm_custom_image_sizes($sizes){
    return array_merge($sizes, array(
      'thumb-1280' => '1280 x 300px',
      'thumb-600' => '600 x 400px',
      'thumb-200' => '200 x 130px',
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