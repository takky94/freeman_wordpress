<?php get_header(); ?>
<!-- main -->
<main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
  <article id="article" <?php post_class(); ?>>
    <?php get_template_part('/parts/header/search-header'); ?>
    <div id="content">
      <div class="container">
        <?php if($news_query -> have_posts()): while($news_query -> have_posts()): $news_query -> the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <div>
          <?php the_content(); ?>
        </div>
        <?php endwhile; endif; wp_reset_postdata(); ?>
      </div>
    </div>
  </article>
</main>
<!-- // main -->

<?php get_footer(); ?>