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

      $result .= fm_breadcrumb_items(esc_attr($category_name),$i); // 現在の階層
    } else { // 親カテゴリなし
      $result .= fm_breadcrumb_items(esc_attr($category_name),$i); // 現在の階層
    }

    return $result;
  }
}


// パンくず出力
if (!function_exists('breadcrumb')){
  function fm_breadcrumb(){
    if (is_home() || is_admin()) return;

    $breadcrumb = '<nav id="breadcrumb" class="breadcrumb"><ul itemscope itemtype="https://schema.org/BreadcrumbList">';
    $breadcrumb .= fm_breadcrumb_items("TOP", "1", home_url()); // 第一階層は共通

    if (is_category()){
      $breadcrumb .= fm_breadcrumb_category();
    }
    else {
      $breadcrumb .= '<li>'.wp_title('', false).'</li>';
    }

    $breadcrumb .= '</ul></nav>';

    echo $breadcrumb;
  }
}