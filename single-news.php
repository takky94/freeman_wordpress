<!--single-news.php-->
<?php
  $terms = wp_get_object_terms($post->ID, 'news_category');
?>
<?php get_header(); ?>
<div id="news">
  <main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <article id="article" <?php post_class(); ?>>
      <?php get_template_part('/parts/header/news-header'); ?>
      <!-- #content -->
      <div id="content">
        <!-- container -->
        <div class="container">
          <?php if (have_posts()): while (have_posts()): the_post(); ?>
          <!-- content-header -->
          <div class="content-header news-content-header">
            <div class="thumbail">
              <p class="post-thumbnail"><img src="<?= fm_default_thumb('thumb-600'); ?>"</p>
            </div>
            <!-- title -->
            <div class="title">
              <div class="meta">
                <div class="meta__label">
                  <?php fm_newmark(); ?>
                  <span class="meta__label--category"><?= $terms[0] -> name; ?></span>
                </div>
                <time class="meta__date font-robot"
                  datetime="<?= get_the_date('Y-m-d'); ?>"><?= get_the_date('Y.m.d'); ?></time>
              </div>
              <h1><?php the_title(); ?></h1>
            </div>
            <!-- // title -->
          </div>
          <!-- // content-header -->
          <!-- content-main -->
          <div class="content-main news-content-main">
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