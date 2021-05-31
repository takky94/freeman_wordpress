<!--page.php-->
<?php get_header(); ?>
<div id="page">
  <main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <article id="article" <?php post_class(); ?>>
      <?php get_template_part('/parts/header/page-header'); ?>
      <!-- #content -->
      <div id="content">
        <!-- container -->
        <div class="container">
          <?php if (have_posts()): while (have_posts()): the_post(); ?>
          <!-- content-main -->
          <div class="content-main page">
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