<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <?php wp_head(); //必須 ?>
</head>

<body <?php body_class(); ?>>
  <div id="container">
    <!-- header -->
    <header class="header">
      <div class="header__inner">
        <div class="header__logo dev">
          <?php $titleTag = (is_home() || is_front_page()) ? "h1" : "div"; ?>
          <<?= $titleTag; ?> class="logo">
            <a href="<?= home_url(); ?>" class="dev">Logo</a>
          </<?= $titleTag; ?>>
        </div>
        <nav class="header__menu dev">
          <div>
            <div class="header__lang dev">
              <span>JP EN CH</span>
              <input type="text" class="search" />
            </div>
            <ul class="header__list dev">
              <li>型製品</li>
              <li>砂型鋳造</li>
              <li>精密鋳造</li>
              <li>ジュエリー</li>
              <li>新たな取り組み</li>
              <li>会社概要</li>
            </ul>
          </div>
          <div class="header__button dev">
            <a href="#">CONTACT</a>
          </div>
        </nav>
      </div>
    </header>
    <!-- // header -->
    <!-- main -->
    <main class="main">
      <!-- メインビジュアル -->
      <section class="hero">
        <h2 class="hero__heading">
          <span>To Be POSSIBLE</span>
          <span>モノづくりに無限の可能性を</span>
        </h2>
        <picture class="hero__key">
          <source srcset="<?= get_template_directory_uri(); ?>/images/top/slide/01.webp" media="(min-width:769px)" />
          <source srcset="<?= get_template_directory_uri(); ?>/images/top/slide/01.png" media="(min-width:769px)" />
          <source srcset="<?= get_template_directory_uri(); ?>/images/top/slide/02.webp" media="(min-width:769px)" />
          <source srcset="<?= get_template_directory_uri(); ?>/images/top/slide/02.png" media="(min-width:769px)" />
          <source srcset="<?= get_template_directory_uri(); ?>/images/top/slide/03.webp" media="(min-width:769px)" />
          <source srcset="<?= get_template_directory_uri(); ?>/images/top/slide/03.png" media="(min-width:769px)" />
          <source srcset="<?= get_template_directory_uri(); ?>/images/top/slide/04.webp" media="(min-width:769px)" />
          <source srcset="<?= get_template_directory_uri(); ?>/images/top/slide/04.png" media="(min-width:769px)" />
          <img src="<?= get_template_directory_uri(); ?>/images/top/slide/01.png" alt="">
        </picture>
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
        <div class="lead__box">
          <h2 class="lead__heading center dev"><span class="c-main">手</span>のひらから<span class="c-main">宇</span>宙まで</h2>
          <p class="lead__text center dev">国内トップクラスの品揃えと提案力で、<br class="pc__none" />企業のあらゆる創造をサポートします。</p>
          <!-- lead__achivment -->
          <div class="lead__achievement dev">
            <!-- block -->
            <div class="block">
              <div class="block__left dev">創立</div>
              <div class="block__right dev">
                <span class="c-main big dev">1973</span>
                <span class="small dev">年</span>
              </div>
            </div>
            <!-- // block -->
            <!-- block -->
            <div class="block">
              <div class="block__left dev"><span>取引先</span><br /><span>企業国内外</span></div>
              <div class="block__right dev">
                <span class="c-main big dev">400</span>
                <span class="small dev">社</span>
              </div>
            </div>
            <!-- // block -->
            <!-- block -->
            <div class="block">
              <div class="block__left dev">海外取引</div>
              <div class="block__right dev">
                <span class="c-main big dev">16</span>
                <span class="small dev">カ国</span>
              </div>
            </div>
            <!-- // block -->
          </div>
          <!-- // lead__achivment -->
          <a href="#" class="lead__button c-main-bg">社長ご挨拶・企業理念</a>
        </div>
      </section>
      <!-- // 手のひらから宇宙まで -->
      <!-- リンクリスト -->
      <nav class="menu"></nav>
      <!-- // リンクリスト -->
      <!-- 型製品 -->
      <section class="mold"></section>
      <!-- // 型製品 -->
      <!-- 砂型鋳造用資材・原材料 -->
      <section class="sand-casting"></section>
      <!-- // 砂型鋳造用資材・原材料 -->
      <!-- 精密鋳造用材料 -->
      <section class="investment-casting"></section>
      <!-- // 精密鋳造用材料 -->
      <!-- ジュエリーキャスト用副資材 -->
      <section class="jewelry"></section>
      <!-- // ジュエリーキャスト用副資材 -->
      <!-- 新たな取り組み -->
      <section class="new-field"></section>
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