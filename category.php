<!--category.php-->

<?php get_header(); ?>
<?php
  $category = get_the_category();
  $category = $category[0];
  $category_name = $category -> category_nicename; // カテゴリのスラッグ
  $category_slug = get_query_var('category_name');
?>
<!--カテゴリページ-->
<div id="category">
  <main id="main" class="main <?= $category_slug; ?>" role="main">
    <article id="article" <?php post_class(); ?>>
      <?php get_template_part('/parts/header/page-header'); ?>
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