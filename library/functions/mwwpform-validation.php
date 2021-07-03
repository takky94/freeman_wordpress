<?php

add_filter('mwform_validation_mw-wp-form-167', 'fm_add_mwwpform_validation_rule', 10, 3);
add_filter('mwform_error_message_html', 'fm_custom_mwwpform_error_message_html', 10, 3);
add_filter('mwform_error_message_mw-wp-form-167', 'fm_custom_mwwpform_error_message', 10, 3);

/*
MW WP FORMのバリデーションに関する拡張
********************************************************************/
if (!function_exists('fm_add_mwwpform_validation_rule')){
  function fm_add_mwwpform_validation_rule($Validation, $data, $Data){
    $validation_message = "必須項目は入力必須項目です、お手数ですがご記入お願いいたします。\n商品や導入事例に関してなど、お気軽にお問い合わせくださいませ。";
    if (empty($data['your-name'])){
      $Validation -> set_rule('your-name', 'noempty', array('message' => $validation_message));
    } elseif (empty($data['your-company'])){
      $Validation -> set_rule('your-company', 'noempty', array('message' => $validation_message));
    } elseif (empty($data['your-mail'])){
      $Validation -> set_rule('your-mail', 'noempty', array('message' => $validation_message));
    } elseif (empty($data['your-tel'])){
      $Validation -> set_rule('your-tel', 'noempty', array('message' => $validation_message));
    } elseif (empty($data['your-subject'])){
      $Validation -> set_rule('your-subject', 'noempty', array('message' => $validation_message));
    } elseif (empty($data['your-message'])){
      $Validation -> set_rule('your-message', 'noempty', array('message' => $validation_message));
    } elseif (empty($data['your-confirm'])){
      $Validation -> set_rule( 'your-confirm', 'noempty', array('message' => $validation_message));
    }
    return $Validation;
  }
}

if (!function_exists('fm_custom_mwwpform_error_message_html')){
  function fm_custom_mwwpform_error_message_html($tag, $error){
    $start_tag = '<span class="error">';
    $end_tag = '</span>';
    return $start_tag.esc_html($error).$end_tag;
  }
}

if (!function_exists('fm_custom_mwwpform_error_message')){
  function fm_custom_mwwpform_error_message($error, $key, $rule){
      if ($key === 'your-name' && $rule === 'noempty'){
          return 'TEST';
      }
      return $error;
  }
}