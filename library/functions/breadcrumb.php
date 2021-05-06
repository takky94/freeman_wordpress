<?php

// リンク生成(+構造化データ)
if (!function_exists('fm_breadcrumb_items')){
  function fm_breadcrumb_items($name, $position="1", $url=""){
    // 現在のカテゴリは$url渡さない
    $str = $url
        ? '<li itemprop="itemListElement" itemscope
          itemtype="https://schema.org/ListItem"><a href="'
          .$url
          .'" itemscope itemtype="https://schema.org/WebPage"
          itemprop="item" itemid="'
          .$url
          .'"><span itemprop="name">'
          .$name
          .'</span></a><meta itemprop="position" content="'
          .$position
          .'"></li>'
        : '<li itemprop="itemListElement" itemscope
          itemtype="https://schema.org/ListItem"><span itemprop="name">'
          .$name
          .'</span><meta itemprop="position" content="'
          .$position
          .'"></li>';

    return $str;
  }
}

// カテゴリ
if (!function_exists('fm_breadcrumb_category')){
  function fm_breadcrumb_category(){
    $category = get_queried_object();
    $category_id = $category -> cat_ID;
    $category_name = $category -> cat_name;

    $result = '';
    $i = 2;

    if ($category->parent != 0){ // 親カテゴリを持つ場合
      $ancestors = array_reverse(get_ancestors($category_id, 'category'));
      foreach ($ancestors as $ancestor){
        $result .= fm_breadcrumb_items(
          esc_attr(get_cat_name($ancestor)),
          $i,
          esc_url(get_category_link($ancestor))
        );
        $i++;
      } // foreach
    }

    // ぱんくず最下層に現在の階層
    $result .= fm_breadcrumb_items(esc_attr($category_name),$i);
    return $result;
  }
}

// 固定ページ
if (!function_exists('fm_breadcrumb_page')){
  function fm_breadcrumb_page(){
    $post = get_queried_object();
    $post_id = $post -> ID;
    $post_title = $post -> post_title;

    $result = '';
    $i = 2;

    if($post -> parent != 0) { // 親ページを持つ場合
      $ancestors = array_reverse(get_post_ancestors($post_id));
      $i = 2;
      $result = '';
      foreach ($ancestors as $ancestor) {
        $result .= fm_breadcrumb_items(
          esc_attr(get_the_title($ancestor)),
          $i,
          esc_url(get_permalink($ancestor))
        );
        $i++;
      }
    }

    // ぱんくず最下層に現在のページタイトル追加
    $result .= fm_breadcrumb_items(esc_attr($post_title),$i);

    return $result;
  }
}

// 投稿ページ
if (!function_exists('fm_breadcrumb_single')){
  function fm_breadcrumb_single(){
    $post = get_queried_object();
    $post_id = $post -> ID;
    $post_title = $post -> post_title;
    $post_type = $post -> post_type;

    $result = '';
    $i = 2;

    // 通常の投稿 or カスタム投稿
    if ($post_type == 'post'){
      $categories = get_the_category($post_id);
      $category = $categories[0]; // 投稿ページのカテゴリ
      $category_id = $category -> cat_ID;
      $category_name = $category -> cat_name;

      if($category -> parent != 0) { // 投稿のカテゴリが親カテゴリを持つ場合
        $ancestors = array_reverse(get_ancestors($category_id, 'category'));
        foreach ($ancestors as $ancestor){
          $result .= fm_breadcrumb_items(
            esc_attr(get_cat_name($ancestor)),
            $i,
            esc_url(get_category_link($ancestor))
          );
          $i++;
        } // foreach
        $result .= fm_breadcrumb_items(
          esc_attr($category_name),
          $i,
          esc_url(get_category_link($category_id))
        );
      } else { // 投稿のカテゴリに親カテゴリなし
        $result .= fm_breadcrumb_items(
          esc_attr($category_name),
          $i,
          esc_url(get_category_link($category_id))
        );
      }
    } else { // カスタム投稿ならお知らせで統一
      $result .= fm_breadcrumb_items("お知らせ", $i);
    }

    // ぱんくず最下層に現在のページタイトル追加
    $result .= fm_breadcrumb_items(esc_attr($post_title),$i);
    return $result;
  }
}

// 検索画面
if (!function_exists('fm_breadcrumb_search')){
  function fm_breadcrumb_search(){
    $result = fm_breadcrumb_items(esc_attr(get_search_query())."の検索結果", "2");
    return $result;
  }
}


// パンくず出力
if (!function_exists('breadcrumb')){
  function fm_breadcrumb(){
    if (is_home() || is_admin()) return;

    $breadcrumb = '<nav id="breadcrumb" class="breadcrumb"><ul itemscope itemtype="https://schema.org/BreadcrumbList">';
    $breadcrumb .= fm_breadcrumb_items("トップ", "1", home_url()); // 第一階層は共通

    if (is_category()){
      $breadcrumb .= fm_breadcrumb_category();
    } elseif(is_page()) {
      $breadcrumb .= fm_breadcrumb_page();
    } elseif(is_single()) {
      $breadcrumb .= fm_breadcrumb_single();
    } elseif(is_search()) {
      $breadcrumb .= fm_breadcrumb_search();
    } else {
      $breadcrumb .= '<li>'.wp_title('', false).'</li>';
    }

    $breadcrumb .= '</ul></nav>';

    echo $breadcrumb;
  }
}