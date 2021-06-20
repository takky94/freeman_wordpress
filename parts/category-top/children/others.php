<?php
  $category = get_queried_object();
  $category_id = $category -> term_id; // カテゴリーID
  $category_slug = $category -> slug; // カテゴリースラッグ

  // カテゴリ編集ページで設定した各情報
  $contents = get_option('fm_category_'.intval($category_id));

  // 画像各種
  $others_slider_imgs = array();
  $others_slider_img1 = $contents['others_slider_img1'] ? $contents['others_slider_img1'] : null;
  $others_slider_img2 = $contents['others_slider_img2'] ? $contents['others_slider_img2'] : null;
  $others_slider_img3 = $contents['others_slider_img3'] ? $contents['others_slider_img3'] : null;
  $others_slider_img4 = $contents['others_slider_img4'] ? $contents['others_slider_img4'] : null;
  $others_slider_img5 = $contents['others_slider_img5'] ? $contents['others_slider_img5'] : null;
  array_push($others_slider_imgs, $others_slider_img1, $others_slider_img2, $others_slider_img3 , $others_slider_img4, $others_slider_img5);

  // 説明文
  $others_description_title = $contents['others_description_title'] ? esc_html($contents['others_description_title']) : '<p style="color:tomato">カテゴリページにて「説明文タイトル」を設定してください</p>';
  $others_description_text = $contents['others_description_text'] ? esc_html($contents['others_description_text']) : '<p style="color:tomato">カテゴリページにて「説明文」を設定してください</p>';

  // YouTube
   $others_youtube = $contents['others_youtube']
     ? '<iframe width="560" height="315" src="https://www.youtube.com/embed/'.$contents['others_youtube'].'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
     : null;
    $others_youtube_caption = $contents['others_youtube_caption'] ? esc_html($contents['others_youtube_caption']) : null;

  // クエリ (同カテゴリの商品一覧)
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => -1, // 全権表示
    'category_name' => $category_slug,
  );
  $the_query = new WP_Query($args);
  global $wp_query;
  $tmp_query = $wp_query;
  $wp_query = $the_query;
?>

<!-- category-lead-child-others -->
<div class="category-lead-child-others">
  <!-- category-lead-child-others__slider -->
  <div class="category-lead-child-others__slider">
    <!-- category-child-slider -->
    <div class="swiper-container category-child-slider js-category-child-slider">
      <div class="swiper-wrapper">
        <?php foreach ($others_slider_imgs as $img): ?>
        <?php if ($img === null) continue; ?>
        <div class="swiper-slide">
          <img src="<?= replace_thumbnail_src($img, 'thumb-600'); ?>" alt="" <?php fm_lazyload(); ?> />
        </div>
        <?php endforeach; ?>
      </div>
      <div class="category-child-slider__box">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
    <!-- // category-child-slider -->
    <p class="category-lead-child-others__slider--title font-robot"><?= fm_remove_underbar($category_slug); ?></p>
  </div>
  <!-- // category-lead-child-others__slider -->
</div>
<!-- // category-lead-child-others -->

<!-- category-description-child-others -->
<div class="category-description-child-others">
  <h2 class="category-description-child-others__title"><?= $others_description_title; ?></h2>
  <p class="category-description-child-others__text"><?= $others_description_text; ?></p>
</div>
<!-- category-description-child-others -->

<?php if($others_youtube !== null): ?>
<!-- category-movie-child-movie -->
<figure class="category-movie-child-others">
  <?= $others_youtube; ?>
  <?php if ($others_youtube_caption !== null): ?>
  <figcaption class="category-movie-child-others__caption"><?= $others_youtube_caption; ?></figcaption>
  <?php endif; ?>
</figure>
<!-- // category-movie-child-movie -->
<?php endif; ?>

<?php $posts_count = $the_query -> found_posts; ?>
<?php if ($posts_count > 0): ?>
<!-- category-child-product-link -->
<div class="category-child-product-link">
  <ul class="square">
    <?php
        $i = 0;
        if ($the_query -> have_posts()):
        while ($the_query -> have_posts()):
        $the_query -> the_post();
        $title = get_the_title();
        $title = wp_trim_words($title, 32); // 32文字以上は省略
      ?>
    <?php if ($i === 6): ?>
  </ul>
  <ul class="square square-second js-hidden-links">
    <?php endif; ?>
    <li class="card-wrap">
      <a href="<?= get_the_permalink(); ?>"
        class="post-card-product post-card-content-trans-red post-card-thumbnail-animation">
        <div class="thumbnail">
          <p class="post-thumbnail"><img src="<?= fm_default_thumb('thumb-600'); ?>" alt="" loading="lazy" /></p>
        </div>
        <div class="content">
          <p class="title"><?= $title; ?></p>
          <p class="description"><?= get_the_excerpt(); ?></p>
          <p class="more font-robot c-main"><span>MORE</span></p>
        </div>
      </a>
    </li>
    <?php if ($i > 6 && $i == $posts_count): ?>
    <li class="card-wrap square-second__trigger-wrap">
      <input id="square-secondTrigger" class="square-second__checkbox" type="checkbox">
      <label class="square-second__trigger" for="square-secondTrigger">More</label>
    </li>
    <?php endif;?>
    <?php $i++; ?>
    <?php // ulの最後にshow/hidden用ボタン加える ?>
    <?php if ($i > 6 && $i == $posts_count): ?>
    <li class="card-wrap square-second__trigger-wrap">
      <input id="square-secondTrigger" class="square-second__checkbox" type="checkbox">
      <label class="square-second__trigger font-robot" for="square-secondTrigger">MORE</label>
    </li>
    <?php endif;?>
    <?php endwhile; wp_reset_postdata(); endif; ?>
  </ul>
</div>
<!-- // category-child-product-link -->
<?php endif; ?>


<!-- category-related -->
<div class="category-related">
  <div class="products">
    <h4>試作・型材料の関連商品一覧</h4>
    <?= do_shortcode('[product category="mold" count="4" orderby="rand" layout="column"]'); ?>
  </div>
  <div class="articles">
    <h4>試作・型材料の記事</h4>
    <?= do_shortcode('[post category="mold" count="6" orderby="rand" layout="column"]'); ?>
    <div class="view-all">
      <a href="#" class="button-arrow button-line arrow-wrap">
        <span class="font-robot bold">SEE MORE</span>
        <?php get_template_part('/parts/icon/arrow'); ?>
      </a>
    </div>
  </div>
</div>
<!-- category-related -->