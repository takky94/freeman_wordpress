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
    $validation_message = '';
    return $validation_message;
  }
}