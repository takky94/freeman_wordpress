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
      '砂型鋳造' => array('slug' => 'sand_casting', 'description' =>'00002__削除禁止__出力順番号'),
      '精密鋳造' => array('slug' => 'investment_casting', 'description' =>'00003__削除禁止__出力順番号'),
      'ジュエリー' => array('slug' => 'jewelry', 'description' =>'00004__削除禁止__出力順番号'),
      '新たな取り組み' => array('slug' => 'new_field', 'description' =>'00005__削除禁止__出力順番号'),

      // 型製品子カテゴリ
      'デザイン吐出' => array('slug' => 'discharge','parent' => 'mold'),
      'デザイン切削' => array('slug' => 'cutting','parent' => 'mold'),
      '試作注型樹脂' => array('slug' => 'casting','parent' => 'mold'),
      '試作型材' => array('slug' => 'mold_material','parent' => 'mold'),
      '試作シリコン' => array('slug' => 'silicone','parent' => 'mold'),
      '量産インバー' => array('slug' => 'invar','parent' => 'mold'),
      // '量産砂型鋳造' => array('slug' => 'sand_casting','parent' => 'mold'), // 第二階層へのリンクのみ
      // '量産精密鋳造' => array('slug' => 'investing_casting','parent' => 'mold'), // 第二階層へのリンクのみ
      // '量産ジュエリー' => array('slug' => 'jewelry','parent' => 'mold'), // 第二階層へのリンクのみ
      // '特殊' => array('slug' => 'hoge10','parent' => 'mold'), // スプレに記載なし

      // 砂型鋳造子カテゴリ // 第三階層なし(納品直前削除)
      // '鋳造用フィルター' => array('slug' => 'hoge123', 'parent' => 'sand_casting'),
      // 'スリープ' => array('slug' => 'hoge123', 'parent' => 'sand_casting'),
      // '方案用ゲート' => array('slug' => 'hoge123', 'parent' => 'sand_casting'),
      // '非鉄用塗型' => array('slug' => 'hoge123', 'parent' => 'sand_casting'),
      // '各種対火物' => array('slug' => 'hoge123', 'parent' => 'sand_casting'),
      // 'アルミ原材料' => array('slug' => 'hoge123', 'parent' => 'sand_casting'),

      // 精密鋳造子カテゴリ
      'WAX' => array('slug' => 'wax', 'parent' => 'investment_casting'),
      '離散型・洗浄剤' => array('slug' => 'parting_powder', 'parent' => 'investment_casting'),
      'バインダー' => array('slug' => 'binder', 'parent' => 'investment_casting'),
      '砂' => array('slug' => 'refractory_material', 'parent' => 'investment_casting'),
      'その他' => array('slug' => 'others', 'parent' => 'investment_casting'),

      // ジュエリー子カテゴリ
      'インジェクションWAX' => array('slug' => 'injection_wax', 'parent' => 'jewelry'),
      '切削WAX' => array('slug' => 'carving_wax', 'parent' => 'jewelry'), // カービングWAX?
      '埋没材' => array('slug' => 'investing_material', 'parent' => 'jewelry'),
      // 'シリコン' => array('slug' => 'hgo', 'parent' => 'jewelry'), // 第三階層なし
      'ツールマット' => array('slug' => 'matt_tool', 'parent' => 'jewelry'),

      // 新たな取り組み子カテゴリ // 第三階層なし(納品直前削除)
      // '消臭剤' => array('slug' => 'hhhh', 'parent' => 'new_field'),
      // 'ミネラルキャスティング' => array('slug' => 'hhhh', 'parent' => 'new_field'),
      // 'CO2洗浄システム' => array('slug' => 'hhhh', 'parent' => 'new_field'),
      // 'ホットメルト' => array('slug' => 'hhhh', 'parent' => 'new_field'),
      // '暑さ対策' => array('slug' => 'hhhh', 'parent' => 'new_field'),
      // '電動アシスト台車' => array('slug' => 'hhhh', 'parent' => 'new_field'),
      // 'ベアリングセンサーシステム' => array('slug' => 'hhhh', 'parent' => 'new_field'),
    );
    loop_register_term($taxonomy_type, $taxonomy_sets);

    // ニュースのカテゴリ
    $taxonomy_type = 'news_category';
    $taxonomy_sets = array(
      '型製品' => array('slug' => 'mold', 'description' =>'00001__削除禁止__出力順番号'),
      '砂型鋳造' => array('slug' => 'sand_casting', 'description' =>'00002__削除禁止__出力順番号'),
      '精密鋳造' => array('slug' => 'investment_casting', 'description' =>'00003__削除禁止__出力順番号'),
      'ジュエリー' => array('slug' => 'jewelry', 'description' =>'00004__削除禁止__出力順番号'),
    );
    loop_register_term($taxonomy_type, $taxonomy_sets);

    // 商品のカテゴリ
    $taxonomy_type = 'product_category';
    $taxonomy_sets = array(
      '型製品' => array('slug' => 'mold', 'description' =>'00001__削除禁止__出力順番号'),
      '砂型鋳造' => array('slug' => 'sand_casting', 'description' =>'00002__削除禁止__出力順番号'),
      '精密鋳造' => array('slug' => 'investment_casting', 'description' =>'00003__削除禁止__出力順番号'),
      'ジュエリー' => array('slug' => 'jewelry', 'description' =>'00004__削除禁止__出力順番号'),
      '新たな取り組み' => array('slug' => 'new_field', 'description' =>'00005__削除禁止__出力順番号'),

      // 型製品子カテゴリ
      'デザイン吐出' => array('slug' => 'discharge','parent' => 'mold'),
      'デザイン切削' => array('slug' => 'cutting','parent' => 'mold'),
      '試作注型樹脂' => array('slug' => 'casting','parent' => 'mold'),
      '試作型材' => array('slug' => 'mold_material','parent' => 'mold'),
      '試作シリコン' => array('slug' => 'silicone','parent' => 'mold'),
      '量産インバー' => array('slug' => 'invar','parent' => 'mold'),
      // '量産砂型鋳造' => array('slug' => 'sand_casting','parent' => 'mold'), // 第二階層へのリンクのみ
      // '量産精密鋳造' => array('slug' => 'investing_casting','parent' => 'mold'), // 第二階層へのリンクのみ
      // '量産ジュエリー' => array('slug' => 'jewelry','parent' => 'mold'), // 第二階層へのリンクのみ
      // '特殊' => array('slug' => 'hoge10','parent' => 'mold'), // スプレに記載なし

      // 砂型鋳造子カテゴリ // 第三階層なし(納品直前削除)
      // '鋳造用フィルター' => array('slug' => 'hoge123', 'parent' => 'sand_casting'),
      // 'スリープ' => array('slug' => 'hoge123', 'parent' => 'sand_casting'),
      // '方案用ゲート' => array('slug' => 'hoge123', 'parent' => 'sand_casting'),
      // '非鉄用塗型' => array('slug' => 'hoge123', 'parent' => 'sand_casting'),
      // '各種対火物' => array('slug' => 'hoge123', 'parent' => 'sand_casting'),
      // 'アルミ原材料' => array('slug' => 'hoge123', 'parent' => 'sand_casting'),

      // 精密鋳造子カテゴリ
      'WAX' => array('slug' => 'wax', 'parent' => 'investment_casting'),
      '離散型・洗浄剤' => array('slug' => 'parting_powder', 'parent' => 'investment_casting'),
      'バインダー' => array('slug' => 'binder', 'parent' => 'investment_casting'),
      '砂' => array('slug' => 'refractory_material', 'parent' => 'investment_casting'),
      'その他' => array('slug' => 'others', 'parent' => 'investment_casting'),

      // ジュエリー子カテゴリ
      'インジェクションWAX' => array('slug' => 'injection_wax', 'parent' => 'jewelry'),
      '切削WAX' => array('slug' => 'carving_wax', 'parent' => 'jewelry'), // カービングWAX?
      '埋没材' => array('slug' => 'investing_material', 'parent' => 'jewelry'),
      // 'シリコン' => array('slug' => 'hgo', 'parent' => 'jewelry'), // 第三階層なし
      'ツールマット' => array('slug' => 'matt_tool', 'parent' => 'jewelry'),

      // 新たな取り組み子カテゴリ // 第三階層なし(納品直前削除)
      // '消臭剤' => array('slug' => 'hhhh', 'parent' => 'new_field'),
      // 'ミネラルキャスティング' => array('slug' => 'hhhh', 'parent' => 'new_field'),
      // 'CO2洗浄システム' => array('slug' => 'hhhh', 'parent' => 'new_field'),
      // 'ホットメルト' => array('slug' => 'hhhh', 'parent' => 'new_field'),
      // '暑さ対策' => array('slug' => 'hhhh', 'parent' => 'new_field'),
      // '電動アシスト台車' => array('slug' => 'hhhh', 'parent' => 'new_field'),
      // 'ベアリングセンサーシステム' => array('slug' => 'hhhh', 'parent' => 'new_field'),
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