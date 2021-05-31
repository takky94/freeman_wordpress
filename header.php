<?php echo fm_is_active_page('mold'); ?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital@1&family=Roboto+Condensed:wght@300;400;700&family=Noto+Serif+JP:wght@600&&display=swap"
    rel="stylesheet">
  <?php if (is_home() || is_front_page()): ?>
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style/compressed/index.min.css" />
  <?php elseif (is_category()): ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style/compressed/category.min.css" />
  <?php elseif (is_archive()): ?>
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style/compressed/archive.min.css" />
  <?php elseif (is_page_template()): //テンプレート使用の固定ページ ?>
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style/compressed/article-template.min.css" />
  <?php elseif (is_single()||is_page()): ?>
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style/compressed/article.min.css" />
  <?php elseif (is_search()): ?>
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style/compressed/search.min.css" />
  <?php elseif (is_404()): ?>
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style/compressed/404.min.css" />
  <?php endif; ?>
  <?php wp_head(); //必須 ?>
  <?php if (is_user_logged_in()): ?>
  <style>
  html {
    margin-top: 0 !important;
  }
  </style>
  <?php endif; ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <!-- header -->
  <header class="header">
    <div class="header__inner">
      <div class="header__logo">
        <?php $titleTag = (is_home() || is_front_page()) ? "h1" : "div"; ?>
        <<?= $titleTag; ?> class="logo">
          <a href="<?= home_url(); ?>">
            <img src="<?= get_template_directory_uri(); ?>/images/logo.svg" alt="株式会社フリーマン ロゴ">
          </a>
        </<?= $titleTag; ?>>
      </div>
      <nav class="header__menu">
        <div class="header__content js-menuContent">
          <div class="header__lang">
            <span class="select font-robot">JP EN CH</span>
            <?php get_search_form(); ?>
          </div>
          <ul class="header__list">
            <li>
              <a href="<?= home_url(); ?>/mold" class="js-accordion <?= fm_is_active_page('mold'); ?>"
                data-subtitle="MOLD">試作・型材料</a>
              <div class="sub">
                <div class="container flex">
                  <p class="sub__title c-white font-robot sp__none">M<span class="c-main">O</span>LD</p>
                  <ul class="js-accordionContent">
                    <li><a href="<?= home_url(); ?>/mold/discharge" class="c-white c-trans-red">デザイン吐出</a></li>
                    <li><a href="<?= home_url(); ?>/mold/cutting" class="c-white c-trans-red">デザイン切削</a></li>
                    <li><a href="<?= home_url(); ?>/mold/casting" class="c-white c-trans-red">試作注型樹脂</a></li>
                    <li><a href="<?= home_url(); ?>/mold/mold_material" class="c-white c-trans-red">試作型材</a></li>
                    <li><a href="<?= home_url(); ?>/mold/silicone" class="c-white c-trans-red">試作シリコン</a></li>
                    <li><a href="<?= home_url(); ?>/mold/invar" class="c-white c-trans-red">量産インバー</a></li>
                    <li><a href="<?= home_url(); ?>/mold/" class="c-white c-trans-red">量産砂型鋳造</a></li>
                    <li><a href="<?= home_url(); ?>/mold/" class="c-white c-trans-red">量産精密鋳造</a></li>
                    <li><a href="<?= home_url(); ?>/mold/" class="c-white c-trans-red">量産ジュエリー</a></li>
                    <li><a href="<?= home_url(); ?>/mold/" class="c-white c-trans-red">特殊</a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <a href="<?= home_url(); ?>/sand_casting" class="js-accordion <?= fm_is_active_page('sand_casting'); ?>"
                data-subtitle="SAND CASTING">砂型鋳造</a>
              <div class="sub">
                <div class="container flex">
                  <p class="sub__title c-white font-robot sp__none">S<span class="c-main">A</span>ND CASTING</p>
                  <ul class="js-accordionContent">
                    <li><a href="<?= home_url(); ?>" class="c-white c-trans-red">鋳造用フィルター</a></li>
                    <li><a href="<?= home_url(); ?>" class="c-white c-trans-red">スリープ</a></li>
                    <li><a href="<?= home_url(); ?>" class="c-white c-trans-red">方案用ゲート</a></li>
                    <li><a href="<?= home_url(); ?>" class="c-white c-trans-red">非鉄用塗型</a></li>
                    <li><a href="<?= home_url(); ?>" class="c-white c-trans-red">各種対火物</a></li>
                    <li><a href="<?= home_url(); ?>" class="c-white c-trans-red">アルミ原材料</a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <a href="<?= home_url(); ?>/investment_casting"
                class="js-accordion <?= fm_is_active_page('investment_casting'); ?>"
                data-subtitle="INVESTMENT CASTING">精密鋳造</a>
              <div class="sub">
                <div class="container flex">
                  <p class="sub__title c-white font-robot sp__none">INVE<span class="c-main">S</span>TMENT CASTING</p>
                  <ul class="js-accordionContent">
                    <li><a href="<?= home_url(); ?>/investment_casting/wax" class="c-white c-trans-red">WAX</a></li>
                    <li><a href="<?= home_url(); ?>/investment_casting/parting_powder"
                        class="c-white c-trans-red">離散型・洗浄剤</a></li>
                    <li><a href="<?= home_url(); ?>/investment_casting/binder" class="c-white c-trans-red">バインダー</a>
                    </li>
                    <li><a href="<?= home_url(); ?>/investment_casting/refractory_material"
                        class="c-white c-trans-red">砂</a></li>
                    <li><a href="<?= home_url(); ?>/investment_casting/others" class="c-white c-trans-red">その他</a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <a href="<?= home_url(); ?>/jewelry" class="js-accordion <?= fm_is_active_page('jewelry'); ?>"
                data-subtitle="JEWELRY">ジュエリー</a>
              <div class="sub">
                <div class="container flex">
                  <p class="sub__title c-white font-robot sp__none">JE<span class="c-main">W</span>ELRY</p>
                  <ul class="js-accordionContent">
                    <li><a href="<?= home_url(); ?>/jewelry/injection_wax" class="c-white c-trans-red">インジェクションWAX</a>
                    </li>
                    <li><a href="<?= home_url(); ?>/jewelry/carving_wax" class="c-white c-trans-red">切削WAX</a></li>
                    <li><a href="<?= home_url(); ?>/jewelry/investing_material" class="c-white c-trans-red">埋没材</a></li>
                    <li><a href="<?= home_url(); ?>/jewelry/" class="c-white c-trans-red">シリコン</a></li>
                    <li><a href="<?= home_url(); ?>/jewelry/matt_tool" class="c-white c-trans-red">ツールマット</a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <a href="<?= home_url(); ?>/new_field" class="js-accordion <?= fm_is_active_page('new_field'); ?>"
                data-subtitle="NEW FIELD">新たな取り組み</a>
              <div class="sub">
                <div class="container flex">
                  <p class="sub__title c-white font-robot sp__none">NE<span class="c-main">W</span> FIELD</p>
                  <ul class="js-accordionContent">
                    <li><a href="#" class="c-white c-trans-red">消臭剤</a></li>
                    <li><a href="#" class="c-white c-trans-red">ミネラルキャスティング</a></li>
                    <li><a href="#" class="c-white c-trans-red">CO2洗浄システム</a></li>
                    <li><a href="#" class="c-white c-trans-red">ホットメルト</a></li>
                    <li><a href="#" class="c-white c-trans-red">暑さ対策</a></li>
                    <li><a href="#" class="c-white c-trans-red">電動アシスト台車</a></li>
                    <li class="grow"><a href="#" class="c-white c-trans-red">ベアリングセンサーシステム</a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <a href="<?= home_url(); ?>/company" class="js-accordion" data-subtitle="COMPANY">会社概要</a>
              <div class="sub">
                <div class="container flex">
                  <p class="sub__title c-white font-robot sp__none">CO<span class="c-main">M</span>PANY</p>
                  <ul class="js-accordionContent">
                    <li><a href="<?= home_url(); ?>/company#philosophy" class="c-white c-trans-red">理念</a></li>
                    <li><a href="<?= home_url(); ?>/company#infographic" class="c-white c-trans-red">数字で見る日本フリーマン</a>
                    </li>
                    <li><a href="<?= home_url(); ?>/company#greeting" class="c-white c-trans-red">社長挨拶</a></li>
                    <li><a href="<?= home_url(); ?>/company#overview" class="c-white c-trans-red">会社概要</a></li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="header__button">
          <a href="<?= home_url(); ?>/contact" class="font-robot white button-line">
            <div>
              <div class="center">CONTACT</div>
              <img src="<?= get_template_directory_uri(); ?>/images/top/icon/mail.svg" />
            </div>
          </a>
        </div>
        <div class="header__buttonMenu pc__none">
          <button class="font-robot white js-menu">
            <div>
              <div class="center">MENU</div>
              <span class="header__buttonMenu--bar"></span>
              <span class="header__buttonMenu--bar"></span>
              <span class="header__buttonMenu--bar"></span>
            </div>
          </button>
        </div>
      </nav>
    </div>
  </header>
  <!-- // header -->