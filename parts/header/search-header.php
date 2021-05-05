<header class="search-header">
  <div class="container">
    <h1 class="search-header__title"><?php echo esc_attr(get_search_query()); ?>の検索結果</h1>
    <p><span><?php echo $wp_query -> found_posts; ?></span><span>件</span></p>
    <?php fm_breadcrumb(); ?>
  </div>
</header>