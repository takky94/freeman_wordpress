<?php

add_shortcode("post", "fm_get_articles");
add_shortcode("post_by_tag", "fm_get_articles_by_tag");
add_shortcode("product", "fm_get_product");
add_shortcode("product_by_tag", "fm_get_product_by_tag");
add_shortcode("the_products", "fm_get_the_products");
add_shortcode("the_product", "fm_get_the_product");
add_shortcode("category", "fm_get_categories_link");


// 記事の配列からリンク一覧のHTMLを生成(各ショートコードで使用)
if (!function_exists('fm_get_output_string')) {
  function fm_get_output_string($args, $wrap_class, $layout, $type, $isSlider){

    $query = new WP_Query($args);
    $posts = $query -> posts;

    if(!count($posts)) return "記事が取得できませんでした。";

    if($isSlider){
      $wrap_class .= " swiper-container related-slider js-related-slider";
      $layout .= " swiper-wrapper";
    }

    $posts_length = count($posts);
    $str = '<div class="'.$wrap_class.'"><ul class="'.$layout.'" data-length="'.$posts_length.'">';

    foreach ($posts as $i => $post) {
      setup_postdata($post);
      $title = $post -> post_title;
      $title = wp_trim_words($title, 32); // 32文字以上は省略
      $post_id = $post -> ID;
      $permalink = get_the_permalink($post_id);
      // スライダー有効&最初のループ、$isSliderで設定した数までのlist要素をwrapする
      if($isSlider && $i + 1 == 1) $str .= '<div class="swiper-slide" data-role="eight-post-cards-wrapper">';

      switch ($type) {
        case 'news':
          $str .= '<li class="card-wrap"><a href="'.$permalink.'" class="post-card article-card post-card-thumbnail-animation post-card-content-trans-red"><div class="thumbnail"><p class="article-thumbnail"><img src="'.fm_default_thumb('thumb-300', $post_id).'" alt="" loading="lazy" /></p></div><div class="content"><time class="date font-robot" datetime="'.get_the_date('Y-m-d', $post_id).'">'.get_the_date('Y.m.d', $post_id).'</time><p class="title">'.$title.'</p></div></a></li>';
          break;
        case 'products':
          $str .= '<li class="card-wrap"><a href="'.$permalink.'" class="post-card post-card-product post-card-thumbnail-animation post-card-content-trans-red"><div class="thumbnail"><p class="post-thumbnail"><img src="'.fm_default_thumb('thumb-300', $post_id).'" alt="" loading="lazy" /></p></div><div class="content"><p class="title">'.$title.'</p><p class="more font-robot c-main"><span>MORE</span></p></div></a></li>';
          break;
        case 'product':
          $str .= '<li class="card-wrap"><a href="'.$permalink.'" class="post-card post-card-product post-card-thumbnail-animation post-card-content-trans-red"><div class="thumbnail"><p class="post-thumbnail"><img src="'.fm_default_thumb('thumb-300', $post_id).'" alt="" loading="lazy" /></p></div><div class="content"><time class="date font-robot" datetime="'.get_the_date('Y-m-d', $post_id).'">'.get_the_date('Y.m.d', $post_id).'</time><p class="title">'.$title.'</p></div></a></li>';
          break;
      }

      // スライダー有効&list要素が$isSliderで設定した数字の倍数であり、ループの最後でない時、$isSliderで設定した数までのlist要素のwrapperを閉じ、再びwrapperを出力
      if($isSlider && (($i + 1) % $isSlider == 0) && $i + 1 !== $posts_length) $str .= '</div><div class="swiper-slide" data-role="eight-post-cards-wrapper">';
      // スライダー有効&最後のループ時、$isSliderで指定した数までのlist要素のwrapper閉じる
      if($isSlider && $i + 1 == $posts_length) $str .= '</div>';
    }
    wp_reset_postdata();

    $str .= '</ul>';
    if($isSlider) $str .= '<div class="related-slider-navi"><div class="swiper-button-prev"></div><div class="swiper-button-next"></div></div>';
    $str .= '</div>';

    return $str;
  }
}

/*
特定カテゴリのニュースをループで任意の数表示
使用ページ: トップ, categoryトップ
例) [post category="mold" count="3" orderby="rand" layout="column" slider="8" /]
********************************************************************/
if (!function_exists('fm_get_articles')){
  function fm_get_articles($atts){

    $category = isset($atts['category']) ? $atts['category'] : 'mold';
    $count = isset($atts['count']) ? $atts['count'] : -1;
    $orderby = isset($atts['orderby']) ? $atts['order'] : 'date';
    $layout = isset($atts['layout']) ? $atts['layout'] : 'column';
    $isSlider = isset($atts['slider']) ? intval($atts['slider']) : 0;

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

    return fm_get_output_string($args, $wrap_class, $layout, $type, $isSlider);
  }
}

