<?php

add_action( 'init', 'fm_create_post_type' );

/*
カスタム投稿
********************************************************************/

function fm_create_post_type() {
  // 新着情報
  register_post_type( 'news',
  array(
    'labels' => array(
      'name' => __('新着情報'),
      'singular_name' => __('新着情報')
    ),
    'public' => true,
    'menu_position' => 5,
  )
);
}