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

    echo <<<EOM
      <tr class="form-field">
        <th><label for="lead_text">リード文</label></th>
        <td>
          <textarea type="text" name="category_meta[lead_text]" id="lead_text" rows="5">$category_text</textarea>
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
    EOM;
  }
}

if (!function_exists('fm_save_category_child_custom_fileds')){
  function fm_save_category_child_custom_fileds($term_id){
    if (!isset($_POST['category_meta'])) return;

    $category_meta = get_option( "fm_category_$term_id");
    $category_keys = array_keys($_POST['category_meta']);

    foreach ($category_keys as $key){
      if (isset($_POST['category_meta'][$key])){
        $category_meta[$key] = $_POST['category_meta'][$key];
      }
    }

    update_option( "fm_category_$term_id", $category_meta );
  }
}