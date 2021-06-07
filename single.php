<!--single.php-->
<?php
  $terms = wp_get_object_terms($post -> ID, 'category');
?>
<?php get_header(); ?>
<div id="single">
  <main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <article id="article" <?php post_class(); ?>>
      <?php get_template_part('/parts/header/single-header'); ?>
      <!-- #content -->
      <div id="content">
        <!-- container -->
        <div class="container">
          <?php if (have_posts()): while (have_posts()): the_post(); ?>
          <!-- content-header -->
          <div class="content-header single-content-header">
            <!-- title -->
            <div class="title">
              <h1><?php the_title(); ?></h1>
            </div>
            <!-- // title -->
          </div>
          <!-- // content-header -->
          <!-- content-main -->
          <div class="content-main single-content-header">
            <?php the_content(); ?>
          </div>
          <!-- // content-main -->
          <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
        <!-- // container -->
      </div>
      <!-- // #content -->
    </article>
  </main>
</div>
<?php get_footer(); ?>