<!--taxonomy-news_category.php-->
<?php
// ニュースのカテゴリごと一覧ページ
  $args = array(
    'paged' => $paged,
    'post_type' => 'news',
    'tax_query' => array(
      'relation' => 'OR',
      array(
        'taxonomy' => 'news_category',
        'field' => 'slug',
        'terms' => get_query_var('news_category'),
      ),
    ),
    'posts_per_page' => get_option('posts_per_page'),
  );
  $the_query = new WP_Query($args);
  global $wp_query;
  $tmp_query = $wp_query;
  $wp_query = $the_query;
?>

<?php get_header(); ?>

<main class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
  <h1>ニュースの一覧ページ</h1>

  <?php if ($the_query -> found_posts > 0): if ($the_query -> have_posts()): ?>
  <ul class="news__area">
    <?php while ($the_query -> have_posts()): ?>
    <?php
      $the_query -> the_post();
      $title = get_the_title();
      $url = get_post_permalink();
    ?>
    <li>
      <a href="<?php echo $url; ?>">
        <span class="title"><?php echo $title; ?></span>
      </a>
    </li>
    <?php endwhile; ?>
  </ul>
  <?php else: echo '404'; ?>
  <?php endif; endif; ?>
  <?php wp_reset_query(); ?>
  <?php if(function_exists('wp_pagenavi')) wp_pagenavi(array('query' => $the_query)); ?>

</main>


<?php get_footer(); ?>