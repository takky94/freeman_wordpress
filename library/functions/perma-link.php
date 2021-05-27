<?php

add_filter('user_trailingslashit', 'fm_remove_category_base');
add_action('init', 'fm_category_base_rule');
add_filter('generate_rewrite_rules', 'fm_category_base_rewrite');
add_filter('request', 'fm_category_child_link');
add_filter('term_link', 'fm_custom_post_type_permalinks_set', 10, 3);
add_action('init', 'fm_custom_post_type_permalinks_rule');

/*
カテゴリベース「/category/」削除
********************************************************************/

if (!function_exists('fm_remove_category_base')){
  function fm_remove_category_base($link) {
    return str_replace("/category/", "/", $link);
  }
}

if (!function_exists('fm_category_base_rule')){
  function fm_category_base_rule() {
    global $wp_rewrite;
    $wp_rewrite -> flush_rules();
  }
}

if (!function_exists('fm_category_base_rewrite')){
  function fm_category_base_rewrite($wp_rewrite) {
    $new_rules = array('(.+)/page/(.+)/?' => 'index.php?category_name='.$wp_rewrite -> preg_index(1).'&paged='.$wp_rewrite->preg_index(2));
    $wp_rewrite -> rules = $new_rules + $wp_rewrite->rules;
  }
}

// 子カテゴリのルーティングと第一階層カテゴリが指定された投稿のルーティングが被ってしまうため、子カテゴリのスラッグだけ抽出してそのページのみ子カテゴリのページを表示する
// 例) 『ジュエリーの子カテゴリ(injection_wax)のURL => jewelry/injection_wax だが、カテゴリjewelryを指定した投稿を探してしまい404になる』のを避ける
if (!function_exists('fm_category_child_link')){
  function fm_category_child_link( $query = array()) {
    if (isset($query['category_name']) && strpos($query['category_name'], '/') === false && isset($query['name'])){
      $parent_category = get_category_by_slug($query['category_name']);
      $child_categories = get_categories('child_of='.$parent_category -> term_id);
      foreach ($child_categories as $child) {
        if ($query['name'] === $child -> category_nicename) {
          $query['category_name'] = $query['category_name'].'/'.$query['name'];
          unset($query['name']);
        }
      }
    }
    return $query;
  }
}


/*
カスタム投稿パーマリンク「/taxonomy/」削除
********************************************************************/

if (!function_exists('fm_custom_post_type_permalinks_set')){
  function fm_custom_post_type_permalinks_set($termlink, $term, $taxonomy ){
    return str_replace('/'.$taxonomy.'/', '/', $termlink);
    // return ($taxonomy === 'news_category' ? str_replace('/'.$taxonomy.'/', '/', $termlink) : str_replace( '/'.$taxonomy.'/', '/', $termlink ) );
    // return ($taxonomy === 'news_category' ? str_replace('/'.$taxonomy.'/', '/', $termlink) : $term_link);
  }
}

// リダイレクト
if (!function_exists('fm_custom_post_type_permalinks_rule')){
  function fm_custom_post_type_permalinks_rule(){
    add_rewrite_rule('news/([^/]+)/?$', 'index.php?news_category=$matches[1]', 'top' );
    add_rewrite_rule('news/([^/]+)/page/([0-9]+)/?$', 'index.php?news_category=$matches[1]&paged=$matches[2]', 'top');
  }
}