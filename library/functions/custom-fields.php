<?php


add_action ('category_edit_form_fields', 'fm_create_category_child_custom_fields');
add_action ('edited_term', 'fm_save_category_child_custom_fileds');
add_action ('admin_menu', 'fm_add_jewelry_tags_fields');
add_action ('save_post', 'fm_save_jewelry_tags_fields');

/*
カスタムフィールド
********************************************************************/


// カテゴリ説明文等を管理画面で表示
if (!function_exists('fm_create_category_child_custom_fields')){
  function fm_create_category_child_custom_fields($tag){
    $category = get_queried_object();
    $term_id = $tag -> term_id;
    $category_meta = get_option( "fm_category_$term_id");

    // ジュエリー子カテゴリ用カスタムフィールド
    $jewelry_title = isset($category_meta['jewelry_title']) ? esc_html($category_meta['jewelry_title']) : "";
    $jewelry_text = isset($category_meta['jewelry_text']) ? esc_html($category_meta['jewelry_text']) : "";
    $jewelry_img = isset($category_meta['jewelry_img']) ? esc_html($category_meta['jewelry_img']) : "";
    $jewelry_table1 = isset($category_meta['jewelry_table1']) ? esc_html($category_meta['jewelry_table1']) : "";
    $jewelry_table2 = isset($category_meta['jewelry_table2']) ? esc_html($category_meta['jewelry_table2']) : "";
    $jewelry_table3 = isset($category_meta['jewelry_table3']) ? esc_html($category_meta['jewelry_table3']) : "";
    $jewelry_table4 = isset($category_meta['jewelry_table4']) ? esc_html($category_meta['jewelry_table4']) : "";
    $jewelry_table5 = isset($category_meta['jewelry_table5']) ? esc_html($category_meta['jewelry_table5']) : "";

    // その他子カテゴリ用カスタムフィールド
    $others_slider_img1 = isset($category_meta['others_slider_img1']) ? esc_html($category_meta['others_slider_img1']) : "";
    $others_slider_img2 = isset($category_meta['others_slider_img2']) ? esc_html($category_meta['others_slider_img2']) : "";
    $others_slider_img3 = isset($category_meta['others_slider_img3']) ? esc_html($category_meta['others_slider_img3']) : "";
    $others_slider_img4 = isset($category_meta['others_slider_img4']) ? esc_html($category_meta['others_slider_img4']) : "";
    $others_slider_img5 = isset($category_meta['others_slider_img5']) ? esc_html($category_meta['others_slider_img5']) : "";
    $others_description_title = isset($category_meta['others_description_title']) ? esc_html($category_meta['others_description_title']) : "";
    $others_description_text = isset($category_meta['others_description_text']) ? esc_html($category_meta['others_description_text']) : "";
    $others_youtube = isset($category_meta['others_youtube']) ? esc_html($category_meta['others_youtube']) : "";
    $others_youtube_caption = isset($category_meta['others_youtube_caption']) ? esc_html($category_meta['others_youtube_caption']) : "";

    $admin_url = admin_url();

    echo <<<EOM
<!-- ジュエリー子カテゴリ用カスタムフィールド -->
<tr class="form-field parent-jewelry">
  <th><label for="jewelryTitle">リード文タイトル</label></th>
  <td>
    <input id="jewelryTitle" type="text" size="36" name="category_meta[jewelry_title]" value="$jewelry_title" />
    <p class="description">カテゴリページの冒頭で画像とともに表示するタイトルです。第一階層のカテゴリ(型製品、砂型鋳造...etc)では表示されず、第二階層のカテゴリページで表示されます。</p>
  </td>
</tr>
<tr class="form-field parent-jewelry">
  <th><label for="jewelryText">リード文</label></th>
  <td>
    <textarea name="category_meta[jewelry_text]" id="jewelryText" rows="5" cols="40">$jewelry_text</textarea>
    <p class="description">カテゴリページの冒頭で画像とともに表示するテキストです。第一階層のカテゴリ(型製品、砂型鋳造...etc)では表示されず、第二階層のカテゴリページで表示されます。</p>
  </td>
</tr>
<tr class="form-field parent-jewelry">
  <th><label for="jewelryImage">リード画像 URL</label></th>
  <td>
    <div style="display:flex">
      <input id="jewelryImage" class="js-uploadImage" type="text" size="36" name="category_meta[jewelry_img]" value="$jewelry_img" />
      <button type="button" class="js-uploadImageButton button button-primary">画像をアップロード</button>
    </div>
    <p style="margin-top: 7px;text-align:center"><img class="js-uploadImageDemo" src="$jewelry_img" style="width: 150px; height: auto;"></p>
  </td>
</tr>
<tr class="form-field parent-jewelry">
  <th><label for="jewelryTable1">表1</label></th>
  <td>
    <input type="text" name="category_meta[jewelry_table1]" id="jewelryTable1" value="$jewelry_table1" placeholder="[table id=1]" />
    <p class="description">画像とテキストの下の表部分です。<a href="$admin_url/admin.php?page=tablepress">TablePressというプラグイン</a>から編集できます。この欄にはショートコードを入力してください。</p>
    <p>例: <pre><code>[table id=1]</code></pre></p>
  </td>
</tr>
<tr class="form-field parent-jewelry">
  <th><label for="jewelryTable2">表2</label></th>
  <td>
    <input type="text" name="category_meta[jewelry_table2]" id="jewelryTable2" value="$jewelry_table2" placeholder="[table id=2]" />
  </td>
</tr>
<tr class="form-field parent-jewelry">
  <th><label for="jewelryTable3">表3</label></th>
  <td>
    <input type="text" name="category_meta[jewelry_table3]" id="jewelryTable3" value="$jewelry_table3" placeholder="[table id=3]" />
  </td>
</tr>
<tr class="form-field parent-jewelry">
  <th><label for="jewelryTable4">表4</label></th>
  <td>
    <input type="text" name="category_meta[jewelry_table4]" id="jewelryTable4" value="$jewelry_table4" placeholder="[table id=4]" />
  </td>
</tr>
<tr class="form-field parent-jewelry">
  <th><label for="jewelryTable5">表5</label></th>
  <td>
    <input type="text" name="category_meta[jewelry_table5]" id="jewelryTable5" value="$jewelry_table5" placeholder="[table id=5]" />
  </td>
</tr>
<!-- その他子カテゴリ用カスタムフィールド -->
<tr class="form-field parent-others">
  <th><label for="othersSliderImage1">スライダー画像1 URL</label></th>
  <td>
    <div style="display:flex">
      <input id="othersSliderImage1" class="js-uploadImage" type="text" size="36" name="category_meta[others_slider_img1]" value="$others_slider_img1" placeholder="https://..." />
      <button type="button" class="js-uploadImageButton button button-primary">画像をアップロード</button>
    </div>
    <p class="description">横600px:縦400px以上のサイズの画像を設定してください</p>
    <p style="margin-top: 7px;text-align:center"><img class="js-uploadImageDemo" src="$others_slider_img1" style="width: 150px; height: auto;"></p>
  </td>
</tr>
<tr class="form-field parent-others">
  <th><label for="othersSliderImage2">スライダー画像2 URL</label></th>
  <td>
    <div style="display:flex">
      <input id="othersSliderImage2" class="js-uploadImage" type="text" size="36" name="category_meta[others_slider_img2]" value="$others_slider_img2" placeholder="https://..." />
      <button type="button" class="js-uploadImageButton button button-primary">画像をアップロード</button>
    </div>
    <p class="description">横600px:縦400px以上のサイズの画像を設定してください</p>
    <p style="margin-top: 7px;text-align:center"><img class="js-uploadImageDemo" src="$others_slider_img2" style="width: 150px; height: auto;"></p>
  </td>
</tr>
<tr class="form-field parent-others">
  <th><label for="othersSliderImage3">スライダー画像3 URL</label></th>
  <td>
    <div style="display:flex">
      <input id="othersSliderImage3" class="js-uploadImage" type="text" size="36" name="category_meta[others_slider_img3]" value="$others_slider_img3" placeholder="https://..." />
      <button type="button" class="js-uploadImageButton button button-primary">画像をアップロード</button>
    </div>
    <p class="description">横600px:縦400px以上のサイズの画像を設定してください</p>
    <p style="margin-top: 7px;text-align:center"><img class="js-uploadImageDemo" src="$others_slider_img3" style="width: 150px; height: auto;"></p>
  </td>
</tr>
<tr class="form-field parent-others">
  <th><label for="othersSliderImage4">スライダー画像4 URL</label></th>
  <td>
    <div style="display:flex">
      <input id="othersSliderImage4" class="js-uploadImage" type="text" size="36" name="category_meta[others_slider_img4]" value="$others_slider_img4" placeholder="https://..." />
      <button type="button" class="js-uploadImageButton button button-primary">画像をアップロード</button>
    </div>
    <p class="description">横600px:縦400px以上のサイズの画像を設定してください</p>
    <p style="margin-top: 7px;text-align:center"><img class="js-uploadImageDemo" src="$others_slider_img4" style="width: 150px; height: auto;"></p>
  </td>
</tr>
<tr class="form-field parent-others">
  <th><label for="othersSliderImage5">スライダー画像5 URL</label></th>
  <td>
    <div style="display:flex">
      <input id="othersSliderImage5" class="js-uploadImage" type="text" size="36" name="category_meta[others_slider_img5]" value="$others_slider_img5" placeholder="https://..." />
      <button type="button" class="js-uploadImageButton button button-primary">画像をアップロード</button>
    </div>
    <p class="description">横600px:縦400px以上のサイズの画像を設定してください</p>
    <p style="margin-top: 7px;text-align:center"><img class="js-uploadImageDemo" src="$others_slider_img5" style="width: 150px; height: auto;"></p>
  </td>
</tr>
<tr class="form-field parent-others">
  <th><label for="othersDescriptionTitle">説明文タイトル</label></th>
  <td>
    <input id="othersDescriptionTitle" type="text" size="36" name="category_meta[others_description_title]" value="$others_description_title" />
  </td>
</tr>
<tr class="form-field parent-others">
  <th><label for="othersDescriptionText">説明文</label></th>
  <td>
    <textarea name="category_meta[others_description_text]" id="othersDescriptionText" rows="5" cols="40">$others_description_text</textarea>
    <p class="description">カテゴリページの冒頭で画像とともに表示するテキストです。第一階層のカテゴリ(型製品、砂型鋳造...etc)では表示されず、第二階層のカテゴリページで表示されます。</p>
  </td>
</tr>
<tr class="form-field parent-others">
  <th><label for="othersYouTube">YouTubeの動画ID</label></th>
  <td>
    <input id="othersYouTube" type="text" size="36" name="category_meta[others_youtube]" value="$others_youtube" placeholder="XXXXXX" />
    <p class="description">埋め込みたいYouTube動画のURLにあるIDを入力してください。IDは、『https://youtube.com/watch?v=XXXXXX』のXXXXXXの箇所です。</p>
  </td>
</tr>
<tr class="form-field parent-others">
  <th><label for="othersYouTubeCaption">YouTubeの説明文</label></th>
  <td>
    <input id="othersYouTubeCaption" type="text" size="36" name="category_meta[others_youtube_caption]" value="$others_youtube_caption" placeholder="YouTube動画の下に挿入される説明文" />
  </td>
</tr>
EOM;
  }
}

