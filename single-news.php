<?php
// カスタム投稿(news)の一覧ページ
$args = array(
  'post_type' => 'news', // 投稿タイプを指定
  'posts_per_page' => 10, // 表示する記事数
);
$news_query = new WP_Query( $args );
?>

<?php get_header(); ?>

<main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
  <article id="article" <?php post_class(); ?>>
    <?php get_template_part('/parts/header/news-header'); ?>
    <div id="content">
      <div class="container">
        <?php if($news_query -> have_posts()): while($news_query -> have_posts()): $news_query -> the_post(); ?>
        <?php if (has_post_thumbnail()): //アイキャッチ画像 ?>
        <p class="post-thumbnail"><?php the_post_thumbnail('thumb-600');?></p>
        <?php endif; ?>
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