/*
特定タグのニュースをループで任意の数表示
使用ページ: トップ, category第三階層関連記事部分
例) [post_by_tag tag="mold" count="3" orderby="rand" layout="column" /]
********************************************************************/
if (!function_exists('fm_get_articles_by_tag')){
  function fm_get_articles_by_tag($atts){

    $tag = isset($atts['tag']) ? explode(',', $atts['tag']) : 'mold';
    $count = isset($atts['count']) ? $atts['count'] : -1;
    $orderby = isset($atts['orderby']) ? $atts['order'] : 'date';
    $layout = isset($atts['layout']) ? $atts['layout'] : 'column';
    $isSlider = isset($atts['slider']) ? intval($atts['slider']) : 0;

    $args = array(
      'post_type' => 'news',
      'posts_per_page' => $count,
      'orderby' => $orderby,
      'tax_query' => array(
        'relation' => 'OR',
        array(
          'taxonomy' => 'news_tag',
          'field' => 'slug',
          'terms' => $tag,
        )
      )
    );

    $wrap_class = 'articles-link';
    $type = 'news';

    return fm_get_output_string($args, $wrap_class, $layout, $type, $isSlider);
  }
}



/*
特定カテゴリの商品をループで任意の数表示
使用ページ: トップ, categoryトップ
例) [product category="mold" count="3" orderby="rand" layout="column" /]
********************************************************************/
if (!function_exists('fm_get_product')){
  function fm_get_product($atts){

    $category = isset($atts['category']) ? $atts['category'] : 'mold';
    $count = isset($atts['count']) ? $atts['count'] : -1;
    $orderby = isset($atts['orderby']) ? $atts['order'] : 'date';
    $layout = isset($atts['layout']) ? $atts['layout'] : 'column';
    $isSlider = isset($atts['slider']) ? intval($atts['slider']) : 0;

    $args = array(
      'post_type' => 'post',
      'category_name' => $category,
      'posts_per_page' => $count,
      'orderby' => $orderby
    );

    $wrap_class = 'products-link';
    $type = 'products';

    return fm_get_output_string($args, $wrap_class, $layout, $type, $isSlider);
  }
}

/*
特定タグの商品をループで任意の数表示
使用ページ: トップ, category第三階層関連商品部分
例) [product_by_tag tag="mold" count="3" orderby="rand" layout="column" /]
********************************************************************/
if (!function_exists('fm_get_product_by_tag')){
  function fm_get_product_by_tag($atts){
    $tag = isset($atts['tag']) ? explode(',', $atts['tag']) : 'mold';
    $count = isset($atts['count']) ? $atts['count'] : -1;
    $orderby = isset($atts['orderby']) ? $atts['order'] : 'date';
    $layout = isset($atts['layout']) ? $atts['layout'] : 'column';
    $isSlider = isset($atts['slider']) ? intval($atts['slider']) : 0;

    $args = array(
      'post_type' => 'post',
      'posts_per_page' => $count,
      'orderby' => $orderby,
      'tax_query' => array(
        'relation' => 'OR',
        array(
          'taxonomy' => 'post_tag',
          'field' => 'slug',
          'terms' => $tag,
        )
      )
    );

    $wrap_class = 'products-link';
    $type = 'products';

    return fm_get_output_string($args, $wrap_class, $layout, $type, $isSlider);
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

/*
特定カテゴリへのリンクを生成
使用ページ: category(mold, investment_casting)トップ
例) [category category="mold" /]
********************************************************************/
if (!function_exists('fm_get_categories_link')){
  function fm_get_categories_link($atts){

    $category_slugs = isset($atts['category']) ? explode(',', $atts['category']) : null;
    $layout = isset($atts['layout']) ? $atts['layout'] : 'column';

    $categories = array();
    foreach ($category_slugs as $category_slug) {
      $category = get_category_by_slug($category_slug);
      array_push($categories, $category);
    }

    $str = '<div class="products-link"><ul class="square">';

    foreach ($categories as $category) {
      $isParent = $category -> parent;
      $category_id = $category -> term_id;
      $category_slug = $category -> slug;

      $title = $category -> cat_name;
      $permalink = get_category_link($category_id);
      $contents = get_option('fm_category_'.intval($category_id));

      if ($isParent === 0){
        $thumbnail = get_template_directory_uri().'/images/category/post-card-thumbnail/'.$category_slug.'.png';
      } else if ($contents['jewelry_img']){
        $thumbnail = $contents['jewelry_img'];
        $thumbnail = replace_thumbnail_src($thumbnail, 'thumb-300');
      } else if ($contents['others_slider_img1']){
        $thumbnail = $contents['others_slider_img1'];
        $thumbnail = replace_thumbnail_src($thumbnail, 'thumb-300');
      } else {
        $thumbnail = fm_default_thumb('thumb-300');
      }


      $str .= '<li class="card-wrap"><a href="'.$permalink.'" class="post-card-product post-card-thumbnail-animation post-card-content-trans-red"><div class="thumbnail"><p class="post-thumbnail"><img src="'.$thumbnail.'" alt="" loading="lazy" /></p></div><div class="content"><p class="title">'.$title.'</p><p class="more font-robot c-main"><span>MORE</span></p></div></a></li>';
    }

    $str .= '</ul></div>';

    return $str;
  }
}