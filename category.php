<!--category.php-->
<?php
  $category = get_the_category();
  $category = $category[0];
  $category_name = $category -> cat_name; // カテゴリー名
  $category_slug = $category -> category_nicename; // カテゴリのスラッグ
  $is_parent = $category -> category_parent == 0 ? true : false; // 第一階層か
?>
<?php get_header(); ?>
<!--カテゴリページ-->
<div id="category">
  <main id="main" class="main <?= $category_slug; ?>" role="main">
    <article id="article" <?php post_class(); ?>>
      <?php $is_parent ? get_template_part('/parts/header/category-header') : get_template_part('/parts/header/category-children-header'); ?>
      <div id="content">
        <div class="container">
          <?php get_template_part('/parts/category-top/'.$category_slug); ?>
        </div>
      </div>
    </article>
  </main>
</div>
<?php get_footer(); ?>

?>