<?php


add_action ('category_edit_form_fields', 'fm_create_category_child_custom_fields');
add_action ('edited_term', 'fm_save_category_child_custom_fileds');

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
    $jewelry_text = isset($category_meta['jewelry_text']) ? esc_html($category_meta['jewelry_text']) : "";
    $jewelry_img = isset($category_meta['jewelry_img']) ? esc_html($category_meta['jewelry_img']) : "";
    $jewelry_table1 = isset($category_meta['jewelry_table1']) ? esc_html($category_meta['jewelry_table1']) : "";
    $jewelry_table2 = isset($category_meta['jewelry_table2']) ? esc_html($category_meta['jewelry_table2']) : "";
    $jewelry_table3 = isset($category_meta['jewelry_table3']) ? esc_html($category_meta['jewelry_table3']) : "";
    $jewelry_table4 = isset($category_meta['jewelry_table4']) ? esc_html($category_meta['jewelry_table4']) : "";
    $jewelry_table5 = isset($category_meta['jewelry_table5']) ? esc_html($category_meta['jewelry_table5']) : "";

    // その他子カテゴリ用カスタムフィールド
    $others_img = isset($category_meta['others_img']) ? esc_html($category_meta['others_img']) : "";
    $others_slider_img1 = isset($category_meta['others_slider_img1']) ? esc_html($category_meta['others_slider_img1']) : "";
    $others_slider_img2 = isset($category_meta['others_slider_img2']) ? esc_html($category_meta['others_slider_img2']) : "";
    $others_slider_img3 = isset($category_meta['others_slider_img3']) ? esc_html($category_meta['others_slider_img3']) : "";
    $others_slider_img4 = isset($category_meta['others_slider_img4']) ? esc_html($category_meta['others_slider_img4']) : "";
    $others_slider_img5 = isset($category_meta['others_slider_img5']) ? esc_html($category_meta['others_slider_img5']) : "";
    $others_lead_title = isset($category_meta['others_lead_title']) ? esc_html($category_meta['others_lead_title']) : "";
    $others_lead_text = isset($category_meta['others_lead_text']) ? esc_html($category_meta['others_lead_text']) : "";
    $others_youtube = isset($category_meta['others_youtube']) ? esc_html($category_meta['others_youtube']) : "";



    $admin_url = admin_url();

    echo <<<EOM
<!-- ジュエリー子カテゴリ用カスタムフィールド -->
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
  <th><label for="othersImage">スライダー横画像 URL</label></th>
  <td>
    <div style="display:flex">
      <input id="othersImage" class="js-uploadImage" type="text" size="36" name="category_meta[others_img]" value="$others_img" placeholder="https://..." />
      <button type="button" class="js-uploadImageButton button button-primary">画像をアップロード</button>
    </div>
    <p style="margin-top: 7px;text-align:center"><img class="js-uploadImageDemo" src="$others_img" style="width: 150px; height: auto;"></p>
  </td>
</tr>
<tr class="form-field parent-others">
  <th><label for="othersSliderImage1">スライダー画像1 URL</label></th>
  <td>
    <div style="display:flex">
      <input id="othersSliderImage1" class="js-uploadImage" type="text" size="36" name="category_meta[others_slider_img1]" value="$others_slider_img1" placeholder="https://..." />
      <button type="button" class="js-uploadImageButton button button-primary">画像をアップロード</button>
    </div>
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
    <p style="margin-top: 7px;text-align:center"><img class="js-uploadImageDemo" src="$others_slider_img5" style="width: 150px; height: auto;"></p>
  </td>
</tr>
<tr class="form-field parent-others">
  <th><label for="othersLeadTitle">リード文タイトル</label></th>
  <td>
    <input id="othersLeadTitle" type="text" size="36" name="category_meta[others_lead_title]" value="$others_lead_title" />
  </td>
</tr>
<tr class="form-field parent-others">
  <th><label for="othersLeadText">リード文</label></th>
  <td>
    <textarea name="category_meta[others_lead_text]" id="othersLeadText" rows="5" cols="40">$others_lead_text</textarea>
    <p class="description">カテゴリページの冒頭で画像とともに表示するテキストです。第一階層のカテゴリ(型製品、砂型鋳造...etc)では表示されず、第二階層のカテゴリページで表示されます。</p>
  </td>
</tr>
<tr class="form-field parent-others">
  <th><label for="othersYouTube">YouTubeのURL</label></th>
  <td>
    <input id="othersYouTube" type="text" size="36" name="category_meta[others_youtube]" value="$others_youtube" placeholder="https://youtube.com/watch?v=XXXXXX" />
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