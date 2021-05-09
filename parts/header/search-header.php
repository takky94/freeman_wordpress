<header class="entry-header search-header">
  <div class="container">
    <h1 class="entry-header__title"><?php echo esc_attr(wp_trim_words(get_search_query(), 17)); ?>の検索結果</h1>
    <p
      class="search-header__count"><span class="font-robot search-header__count--num"><?php echo $wp_query -> found_posts; ?></span><span class="search-header__count--unit">件</span></p>
    <?php fm_breadcrumb(); ?>
  </div>
</header>