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
    href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital@1&family=Roboto+Condensed:wght@300;400;700&display=swap"
    rel="stylesheet">
  <?php if (is_home() || is_front_page()):  ?>
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style/compressed/index.min.css" />
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
  <div id="index">
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
                <a href="<?= home_url(); ?>/mold" class="js-accordion" data-subtitle="MOLD">型製品</a>
                <div class="sub">
                  <div class="container flex">
                    <p class="sub__title c-main font-robot sp__none">MOLD</p>
                    <ul class="js-accordionContent">
                      <li><a href="#">デザイン吐出</a></li>
                      <li><a href="#">デザイン切削</a></li>
                      <li><a href="#">試作注型樹脂</a></li>
                      <li><a href="#">試作型材</a></li>
                      <li><a href="#">試作シリコン</a></li>
                      <li><a href="#">量産インバー</a></li>
                      <li><a href="#">量産砂型鋳造</a></li>
                      <li><a href="#">量産精密鋳造</a></li>
                      <li><a href="#">量産ジュエリー</a></li>
                      <li><a href="#">特殊</a></li>
                    </ul>
                  </div>
                </div>
              </li>
              <li>
                <a href="<?= home_url(); ?>/sand-casting" class="js-accordion" data-subtitle="SAND CASTING">砂型鋳造</a>
                <div class="sub">
                  <div class="container flex">
                    <p class="sub__title c-main font-robot sp__none">SAND CASTING</p>
                    <ul class="js-accordionContent">
                      <li><a href="#">鋳造用フィルター</a></li>
                      <li><a href="#">スリープ</a></li>
                      <li><a href="#">方案用ゲート</a></li>
                      <li><a href="#">非鉄用塗型</a></li>
                      <li><a href="#">各種対火物</a></li>
                      <li><a href="#">アルミ原材料</a></li>
                    </ul>
                  </div>
                </div>
              </li>
              <li>
                <a href="<?= home_url(); ?>/investment-casting" class="js-accordion"
                  data-subtitle="INVESTMENT CASTING">精密鋳造</a>
                <div class="sub">
                  <div class="container flex">
                    <p class="sub__title c-main font-robot sp__none">INVESTMENT CASTING</p>
                    <ul class="js-accordionContent">
                      <li><a href="#">WAX</a></li>
                      <li><a href="#">離散型・洗浄剤</a></li>
                      <li><a href="#">バインダー</a></li>
                      <li><a href="#">砂</a></li>
                      <li><a href="#">その他</a></li>
                    </ul>
                  </div>
                </div>
              </li>
              <li>
                <a href="<?= home_url(); ?>/jewelry" class="js-accordion" data-subtitle="JEWELRY">ジュエリー</a>
                <div class="sub">
                  <div class="container flex">
                    <p class="sub__title c-main font-robot sp__none">JEWELRY</p>
                    <ul class="js-accordionContent">
                      <li><a href="#">インジェクションWAX</a></li>
                      <li><a href="#">切削WAX</a></li>
                      <li><a href="#">埋没材</a></li>
                      <li><a href="#">シリコン</a></li>
                      <li><a href="#">ツールマット</a></li>
                    </ul>
                  </div>
                </div>
              </li>
              <li>
                <a href="<?= home_url(); ?>/new-field" class="js-accordion" data-subtitle="NEW FIELD">新たな取り組み</a>
                <div class="sub">
                  <div class="container flex">
                    <p class="sub__title c-main font-robot sp__none">NEW FIELD</p>
                    <ul class="js-accordionContent">
                      <li><a href="#">消臭剤</a></li>
                      <li><a href="#">ミネラルキャスティング</a></li>
                      <li><a href="#">CO2洗浄システム</a></li>
                      <li><a href="#">ホットメルト</a></li>
                      <li><a href="#">暑さ対策</a></li>
                      <li><a href="#">電動アシスト台車</a></li>
                      <li class="grow"><a href="#">ベアリングセンサーシステム</a></li>
                    </ul>
                  </div>
                </div>
              </li>
              <li>
                <a href="<?= home_url(); ?>/company">会社概要</a>
              </li>
            </ul>
          </div>
          <div class="header__button">
            <a href="#" class="font-robot white">
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