<?php

add_shortcode("product", "fm_get_product");

/*
TOPでの商品ループ
********************************************************************/
if (!function_exists('fm_get_product')){
  function fm_get_product($atts){

    $category = isset($atts['category']) ? $atts['category'] : 'mold';
    $count = isset($atts['count']) ? $atts['count'] : 3;
    $orderby = isset($atts['orderby']) ? $atts['order'] : 'date';
    $layout = isset($atts['layout']) ? $atts['layout'] : 'column';

    $args = array(
      'post_type' => 'product',
      'posts_per_page' => $count,
      'orderby' => $orderby,
      'tax_query' => array(
        'relation' => 'OR',
        array(
          'taxonomy' => 'product_category',
          'field' => 'slug',
          'terms' => $category,
        )
      )
    );

    $the_query = new WP_Query($args);
    global $wp_query;
    $tmp_query = $wp_query;
    $wp_query = $the_query;

    if (!($wp_query -> have_posts())) return; // 記事なければ終わり

    $str = '<div class="products-link"><ul class="'.$layout.'">';

    while ($wp_query -> have_posts()){
      $wp_query -> the_post();
      $str .= '<li><a href="'.get_the_permalink().'" class="post-card-product"><div class="thumbail"><p class="post-thumbnail"><img src="'.fm_default_thumb('thumb-600').'" alt="" loading="lazy" /></p></div><div class="content"><p class="title">'.get_the_title().'</p><p class="more font-robot c-main">MORE</p></div></a></li>';
    }

    $str .= '</ul></div>';
    wp_reset_postdata();

    echo $str;
  }
}