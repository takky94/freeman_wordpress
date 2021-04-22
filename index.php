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
        <picture class="hero__key">
          <source srcset="<?= get_template_directory_uri(); ?>/images/top/top-slider01.webp" media="(min-width:769px)" />
          <source srcset="<?= get_template_directory_uri(); ?>/images/top/top-slider01.png" media="(min-width:769px)" />
          <source srcset="<?= get_template_directory_uri(); ?>/images/top/top-slider02.webp" media="(min-width:769px)" />
          <source srcset="<?= get_template_directory_uri(); ?>/images/top/top-slider02.png" media="(min-width:769px)" />
          <source srcset="<?= get_template_directory_uri(); ?>/images/top/top-slider03.webp" media="(min-width:769px)" />
          <source srcset="<?= get_template_directory_uri(); ?>/images/top/top-slider03.png" media="(min-width:769px)" />
          <source srcset="<?= get_template_directory_uri(); ?>/images/top/top-slider04.webp" media="(min-width:769px)" />
          <source srcset="<?= get_template_directory_uri(); ?>/images/top/top-slider04.png" media="(min-width:769px)" />
          <img src="<?= get_template_directory_uri(); ?>/images/top/top-slider01.png" alt="">
        </picture>
        <div class="news">
        </div>
      </section>
      <!-- // メインビジュアル -->
      <!-- 導入企業様 -->
      <section class="case">
      </section>
      <!-- // 導入企業様 -->
      <!-- // 手のひらから宇宙まで -->
      <section class="lead"></section>
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