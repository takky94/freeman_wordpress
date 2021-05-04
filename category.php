<?php get_header(); ?>
<?php
  $category = get_the_category();
  $category = $category[0];
  $category_name = $category -> category_nicename; // カテゴリのスラッグ
  $category_slug = get_query_var('category_name');
?>
<!--カテゴリページ-->
<main class="main <?php echo $category_slug; ?>" role="main">
  <?php get_template_part('/parts/header/page-header'); ?>
  <?php get_template_part('/parts/category-top/'.$category_slug); ?>
</main>

<?php get_footer(); ?>