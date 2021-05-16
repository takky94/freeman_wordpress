<!--taxonomy-news_category.php-->
<?php
// ニュースのカテゴリごと一覧ページ
  $args = array(
    'paged' => $paged,
    'post_type' => 'product',
    'tax_query' => array(
      'relation' => 'OR',
      array(
        'taxonomy' => 'product_category',
        'field' => 'slug',
        'terms' => get_query_var('product_category'),
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
  <?php get_template_part('/parts/header/news-header'); ?>
  <div class="container">
    <?php get_template_part('/parts/archive-tabs'); ?>
    <div class="news">
      <?php $i = 0; if ($the_query -> found_posts > 0): if ($the_query -> have_posts()): while ($the_query -> have_posts()): $the_query -> the_post(); ?>
      <?php
        $terms = wp_get_object_terms($post->ID, 'product_category');
      ?>
      <?php if ($i === 0): // 上段 ?>
      <div class="news__large">
        <a href="<?= get_post_permalink(); ?>" class="post-card post-card-large">
          <div class="thumbail">
            <p class="post-thumbnail"><img src="<?= fm_default_thumb('thumb-600'); ?>"</p>
          </div>
          <div class="content">
            <div class="meta">
              <div class="meta__label">
                <?php fm_newmark(); ?>
                <span class="meta__label--category"><?= $terms[0] -> name; ?></span>
              </div>
              <time class="meta__date font-robot"
                datetime="<?= get_the_date('Y-m-d'); ?>"><?= get_the_date('Y.m.d'); ?></time>
            </div>
            <p class="title"><?= get_the_title(); ?></p>
            <p class="description"><?= the_excerpt(); ?></p>
          </div>
        </a>
      </div>
      <?php $i++; continue; ?>
      <?php endif;// 上段 ?>
      <?php if ($i !== 0): // 上段以外 ?>
      <?php
        // 雛形
        switch ($i) {
          case 1:
            $start_tag = '<div class="news__2col"><div class="news__middle news__2col--right">';
            $end_tag = '</div>';
            break;
          case 5:
            $start_tag = '<div class="news__2col"><div class="news__middle news__2col--left">';
            $end_tag = '</div>';
            break;
          case 2:
          case 6:
            $start_tag = '<div class="news__2col--3row"><div class="news__small">';
            $end_tag = '</div>';
            break;
          case 4:
          case 8:
            $start_tag = '<div class="news__small">';
            $end_tag = '</div></div></div>';
            break;
          default:
            $start_tag = '<div class="news__small">';
            $end_tag = '</div>';
            break;
        }

        // 記事数が9未満の場合、閉じdivのズレ解消
        $post_count = $wp_query -> post_count;
        if ($i + 1 === $post_count){
          switch ($post_count) {
            case 2:
            case 3:
            case 6:
            case 7:
              $end_tag = '</div></div>';
              break;
            case 4:
            case 8:
              $end_tag = '</div></div></div>';
              break;
            default:
              break;
          }
        }

        if ($i === 1 || $i === 5 ){
          $src = fm_default_thumb('thumb-600');
          $post_class = "post-card-middle";
        } else {
          $src = fm_default_thumb('thumb-200');
          $post_class = "post-card-small";
        }
      ?>
      <?= $start_tag; ?>
      <a href="<?= get_post_permalink(); ?>" class="post-card <?= $post_class; ?>">
        <div class="thumbail">
          <p class="post-thumbnail"><img src="<?= $src; ?>" alt=""></p>
        </div>
        <div class="content">
          <div class="meta">
            <div class="meta__label">
              <?php fm_newmark(); ?>
              <span class="meta__label--category"><?= $terms[0] -> name; ?></span>
            </div>
            <time class="meta__date font-robot"
              datetime="<?= get_the_date('Y-m-d'); ?>"><?= get_the_date('Y.m.d'); ?></time>
          </div>
          <p class="title"><?= get_the_title(); ?></p>
          <p class="description"><?= the_excerpt(); ?></p>
        </div>
      </a>
      <?= $end_tag; ?>
      <?php $i++; continue; ?>
      <?php endif;// 上段以外 ?>
      <?php endwhile; ?>
    </div>
    <?php else: echo '404'; ?>
    <?php endif; endif; ?>
    <?php wp_reset_query(); ?>
    <?php if(function_exists('fm_pagenavi')) fm_pagenavi(array('query' => $the_query)); ?>
  </div>
</main>


<?php get_footer(); ?>