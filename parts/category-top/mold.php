<!-- category-lead -->
<div class="category-lead flex">
  <div class="category-lead__text">
    <h2 class="category-lead__text--headingEn font-robot">MOLD</h2>
    <p class="category-lead__text--headingSub"><?php _e('無限に広がる表現力', 'category-mold'); ?></p>
    <p
      class="category-lead__text--description"><?php _e('デザインから試作開発、量産にいたる全ての領域で、モノづくりに必要な技術や製品を提案し、イメージの具体化や納期改善、コストダウンに貢献します。', 'category-mold'); ?></p>
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
      <div class="block__column">
        <div class="block__text">
          <div class="flex">
            <p class="block__label font-robot c-white">STEP 01</p>
            <h3 class="block__title"><?php _e('デザイン', 'category-mold'); ?></h3>
          </div>
          <p
            class="block__description"><?php _e('デザインはモノづくりで最初に行う工程です。使用者の事を考え、また作り手の思いをイメージにします。当社では自動車部品や家電、ホビー等、ジャンルを問わず、イメージを確実に具現化する材料や工法をご提案します。', 'category-mold'); ?></p>
        </div>
        <p class="block__image"><img src="<?= get_template_directory_uri(); ?>/images/category/mold/figure-1.png" alt=""
        <?php fm_lazyload(); ?>></p>
      </div>
    </div>
  </div>
  <!-- // block -->
  <!-- block -->
  <div class="block">
    <div class="block__inner">
      <div class="block__column">
        <div class="block__text">
          <div class="flex">
            <p class="block__label font-robot c-white">STEP 02</p>
            <h3 class="block__title"><?php _e('試作', 'category-mold'); ?></h3>
          </div>
          <p
            class="block__description"><?php _e('試作は文字通り”試しに作る”工程です。他の部材との組み合わせや、設計上の問題点を検証する事が可能です。当社はコスト削減や量産への移行が可能となる試作材料や工法、少量生産に適する簡易型材料等をご提案します。', 'category-mold'); ?></p>
        </div>
        <p class="block__image"><img src="<?= get_template_directory_uri(); ?>/images/category/mold/figure-2.png" alt=""
        <?php fm_lazyload(); ?>></p>
      </div>
    </div>
  </div>
  <!-- // block -->
  <!-- block -->
  <div class="block">
    <div class="block__inner">
      <div class="block__column">
        <div class="block__text">
          <div class="flex">
            <p class="block__label font-robot c-white">STEP 03</p>
            <h3 class="block__title"><?php _e('量産', 'category-mold'); ?></h3>
          </div>
          <p
            class="block__description"><?php _e('製品を市場に送り出す為には大量生産する必要があります。当社では宝飾品から航空宇宙分野まで、あらゆる製品の製造に必要な最適な材料、工法をご提案する事が可能です。生産性やコスト、納期等の問題を確実に解決します。', 'category-mold'); ?></p>
        </div>
        <p class="block__image"><img src="<?= get_template_directory_uri(); ?>/images/category/mold/figure-3.png" alt=""
        <?php fm_lazyload(); ?>></p>
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
    <h4><?php _e('関連商品一覧', 'category-mold'); ?></h4>
    <?php do_shortcode('[product category="mold" count="4" orderby="rand" layout="column"]'); ?>
  </div>
  <div class="articles">
    <h4><?php _e('関連NEWS', 'category-mold'); ?></h4>
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