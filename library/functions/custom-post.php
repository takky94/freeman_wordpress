<?php

add_action( 'init', 'fm_create_post_type' );

/*
カスタム投稿(ニュースと商品)
********************************************************************/

function fm_create_post_type() {
  // 新着情報
  register_post_type(
    'news',
    array(
      'label' => 'ニュース',
      'labels' => array(
        'name' => 'ニュース',
        'singular_name' => 'news',
        'menu_name' => 'ニュース',
        'edit_item' => 'ニュースの編集',
        'view_item' => 'ニュースを表示',
        'search_items' => 'ニュースを検索',
        'not_found' => 'ニュースは見つかりませんでした。',
        'not_found_in_trash' => 'ゴミ箱にニュースはありませんでした。'
      ),
      'public' => true, // 公開する
      'menu_icon' => 'dashicons-list-view', // 管理画面でのアイコン
      'menu_position' => 5, // 管理画面での表示順
      'description' => 'トップページに最新のニュースが表示されます。過去のものも一覧画面で表示します。',
      'has_archive' => true, // 一覧ページ
      'show_in_rest' => true, // Gutenberg有効
      'supports' => array(
        'title',  //タイトル
        'editor',  //本文
        'thumbnail',  //アイキャッチ
        'custom-fields', //カスタムフィールド
        'revisions'  //リビジョンを保存
      ),
      'taxonomies' => array('news_category'),
    ),
  );
  // ニュース用カテゴリ
  register_taxonomy(
    'news_category',
    'news',
    array(
      'label' => 'ニュースのカテゴリ',
      'show_ui' => true,
      'show_admin_column' => true,
      'show_in_quick_edit' => true, // カスタム投稿クイック編集画面で表示
      'show_in_rest' => true, // カスタム投稿編集画面で表示
      'show_in_nav_menus' => true, //カスタムメニューの作成画面で表示するか
      'hierarchical' => true,
    )
  );

 // 商品
  register_post_type(
    'product',
    array(
      'label' => '商品',
      'labels' => array(
        'name' => '商品',
        'singular_name' => 'product',
        'menu_name' => '商品',
        'edit_item' => '商品の編集',
        'view_item' => '商品を表示',
        'search_items' => '商品を検索',
        'not_found' => '商品は見つかりませんでした。',
        'not_found_in_trash' => 'ゴミ箱に商品はありませんでした。'
      ),
      'public' => true, // 公開する
      'menu_icon' => 'dashicons-cart', // 管理画面でのアイコン
      'menu_position' => 6, // 管理画面での表示順
      'description' => '各商品は設定されたカテゴリにて表示されます。',
      'has_archive' => true, // 一覧ページ
      'show_in_rest' => true, // Gutenberg有効
      'supports' => array(
        'title',  //タイトル
        'editor',  //本文
        'thumbnail',  //アイキャッチ
        'custom-fields', //カスタムフィールド
        'revisions'  //リビジョンを保存
      ),
      'taxonomies' => array('product_category'),
    ),
  );
  // 商品用カテゴリ
  register_taxonomy(
    'product_category',
    'product',
    array(
      'label' => '商品のカテゴリ',
      'show_ui' => true,
      'show_admin_column' => true,
      'show_in_quick_edit' => true, // カスタム投稿クイック編集画面で表示
      'show_in_rest' => true, // カスタム投稿編集画面で表示
      'show_in_nav_menus' => true, //カスタムメニューの作成画面で表示するか
      'hierarchical' => true,
    )
  );
}