<?php

add_action('wp_enqueue_scripts', 'fm_basic_scripts_and_styles', 1 );

if (!function_exists('fm_basic_scripts_and_styles')) {
  function fm_basic_scripts_and_styles() {
    if (!is_admin()) {
      // メインCSS
      wp_enqueue_style(
        'fm-stylesheet',
        get_template_directory_uri() . '/style.css',
        array(),
        '',
        'all'
      );
      // jQuery
      wp_enqueue_script('jquery');
      // Gutenberg用CSSを読み込まない
      wp_deregister_style('wp-block-library');
      wp_dequeue_style('wp-block-library');
    } //is_admin()
  }
}//fm_basic_scripts_and_styles()