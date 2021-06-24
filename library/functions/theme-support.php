<?php

fm_theme_support();

/*
WP拡張
********************************************************************/
function fm_theme_support(){
  // サムネイル画像を使用可能に
  add_theme_support('post-thumbnails',array('post', 'page', 'news'));
  add_image_size('thumb-600', 600, 400, true); // 個別ページのアイキャッチ(タイトル左部)や関連記事(大)
  add_image_size('thumb-300', 300, 200, true); // 個別ページのアイキャッチ(タイトル左部)や関連記事(大)
  add_image_size('thumb-250', 250, 250, true); // 関連商品(小)
  add_image_size('thumb-200', 200, 130, true); //関連記事(小)

  add_filter('image_size_names_choose', 'fm_custom_image_sizes');
  function fm_custom_image_sizes($sizes){
    return array_merge($sizes, array(
      'thumb-600' => '600 x 400px',
      'thumb-300' => '300 x 200px',
      'thumb-250' => '250 x 250px',
      'thumb-200' => '200 x 130px',
    ));
  }

  // rssリンクをhead内に出力
  add_theme_support('automatic-feed-links');

  // 検索画面タイトル変更
  add_theme_support('title-tag');
  add_filter('document_title_separator', 'fm_title_separator');
  add_filter('document_title_parts', 'fm_custom_title');

  // セパレータの変更
  function fm_title_separator($separator) {
    $separator = '|';
    return $separator;
  }

  // タイトルタグの修正
  function fm_custom_title($title){
    $site_name = get_bloginfo('name');
    $sep = ' | ';

    if (is_home() || is_front_page()){
      unset($title['tagline']);
      $title['title'] = get_bloginfo('description').$sep.$site_name;
    }

    if (is_single()){
      global $post;
      $title['title'] = get_the_title();

      $category = get_the_category();
      $category = $category[0];
      $category_id = $category -> cat_ID;
      $category_name = $category -> cat_name;

      $title['title'] .= $sep.$category_name;

      if ($category -> parent !== 0){ // 親カテゴリを持つ場合
        $ancestors = array_reverse(get_ancestors($category_id, 'category'));
        foreach ($ancestors as $ancestor){
          $title['title'] .= $sep.get_cat_name($ancestor);
        } // foreach
      }
    }
    if (is_search()){
      $title['title'] = get_search_query().'の検索結果';
    } elseif (is_404()){
      $title['title'] = 'お探しのページは見つかりませんでした。';
    }
    return $title;
  };

  // 抜粋文の文字数超過[…]を…に変更
  add_filter('excerpt_more', 'fm_excerpt_more');
  function fm_excerpt_more($more) {
    return '…';
  }

} // fm_theme_support()