<?php get_header(); ?>
<!-- main -->
<main class="main">
  <h1 class="search-title"><?php echo esc_attr(get_search_query()); ?>の検索結果</h1>
  <p><span><?php echo $wp_query -> found_posts; ?></span><span>件</span></p>
</main>
<!-- // main -->
<?php get_footer(); ?>