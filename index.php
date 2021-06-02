<?php get_header(); ?>
<!-- main -->
<div id="index">
  <main id="main" class="main">
    <!-- メインビジュアル -->
    <section class="hero js-hero">
      <h2 class="hero__heading font-eb">
      <div class="sp__none">
        <?php get_template_part('/parts/svg/top-fv-text'); ?>
      </div>
      <div class="pc__none">
        <?php get_template_part('/parts/svg/top-fv-textSp'); ?>
      </div>
      <div class="js-scroll-fadeIn-title js-scroll-animation">
        <div class="small font-gothic">
          <span><?php _e('<span>モ</span><span>ノ</span><span>づ</span><span>く</span><span>り</span><span>に</span><span>無</span><span>限</span><span>の</span><span>可</span><span>能</span><span>性</span><span>を</span>','top'); ?></span>
        </div>
      </div>
    </h2>
      <div class="hero__slide slide-animation">
        <picture>
          <source srcset="<?= get_template_directory_uri(); ?>/images/top/slide/01.webp" />
          <source srcset="<?= get_template_directory_uri(); ?>/images/top/slide/01-768.png" media="(max-width:768px)" />
          <img class="slide-animation__image" src="<?= get_template_directory_uri(); ?>/images/top/slide/01.png"
            alt="" />
        </picture>
        <picture>
          <source srcset="<?= get_template_directory_uri(); ?>/images/top/slide/02.webp" />
          <source srcset="<?= get_template_directory_uri(); ?>/images/top/slide/02-768.png" media="(max-width:768px)" />
          <img class="slide-animation__image" src="<?= get_template_directory_uri(); ?>/images/top/slide/02.png"
            alt="" />
        </picture>
        <picture>
          <source srcset="<?= get_template_directory_uri(); ?>/images/top/slide/03.webp" />
          <source srcset="<?= get_template_directory_uri(); ?>/images/top/slide/03-768.png" media="(max-width:768px)" />
          <img class="slide-animation__image" src="<?= get_template_directory_uri(); ?>/images/top/slide/03.png"
            alt="" />
        </picture>
        <picture>
          <source srcset="<?= get_template_directory_uri(); ?>/images/top/slide/04.webp" />
          <source srcset="<?= get_template_directory_uri(); ?>/images/top/slide/04-768.png" media="(max-width:768px)" />
          <img class="slide-animation__image" src="<?= get_template_directory_uri(); ?>/images/top/slide/04.png"
            alt="" />
        </picture>
      </div>
      <?php
      $args = array(
        'numberposts' => 3,
        'post_type' => 'news'
      );
      $news = get_posts($args);
    ?>
      <div class="hero__news c-white">
        <p class="hero__news--title font-robot  bold sp__none">NEWS</p>
        <div class="swiper-news-container">
          <div class="swiper-wrapper">
            <?php if (!empty($news)): foreach ($news as $post): setup_postdata($post); ?>
            <div class="swiper-slide">
              <a href="<?php the_permalink();?>" class="hero__news--postTitle c-white c-trans-red">
                <time class="hero__news--date" datetime="<?php the_time('Y-m-d') ?>"><?php the_time('Y/m/d') ?></time>
                <?= wp_trim_words(get_the_title(), 20); ?>
              </a>
            </div>
            <?php endforeach; endif; wp_reset_postdata(); ?>
          </div>
        </div>
        <a href="<?= get_post_type_archive_link('news'); ?>" class="hero__news--link c-white c-trans-red sp__none">
          <?php _e('お知らせ一覧','top'); ?><?php get_template_part('/parts/icon/arrow'); ?>
        </a>
        <a href="#" class="hero__news--link c-main-bg pc__none">
          <?php get_template_part('/parts/icon/arrow'); ?>
        </a>
      </div>
    </section>
    <!-- // メインビジュアル -->
    <!-- 導入企業様 -->
    <section class="case">
      <div class="case__list">
      </div>
    </section>
    <!-- // 導入企業様 -->
    <!-- 手のひらから宇宙まで -->
    <section class="lead js-scroll-fadeIn-block js-scroll-animation">
      <div class="center">
        <div class="js-scroll-fadeIn-title js-scroll-animation">
          <h2 class="lead__heading font-serif center">
            <?php _e('<span class="c-main">手</span><span>の</span><span>ひ</span><span>ら</span><span>か</span><span>ら</span><span class="c-main">宇</span><span>宙</span><span>ま</span><span>で</span>','top'); ?>
          </h2>
        </div>
        <div class="js-scroll-fadeIn-text js-scroll-animation">
          <p
            class="lead__text center"><?php _e('国内トップクラスの品揃えと提案力で、<br class="pc__none" />企業のあらゆる創造をサポートします。','top'); ?></p>
          <!-- lead__achivment -->
          <div class="lead__achievement">
            <!-- block -->
            <div class="block">
              <div class="block__left">
                <div class="center">
                  <img src="<?= get_template_directory_uri(); ?>/images/top/icon/company.svg" width="25" />
                </div>
                <div class="mt-5 bold"><?php _e('','top'); ?>創立</div>
              </div>
              <div class="block__right">
                <span class="c-main big">
                  <img src="<?= get_template_directory_uri(); ?>/images/top/1973.svg" alt="1973" />
                </span>
                <span class="small bold"><?php _e('','top'); ?>年</span>
              </div>
            </div>
            <!-- // block -->
            <!-- block -->
            <div class="block">
              <div class="block__left">
                <div class="center pc__none">
                  <img src="<?= get_template_directory_uri(); ?>/images/top/icon/pin.svg" width="25" />
                </div>
                <span class="bold"><?php _e('取引先','top'); ?></span>
                <img src="<?= get_template_directory_uri(); ?>/images/top/icon/pin.svg" width="20" class="sp__none" />
                <br class="sp__none" />
                <div class="mt-5 bold sp-inlineBlock"><?php _e('企業国内外','top'); ?></div>
              </div>
              <div class="block__right">
                <span class="c-main big">
                  <img src="<?= get_template_directory_uri(); ?>/images/top/400.svg" alt="400" />
                </span>
                <span class="small bold"><?php _e('社','top'); ?></span>
              </div>
            </div>
            <!-- // block -->
            <!-- block -->
            <div class="block">
              <div class="block__left">
                <div class="center">
                  <img src="<?= get_template_directory_uri(); ?>/images/top/icon/earth.svg" width="25" />
                </div>
                <div class="mt-5 bold"><?php _e('海外取引','top'); ?></div>
              </div>
              <div class="block__right">
                <span class="c-main big">
                  <img src="<?= get_template_directory_uri(); ?>/images/top/16.svg" alt="16" />
                </span>
                <span class="small bold"><?php _e('カ国','top'); ?></span>
              </div>
            </div>
            <!-- // block -->
          </div>
          <!-- // lead__achivment -->
          <!-- lead__button -->
          <div class="lead__button">
            <a href="#" class="button-arrow button-line arrow-wrap flex-center">
              <span><?php _e('社長ご挨拶・企業理念','top'); ?></span>
              <?php get_template_part('/parts/icon/arrow'); ?>
            </a>
          </div>
          <!-- // lead__button -->
        </div>
      </div>
      <!-- // center -->
    </section>
    <!-- // 手のひらから宇宙まで -->
    <!-- MANUFACTURING ~ -->
    <div class="lead__background"></div>
    <!-- // MANUFACTURING -->
    <!-- リンクリスト -->
    <nav class="menu">
      <div class="container relative">
        <ul>
          <li class="diamond">
            <a href="#mold">
              <div class="diamond__inner">
                <div class="center">
                  <div class="diamond__title font-robot c-white">MOLD</div>
                  <div class="diamond__titleSub c-white"><?php _e('試作・型材料','top'); ?></div>
                  <img src="<?= get_template_directory_uri(); ?>/images/top/icon/arrowDown.svg"
                    class="diamond__icon sp__none" width="25" alt="">
                </div>
                <img src="<?= get_template_directory_uri(); ?>/images/top/icon/arrowDown.svg"
                  class="diamond__icon pc__none" width="25" alt="">
              </div>
            </a>
            <div class="filter"></div>
          </li>
          <li class="diamond">
            <a href="#investment-casting">
              <div class="diamond__inner">
                <div class="center">
                  <div class="diamond__title font-robot c-white">INVESTMENT<br class="sp__none" />CASTING</div>
                  <div class="diamond__titleSub c-white"><?php _e('精密鋳造用材料','top'); ?></div>
                  <img src="<?= get_template_directory_uri(); ?>/images/top/icon/arrowDown.svg"
                    class="diamond__icon sp__none" width="25" alt="">
                </div>
                <img src="<?= get_template_directory_uri(); ?>/images/top/icon/arrowDown.svg"
                  class="diamond__icon pc__none" width="25" alt="">
              </div>
            </a>
            <div class="filter"></div>
          </li>
          <li class="diamond">
            <a href="#new-field">
              <div class="diamond__inner">
                <div class="center">
                  <div class="diamond__title font-robot c-white">NEW FIELD</div>
                  <div class="diamond__titleSub c-white"><?php _e('新たな取り組み','top'); ?></div>
                  <img src="<?= get_template_directory_uri(); ?>/images/top/icon/arrowDown.svg"
                    class="diamond__icon sp__none" width="25" alt="">
                </div>
                <img src="<?= get_template_directory_uri(); ?>/images/top/icon/arrowDown.svg"
                  class="diamond__icon pc__none" width="25" alt="">
              </div>
            </a>
            <div class="filter"></div>
          </li>
          <li class="diamond">
            <a href="#sand-casting">
              <div class="diamond__inner">
                <div class="center">
                  <div class="diamond__title font-robot c-white">SAND<br class="sp__none" />CASTING</div>
                  <div class="diamond__titleSub c-white"><?php _e('砂型鋳造用資材・原材料','top'); ?></div>
                  <img src="<?= get_template_directory_uri(); ?>/images/top/icon/arrowDown.svg"
                    class="diamond__icon sp__none" width="25" alt="">
                </div>
                <img src="<?= get_template_directory_uri(); ?>/images/top/icon/arrowDown.svg"
                  class="diamond__icon pc__none" width="25" alt="">
              </div>
            </a>
            <div class="filter"></div>
          </li>
          <li class="diamond">
            <a href="#jewelry">
              <div class="diamond__inner">
                <div class="center">
                  <div class="diamond__title font-robot c-white">JEWELRY</div>
                  <div class="diamond__titleSub c-white"><?php _e('ジュエリーキャスト用副資材','top'); ?></div>
                  <img src="<?= get_template_directory_uri(); ?>/images/top/icon/arrowDown.svg"
                    class="diamond__icon sp__none" width="25" alt="">
                </div>
                <img src="<?= get_template_directory_uri(); ?>/images/top/icon/arrowDown.svg"
                  class="diamond__icon pc__none" width="25" alt="">
              </div>
            </a>
            <div class="filter"></div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- // リンクリスト -->
    <div class="section__background section__background--right">
      <!-- 試作・型材料 -->
      <section class="mold js-scroll-fadeIn-block js-scroll-animation" id="mold">
        <div class="container">
          <!-- detail -->
          <div class="detail flex">
            <div class="detail__text">
              <div class="js-scroll-fadeIn-title js-scroll-animation">
                <h2 class="detail__text--headingEn font-robot">
                <span>M</span><span class="decoration decoration__o c-main-bg">O</span><span>L</span><span>D</span>
              </h2>
              </div>
              <div class="js-scroll-fadeIn-text js-scroll-animation">
                <p class="detail__text--headingJp bold"><?php _e('試作・型材料','top'); ?></p>
                <p class="detail__text--headingSub"><?php _e('無限に広がる表現力','top'); ?></p>
                <p
                  class="detail__text--description"><?php _e('デザインから試作開発、量産にいたる全ての領域で、モノづくりに必要な技術や製品を提案し、イメージの具体化や納期改善、コストダウンに貢献します。','top'); ?></p>
              </div>
            </div>
            <!-- // detail__text -->
            <!-- detail__image -->
            <div class="detail__image">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <picture>
                      <img src="<?= get_template_directory_uri(); ?>/images/top/mold.png" alt=""
                        <?php fm_lazyload(); ?> />
                    </picture>
                  </div>
                  <div class="swiper-slide">
                    <picture>
                      <img src="<?= get_template_directory_uri(); ?>/images/top/slide-category/mold-slide-2.png" alt=""
                        <?php fm_lazyload(); ?> />
                    </picture>
                  </div>
                  <div class="swiper-slide">
                    <picture>
                      <img src="<?= get_template_directory_uri(); ?>/images/top/slide-category/mold-slide-3.png" alt=""
                        <?php fm_lazyload(); ?> />
                    </picture>
                  </div>
                </div>
              </div>

            </div>
            <!-- // detail__image -->
          </div>
          <!-- // detail -->
          <!-- products -->
          <div class="products">
            <?php do_shortcode('[product category="mold" count="3"]'); ?>
          </div>
          <!-- // products -->
          <div class="view-all view-all__right">
            <a href="<?= home_url(); ?>/mold" class="button-arrow button-line arrow-wrap">
              <span class="font-robot bold">VIEW ALL</span>
              <?php get_template_part('/parts/icon/arrow'); ?>
            </a>
          </div>
        </div>
      </section>
      <!-- // 試作・型材料 -->
      <!-- 砂型鋳造用資材・原材料 -->
      <section class="sand-casting js-scroll-fadeIn-block js-scroll-animation" id="sand-casting">
        <div class="container">
          <!-- detail -->
          <div class="detail detail-reverse flex">
            <div class="detail__text">
              <div class="js-scroll-fadeIn-title js-scroll-animation">
                <h2 class="detail__text--headingEn font-robot">
                <span>S</span><span class="decoration decoration__a c-main-bg">A</span><span>N</span><span>D </span><span>C</span><span>A</span><span>S</span><span>T</span><span>I</span><span>N</span><span>G</span>
              </h2>
              </div>
              <div class="js-scroll-fadeIn-text js-scroll-animation">
                <p class="detail__text--headingJp bold"><?php _e('砂型鋳造用資材・原材料','top'); ?></p>
                <p class="detail__text--headingSub"><?php _e('ヨーロッパクオリティで<br />高品質な鋳物作りを','top'); ?></p>
                <p
                  class="detail__text--description"><?php _e('本場ヨーロッパの鋳物づくりを支えるLANIKセラミックフォームフィルターを筆頭に、海外から独自ルートで仕入れる最良の鋳造用資材を多岐にわたってお取り扱いしております。','top'); ?></p>
              </div>
            </div>
            <!-- // detail__text -->
            <!-- detail__image -->
            <div class="detail__image">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <picture>
                      <img src="<?= get_template_directory_uri(); ?>/images/top/sand-casting.png" alt=""
                        <?php fm_lazyload(); ?> />
                    </picture>
                  </div>
                  <div class="swiper-slide">
                    <picture>
                      <img src="<?= get_template_directory_uri(); ?>/images/top/slide-category/sand_casting-slide-2.png"
                        alt="" <?php fm_lazyload(); ?> />
                    </picture>
                  </div>
                  <div class="swiper-slide">
                    <picture>
                      <img src="<?= get_template_directory_uri(); ?>/images/top/slide-category/sand_casting-slide-3.png"
                        alt="" <?php fm_lazyload(); ?> />
                    </picture>
                  </div>
                  <div class="swiper-slide">
                    <picture>
                      <img src="<?= get_template_directory_uri(); ?>/images/top/slide-category/sand_casting-slide-4.png"
                        alt="" <?php fm_lazyload(); ?> />
                    </picture>
                  </div>
                </div>
              </div>

            </div>
            <!-- // detail__image -->
          </div>
          <!-- // detail -->
          <!-- products -->
          <div class="products">
            <?php do_shortcode('[product category="sand-casting" count="3"]'); ?>
          </div>
          <!-- // products -->
          <div class="view-all">
            <a href="<?= home_url(); ?>/sand_casting" class="button-arrow button-line arrow-wrap">
              <span class="font-robot bold">VIEW ALL</span>
              <?php get_template_part('/parts/icon/arrow'); ?>
            </a>
          </div>
        </div>
      </section>
      <!-- // 砂型鋳造用資材・原材料 -->
    </div>
    <div class="section__background section__background--left">
      <!-- 精密鋳造用材料 -->
      <section class="investment-casting js-scroll-fadeIn-block js-scroll-animation" id="investment-casting">
        <div class="container">
          <!-- detail -->
          <div class="detail flex">
            <div class="detail__text">
              <div class="js-scroll-fadeIn-title js-scroll-animation">
                <h2 class="detail__text--headingEn font-robot">
                <span>I</span><span>N</span><span>V</span><span>E</span><span class="decoration decoration__s c-main-bg">S</span><span>T</span><span>M</span><span>E</span><span>N</span><span>T </span><br /><span>C</span><span>A</span><span>S</span><span>T</span><span>I</span><span>N</span><span>G</span>
              </h2>
              </div>
              <div class="js-scroll-fadeIn-text js-scroll-animation">
                <p class="detail__text--headingJp bold"><?php _e('精密鋳造用材料','top'); ?></p>
                <p
                  class="detail__text--headingSub"><?php _e('高機能な製品ラインナップ','top'); ?><br /><?php _e('と技術サービス','top'); ?></p>
                <p
                  class="detail__text--description"><?php _e('国内外より厳選した、精密鋳造プロセスに欠かせない各種材料を取り揃え、最適なソリューションを提供。航空機・自動車・産業用ガスタービン・一般産業機械などの基幹産業を支えています。','top'); ?></p>
              </div>
            </div>
            <!-- // detail__text -->
            <!-- detail__image -->
            <div class="detail__image">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <picture>
                      <img src="<?= get_template_directory_uri(); ?>/images/top/investment-casting.png" alt=""
                        <?php fm_lazyload(); ?> />
                    </picture>
                  </div>
                  <div class="swiper-slide">
                    <picture>
                      <img
                        src="<?= get_template_directory_uri(); ?>/images/top/slide-category/investment_casting-slide-2.png"
                        alt="" <?php fm_lazyload(); ?> />
                    </picture>
                  </div>
                  <div class="swiper-slide">
                    <picture>
                      <img
                        src="<?= get_template_directory_uri(); ?>/images/top/slide-category/investment_casting-slide-3.png"
                        alt="" <?php fm_lazyload(); ?> />
                    </picture>
                  </div>
                </div>
              </div>

            </div>
            <!-- // detail__image -->
          </div>
          <!-- // detail -->
          <!-- products -->
          <div class="products">
            <?php do_shortcode('[product category="investment-casting" count="3"]'); ?>
          </div>
          <!-- // products -->
          <div class="view-all view-all__right">
            <a href="<?= home_url(); ?>/investment_casting" class="button-arrow button-line arrow-wrap">
              <span class="font-robot bold">VIEW ALL</span>
              <?php get_template_part('/parts/icon/arrow'); ?>
            </a>
          </div>
        </div>
      </section>
      <!-- // 精密鋳造用材料 -->
      <!-- ジュエリーキャスト用副資材 -->
      <section class="jewelry js-scroll-fadeIn-block js-scroll-animation" id="jewelry">
        <div class="container">
          <!-- detail -->
          <div class="detail detail-reverse flex">
            <div class="detail__text">
              <div class="js-scroll-fadeIn-title js-scroll-animation">
                <h2 class="detail__text--headingEn font-robot">
                <span>J</span><span>E</span><span class="decoration decoration__w c-main-bg">W</span><span>E</span><span>L</span><span>R</span><span>Y</span>
              </h2>
              </div>
              <div class="js-scroll-fadeIn-text js-scroll-animation">
                <p class="detail__text--headingJp bold"><?php _e('ジュエリーキャスト用副資材','top'); ?></p>
                <p class="detail__text--headingSub"><?php _e('業界のスタンダードとして','top'); ?></p>
                <p
                  class="detail__text--description"><?php _e('ジュエリー業界で最も著名かつ実績のある、FreemanワックスおよびR&R埋没材の豊富なラインナップの中から、ご要望にあわせて提案します。その他関連材、設備もお任せください。','top'); ?></p>
              </div>
            </div>
            <!-- // detail__text -->
            <!-- detail__image -->
            <div class="detail__image">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <picture>
                      <img src="<?= get_template_directory_uri(); ?>/images/top/jewelry.png" alt=""
                        <?php fm_lazyload(); ?> />
                    </picture>
                  </div>
                  <div class="swiper-slide">
                    <picture>
                      <img src="<?= get_template_directory_uri(); ?>/images/top/slide-category/jewelry-slide-2.png"
                        alt="" <?php fm_lazyload(); ?> />
                    </picture>
                  </div>
                  <div class="swiper-slide">
                    <picture>
                      <img src="<?= get_template_directory_uri(); ?>/images/top/slide-category/jewelry-slide-3.png"
                        alt="" <?php fm_lazyload(); ?> />
                    </picture>
                  </div>
                </div>
              </div>

            </div>
            <!-- // detail__image -->
          </div>
          <!-- // detail -->
          <!-- products -->
          <div class="products">
            <?php do_shortcode('[product category="jewelry" count="3"]'); ?>
          </div>
          <!-- // products -->
          <div class="view-all">
            <a href="<?= home_url(); ?>/jewelry" class="button-arrow button-line arrow-wrap">
              <span class="font-robot bold">VIEW ALL</span>
              <?php get_template_part('/parts/icon/arrow'); ?>
            </a>
          </div>
        </div>
      </section>
      <!-- // ジュエリーキャスト用副資材 -->
    </div>
    <!-- 新たな取り組み -->
    <section class="new-field js-scroll-fadeIn-block js-scroll-animation" id="new-field">
      <div class="container">
        <!-- detail -->
        <div class="detail flex">
          <div class="detail__text">
            <div class="js-scroll-fadeIn-title js-scroll-animation">
              <h2 class="detail__text--headingEn font-robot">
              <span>N</span><span>E</span><span class="decoration decoration__w c-main-bg">W </span><span>F</span><span>I</span><span>E</span><span>L</span><span>D</span>
            </h2>
            </div>
            <div class="js-scroll-fadeIn-text js-scroll-animation">
              <p class="detail__text--headingJp bold"><?php _e('新たな取り組み','top'); ?></p>
              <p class="detail__text--headingSub"><?php _e('SDGsへの貢献','top'); ?></p>
              <p
                class="detail__text--description"><?php _e('ただの材料屋ではありません、明日の地球・働く人たちを考えます。臭気対策・ミネラルキャスティング・CO2洗浄システムなど、環境を考える方へ新しい技術のご紹介です。','top'); ?></p>
            </div>
          </div>
          <!-- // detail__text -->
          <!-- detail__image -->
          <div class="detail__image slide-animation slide-animation-image-count2">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <picture>
                    <img src="<?= get_template_directory_uri(); ?>/images/top/new-field.png" alt=""
                      <?php fm_lazyload(); ?> />
                  </picture>
                </div>
                <div class="swiper-slide">
                  <picture>
                    <img src="<?= get_template_directory_uri(); ?>/images/top/slide-category/new_field-slide-2.png"
                      alt="" <?php fm_lazyload(); ?> />
                  </picture>
                </div>
              </div>
            </div>
          </div>
          <!-- // detail__image -->
        </div>
        <!-- // detail -->
        <div class="view-all view-all__right">
          <a href="<?= home_url(); ?>/new_field" class="button-arrow button-line arrow-wrap">
            <span class="font-robot bold">VIEW ALL</span>
            <?php get_template_part('/parts/icon/arrow'); ?>
          </a>
        </div>
      </div>
    </section>
    <!-- // 新たな取り組み -->
  </main>
  <!-- // main -->
</div>
<!--// index-->
<?php get_footer(); ?>