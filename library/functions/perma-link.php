<?php

add_filter('term_link', 'fm_custom_post_type_permalinks_set', 10, 3);
add_action('init', 'fm_custom_post_type_permalinks_rule');

/*
カスタム投稿パーマリンク「/taxonomy/」削除
********************************************************************/

if (!function_exists('fm_custom_post_type_permalinks_set')){
  function fm_custom_post_type_permalinks_set($termlink, $term, $taxonomy ){
    return str_replace('/'.$taxonomy.'/', '/', $termlink);
  }
}

// リダイレクト
if (!function_exists('fm_custom_post_type_permalinks_rule')){
  function fm_custom_post_type_permalinks_rule(){
    add_rewrite_rule('news/([^/]+)/?$', 'index.php?news_category=$matches[1]', 'top' );
    add_rewrite_rule('news/([^/]+)/page/([0-9]+)/?$', 'index.php?news_category=$matches[1]&paged=$matches[2]', 'top');
  }
}