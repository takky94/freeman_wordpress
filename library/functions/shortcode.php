<?php

add_shortcode("product", "fm_get_product");
add_shortcode("test", "fm_test");


/*
TOPでの商品ループ
********************************************************************/
if (!function_exists('fm_get_product')){
  function fm_get_product($atts){
    $args = array(
      'post_type' => 'product',
      'posts_per_page' => 3,
      'tax_query' => array(
        'relation' => 'OR',
        array(
          'taxonomy' => 'product_category',
          'field' => 'slug',
          'terms' => $atts['cat'],
        )
      )
    );

    $the_query = new WP_Query($args);
    global $wp_query;
    $tmp_query = $wp_query;
    $wp_query = $the_query;

    if (!($wp_query -> have_posts())) return; // 記事なければ終わり

    $str = '<div class="products-link '.$atts['class'].'"><ul>';

    while ($wp_query -> have_posts()){
      $wp_query->the_post();
      $str .= '<li><a href="#" class=""><div class="thumbail"><p class="post-thumbnail"><img src="'.fm_default_thumb('thumb-600').'" alt="" loading="lazy" /></p></div><p>'.get_the_title().'</p></a></li>';
    }

    $str .= '</ul></div>';
    wp_reset_postdata();

    echo $str;
  }
}