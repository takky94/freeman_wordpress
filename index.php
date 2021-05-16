<?php get_header(); ?>
<!-- main -->
<main class="main">
  <!-- メインビジュアル -->
  <section class="hero js-hero">
    <h2 class="hero__heading font-eb">
          <span>To be </span><span class="c-main">P</span><span>OSSIBLE</span>
          <span class="small font-gothic">モノづくりに無限の可能性を</span>
        </h2>
    <div class="hero__slide">
      <picture>
        <source srcset="<?= get_template_directory_uri(); ?>/images/top/slide/01.webp" media="(min-width:769px)" />
        <img src="<?= get_template_directory_uri(); ?>/images/top/slide/01.png" alt="">
      </picture>
      <picture>
        <source srcset="<?= get_template_directory_uri(); ?>/images/top/slide/02.webp" media="(min-width:769px)" />
        <img src="<?= get_template_directory_uri(); ?>/images/top/slide/02.png" />
      </picture>
      <picture>
        <source srcset="<?= get_template_directory_uri(); ?>/images/top/slide/03.webp" media="(min-width:769px)" />
        <img src="<?= get_template_directory_uri(); ?>/images/top/slide/03.png" />
      </picture>
      <picture>
        <source srcset="<?= get_template_directory_uri(); ?>/images/top/slide/04.webp" media="(min-width:769px)" />
        <img src="<?= get_template_directory_uri(); ?>/images/top/slide/04.png" />
      </picture>
    </div>
    <?php
      $args = array(
        'numberposts' => 1,
        'post_type' => 'news'
      );
      $news = get_posts($args);
    ?>
    <?php if (!empty($news)): foreach ($news as $post): setup_postdata($post); ?>
    <div class="hero__news c-white">
      <p class="hero__news--title font-robot  bold sp__none">NEWS</p>
      <time class="hero__news--date" datetime="<?php the_time('Y-m-d') ?>"><?php the_time('Y/m/d') ?></time>
      <a href="<?php the_permalink();?>"
        class="hero__news--postTitle c-white"><?= wp_trim_words(get_the_title(), 20); ?></a>
      <a href="<?= get_post_type_archive_link('news'); ?>" class="hero__news--link c-white sp__none">お知らせ一覧
        <?php get_template_part('/parts/icon/arrow'); ?></a>
      <a href="#" class="hero__news--link c-main-bg pc__none">
        <?php get_template_part('/parts/icon/arrow'); ?>
      </a>
    </div>
    <?php endforeach; endif; wp_reset_postdata(); ?>
  </section>
  <!-- // メインビジュアル -->
  <!-- 導入企業様 -->
  <section class="case">
    <div class="case__list">
    </div>
  </section>
  <!-- // 導入企業様 -->
  <!-- 手のひらから宇宙まで -->
  <section class="lead">
    <div class="center">
      <h2 class="lead__heading center"><span class="c-main">手</span>のひらから<span class="c-main">宇</span>宙まで</h2>
      <p class="lead__text center">国内トップクラスの品揃えと提案力で、<br class="pc__none" />企業のあらゆる創造をサポートします。</p>
      <!-- lead__achivment -->
      <div class="lead__achievement">
        <!-- block -->
        <div class="block">
          <div class="block__left">
            <div class="center">
              <img src="<?= get_template_directory_uri(); ?>/images/top/icon/company.svg" width="25" />
            </div>
            <div class="mt-5 bold">創立</div>
          </div>
          <div class="block__right">
            <span class="c-main big">
              <img src="<?= get_template_directory_uri(); ?>/images/top/1973.svg" alt="1973" />
            </span>
            <span class="small bold">年</span>
          </div>
        </div>
        <!-- // block -->
        <!-- block -->
        <div class="block">
          <div class="block__left">
            <div class="center pc__none">
              <img src="<?= get_template_directory_uri(); ?>/images/top/icon/pin.svg" width="25" />
            </div>
            <span class="bold">取引先</span>
            <img src="<?= get_template_directory_uri(); ?>/images/top/icon/pin.svg" width="20" class="sp__none" />
            <br class="sp__none" />
            <div class="mt-5 bold sp-inlineBlock">企業国内外</div>
          </div>
          <div class="block__right">
            <span class="c-main big">
              <img src="<?= get_template_directory_uri(); ?>/images/top/400.svg" alt="400" />
            </span>
            <span class="small bold">社</span>
          </div>
        </div>
        <!-- // block -->
        <!-- block -->
        <div class="block">
          <div class="block__left">
            <div class="center">
              <img src="<?= get_template_directory_uri(); ?>/images/top/icon/earth.svg" width="25" />
            </div>
            <div class="mt-5 bold">海外取引</div>
          </div>
          <div class="block__right">
            <span class="c-main big">
              <img src="<?= get_template_directory_uri(); ?>/images/top/16.svg" alt="16" />
            </span>
            <span class="small bold">カ国</span>
          </div>
        </div>
        <!-- // block -->
      </div>
      <!-- // lead__achivment -->
      <!-- lead__button -->
      <div class="lead__button">
        <a href="#" class="button-arrow button-line arrow-wrap flex-center">
          <span>社長ご挨拶・企業理念</span>
          <?php get_template_part('/parts/icon/arrow'); ?>
        </a>
      </div>
      <!-- // lead__button -->
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
          <a href="#">
            <div class="diamond__inner">
              <div class="center">
                <div class="diamond__title font-robot c-white">MOLD</div>
                <div class="diamond__titleSub c-white">型製品</div>
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
          <a href="#">
            <div class="diamond__inner">
              <div class="center">
                <div class="diamond__title font-robot c-white">INVESTMENT<br class="sp__none" />CASTING</div>
                <div class="diamond__titleSub c-white">精密鋳造用材料</div>
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
          <a href="#">
            <div class="diamond__inner">
              <div class="center">
                <div class="diamond__title font-robot c-white">NEW FIELD</div>
                <div class="diamond__titleSub c-white">新たな取り組み</div>
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
          <a href="#">
            <div class="diamond__inner">
              <div class="center">
                <div class="diamond__title font-robot c-white">SAND<br class="sp__none" />CASTING</div>
                <div class="diamond__titleSub c-white">砂型鋳造用資材・原材料</div>
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
          <a href="#">
            <div class="diamond__inner">
              <div class="center">
                <div class="diamond__title font-robot c-white">JEWELRY</div>
                <div class="diamond__titleSub c-white">ジュエリーキャスト用副資材</div>
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
    <!-- 型製品 -->
    <section class="mold" id="mold">
      <div class="container">
        <!-- detail -->
        <div class="detail flex">
          <div class="detail__text">
            <h2 class="detail__text--headingEn font-gothic">M<span class="decoration c-main-bg">O</span>LD</h2>
            <p class="detail__text--headingJp bold">型製品</p>
            <p class="detail__text--headingSub">無限に広がる表現力</p>
            <p
              class="detail__text--description">デザインから試作開発、量産にいたる全ての領域で、モノづくりに必要な技術や製品を提案し、イメージの具体化や納期改善、コストダウンに貢献します。</p>
          </div>
          <div class="detail__image">
            <picture>
              <img src="<?= get_template_directory_uri(); ?>/images/top/mold.png" alt="" <?php fm_lazyload(); ?> />
            </picture>
          </div>
        </div>
        <!-- // detail -->
        <!-- products -->
        <div class="products">
          <?php do_shortcode('[product cat="mold"]'); ?>
        </div>
        <!-- // products -->
        <div class="view-all view-all__right">
          <a href="#" class="button-arrow button-line arrow-wrap">
            <span class="font-robot">VIEW ALL</span>
            <?php get_template_part('/parts/icon/arrow'); ?>
          </a>
        </div>
      </div>
    </section>
    <!-- // 型製品 -->
    <!-- 砂型鋳造用資材・原材料 -->
    <section class="sand-casting" id="sand-casting">
      <div class="container">
        <!-- detail -->
        <div class="detail detail-reverse flex">
          <div class="detail__text">
            <h2 class="detail__text--headingEn font-gothic">S<span class="decoration c-main-bg">A</span>ND CASTING</h2>
            <p class="detail__text--headingJp bold">砂型鋳造用資材・原材料</p>
            <p class="detail__text--headingSub">ヨーロッパクオリティで<br />高品質な鋳物作りを</p>
            <p
              class="detail__text--description">本場ヨーロッパの鋳物づくりを支えるLANIKセラミックフォームフィルターを筆頭に、海外から独自ルートで仕入れる最良の鋳造用資材を多岐にわたってお取り扱いしております。</p>
          </div>
          <div class="detail__image">
            <picture>
              <img src="<?= get_template_directory_uri(); ?>/images/top/sand-casting.png" alt=""
                <?php fm_lazyload(); ?> />
            </picture>
          </div>
        </div>
        <!-- // detail -->
        <!-- products -->
        <div class="products">
          <?php do_shortcode('[product cat="sand-casting"]'); ?>
        </div>
        <!-- // products -->
        <div class="view-all">
          <a href="#" class="button-arrow button-line arrow-wrap">
            <span class="font-robot">VIEW ALL</span>
            <?php get_template_part('/parts/icon/arrow'); ?>
          </a>
        </div>
      </div>
    </section>
    <!-- // 砂型鋳造用資材・原材料 -->
  </div>
  <div class="section__background section__background--left">
    <!-- 精密鋳造用材料 -->
    <section class="investment-casting" id="investment-casting">
      <div class="container">
        <!-- detail -->
        <div class="detail flex">
          <div class="detail__text">
            <h2
              class="detail__text--headingEn font-gothic">INVE<span class="decoration c-main-bg">S</span>TMENT CASTING</h2>
            <p class="detail__text--headingJp bold">精密鋳造用材料</p>
            <p class="detail__text--headingSub">高付加価値な製品<br />ラインナップと技術サービス</p>
            <p
              class="detail__text--description">国内外より厳選した、精密鋳造プロセスに欠かせない各種材料を取り揃え、最適なソリューションを提供。航空機・自動車・産業用ガスタービン・一般産業機械などの基幹産業を支えています。</p>
          </div>
          <div class="detail__image">
            <picture>
              <img src="<?= get_template_directory_uri(); ?>/images/top/investment-casting.png" alt=""
                <?php fm_lazyload(); ?> />
            </picture>
          </div>
        </div>
        <!-- // detail -->
        <!-- products -->
        <div class="products">
          <?php do_shortcode('[product cat="investment-casting"]'); ?>
        </div>
        <!-- // products -->
        <div class="view-all view-all__right">
          <a href="#" class="button-arrow button-line arrow-wrap">
            <span class="font-robot">VIEW ALL</span>
            <?php get_template_part('/parts/icon/arrow'); ?>
          </a>
        </div>
      </div>
    </section>
    <!-- // 精密鋳造用材料 -->
    <!-- ジュエリーキャスト用副資材 -->
    <section class="jewelry" id="jewelry">
      <div class="container">
        <!-- detail -->
        <div class="detail detail-reverse flex">
          <div class="detail__text">
            <h2 class="detail__text--headingEn font-gothic">JE<span class="decoration c-main-bg">W</span>ELRY</h2>
            <p class="detail__text--headingJp bold">ジュエリーキャスト用副資材</p>
            <p class="detail__text--headingSub">業界のスタンダードとして</p>
            <p
              class="detail__text--description">ジュエリー業界で最も著名かつ実績のある、FreemanワックスおよびR&R埋没材の豊富なラインナップの中から、ご要望にあわせて提案します。その他関連材、設備もお任せください。</p>
          </div>
          <div class="detail__image">
            <picture>
              <img src="<?= get_template_directory_uri(); ?>/images/top/jewelry.png" alt="" <?php fm_lazyload(); ?> />
            </picture>
          </div>
        </div>
        <!-- // detail -->
        <!-- products -->
        <div class="products">
          <?php do_shortcode('[product cat="jewelry"]'); ?>
        </div>
        <!-- // products -->
        <div class="view-all">
          <a href="#" class="button-arrow button-line arrow-wrap">
            <span class="font-robot">VIEW ALL</span>
            <?php get_template_part('/parts/icon/arrow'); ?>
          </a>
        </div>
      </div>
    </section>
    <!-- // ジュエリーキャスト用副資材 -->
  </div>
  <!-- 新たな取り組み -->
  <section class="new-field" id="new-field">
    <div class="container">
      <!-- detail -->
      <div class="detail flex">
        <div class="detail__text">
          <h2 class="detail__text--headingEn font-gothic">NE<span class="decoration c-main-bg">W</span> FIELD</h2>
          <p class="detail__text--headingJp bold">新たな取り組み</p>
          <p class="detail__text--headingSub">SDGsへの貢献</p>
          <p
            class="detail__text--description">ただの材料屋ではありません、明日の地球・働く人たちのことを考えたご提案。臭気対策・ミネラルキャスティング・CO2洗浄システムなど、環境を考える方に向けた新しい技術のご紹介です。</p>
        </div>
        <div class="detail__image">
          <picture>
            <img src="<?= get_template_directory_uri(); ?>/images/top/new-field.png" alt="" <?php fm_lazyload(); ?> />
          </picture>
        </div>
      </div>
      <!-- // detail -->
      <div class="view-all view-all__right">
        <a href="#" class="button-arrow button-line arrow-wrap">
          <span class="font-robot">VIEW ALL</span>
          <?php get_template_part('/parts/icon/arrow'); ?>
        </a>
      </div>
    </div>
  </section>
  <!-- // 新たな取り組み -->
</main>
<!-- // main -->
<?php get_footer(); ?>