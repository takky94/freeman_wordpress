<?php
// ニュースのカテゴリごと一覧ページ
  $args = array(
  'paged' => $paged,
  'post_type' => 'news',
  'posts_per_page' => get_option('posts_per_page'),
  );
  $cat_query = new WP_Query($args);
?>

<?php get_header(); ?>

<!--taxonomy-news-->
<main class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
  <?php if (have_posts()):  while (have_posts()): the_post(); ?>
  <?php
    $title = get_the_title();
    $url = get_permalink();
  ?>
  <li>
    <a href="<?php echo $url; ?>">
      <?php $terms = get_the_terms(get_the_ID(), 'news_category'); ?>
      <p><?php echo $title; ?></p>
    </a>
  </li>
  <?php endwhile; endif; ?>
  <?php wp_reset_query(); ?>
  <?php if(function_exists('wp_pagenavi')) wp_pagenavi(array()); ?>