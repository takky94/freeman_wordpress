<?php

add_shortcode("post", "fm_get_articles");
add_shortcode("product", "fm_get_product");
add_shortcode("the_products", "fm_get_the_products");
add_shortcode("the_product", "fm_get_the_product");


// 記事の配列からリンク一覧のHTMLを生成(各ショートコードで使用)
if (!function_exists('fm_get_output_string')) {
  function fm_get_output_string($args, $wrap_class, $layout, $type){

    $query = new WP_Query($args);
    $posts = $query -> posts;

    if(!count($posts)) return "記事が取得できませんでした。";

    $str = '<div class="'.$wrap_class.'"><ul class="'.$layout.'">';

    foreach ($posts as $post) {
      setup_postdata($post);
      $title = $post -> post_title;
      $title = wp_trim_words($title, 32); // 32文字以上は省略
      $post_id = $post -> ID;
      $permalink = get_the_permalink($post_id);

      switch ($type) {
        case 'news':
          $str .= '<li><a href="'.$permalink.'" class="article-card"><div class="thumbnail"><p class="article-thumbnail"><img src="'.fm_default_thumb('thumb-600', $post_id).'" alt="" loading="lazy" /></p></div><div class="content"><time class="date font-robot" datetime='.get_the_date('Y-m-d', $post_id).'">'.get_the_date('Y.m.d', $post_id).'</time><p class="title">'.$title.'</p></div></a></li>';
          break;
        case 'products':
          $str .= '<li><a href="'.$permalink.'" class="post-card-product"><div class="thumbnail"><p class="post-thumbnail"><img src="'.fm_default_thumb('thumb-600', $post_id).'" alt="" loading="lazy" /></p></div><div class="content"><p class="title">'.$title.'</p><p class="more font-robot c-main"><span>MORE</span></p></div></a></li>';
          break;
        case 'product':
          $str .= '<li><a href="'.$permalink.'" class="post-card-product"><div class="thumbnail"><p class="post-thumbnail"><img src="'.fm_default_thumb('thumb-600', $post_id).'" alt="" loading="lazy" /></p></div><div class="content"><time class="date font-robot" datetime='.get_the_date('Y-m-d', $post_id).'">'.get_the_date('Y.m.d', $post_id).'</time><p class="title">'.$title.'</p></div></a></li>';
          break;
      }
    }
    wp_reset_postdata();

    $str .= '</ul></div>';

    return $str;
  }
}


/*
ニュースをループで任意の数表示
使用ページ: トップ, categoryトップ
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

    $wrap_class = 'articles-link';
    $type = 'news';

    return fm_get_output_string($args, $wrap_class, $layout, $type);
  }
}

/*
カテゴリの商品をループで任意の数表示
使用ページ: トップ, categoryトップ
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

    $wrap_class = 'products-link';
    $type = 'products';

    return fm_get_output_string($args, $wrap_class, $layout, $type);
  }
}

/*
特定の商品呼び出し
使用ページ: categoryトップ
例) [the_products id="1,2,5" layout="square" /]
********************************************************************/
if (!function_exists('fm_get_the_products')){
  function fm_get_the_products($atts){
    if (!isset($atts['id'])) return "IDを指定してください";
    $id = isset($atts['id']) ? explode(',', $atts['id']) : null;
    if (!is_array($id)) return "指定の形が正しくありません";

    $layout = isset($atts['layout']) ? $atts['layout'] : 'square';

    $args = array(
      'post_type' => 'post',
      'post__in' => $id,
      'posts_per_page' => -1, // 全件取得
    );

    $wrap_class = 'the-product-link';
    $type = 'products';

    return fm_get_output_string($args, $wrap_class, $layout, $type);
  }
}

/*
特定の商品呼び出し(一つのみ)
使用ページ: Gutenbergの『導入事例/商品』で使用
例) [the_product id="1" /]
********************************************************************/
if (!function_exists('fm_get_the_product')){
  function fm_get_the_product($atts){
    $id = $atts['id'];
    if (!isset($id)) return 'IDを指定してください';
    if (strpos($id, ',') !== false) return 'IDの指定は一つまでです';

    $layout = 'wide';

    $args = array(
      'post_type' => 'post',
      'post__in' => array($id)
    );

    $wrap_class = 'the-product-link';
    $type = 'product';

    return fm_get_output_string($args, $wrap_class, $layout, $type);
  }
}