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
      // 第一階層
      '型製品' => array('slug' => 'mold', 'description' =>'00001__削除禁止__出力順番号'),
      '砂型鋳造' => array('slug' => 'sand-casting', 'description' =>'00002__削除禁止__出力順番号'),
      '精密鋳造' => array('slug' => 'investment-casting', 'description' =>'00003__削除禁止__出力順番号'),
      'ジュエリー' => array('slug' => 'jewelry', 'description' =>'00004__削除禁止__出力順番号'),
      '新たな取り組み' => array('slug' => 'new-field', 'description' =>'00005__削除禁止__出力順番号'),
      // 型製品子カテゴリ
      'デザイン吐出' => array('slug' => 'hoge1','parent' => 'mold'),
      'デザイン切削' => array('slug' => 'hoge2','parent' => 'mold'),
      '試作注型樹脂' => array('slug' => 'hoge3','parent' => 'mold'),
      '試作型材' => array('slug' => 'hoge4','parent' => 'mold'),
      '試作シリコン' => array('slug' => 'hoge5','parent' => 'mold'),
      '量産インバー' => array('slug' => 'hoge6','parent' => 'mold'),
      '量産砂型鋳造' => array('slug' => 'hoge7','parent' => 'mold'),
      '量産精密鋳造' => array('slug' => 'hoge8','parent' => 'mold'),
      '量産ジュエリー' => array('slug' => 'hoge9','parent' => 'mold'),
      '特殊' => array('slug' => 'hoge10','parent' => 'mold'),
      // 砂型鋳造子カテゴリ
      // 精密鋳造子カテゴリ
      // ジュエリー子カテゴリ
      // 新たな取り組み子カテゴリ
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
      if($taxonomy_set['parent']){
        $parent_id = get_term_by('slug', $taxonomy_set['parent'], 'category');//parentのid取得
        $taxonomy_set['parent'] = $parent_id -> term_id;
      }

      if (!$terms){
        wp_insert_term($key, $taxonomy_type, $taxonomy_set);
      } else {
        wp_update_term($terms -> term_id, $taxonomy_type, $taxonomy_set);
      }
    }
  }
}