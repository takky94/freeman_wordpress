<?php
  $category = get_queried_object();
  $category_id = $category -> term_id; // カテゴリーID

  $contents = get_option('fm_category_'.intval($category_id));
  $others_img = $contents[others_img] ? $contents[others_img] : null;
  $others_slider_imgs = array();
  $others_slider_img1 = $contents[others_slider_img1] ? $contents[others_slider_img1] : null;
  $others_slider_img2 = $contents[others_slider_img2] ? $contents[others_slider_img2] : null;
  $others_slider_img3 = $contents[others_slider_img3] ? $contents[others_slider_img3] : null;
  $others_slider_img4 = $contents[others_slider_img4] ? $contents[others_slider_img4] : null;
  $others_slider_img5 = $contents[others_slider_img5] ? $contents[others_slider_img5] : null;
  array_push($others_slider_imgs, $others_slider_img1, $others_slider_img2, $others_slider_img3 , $others_slider_img4, $others_slider_img5);

  $others_lead_title = $contents[others_lead_title] ? esc_html($contents[others_lead_title]) : '<p style="color:tomato">カテゴリページにて「リード文タイトル」を設定してください</p>';
  $others_lead_text = $contents[others_lead_text] ? esc_html($contents[others_lead_text]) : '<p style="color:tomato">カテゴリページにて「リード文」を設定してください</p>';

?>


<!-- category-lead-child-jewelry -->
<div class="category-lead-child-others">
  <!-- category-lead-child-others__image -->
  <div class="category-lead-child-others__image">
    <?php if ($others_img): ?>
    <img src="<?= $others_img; ?>" <?php fm_lazyload(); ?> alt="" />
    <?php else: ?>
    <p style="color:tomato">カテゴリページにて「リード画像 URL」を設定してください</p>
    <?php endif; ?>
  </div>
  <!-- // category-lead-child-others__image -->
  <!-- category-lead-child-others__slider -->
  <div class="category-lead-child-others__slider">
    <div class="swiper-container category-child-slider js-category-child-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="<?= get_template_directory_uri(); ?>/images/category/mold/slider-1.png" alt=""
            <?php fm_lazyload(); ?> />
        </div>
        <div class="swiper-slide">
          <img src="<?= get_template_directory_uri(); ?>/images/category/mold/slider-2.png" alt=""
            <?php fm_lazyload(); ?> />
        </div>
        <div class="swiper-slide">
          <img src="<?= get_template_directory_uri(); ?>/images/category/mold/slider-3.png" alt=""
            <?php fm_lazyload(); ?> />
        </div>
        <div class="swiper-slide">
          <img src="<?= get_template_directory_uri(); ?>/images/category/mold/slider-4.png" alt=""
            <?php fm_lazyload(); ?> />
        </div>
        <div class="swiper-slide">
          <img src="<?= get_template_directory_uri(); ?>/images/category/mold/slider-5.png" alt=""
            <?php fm_lazyload(); ?> />
        </div>
        <div class="swiper-slide">
          <img src="<?= get_template_directory_uri(); ?>/images/category/mold/slider-6.png" alt=""
            <?php fm_lazyload(); ?> />
        </div>
      </div>
      <div class="category-child-slider__box">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>
  <!-- // category-lead-child-others__slider -->
</div>
<!-- // category-lead-child-jewelry -->

<!-- category-contents-child-jewelry -->
<div class="category-contents-child-others">
  <div class="category-contents-child-others__title">
    <?= $others_title; ?>
  </div>
  <div class="category-contents-child-others__text">
    <?= $others_text; ?>
  </div>
</div>
<!-- category-contents-child-jewelry -->