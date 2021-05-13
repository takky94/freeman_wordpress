<?php

add_action('after_switch_theme', 'fm_create_default_term');


/*
カスタムタクソノミー類, カテゴリ等を自動登録
********************************************************************/

function fm_create_default_term() {
  // ニュースのカテゴリ
  $taxonomy_type = 'news_category';
  $taxonomy_sets = array(
    '型製品' => array('slug' => 'mold'),
    '砂型鋳造' => array('slug' => 'sand-casting'),
    '精密鋳造' => array('slug' => 'invetment-casting'),
    'ジュエリー' => array('slug' => 'jewelry')
  );
  foreach ($taxonomy_sets as $key => $taxonomy_set) {
    $terms = get_term_by("name", $key, $taxonomy_type);
    if (!$terms){
      wp_insert_term($key, $taxonomy_type, $taxonomy_set);
    } else {
      wp_update_term($terms -> term_id, $taxonomy_type, $taxonomy_set);
    }
  }

  // 商品のカテゴリ
  $taxonomy_type = 'product_category';
  $taxonomy_sets = array(
    '型製品' => array('slug' => 'mold'),
    '砂型鋳造' => array('slug' => 'sand-casting'),
    '精密鋳造' => array('slug' => 'invetment-casting'),
    'ジュエリー' => array('slug' => 'jewelry')
  );
  foreach ($taxonomy_sets as $key => $taxonomy_set) {
    $terms = get_term_by("name", $key, $taxonomy_type);
    if (!$terms){
      wp_insert_term($key, $taxonomy_type, $taxonomy_set);
    } else {
      wp_update_term($terms -> term_id, $taxonomy_type, $taxonomy_set);
    }
  }
}