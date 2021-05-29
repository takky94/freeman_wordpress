<!--category.php-->
<?php
  $category = get_queried_object();
  $category_name = $category -> cat_name; // カテゴリー名
  $category_slug = $category -> category_nicename; // カテゴリのスラッグ

  $category_parent_id = $category -> category_parent; // 最上位カテゴリのID
  $is_parent = $category_parent_id == 0 ? true : false; // 現在のカテゴリが第一階層か
  $category_parent_slug = $is_parent ? null : get_category($category_parent_id) -> slug; // 上位カテゴリのスラッグ
?>
<?php get_header(); ?>
<!--カテゴリページ-->
<div id="category">
  <main id="main" class="main <?= $category_slug; ?>" role="main">
    <article id="article" <?php post_class(); ?>>
      <?php $is_parent ? get_template_part('/parts/header/category-header') : get_template_part('/parts/header/category-children-header'); ?>
      <div id="content">
        <div class="container">
          <?php // 上位階層(型, 精密, 砂...)であれば下記テンプレ ?>
          <?php if ($is_parent) get_template_part('/parts/category-top/'.$category_slug); ?>
          <?php // 子階層で親がジュエリーであれば下記テンプレ/ジュエリーでなければ下記テンプレ ?>
          <?php if (!$is_parent && $category_parent_slug == "jewelry" ) get_template_part('/parts/category-top/children/jewelry'); ?>
          <?php if (!$is_parent && $category_parent_slug !== "jewelry" ) get_template_part('/parts/category-top/children/others'); ?>
        </div>
      </div>
    </article>
  </main>
</div>
<?php get_footer(); ?>