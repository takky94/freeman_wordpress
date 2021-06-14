<!--single.php-->
<?php
  $terms = wp_get_object_terms($post -> ID, 'category');
  // 親カテゴリあるかないか
  $category = $terms[0] -> parent === 0 ? get_category($terms[0] -> term_taxonomy_id) : get_category($terms[0] -> parent);
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
          <div class="content-main single-content-main">
            <?php the_content(); ?>
            <div class="single-related">
              <div class="articles">
                <h4><?php _e('関連NEWS', 'single'); ?></h4>
                <?= do_shortcode('[post category="'.$category -> slug.'" count="6" orderby="rand" layout="column"]'); ?>
                <div class="view-all">
                  <a href="#" class="button-arrow button-line arrow-wrap">
                    <span class="font-robot bold">SEE MORE</span>
                    <?php get_template_part('/parts/icon/arrow'); ?>
                  </a>
                </div>
              </div>
            </div>
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