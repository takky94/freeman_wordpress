<?php

add_shortcode("post", "fm_get_articles");
add_shortcode("post_by_tag", "fm_get_articles_by_tag");
add_shortcode("product", "fm_get_product");
add_shortcode("product_by_tag", "fm_get_product_by_tag");
add_shortcode("the_products", "fm_get_the_products");
add_shortcode("the_product", "fm_get_the_product");
add_shortcode("category", "fm_get_categories_link");
add_shortcode("child_categories", "fm_get_child_categories");


// 記事の配列からリンク一覧のHTMLを生成(各ショートコードで使用)
if (!function_exists('fm_get_output_string')) {
  function fm_get_output_string($args, $wrap_class, $layout, $type, $isSlider = 0){

    $query = new WP_Query($args);
    $posts = $query -> posts;

    if(!count($posts)) return '<p class="error-message">記事が取得できませんでした。</p>';

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
    $orderby = isset($atts['orderby']) ? $atts['orderby'] : 'date';
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
    $orderby = isset($atts['orderby']) ? $atts['orderby'] : 'date';
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
    $orderby = isset($atts['orderby']) ? $atts['orderby'] : 'date';
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
    $orderby = isset($atts['orderby']) ? $atts['orderby'] : 'date';
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
    if (!isset($atts['id'])) return '<p class="error-message">IDを指定してください</p>';
    $id = isset($atts['id']) ? explode(',', $atts['id']) : null;
    if (!is_array($id)) return '<p class="error-message">指定の形が正しくありません</p>';

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
    if (!isset($id)) return '<p class="error-message">IDを指定してください</p>';
    if (strpos($id, ',') !== false) return '<p class="error-message">IDの指定は一つまでです</p>';

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
カンマ区切りで複数指定可能/呼び出すアイキャッチ画像は「メインイメージ」を使用せずに個別に設定する
使用ページ: category(mold, investment_casting)トップ
例) [category category="mold" /]
********************************************************************/
if (!function_exists('fm_get_categories_link')){
  function fm_get_categories_link($atts){

    $category_slugs = isset($atts['category']) ? explode(',', $atts['category']) : null;
    if ($category_slugs === null) return '<p class="error-message">カテゴリを指定してください</p>';

    $layout = isset($atts['layout']) ? $atts['layout'] : 'column';

    $categories = array();
    foreach ($category_slugs as $category_slug) {
      $category = get_category_by_slug($category_slug);
      array_push($categories, $category);
    }
    $categories_length = count($categories);
    $isSlider = $categories_length > 3;

    if ($isSlider){
      $str = '<div class="products-link swiper-container related-category-slider js-related-category-slider"><ul class="square swiper-wrapper">';
    } else {
      $str = '<div class="products-link"><ul class="square">';
    }

    foreach ($categories as $i => $category) {
      $isParent = $category -> parent;
      $parent_category = $isParent ? get_category($isParent) : null;
      $parent_category_slug = $isParent ? $parent_category -> slug : null;
      $category_id = $category -> term_id;
      $category_slug = $category -> slug;

      $title = $category -> cat_name;
      $permalink = get_category_link($category_id);
      $contents = get_option('fm_category_'.intval($category_id));


      // 親カテゴリならサムネイルを,子カテゴリならスライダーなどカテゴリページで設定した画像を取得
      if ($isParent === 0){ // 親階層
        $thumbnail = get_template_directory_uri().'/images/category/post-card-thumbnail/'.$category_slug.'.png';
      } else if ($parent_category_slug === "jewelry" && isset($contents['jewelry_img'])){ // ジュエリーの子階層
        $thumbnail = esc_html($contents['jewelry_img']);
        $thumbnail = replace_thumbnail_src($thumbnail, 'thumb-300');
      } else if ($parent_category_slug !== "jewelry" && isset($contents['others_img'])){ // ジュエリー以外のカテゴリの子階層
        $thumbnail = esc_html($contents['others_img']);
        $thumbnail = replace_thumbnail_src($thumbnail, 'thumb-300');
      } else {
        $thumbnail = fm_default_thumb('thumb-300');
      }

      // 最初のループ時、4つの要素を囲うwrapper
      if ($isSlider && $i === 0) $str .= '<div class="swiper-slide">';

      $str .= '<li class="card-wrap"><a href="'.$permalink.'" class="post-card-product post-card-thumbnail-animation post-card-content-trans-red"><div class="thumbnail"><p class="post-thumbnail"><img src="'.$thumbnail.'" alt="" loading="lazy" /></p></div><div class="content"><p class="title">'.$title.'</p><p class="more font-robot c-main"><span>MORE</span></p></div></a></li>';

      // 4つでの区切りかつループの最後でなければ新たにwrapper追加
      if ($isSlider && ($i + 1) % 4 == 0 && ($i + 1) !== $categories_length) $str .= '</div><div class="swiper-slide">';
      // ループの最後でwrapper閉じる
      if ($isSlider && ($i + 1) === $categories_length) $str .= '</div>';
    }// END foreach

    $str .= '</ul>';
    if ($categories_length > 3) $str .= '<div class="related-category-slider-navi"><div class="swiper-button-prev"></div><div class="swiper-button-next"></div></div>';
    $str .= '</div>';

    return $str;
  }
}


/*
親カテゴリが同じカテゴリ一覧
ジュエリー以外の子カテゴリトップで使用
parentにカテゴリID渡せばその子カテゴリ一覧を出力
例) [child_categories parent="10" /]
********************************************************************/
if (!function_exists('fm_get_child_categories')){
  function fm_get_child_categories($atts){
    $parent_category_id = isset($atts['parent']) ? $atts['parent'] : null;
    if ($parent_category_id === null) return '<p class="error-message">親カテゴリのIDを指定してください</p>';
    $isSlider = isset($atts['slider']) ? intval($atts['slider']) : 0;

    $children = get_categories(array(
      'child_of' => $parent_category_id,
      'title_li' => '',
      'hide_empty' => 0, // 商品のないカテゴリも表示
    ));

    $categories_length = count($children); // ヒットした子カテゴリの個数

    $str = '<div class="products-link swiper-container related-slider js-related-slider"><ul class="column swiper-wrapper" data-length="'.$categories_length.'">';

    foreach($children as $i => $child){
      $category_id = $child -> term_id; // ID
      $category_name = $child -> name; // タイトル
      $category_link = get_category_link($category_id); // リンク
      $contents = get_option('fm_category_'.intval($category_id)); // メタデータ
      $thumbnail_original = !empty($contents['others_img']) ? $contents['others_img'] : null;
      $thumbnail = replace_thumbnail_src($thumbnail_original, 'thumb-300');

      // スライダー有効&最初のループ、$isSliderで設定した数までのlist要素をwrapする
      if($isSlider && $i + 1 == 1) $str .= '<div class="swiper-slide" data-role="eight-post-cards-wrapper">';

      $str .= '<li class="card-wrap"><a href="'.$category_link.'"class="post-card post-card-product post-card-thumbnail-animation post-card-content-trans-red"><div class="thumbnail"><p class="post-thumbnail"><img src="'.$thumbnail.'" alt="" loading="lazy" /></p></div><div class="content"><p class="title">'.$category_name.'</p><p class="more font-robot c-main"><span>MORE</span></p></div></a></li>';

      // スライダー有効&list要素が$isSliderで設定した数字の倍数であり、ループの最後でない時、$isSliderで設定した数までのlist要素のwrapperを閉じ、再びwrapperを出力
      if($isSlider && (($i + 1) % $isSlider == 0) && $i + 1 !== $categories_length) $str .= '</div><div class="swiper-slide" data-role="eight-post-cards-wrapper">';
      // スライダー有効&最後のループ時、$isSliderで指定した数までのlist要素のwrapper閉じる
      if($isSlider && $i + 1 == $categories_length) $str .= '</div>';
    }

    $str .= '</ul>';
    if($isSlider) $str .= '<div class="related-slider-navi"><div class="swiper-button-prev"></div><div class="swiper-button-next"></div></div>';
    $str .= '</div>';

    return $str;
  }
}