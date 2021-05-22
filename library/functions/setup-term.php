<?php

add_action('after_switch_theme', 'fm_create_default_term');


/*
カスタムタクソノミー類, カテゴリ等を自動登録
********************************************************************/

if (!function_exists('fm_create_default_term')){
  function fm_create_default_term() {
    // 投稿のカテゴリ
    $taxonomy_type = 'category';
    $taxonomy_sets = array(
      '型製品' => array('slug' => 'mold', 'description' =>'00001__削除禁止__出力順番号'),
      '砂型鋳造' => array('slug' => 'sand-casting', 'description' =>'00002__削除禁止__出力順番号'),
      '精密鋳造' => array('slug' => 'investment-casting', 'description' =>'00003__削除禁止__出力順番号'),
      'ジュエリー' => array('slug' => 'jewelry', 'description' =>'00004__削除禁止__出力順番号'),
      '新たな取り組み' => array('slug' => 'new-field', 'description' =>'00005__削除禁止__出力順番号')
    );
    loop_register_term($taxonomy_type, $taxonomy_sets);

    // ニュースのカテゴリ
    $taxonomy_type = 'news_category';
    $taxonomy_sets = array(
      '型製品' => array('slug' => 'mold', 'description' =>'00001__削除禁止__出力順番号'),
      '砂型鋳造' => array('slug' => 'sand-casting', 'description' =>'00002__削除禁止__出力順番号'),
      '精密鋳造' => array('slug' => 'investment-casting', 'description' =>'00003__削除禁止__出力順番号'),
      'ジュエリー' => array('slug' => 'jewelry', 'description' =>'00004__削除禁止__出力順番号')
    );
    loop_register_term($taxonomy_type, $taxonomy_sets);

    // 商品のカテゴリ
    $taxonomy_type = 'product_category';
    $taxonomy_sets = array(
      '型製品' => array('slug' => 'mold', 'description' =>'00001__削除禁止__出力順番号'),
      '砂型鋳造' => array('slug' => 'sand-casting', 'description' =>'00002__削除禁止__出力順番号'),
      '精密鋳造' => array('slug' => 'investment-casting', 'description' =>'00003__削除禁止__出力順番号'),
      'ジュエリー' => array('slug' => 'jewelry', 'description' =>'00004__削除禁止__出力順番号')
    );
    loop_register_term($taxonomy_type, $taxonomy_sets);
  }

  function loop_register_term($taxonomy_type, $taxonomy_sets){
    foreach ($taxonomy_sets as $key => $taxonomy_set) {
      $terms = get_term_by("name", $key, $taxonomy_type);
      if (!$terms){
        wp_insert_term($key, $taxonomy_type, $taxonomy_set);
      } else {
        wp_update_term($terms -> term_id, $taxonomy_type, $taxonomy_set);
      }
    }
  }
}