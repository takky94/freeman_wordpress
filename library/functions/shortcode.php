<?php

add_shortcode("post", "fm_get_articles");
add_shortcode("product", "fm_get_product");
add_shortcode("the_product", "fm_get_the_product");

/*

例) [post category="mold" count="3" orderby="rand" layout="column" /]
********************************************************************/
if (!function_exists('fm_get_articles')){
  function fm_get_articles($atts){

    $category = isset($atts['category']) ? $atts['category'] : 'mold';
    $count = isset($atts['count']) ? $atts['count'] : 3;
    $orderby = isset($atts['orderby']) ? $atts['order'] : 'date';
    $layout = isset($atts['layout']) ? $atts['layout'] : 'column';

    $args = array(
      'post_type' => 'news',
      'posts_per_page' => $count,
      'orderby' => $orderby,
      'tax_query' => array(
        'relation' => 'OR',
        array(
          'taxonomy' => 'news_category',
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

    $str = '<div class="articles-link"><ul class="'.$layout.'">';

    while ($wp_query -> have_posts()){
      $wp_query -> the_post();
      $str .= '<li><a href="'.get_the_permalink().'" class="article-card"><div class="thumbnail"><p class="article-thumbnail"><img src="'.fm_default_thumb('thumb-600').'" alt="" loading="lazy" /></p></div><div class="content"><time class="date font-robot" datetime='.get_the_date('Y-m-d').'">'.get_the_date('Y.m.d').'</time><p class="title">'.get_the_title().'</p></div></a></li>';
    }

    $str .= '</ul></div>';
    wp_reset_postdata();

    echo $str;
  }
}

/*
商品ループ
例) [product category="mold" count="3" orderby="rand" layout="column" /]
********************************************************************/
if (!function_exists('fm_get_product')){
  function fm_get_product($atts){

    $category = isset($atts['category']) ? $atts['category'] : 'mold';
    $count = isset($atts['count']) ? $atts['count'] : 3;
    $orderby = isset($atts['orderby']) ? $atts['order'] : 'date';
    $layout = isset($atts['layout']) ? $atts['layout'] : 'column';

    $args = array(
      'post_type' => 'post',
      'category_name' => $category,
      'posts_per_page' => $count,
      'orderby' => $orderby
    );


    $the_query = new WP_Query($args);
    global $wp_query;
    $tmp_query = $wp_query;
    $wp_query = $the_query;

    if (!($wp_query -> have_posts())) return; // 記事なければ終わり

    $str = '<div class="products-link"><ul class="'.$layout.'">';

    while ($wp_query -> have_posts()){
      $wp_query -> the_post();
      $str .= '<li><a href="'.get_the_permalink().'" class="post-card-product"><div class="thumbnail"><p class="post-thumbnail"><img src="'.fm_default_thumb('thumb-600').'" alt="" loading="lazy" /></p></div><div class="content"><p class="title">'.get_the_title().'</p><p class="more font-robot c-main"><span>MORE</span></p></div></a></li>';
    }

    $str .= '</ul></div>';
    wp_reset_postdata();

    echo $str;
  }
}

/*
特定の商品呼び出し
例) [the_product id="1,2,5" layout="square" /]
********************************************************************/
if (!function_exists('fm_get_the_product')){
  function fm_get_the_product($atts){

    $id = $atts['id'];
    $layout = isset($atts['layout']) ? $atts['layout'] : 'square';

    $args = array(
      'post_type' => 'post',
      'post__in' => array($id)
    );

    $the_query = new WP_Query($args);
    global $wp_query;
    $tmp_query = $wp_query;
    $wp_query = $the_query;

    if (!($wp_query -> have_posts())) return; // 記事なければ終わり

    $str = '<div class="the-product-link"><ul class="'.$layout.'">';

    while ($wp_query -> have_posts()){
      $wp_query -> the_post();
      $str .= '<li><a href="'.get_the_permalink().'" class="post-card-product"><div class="thumbnail"><p class="post-thumbnail"><img src="'.fm_default_thumb('thumb-200').'" alt="" loading="lazy" /></p></div><div class="content"><p class="title">'.get_the_title().'</p><p class="more font-robot c-main"><span>MORE</span></p></div></a></li>';
    }

    $str .= '</ul></div>';
    wp_reset_postdata();

    echo $str;
  }
}