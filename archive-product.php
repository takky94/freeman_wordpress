<?php
// カスタム投稿(products)の一覧ページ
$args = array(
  'post_type' => 'product', // 投稿タイプを指定
  'posts_per_page' => 10, // 表示する記事数
);
$product_query = new WP_Query($args);
?>

<?php get_header(); ?>

<main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
  <article id="article" <?php post_class(); ?>>
    <?php get_template_part('/parts/header/news-header'); ?>
    <div id="content">
      <div class="container">
        <?php if($product_query -> have_posts()): while($product_query -> have_posts()): $product_query -> the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <div>
          <?php the_content(); ?>
        </div>
        <?php endwhile; endif; wp_reset_postdata(); ?>
      </div>
    </div>
  </article>
</main>

<?php get_footer(); ?>