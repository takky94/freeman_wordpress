<?php


add_action ('category_add_form_fields', 'fm_create_category_child_custom_fields');
add_action ('category_edit_form_fields', 'fm_create_category_child_custom_fields');
add_action ('edited_term', 'fm_save_category_child_custom_fileds');

/*
カスタムフィールド
********************************************************************/


// カテゴリ説明文等を管理画面で表示
if (!function_exists('fm_create_category_child_custom_fields')){
  function fm_create_category_child_custom_fields($tag){
    $term_id = $tag -> term_id;
    $category_meta = get_option( "fm_category_$term_id");

    $category_text = isset($category_meta['lead_text']) ? esc_html($category_meta['lead_text']) : "";
    $category_img = isset($category_meta['lead_img']) ? esc_html($category_meta['lead_img']) : "";
    $category_table1 = isset($category_meta['lead_table1']) ? esc_html($category_meta['lead_table1']) : "";
    $category_table2 = isset($category_meta['lead_table2']) ? esc_html($category_meta['lead_table2']) : "";
    $category_table3 = isset($category_meta['lead_table3']) ? esc_html($category_meta['lead_table3']) : "";
    $category_table4 = isset($category_meta['lead_table4']) ? esc_html($category_meta['lead_table4']) : "";
    $category_table5 = isset($category_meta['lead_table5']) ? esc_html($category_meta['lead_table5']) : "";

    $admin_url = admin_url();

    echo <<<EOM
      <tr class="form-field">
        <th><label for="leadText">リード文</label></th>
        <td>
          <textarea name="category_meta[lead_text]" id="leadText" rows="5" cols="40">$category_text</textarea>
          <p class="description">カテゴリページの冒頭で画像とともに表示するテキストです。第一階層のカテゴリ(型製品、砂型鋳造...etc)では表示されず、第二階層のカテゴリページで表示されます。</p>
        </td>
      </tr>
      <tr class="form-field">
        <th><label for="uploadImage">リード画像 URL</label></th>
        <td>
          <div style="display:flex">
            <input id="uploadImage" type="text" size="36" name="category_meta[lead_img]" value="$category_img" />
            <button id="uploadImageButton" type="button" class="button button-primary">画像をアップロード</button>
          </div>
          <p style="margin-top: 7px;text-align:center"><img id="uploadImageDemo" src="$category_img" style="width: 150px; height: auto;"></p>
        </td>
      </tr>
      <tr class="form-field">
        <th><label for="leadTable1">表1</label></th>
        <td>
          <input type="text" name="category_meta[lead_table1]" id="leadTable1" value="$category_table1" />
          <p class="description">画像とテキストの下の表部分です。<a href="$admin_url/admin.php?page=tablepress">TablePressというプラグイン</a>から編集できます</p>
        </td>
      </tr>
      <tr class="form-field">
        <th><label for="leadTable2">表2</label></th>
        <td>
          <input type="text" name="category_meta[lead_table2]" id="leadTable2" value="$category_table2" />
        </td>
      </tr>
      <tr class="form-field">
        <th><label for="leadTable3">表3</label></th>
        <td>
          <input type="text" name="category_meta[lead_table3]" id="leadTable3" value="$category_table3" />
        </td>
      </tr>
      <tr class="form-field">
        <th><label for="leadTable4">表4</label></th>
        <td>
          <input type="text" name="category_meta[lead_table4]" id="leadTable4" value="$category_table4" />
        </td>
      </tr>
      <tr class="form-field">
        <th><label for="leadTable5">表5</label></th>
        <td>
          <input type="text" name="category_meta[lead_table5]" id="leadTable5" value="$category_table5" />
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