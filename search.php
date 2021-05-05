<?php get_header(); ?>
<!-- main -->
<main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
  <article id="article" <?php post_class(); ?>>
    <?php get_template_part('/parts/header/search-header'); ?>
    <div id="content">
      <div class="container">
        <p>検索結果</p>
      </div>
    </div>
  </article>
</main>
<!-- // main -->

<?php get_footer(); ?>