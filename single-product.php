<!--single-product.php-->

<?php get_header(); ?>

<main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
  <article id="article" <?php post_class(); ?>>
    <?php get_template_part('/parts/header/news-header'); ?>
    <div id="content">
      <div class="container">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
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