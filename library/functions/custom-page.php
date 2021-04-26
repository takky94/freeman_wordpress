<?php

add_action( 'init', 'fm_create_post_type' );

/*
カスタム投稿
********************************************************************/

function fm_create_post_type() {
  // 新着情報
  register_post_type(
    'news',
    array(
      'label' => 'ニュース',
      'labels' => array(
        'name' => __('news'),
        'singular_name' => __('news'),
        'add_new' => '新規ニュース追加',
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
    ),
  );
}