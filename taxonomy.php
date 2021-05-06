<!--taxonomy.php-->
<?php
// ニュースのカテゴリごと一覧ページ
  $args = array(
  'paged' => $paged,
  'post_type' => 'news',
  'taxonomy' => 'news_category',
  'posts_per_page' => get_option('posts_per_page'),
  );
  $cat_query = new WP_Query($args);
?>

<?php get_header(); ?>

<!-- main -->
<main class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
  <p>ARCHIVE</p>
</main>
<!-- // main -->
<?php get_footer(); ?>