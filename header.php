<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <?php if(is_home() || is_front_page()):  ?>
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style/index.css" />
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital@1&family=Roboto+Condensed&display=swap"
    rel="stylesheet">
  <?php else: ?>
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style/article.css" />
  <?php endif; ?>
  <?php wp_head(); //必須 ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="index">
    <!-- header -->
    <header class="header">
      <div class="header__inner">
        <div class="header__logo dev">
          <?php $titleTag = (is_home() || is_front_page()) ? "h1" : "div"; ?>
          <<?= $titleTag; ?> class="logo">
            <a href="<?= home_url(); ?>" class="dev">
              <img src="<?= get_template_directory_uri(); ?>/images/logo.svg" alt="株式会社フリーマン ロゴ">
            </a>
          </<?= $titleTag; ?>>
        </div>
        <nav class="header__menu dev">
          <div class="header__content js-menuContent">
            <div class="header__lang dev">
              <span class="select">JP EN CH</span>
              <input type="text" class="search" />
            </div>
            <ul class="header__list dev">
              <li>
                <a href="#">型製品</a>
                <div class="sub">
                  <div class="container flex">
                    <p class="sub__title c-main font-robot">MOLD</p>
                    <ul data-count="10">
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
                <a href="#">砂型鋳造</a>
                <div class="sub">
                  <div class="container flex">
                    <p class="sub__title c-main font-robot">SAND CASTING</p>
                    <ul>
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
                <a href="#">精密鋳造</a>
                <div class="sub">
                  <div class="container flex">

                    <p class="sub__title c-main font-robot">INVESTMENT CASTING</p>
                    <ul>
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
                <a href="#">ジュエリー</a>
                <div class="sub">
                  <div class="container flex">
                    <p class="sub__title c-main font-robot">JEWELRY</p>
                    <ul>
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
                <a href="#">新たな取り組み</a>
                <div class="sub">
                  <div class="container flex">
                    <p class="sub__title c-main font-robot">NEW FIELD</p>
                    <ul>
                      <li><a href="#">消臭剤</a></li>
                      <li><a href="#">ミネラルキャスティング</a></li>
                      <li><a href="#">CO2洗浄システム</a></li>
                      <li><a href="#">ホットメルト</a></li>
                      <li><a href="#">暑さ対策</a></li>
                      <li><a href="#">電動アシスト台車</a></li>
                      <li><a href="#">ベアリングセンサーシステム</a></li>
                    </ul>
                  </div>
                </div>
              </li>
              <li>
                <a href="#">会社概要</a>
              </li>
            </ul>
          </div>
          <div class="header__button dev">
            <a href="#" class="font-robot white">
              <div>
                <div class="center">CONTACT</div>
                <img src="<?= get_template_directory_uri(); ?>/images/top/icon/mail.svg" />
              </div>
            </a>
          </div>
          <div class="header__buttonMenu pc__none dev">
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