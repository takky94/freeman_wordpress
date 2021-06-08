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
      '試作・型材料' => array('slug' => 'mold', 'description' =>'00001__削除禁止__出力順番号'),
      '砂型鋳造' => array('slug' => 'sand_casting', 'description' =>'00002__削除禁止__出力順番号'),
      '精密鋳造' => array('slug' => 'investment_casting', 'description' =>'00003__削除禁止__出力順番号'),
      'ジュエリー' => array('slug' => 'jewelry', 'description' =>'00004__削除禁止__出力順番号'),
      '新たな取り組み' => array('slug' => 'new_field', 'description' =>'00005__削除禁止__出力順番号'),

      // 型製品子カテゴリ
      '機械吐出' => array('slug' => 'close_contour_paste','parent' => 'mold'),
      '切削加工' => array('slug' => 'cutting_process','parent' => 'mold'),
      '注型' => array('slug' => 'resin_casting','parent' => 'mold'),
      '試作・型材料' => array('slug' => 'mold_material','parent' => 'mold'),
      '一般型取り用シリコーン' => array('slug' => 'silicone','parent' => 'mold'),
      'インバー' => array('slug' => 'invar','parent' => 'mold'),
      '特殊効果・造形用シリコーン' => array('slug' => 'hoge10','parent' => 'mold'),

      // 精密鋳造子カテゴリ
      'WAX' => array('slug' => 'wax', 'parent' => 'investment_casting'),
      '離散型・洗浄剤' => array('slug' => 'parting_powder', 'parent' => 'investment_casting'),
      'バインダー' => array('slug' => 'binder', 'parent' => 'investment_casting'),
      '砂' => array('slug' => 'refractory_material', 'parent' => 'investment_casting'),
      'その他' => array('slug' => 'others', 'parent' => 'investment_casting'),

      // ジュエリー子カテゴリ
      'インジェクションワックス' => array('slug' => 'injection_wax', 'parent' => 'jewelry'),
      'カービングワックス' => array('slug' => 'carving_wax', 'parent' => 'jewelry'),
      '埋没材' => array('slug' => 'investments', 'parent' => 'jewelry'),
      // 'シリコン' => array('slug' => 'hgo', 'parent' => 'jewelry'), // 第三階層なし
      'ワックス関連工具' => array('slug' => 'matt_tool', 'parent' => 'jewelry'),
    );
    loop_register_term($taxonomy_type, $taxonomy_sets);

    // ニュースのカテゴリ
    $taxonomy_type = 'news_category';
    $taxonomy_sets = array(
      '試作・型材料' => array('slug' => 'mold', 'description' =>'00001__削除禁止__出力順番号'),
      '砂型鋳造' => array('slug' => 'sand_casting', 'description' =>'00002__削除禁止__出力順番号'),
      '精密鋳造' => array('slug' => 'investment_casting', 'description' =>'00003__削除禁止__出力順番号'),
      'ジュエリー' => array('slug' => 'jewelry', 'description' =>'00004__削除禁止__出力順番号'),
      '環境商品' => array('slug' => 'new_field', 'description' =>'00005__削除禁止__出力順番号'),
    );
    loop_register_term($taxonomy_type, $taxonomy_sets);
  }

  // テーマ有効化時に上記各カテゴリの登録
  function loop_register_term($taxonomy_type, $taxonomy_sets){
    foreach ($taxonomy_sets as $key => $taxonomy_set) {
      $terms = get_term_by("name", $key, $taxonomy_type);
      // 親クラスのスラッグからID特定して書き換え
      if($taxonomy_set['parent']){
        $parent_id = get_term_by('slug', $taxonomy_set['parent'], $taxonomy_type);//parentのid取得
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