<?php
  $paged = get_query_var('paged') ? get_query_var('paged') : 1;
  $args = array(
    'paged' => $paged,
    's' => $s,
    'posts_per_page' => get_option('posts_per_page'),
  );
  $the_query = new WP_Query($args);
  global $wp_query;
  $tmp_query = $wp_query;
  $wp_query = $the_query;
?>

<?php get_header(); ?>
<!-- main -->
<main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
  <article id="article" <?php post_class('search-result'); ?>>
    <?php get_template_part('/parts/header/search-header'); ?>
    <?php if (have_posts()): ?>
    <!-- #content -->
    <div id="content">
      <!-- container -->
      <div class="container">
        <?php get_search_form(); ?>
        <ul class="result">
          <?php while (have_posts()): the_post(); ?>
          <li>
            <a href="<?php echo get_post_permalink(); ?>" class="post-card post-card-wide">
              <div class="content">
                <p class="title"><?php echo get_the_title(); ?></p>
                <p class="description"><?php echo get_the_excerpt(); ?></p>
              </div>
            </a>
          </li>
          <?php endwhile; ?>
        </ul>
        <?php wp_reset_query(); ?>
        <?php fm_pagenavi(array('query' => $the_query)); ?>
      </div>
      <!-- // container -->
    </div>
    <!-- // #content -->
    <?php else: ?>
    <div id="content" class="notfound">
      <div class="container">
        <h2
          class="notfound__title"><?php echo esc_attr(wp_trim_words(get_search_query(), 17)); ?>の検索に<br class="sp__none" />一致するコンテンツはありませんでした</h2>
        <p class="notfound__image">
          <?php get_template_part('/parts/svg/robot-notfound'); ?>
        </p>
        <p class="notfound__text">一般的な用語の使用、またはスペルの確認をお試しください</p>
        <?php get_search_form(); ?>
      </div>
    </div>
    <?php endif; ?>
  </article>
</main>
<!-- // main -->

<?php get_footer(); ?>