if (!function_exists('fm_save_category_child_custom_fileds')){
  function fm_save_category_child_custom_fileds($term_id){
    if (!isset($_POST['category_meta'])) return;

    $category_meta = get_option("fm_category_$term_id");
    $category_keys = array_keys($_POST['category_meta']);

    foreach ($category_keys as $key){
      if (isset($_POST['category_meta'][$key])){
        $category_meta[$key] = $_POST['category_meta'][$key];
      }
    }

    update_option( "fm_category_$term_id", $category_meta );
  }
}

// 投稿画面（ジュエリー子カテゴリTOPページで使用）

if (!function_exists('fm_add_jewelry_tags_fields')){
  function fm_add_jewelry_tags_fields() {
    add_meta_box('jewelry_tags', 'ジュエリーページの絞り込み項目', 'fm_insert_jewelry_tags_fields', 'post', 'side');
  }
}
if (!function_exists('fm_insert_jewelry_tags_fields')){
  function fm_insert_jewelry_tags_fields() {

    // optionにselected付与するかどうか判別
    class isSelected{
      function i($label, $value){
        global $post;
        $post_id = $post -> ID;
        if (get_post_meta($post_id, $label, true) !== $value) return;
        return 'selected';
      }
    }
    $is_selected = new isSelected();

    echo <<<EOM
<div class="jewelry-tags-area">
<style>.jewelry-tags-area p{font-weight:500;margin:20px 0 0}.jewelry-tags-area small{display:block}.jewelry-tags-area select{margin-top:5px;width:-webkit-fill-available}</style>
<p>流動性</p>
<small>(インジェクションワックスページで使用)</small>
<select name="jewelry_tags_liquidity">
<option value="">未選択</option>
<option {$is_selected -> i('jewelry_tags_liquidity', '流動性優')} value="流動性優">高</option>
<option {$is_selected -> i('jewelry_tags_liquidity', '流動性普通')} value="流動性普通">普通</option>
<option {$is_selected -> i('jewelry_tags_liquidity', '流動性低')} value="流動性低">低</option>
</select>
<p>柔軟性</p>
<small>(インジェクションワックス/カービングワックスページで使用)</small>
<select name="jewelry_tags_softness">
<option value="">未選択</option>
<option {$is_selected -> i('jewelry_tags_softness', '柔軟性優')} value="柔軟性優">優</option>
<option {$is_selected -> i('jewelry_tags_softness', '柔軟性高')} value="柔軟性高">高</option>
<option {$is_selected -> i('jewelry_tags_softness', '柔軟性良')} value="柔軟性良">良</option>
<option {$is_selected -> i('jewelry_tags_softness', '柔軟性可')} value="柔軟性可">可</option>
<option {$is_selected -> i('jewelry_tags_softness', '柔軟性普通')} value="柔軟性普通">普通</option>
<option {$is_selected -> i('jewelry_tags_softness', '柔軟性低')} value="柔軟性低">低</option>
<option {$is_selected -> i('jewelry_tags_softness', '柔軟性不足')} value="柔軟性不足">不足</option>
</select>
<p>切削性</p>
<small>(インジェクションワックスページで使用)</small>
<select name="jewelry_tags_machinability">
<option value="">未選択</option>
<option {$is_selected -> i('jewelry_tags_machinability', '切削性高')} value="切削性高">高</option>
<option {$is_selected -> i('jewelry_tags_machinability', '切削性普通')} value="切削性普通">普通</option>
<option {$is_selected -> i('jewelry_tags_machinability', '切削性低')} value="切削性低">低</option>
</select>
<p>収縮</p>
<small>(インジェクションワックスページで使用)</small>
<select name="jewelry_tags_shrinkable">
<option value="">未選択</option>
<option {$is_selected -> i('jewelry_tags_shrinkable', '収縮高')} value="収縮高">高</option>
<option {$is_selected -> i('jewelry_tags_shrinkable', '収縮普通')} value="収縮普通">普通</option>
<option {$is_selected -> i('jewelry_tags_shrinkable', '収縮低')} value="収縮低">低</option>
</select>
<p>弾性</p>
<small>(インジェクションワックスページで使用)</small>
<select name="jewelry_tags_elastic">
<option value="">未選択</option>
<option {$is_selected -> i('jewelry_tags_elastic', '弾性高')} value="弾性高">高</option>
<option {$is_selected -> i('jewelry_tags_elastic', '弾性普通')} value="弾性普通">普通</option>
<option {$is_selected -> i('jewelry_tags_elastic', '弾性低')} value="弾性低">低</option>
</select>
<p>原型寿命</p>
<small>(インジェクションワックスページで使用)</small>
<select name="jewelry_tags_prototype_life">
<option value="">未選択</option>
<option {$is_selected -> i('jewelry_tags_prototype_life', '原型寿命最高')} value="原型寿命最高">最高</option>
<option {$is_selected -> i('jewelry_tags_prototype_life', '原型寿命高')} value="原型寿命高">高</option>
<option {$is_selected -> i('jewelry_tags_prototype_life', '原型寿命普通')} value="原型寿命普通">普通</option>
</select>
<p>再現性</p>
<small>(インジェクションワックスページで使用)</small>
<select name="jewelry_tags_reproducibility">
<option value="">未選択</option>
<option {$is_selected -> i('jewelry_tags_reproducibility', '再現性高')} value="再現性高">高</option>
<option {$is_selected -> i('jewelry_tags_reproducibility', '再現性普通')} value="再現性普通">普通</option>
<option {$is_selected -> i('jewelry_tags_reproducibility', '再現性低')} value="再現性低">低</option>
</select>
<p>固化時間</p>
<small>(インジェクションワックスページで使用)</small>
<select name="jewelry_tags_solidification_time">
<option value="">未選択</option>
<option {$is_selected -> i('jewelry_tags_solidification_time', '固化時間速')} value="固化時間速">速</option>
<option {$is_selected -> i('jewelry_tags_solidification_time', '固化時間普通')} value="固化時間普通">普通</option>
<option {$is_selected -> i('jewelry_tags_solidification_time', '固化時間遅')} value="固化時間遅">遅</option>
</select>
<p>手加工性</p>
<small>(カービングワックスページで使用)</small>
<select name="jewelry_tags_hand_workability">
<option value="">未選択</option>
<option {$is_selected -> i('jewelry_tags_hand_workability', '手加工性速')} value="手加工性速">速</option>
<option {$is_selected -> i('jewelry_tags_hand_workability', '手加工性普通')} value="手加工性普通">普通</option>
<option {$is_selected -> i('jewelry_tags_hand_workability', '手加工性遅')} value="手加工性遅">遅</option>
</select>
<p>硬度</p>
<small>(カービングワックスページで使用)</small>
<select name="jewelry_tags_hardness">
<option value="">未選択</option>
<option {$is_selected -> i('jewelry_tags_hardness', '硬度低')} value="硬度低">低／52-55</option>
<option {$is_selected -> i('jewelry_tags_hardness', '硬度普通')} value="硬度普通">普通／56-57</option>
<option {$is_selected -> i('jewelry_tags_hardness', '硬度高')} value="硬度高">高／59-60</option>
</select>
<p>高速CNC</p>
<small>(カービングワックスページで使用)</small>
<select name="jewelry_tags_cnc">
<option value="">未選択</option>
<option {$is_selected -> i('jewelry_tags_cnc', '高速CNC優')} value="高速CNC優">優</option>
<option {$is_selected -> i('jewelry_tags_cnc', '高速CNC良')} value="高速CNC良">良</option>
<option {$is_selected -> i('jewelry_tags_cnc', '高速CNC可')} value="高速CNC可">可</option>
</select>
<p>鋳造地金</p>
<small>(埋没法ページで使用)</small>
<select name="jewelry_tags_casting_bullion">
<option value="">未選択</option>
<option {$is_selected -> i('jewelry_tags_casting_bullion', '鋳造地金優')} value="鋳造地金優">金・銀</option>
<option {$is_selected -> i('jewelry_tags_casting_bullion', '鋳造地金プラチナ')} value="鋳造地金プラチナ">プラチナ</option>
<option {$is_selected -> i('jewelry_tags_casting_bullion', '鋳造地金ホワイトゴールド')} value="鋳造地金ホワイトゴールド">ホワイトゴールド</option>
<option {$is_selected -> i('jewelry_tags_casting_bullion', '鋳造地金真鍮・銅')} value="鋳造地金真鍮・銅">真鍮・銅</option>
<option {$is_selected -> i('jewelry_tags_casting_bullion', '鋳造地金ステンレス')} value="鋳造地金ステンレス">ステンレス</option>
</select>
<p>原型素材</p>
<small>(埋没法ページで使用)</small>
<select name="jewelry_tags_prototype_material">
<option value="">未選択</option>
<option {$is_selected -> i('jewelry_tags_prototype_material', '原型素材WAX')} value="原型素材WAX">WAX</option>
<option {$is_selected -> i('jewelry_tags_prototype_material', '原型素材RP材料')} value="原型素材RP材料">RP材料</option>
</select>
<p>低粉塵タイプ</p>
<small>(埋没法ページで使用)</small>
<select name="jewelry_tags_is_low_dust">
<option value="">未選択</option>
<option {$is_selected -> i('jewelry_tags_is_low_dust', '低粉塵タイプYES')} value="低粉塵タイプYES">YES</option>
<option {$is_selected -> i('jewelry_tags_is_low_dust', '低粉塵タイプNO')} value="低粉塵タイプNO">NO</option>
</select>
</div>
EOM;
  }
}
if (!function_exists('fm_save_jewelry_tags_fields')){
  function fm_save_jewelry_tags_fields ($post_id){

    function save_jewelry_tags_value($post_id, $label){
      if(!empty($_POST[$label])){
        // 選択されてれば値を保存
        update_post_meta($post_id, $label, $_POST[$label] );
      }else{
         // 未選択なら値削除
        delete_post_meta($post_id, $label);
      }
    }

    save_jewelry_tags_value($post_id, 'jewelry_tags_liquidity');
    save_jewelry_tags_value($post_id, 'jewelry_tags_softness');
    save_jewelry_tags_value($post_id, 'jewelry_tags_machinability');
    save_jewelry_tags_value($post_id, 'jewelry_tags_shrinkable');
    save_jewelry_tags_value($post_id, 'jewelry_tags_elastic');
    save_jewelry_tags_value($post_id, 'jewelry_tags_prototype_life');
    save_jewelry_tags_value($post_id, 'jewelry_tags_reproducibility');
    save_jewelry_tags_value($post_id, 'jewelry_tags_solidification_time');
    save_jewelry_tags_value($post_id, 'jewelry_tags_hand_workability');
    save_jewelry_tags_value($post_id, 'jewelry_tags_hardness');
    save_jewelry_tags_value($post_id, 'jewelry_tags_cnc');
    save_jewelry_tags_value($post_id, 'jewelry_tags_casting_bullion');
    save_jewelry_tags_value($post_id, 'jewelry_tags_prototype_material');
    save_jewelry_tags_value($post_id, 'jewelry_tags_is_low_dust');
  }
}