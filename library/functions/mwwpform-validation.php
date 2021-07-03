<?php

add_filter('mwform_error_message_html', 'fm_custom_mwwpform_error_message_html', 10, 3);
add_filter('mwform_error_message_mw-wp-form-167', 'fm_custom_mwwpform_error_message', 10, 3);

/*
MW WP FORMのバリデーションに関する拡張
********************************************************************/
if (!function_exists('fm_custom_mwwpform_error_message_html')){
  function fm_custom_mwwpform_error_message_html($tag, $error){
    $start_tag = '<span class="error">';
    $end_tag = '</span>';
    return $start_tag.$error.$end_tag;
  }
}

if (!function_exists('fm_custom_mwwpform_error_message')){
  function fm_custom_mwwpform_error_message($error, $key, $rule){
    $validation_message = '必須項目は入力必須項目です、お手数ですがご記入お願いいたします。<br />商品や導入事例に関してなど、お気軽にお問い合わせくださいませ。';
    return $validation_message;

    // 項目ごとにバリデーションを変更する場合
    // if ($key === 'your-name' && $rule === 'noempty'){
    //   return $validation_message;
    // }
    // if ($key === 'your-company' && $rule === 'noempty'){
    //   return $validation_message;
    // }
    // if ($key === 'your-mail' && $rule === 'noempty'){
    //   return $validation_message;
    // }
    // if ($key === 'your-tel' && $rule === 'noempty'){
    //   return $validation_message;
    // }
    // if ($key === 'your-subject' && $rule === 'required'){
    //   return $validation_message;
    // }
    // if ($key === 'your-message' && $rule === 'noempty'){
    //   return $validation_message;
    // }
    // if ($key === 'your-confirm' && $rule === 'required'){
    //   return $validation_message;
    // }
  }
}