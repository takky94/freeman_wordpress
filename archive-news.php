<!--archive-news.php-->
<?php
// ニュースの一覧ページ
  $args = array(
    'paged' => $paged,
    'post_type' => 'news',
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
  <?php get_template_part('/parts/archive-tabs'); ?>
  <ul class="news__area">
    <?php $i = 0; if ($the_query -> found_posts > 0): if ($the_query -> have_posts()): while ($the_query -> have_posts()): ?>
    <?php
      $the_query -> the_post();
      $title = get_the_title();
      $url = get_post_permalink();
    ?>
    <?php if ($i == 0): ?>
    <li>
      <a href="<?php echo get_post_permalink(); ?>" class="post-card post-card-learge">
        <div class="thumbail">
          <?php if (has_post_thumbnail()): //アイキャッチ画像 ?>
          <p class="post-thumbnail"><?php the_post_thumbnail('thumb-600');?></p>
          <?php endif; ?>
        </div>
        <div class="title">
          <p><?php echo get_the_title(); ?></p>
        </div>
      </a>
    </li>
    <?php endif;// $i == 0 ?>
    <li>
      <a href="<?php echo $url; ?>">
        <span class="title"><?php echo $title; ?></span>
      </a>
    </li>
    <?php $i++; endwhile; ?>
  </ul>
  <?php else: echo '404'; ?>
  <?php endif; endif; ?>
  <?php wp_reset_query(); ?>
  <?php if(function_exists('wp_pagenavi')) wp_pagenavi(array('query' => $the_query)); ?>

</main>


<?php get_footer(); ?>