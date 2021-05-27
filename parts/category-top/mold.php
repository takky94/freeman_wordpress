<!-- category-lead -->
<div class="category-lead flex">
  <div class="category-lead__text">
    <h2 class="category-lead__text--headingEn font-robot">MOLD</h2>
    <p class="category-lead__text--headingSub">無限に広がる表現力</p>
    <p
      class="category-lead__text--description">デザインから試作開発、量産にいたる全ての領域で、モノづくりに必要な技術や製品を提案し、イメージの具体化や納期改善、コストダウンに貢献します。</p>
  </div>
  <div class="category-lead__image">
    <picture>
      <img src="<?= get_template_directory_uri(); ?>/images/top/mold.png" alt="" <?php fm_lazyload(); ?> />
    </picture>
  </div>
</div>
<!-- // category-lead -->
<!-- category-borderY -->
<div class="category-borderY">
  <!-- // fmSwiper -->
  <div class="swiper-container mold-slider js-mold-slider">
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
    <div class="mold-slider__box">
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <!-- // fmSwiper -->
</div>
<!-- // category-borderY -->
<!-- category-step -->
<div class="category-step">
  <!-- block -->
  <div class="block">
    <div class="block__inner">
      <p class="block__label font-robot c-white">STEP 01</p>
      <h3 class="block__title">デザイン</h3>
      <div class="block__column">
        <p class="block__image"><img src="<?= get_template_directory_uri(); ?>/images/category/mold/figure-1.png" alt=""
        <?php fm_lazyload(); ?>></p>
        <p
          class="block__description">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
      </div>
    </div>
  </div>
  <!-- // block -->
  <!-- block -->
  <div class="block">
    <div class="block__inner">
      <p class="block__label font-robot c-white">STEP 02</p>
      <h3 class="block__title">試作</h3>
      <div class="block__column">
        <p class="block__image"><img src="<?= get_template_directory_uri(); ?>/images/category/mold/figure-2.png" alt=""
        <?php fm_lazyload(); ?>></p>
        <p
          class="block__description">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
      </div>
    </div>
  </div>
  <!-- // block -->
  <!-- block -->
  <div class="block">
    <div class="block__inner">
      <p class="block__label font-robot c-white">STEP 03</p>
      <h3 class="block__title">量産</h3>
      <div class="block__column">
        <p class="block__image"><img src="<?= get_template_directory_uri(); ?>/images/category/mold/figure-3.png" alt=""
        <?php fm_lazyload(); ?>></p>
        <p
          class="block__description">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
      </div>
      <div class="block__items">
        <?php do_shortcode('[the_product id="75"]'); ?>
      </div>
    </div>
  </div>
  <!-- // block -->
</div>
<!-- // category-step -->
<!-- category-related -->
<div class="category-related">
  <div class="products">
    <h4>試作・型材料の関連商品一覧</h4>
    <?php do_shortcode('[product category="mold" count="4" orderby="rand" layout="column"]'); ?>
  </div>
  <div class="articles">
    <h4>試作・型材料の記事</h4>
    <?php do_shortcode('[post category="mold" count="6" orderby="rand" layout="column"]'); ?>
    <div class="view-all">
      <a href="#" class="button-arrow button-line arrow-wrap">
        <span class="font-robot bold">SEE MORE</span>
        <?php get_template_part('/parts/icon/arrow'); ?>
      </a>
    </div>
  </div>
</div>
<!-- // category-related -->