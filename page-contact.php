<?php
/*
Template Name: お問い合わせ
*/

$last_slug = fm_get_last_slug() === "confirm" ? "confirm-page-content-main" : "";
?>
<!--contact.php-->
<?php get_header(); ?>
<div id="contact">
  <main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <article id="article" <?php post_class('contact-page'); ?>>
      <?php get_template_part('/parts/header/contact-header'); ?>
      <!-- #content -->
      <div id="content">
        <!-- container -->
        <div class="container">
          <?php if (have_posts()): while (have_posts()): the_post(); ?>
          <!-- content-main -->
          <div class="content-main contact <?= $last_slug; ?>">
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