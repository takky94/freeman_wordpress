<?php

add_action('after_switch_theme', 'fm_create_default_term');


/*
カスタムタクソノミー類, カテゴリ等を自動登録
参考: https://floatingweed.com/wordpressでテーマ適用時にカテゴリーの一括登録を行う/
********************************************************************/

if (!function_exists('fm_create_default_term')){
  function fm_create_default_term() {
    // 商品のカテゴリ
    $taxonomy_type = 'category';
    $taxonomy_sets = array(
      // 第一階層
      '試作・型材料' => array('slug' => 'mold'),
      '砂型鋳造' => array('slug' => 'sand_casting'),
      '精密鋳造' => array('slug' => 'investment_casting'),
      'ジュエリー' => array('slug' => 'jewelry'),
      '新たな取り組み' => array('slug' => 'new_field'),

      // 型製品子カテゴリ
      '機械吐出' => array('slug' => 'close_contour_paste','parent' => 'mold'),
      '切削加工' => array('slug' => 'cutting_process','parent' => 'mold'),
      '注型' => array('slug' => 'resin_casting','parent' => 'mold'),
      '試作・型材料' => array('slug' => 'mold_material','parent' => 'mold'),
      '一般型取り用シリコーン' => array('slug' => 'silicone','parent' => 'mold'),
      'インバー' => array('slug' => 'invar','parent' => 'mold'),
      '特殊効果・造形用シリコーン' => array('slug' => 'special_effects','parent' => 'mold'),

      // 精密鋳造子カテゴリ
      'ワックス各種' => array('slug' => 'waxes', 'parent' => 'investment_casting'),
      '離型剤・パターン洗浄剤' => array('slug' => 'parting_powder', 'parent' => 'investment_casting'),
      '高機能バインダー' => array('slug' => 'specialty_binders', 'parent' => 'investment_casting'),
      '耐火材' => array('slug' => 'refractories', 'parent' => 'investment_casting'),
      'スラリー添加剤・コア材' => array('slug' => 'slurry_additives_core_materials', 'parent' => 'investment_casting'),
      '鋳造' => array('slug' => 'casting', 'parent' => 'investment_casting'),
      '精密鋳造用設備' => array('slug' => 'equipment', 'parent' => 'investment_casting'),
      '原材料各種' => array('slug' => 'genzairyou', 'parent' => 'investment_casting'),
      'セラミックフォームフィルター' => array('slug' => 'seramikku-fomu-firuta', 'parent' => 'investment_casting'),
      'ルツボ' => array('slug' => 'rutubo', 'parent' => 'investment_casting'),
      'セラミックカップ' => array('slug' => 'seramikku-kappu', 'parent' => 'investment_casting'),

      // ジュエリー子カテゴリ
      'インジェクションワックス' => array('slug' => 'injection_wax', 'parent' => 'jewelry'),
      'カービングワックス' => array('slug' => 'carving_wax', 'parent' => 'jewelry'),
      '埋没材' => array('slug' => 'investments', 'parent' => 'jewelry'),
      'ワックス関連工具' => array('slug' => 'matt_tool', 'parent' => 'jewelry'),
    );
    loop_register_term($taxonomy_type, $taxonomy_sets);

    // 商品のタグ
    $taxonomy_type = 'post_tag';
    $taxonomy_sets = array(
      '型' => array('slug' => 'mold'),
      '砂型鋳造' => array('slug' => 'sand_casting'),
      '精密鋳造' => array('slug' => 'investment_casting'),
      'ジュエリー' => array('slug' => 'jewelry'),
      '新たな取り組み' => array('slug' => 'new_field'),
      // 砂系のタグ
      '鋳造模型' => array('slug' => 'casting_pattern'),
      '造型' => array('slug' => 'moulding'),
      '注湯' => array('slug' => 'casting'),
      '鋳物' => array('slug' => 'casting_metal_works'),
      // 型系のタグ
      '機械吐出' => array('slug' => 'close_contour_paste'),
      '切削加工' => array('slug' => 'cutting_process'),
      '注型' => array('slug' => 'resin_casting'),
      '試作・型材料' => array('slug' => 'mold_material'),
      '一般型取り用シリコーン' => array('slug' => 'silicone'),
      'インバー' => array('slug' => 'invar'),
      '特殊効果・造形用シリコーン' => array('slug' => 'special_effects'),
      // 精密系のタグ
      'ワックス各種' => array('slug' => 'waxes'),
      '離散型・パターン洗浄剤' => array('slug' => 'parting_powder'),
      '高機能バインダー' => array('slug' => 'specialty_binders'),
      '耐火材' => array('slug' => 'refractories'),
      'スラリー添加剤・コア材' => array('slug' => 'slurry_additives_core_materials'),
      '鋳造（精密）' => array('slug' => 'casting_investment'),
      '精密鋳造用設備' => array('slug' => 'equipment'),
      // ジュエリー系のタグ
      'インジェクションワックス' => array('slug' => 'injection_wax'),
      'カービングワックス' => array('slug' => 'carving_wax'),
      '埋没材' => array('slug' => 'investments'),
      'ワックス関連工具' => array('slug' => 'matt_tool'),
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

    // ニュースのタグ
    $taxonomy_type = 'news_tag';
    $taxonomy_sets = array(
      '型' => array('slug' => 'mold'),
      '砂型鋳造' => array('slug' => 'sand_casting'),
      '精密鋳造' => array('slug' => 'investment_casting'),
      'ジュエリー' => array('slug' => 'jewelry'),
      '新たな取り組み' => array('slug' => 'new_field'),
      // 砂系のタグ
      '鋳造模型' => array('slug' => 'casting_pattern'),
      '造型' => array('slug' => 'moulding'),
      '注湯' => array('slug' => 'casting'),
      '鋳物' => array('slug' => 'casting_metal_works'),
      // 型系のタグ
      '機械吐出' => array('slug' => 'close_contour_paste'),
      '切削加工' => array('slug' => 'cutting_process'),
      '注型' => array('slug' => 'resin_casting'),
      '試作・型材料' => array('slug' => 'mold_material'),
      '一般型取り用シリコーン' => array('slug' => 'silicone'),
      'インバー' => array('slug' => 'invar'),
      '特殊効果・造形用シリコーン' => array('slug' => 'special_effects'),
      // 精密系のタグ
      'ワックス各種' => array('slug' => 'waxes'),
      '離散型・パターン洗浄剤' => array('slug' => 'parting_powder'),
      '高機能バインダー' => array('slug' => 'specialty_binders'),
      '耐火材' => array('slug' => 'refractories'),
      'スラリー添加剤・コア材' => array('slug' => 'slurry_additives_core_materials'),
      '鋳造（精密）' => array('slug' => 'casting_investment'),
      '精密鋳造用設備' => array('slug' => 'equipment'),
      // ジュエリー系のタグ
      'インジェクションワックス' => array('slug' => 'injection_wax'),
      'カービングワックス' => array('slug' => 'carving_wax'),
      '埋没材' => array('slug' => 'investments'),
      'ワックス関連工具' => array('slug' => 'matt_tool'),
    );
    loop_register_term($taxonomy_type, $taxonomy_sets);
  }

  // テーマ有効化時に上記各カテゴリの登録
  function loop_register_term($taxonomy_type, $taxonomy_sets){
    foreach ($taxonomy_sets as $key => $taxonomy_set) {
      $terms = get_term_by("name", $key, $taxonomy_type);
      // 親クラスのスラッグからID特定して書き換え
      if(isset($taxonomy_set['parent']) && $taxonomy_set['parent']){
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