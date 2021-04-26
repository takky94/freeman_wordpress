<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <?php if(is_home() || is_front_page()): ?>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital@1&family=Roboto+Condensed&display=swap"
    rel="stylesheet">
  <?php endif; ?>
  <?php wp_head(); //必須 ?>
</head>

<body <?php body_class(); ?>>
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
          <div>
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
            <a href="#">CONTACT<br /><img src="<?= get_template_directory_uri(); ?>/images/top/icon/mail.svg" /></a>
          </div>
        </nav>
      </div>
    </header>
    <!-- // header -->
    <!-- main -->
    <main class="main">
      <!-- メインビジュアル -->
      <section class="hero">
        <h2 class="hero__heading font-eb">
          <span>To Be </span><span class="c-main">P</span><span>OSSIBLE</span>
          <br />
          <span class="small">モノづくりに無限の可能性を</span>
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
        <div class="news">
        </div>
      </section>
      <!-- // メインビジュアル -->
      <!-- 導入企業様 -->
      <section class="case">
        <div class="case__list dev">
        </div>
      </section>
      <!-- // 導入企業様 -->
      <!-- // 手のひらから宇宙まで -->
      <section class="lead">
        <div class="center">
          <h2 class="lead__heading center dev"><span class="c-main">手</span>のひらから<span class="c-main">宇</span>宙まで</h2>
          <p class="lead__text center dev">国内トップクラスの品揃えと提案力で、<br class="pc__none" />企業のあらゆる創造をサポートします。</p>
          <!-- lead__achivment -->
          <div class="lead__achievement dev">
            <!-- block -->
            <div class="block">
              <div class="block__left dev">
                <div class="center">
                  <img src="<?= get_template_directory_uri(); ?>/images/top/icon/company.svg" width="25" />
                </div>
                <div class="mt-5 bold">創立</div>
              </div>
              <div class="block__right dev">
                <span class="c-main big dev">1973</span>
                <span class="small bold dev">年</span>
              </div>
            </div>
            <!-- // block -->
            <!-- block -->
            <div class="block">
              <div class="block__left dev">
                <span class="bold">取引先</span>
                <img src="<?= get_template_directory_uri(); ?>/images/top/icon/pin.svg" width="20" />
                <br />
                <div class="mt-5 bold">企業国内外</div>
              </div>
              <div class="block__right dev">
                <span class="c-main big dev">400</span>
                <span class="small bold dev">社</span>
              </div>
            </div>
            <!-- // block -->
            <!-- block -->
            <div class="block">
              <div class="block__left dev">
                <div class="center">
                  <img src="<?= get_template_directory_uri(); ?>/images/top/icon/earth.svg" width="25" />
                </div>
                <div class="mt-5 bold">海外取引</div>
              </div>
              <div class="block__right dev">
                <span class="c-main big dev">16</span>
                <span class="small bold dev">カ国</span>
              </div>
            </div>
            <!-- // block -->
          </div>
          <!-- // lead__achivment -->
          <a href="#" class="button">社長ご挨拶・企業理念</a>
        </div>
        <!-- // center -->
      </section>
      <!-- // 手のひらから宇宙まで -->
      <!-- リンクリスト -->
      <nav class="menu">
        <div class="container relative dev">
          <ul>
            <li class="diamond dev">
              <a href="#">
                <div class="diamond__inner">
                  <p>テキスト</p>
                </div>
              </a>
            </li>
            <li class="diamond dev">
              <a href="#">
                <div class="diamond__inner">
                  <p>テキスト</p>
                </div>
              </a>
            </li>
            <li class="diamond dev">
              <a href="#">
                <div class="diamond__inner">
                  <p>テキスト</p>
                </div>
              </a>
            </li>
            <li class="diamond dev">
              <a href="#">
                <div class="diamond__inner">
                  <p>テキスト</p>
                </div>
              </a>
            </li>
            <li class="diamond dev">
              <a href="#">
                <div class="diamond__inner">
                  <p>テキスト</p>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- // リンクリスト -->
      <!-- 型製品 -->
      <section class="mold" id="mold">
        <div class="container">
          <!-- detail -->
          <div class="detail flex">
            <div class="detail__text">
              <h2 class="detail__text--headingEn font-gothic dev">M<span class="decoration c-main-bg">O</span>LD</h2>
              <p class="detail__text--headingJp bold dev">型製品</p>
              <p class="detail__text--headingSub dev">無限に広がる表現力</p>
              <p
                class="detail__text--description dev">デザインから試作開発、量産にいたる全ての領域で、モノづくりに必要な技術や製品を提案し、イメージの具体化や納期改善、コストダウンに貢献します。</p>
            </div>
            <div class="detail__image">
              <picture>
                <img src="<?= get_template_directory_uri(); ?>/images/top/mold.png" alt="" />
              </picture>
            </div>
          </div>
          <!-- // detail -->
        </div>
      </section>
      <!-- // 型製品 -->
      <!-- 砂型鋳造用資材・原材料 -->
      <section class="sand-casting" id="sand-casting">
        <div class="container">
          <!-- detail -->
          <div class="detail detail-reverse flex">
            <div class="detail__text">
              <h2
                class="detail__text--headingEn font-gothic dev">S<span class="decoration c-main-bg">A</span>ND CASTING</h2>
              <p class="detail__text--headingJp bold dev">砂型鋳造用資材・原材料</p>
              <p class="detail__text--headingSub dev">ヨーロッパクオリティで<br />高品質な鋳物作りを</p>
              <p
                class="detail__text--description dev">本場ヨーロッパの鋳物づくりを支えるLANIKセラミックフォームフィルターを筆頭に、海外から独自ルートで仕入れる最良の鋳造用資材を多岐にわたってお取り扱いしております。</p>
            </div>
            <div class="detail__image">
              <picture>
                <img src="<?= get_template_directory_uri(); ?>/images/top/sand-casting.png" alt="" />
              </picture>
            </div>
          </div>
          <!-- // detail -->
        </div>
      </section>
      <!-- // 砂型鋳造用資材・原材料 -->
      <!-- 精密鋳造用材料 -->
      <section class="investment-casting" id="investment-casting">
        <div class="container">
          <!-- detail -->
          <div class="detail flex">
            <div class="detail__text">
              <h2
                class="detail__text--headingEn font-gothic dev">INVE<span class="decoration c-main-bg">S</span>TMENT CASTING</h2>
              <p class="detail__text--headingJp bold dev">精密鋳造用材料</p>
              <p class="detail__text--headingSub dev">高付加価値な製品<br />ラインナップと技術サービス</p>
              <p
                class="detail__text--description dev">国内外より厳選した、精密鋳造プロセスに欠かせない各種材料を取り揃え、最適なソリューションを提供。航空機・自動車・産業用ガスタービン・一般産業機械などの基幹産業を支えています。</p>
            </div>
            <div class="detail__image">
              <picture>
                <img src="<?= get_template_directory_uri(); ?>/images/top/investment-casting.png" alt="" />
              </picture>
            </div>
          </div>
          <!-- // detail -->
        </div>
      </section>
      <!-- // 精密鋳造用材料 -->
      <!-- ジュエリーキャスト用副資材 -->
      <section class="jewelry" id="jewelry">
        <div class="container">
          <!-- detail -->
          <div class="detail detail-reverse flex">
            <div class="detail__text">
              <h2 class="detail__text--headingEn font-gothic dev">JE<span class="decoration c-main-bg">W</span>ELRY</h2>
              <p class="detail__text--headingJp bold dev">ジュエリーキャスト用副資材</p>
              <p class="detail__text--headingSub dev">業界のスタンダードとして</p>
              <p
                class="detail__text--description dev">ジュエリー業界で最も著名かつ実績のある、FreemanワックスおよびR&R埋没材の豊富なラインナップの中から、ご要望にあわせて提案します。その他関連材、設備もお任せください。</p>
            </div>
            <div class="detail__image">
              <picture>
                <img src="<?= get_template_directory_uri(); ?>/images/top/jewelry.png" alt="" />
              </picture>
            </div>
          </div>
          <!-- // detail -->
        </div>
      </section>
      <!-- // ジュエリーキャスト用副資材 -->
      <!-- 新たな取り組み -->
      <section class="new-field" id="new-field">
        <div class="container">
          <!-- detail -->
          <div class="detail flex">
            <div class="detail__text">
              <h2
                class="detail__text--headingEn font-gothic dev">NE<span class="decoration c-main-bg">W</span> FIELD</h2>
              <p class="detail__text--headingJp bold dev">新たな取り組み</p>
              <p class="detail__text--headingSub dev">SDGsへの貢献</p>
              <p
                class="detail__text--description dev">ただの材料屋ではありません、明日の地球・働く人たちのことを考えたご提案。臭気対策・ミネラルキャスティング・CO2洗浄システムなど、環境を考える方に向けた新しい技術のご紹介です。</p>
            </div>
            <div class="detail__image">
              <picture>
                <img src="<?= get_template_directory_uri(); ?>/images/top/new-field.png" alt="" />
              </picture>
            </div>
          </div>
          <!-- // detail -->
        </div>
      </section>
      <!-- // 新たな取り組み -->
    </main>
    <!-- // main -->
    <!-- footer -->
    <?php wp_footer(); //必須 ?>
    <footer class="footer">
    </footer>
    <!-- // footer -->
  </div>
</body>

</html>