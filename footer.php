<!-- footer -->
<?php wp_footer(); //必須 ?>
<footer class="footer">
  <!-- cta -->
  <a href="#" class="cta arrow-wrap">
    <div class="container">
      <div class="cta__title c-white font-robot">CONTACT</div>
      <div class="cta__titleSub c-white">お問い合わせ</div>
      <?php get_template_part('/parts/icon/arrow'); ?>
    </div>
  </a>
  <!-- //cta -->
  <!-- overseas -->
  <div class="overseas">
    <div class="container">
      <div class="overseas__left">
        <div class="overseas__title font-robot">OVERSEAS SUPPLIER</div>
        <div class="overseas__titleSub">海外主要取引先</div>
      </div>
      <div class="overseas__right">
        <img src="<?= get_template_directory_uri(); ?>/images/footer/freeman.png" alt="海外主要取引先 FREEMAN ロゴ"
          <?php fm_lazyload(); ?> />
        <img src="<?= get_template_directory_uri(); ?>/images/footer/ransom_randolph.png"
          alt="海外主要取引先 RANSOM&RANDOLPH ロゴ" <?php fm_lazyload(); ?> />
        <img src="<?= get_template_directory_uri(); ?>/images/footer/lanik.png" alt="海外主要取引先 LANIK ロゴ"
          <?php fm_lazyload(); ?> />
        <img src="<?= get_template_directory_uri(); ?>/images/footer/remet.png" alt="海外主要取引先 Remet ロゴ"
          <?php fm_lazyload(); ?> />
      </div>
    </div>
  </div>
  <!-- //overseas -->
  <!-- sitemap -->
  <div class="sitemap">
    <div class="container">
      <img src="<?= get_template_directory_uri(); ?>/images/logo-white.svg" class="sitemap__logo"
        alt="株式会社FREEMAN ロゴ" />
      <div class="sitemap__menu">
        <!-- sitemap__block -->
        <div class="sitemap__block grow-1">
          <div class="js-accordion">
            <div class="sitemap__block--title">型製品</div>
            <div class="sitemap__block--titleSub c-main font-robot">MOLD</div>
          </div>
          <ul class="sitemap__block--menu col js-accordionContent">
            <li><a href="#" class="c-white c-trans-red">デザイン吐出</a></li>
            <li><a href="#" class="c-white c-trans-red">デザイン切削</a></li>
            <li><a href="#" class="c-white c-trans-red">試作注型樹脂</a></li>
            <li><a href="#" class="c-white c-trans-red">試作型材</a></li>
            <li><a href="#" class="c-white c-trans-red">試作シリコン</a></li>
            <li><a href="#" class="c-white c-trans-red">量産インバー</a></li>
            <li><a href="#" class="c-white c-trans-red">量産砂型鋳造</a></li>
            <li><a href="#" class="c-white c-trans-red">量産精密鋳造</a></li>
            <li><a href="#" class="c-white c-trans-red">量産ジュエリー</a></li>
            <li><a href="#" class="c-white c-trans-red">特殊</a></li>
          </ul>
        </div>
        <!-- // sitemap__block -->
        <!-- sitemap__block -->
        <div class="sitemap__block shrink">
          <div class="js-accordion">
            <div class="sitemap__block--title">精密鋳造</div>
            <div class="sitemap__block--titleSub c-main font-robot">INVESTMENT CASTING</div>
          </div>
          <ul class="sitemap__block--menu js-accordionContent">
            <li><a href="#" class="c-white c-trans-red">WAX</a></li>
            <li><a href="#" class="c-white c-trans-red">理散財・洗浄剤</a></li>
            <li><a href="#" class="c-white c-trans-red">バインダー</a></li>
            <li><a href="#" class="c-white c-trans-red">砂</a></li>
            <li><a href="#" class="c-white c-trans-red">その他</a></li>
          </ul>
        </div>
        <!-- // sitemap__block -->
        <!-- sitemap__block -->
        <div class="sitemap__block shrink">
          <div class="js-accordion">
            <div class="sitemap__block--title">砂型鋳造</div>
            <div class="sitemap__block--titleSub c-main font-robot">SAND CASTING</div>
          </div>
          <ul class="sitemap__block--menu js-accordionContent">
            <li><a href="#" class="c-white c-trans-red">鋳造用フィルター</a></li>
            <li><a href="#" class="c-white c-trans-red">スリープ</a></li>
            <li><a href="#" class="c-white c-trans-red">方案用ゲート</a></li>
            <li><a href="#" class="c-white c-trans-red">非鉄用塗型</a></li>
            <li><a href="#" class="c-white c-trans-red">各種対火物</a></li>
            <li><a href="#" class="c-white c-trans-red">アルミ原材料</a></li>
          </ul>
        </div>
        <!-- // sitemap__block -->
        <!-- sitemap__block -->
        <div class="sitemap__block shrink">
          <div class="js-accordion">
            <div class="sitemap__block--title">ジュエリー</div>
            <div class="sitemap__block--titleSub c-main font-robot">JUWELRY</div>
          </div>
          <ul class="sitemap__block--menu js-accordionContent">
            <li><a href="#" class="c-white c-trans-red">インジェクションWAX</a></li>
            <li><a href="#" class="c-white c-trans-red">切削WAX</a></li>
            <li><a href="#" class="c-white c-trans-red">埋没材</a></li>
            <li><a href="#" class="c-white c-trans-red">シリコン</a></li>
            <li><a href="#" class="c-white c-trans-red">ツールマット</a></li>
          </ul>
        </div>
        <!-- // sitemap__block -->
        <!-- sitemap__block -->
        <div class="sitemap__block grow-2">
          <div class="js-accordion">
            <div class="sitemap__block--title">新たな取り組み</div>
            <div class="sitemap__block--titleSub c-main font-robot">MOLD</div>
          </div>
          <ul class="sitemap__block--menu col js-accordionContent">
            <li><a href="#" class="c-white c-trans-red">消臭剤</a></li>
            <li><a href="#" class="c-white c-trans-red">ミネラルキャスティング</a></li>
            <li><a href="#" class="c-white c-trans-red">CO2洗浄システム</a></li>
            <li><a href="#" class="c-white c-trans-red">ホットメルト</a></li>
            <li><a href="#" class="c-white c-trans-red">暑さ対策</a></li>
            <li><a href="#" class="c-white c-trans-red">電動アシスト台車</a></li>
            <li><a href="#" class="c-white c-trans-red">ベアリングセンサーシステム</a></li>
          </ul>
        </div>
        <!-- // sitemap__block -->
      </div>
    </div>
  </div>
  <!-- //sitemap -->
  <!-- information -->
  <div class="information">
    <div class="container">
      <ul class="links">
        <li><a href="#" class="c-white c-trans-red">会社情報</a></li>
        <li><a href="#" class="c-white c-trans-red">お知らせ</a></li>
        <li><a href="#" class="c-white c-trans-red">個人情報保護方針</a></li>
        <li><a href="#" class="c-white c-trans-red">お問い合わせ</a></li>
      </ul>
      <p class="copyright font-robot">©2021 FREEMAAN JAPAN </p>
      <div class="affiliates">
        <h4>関連会社</h4>
        <ul class="companies">
          <li>三洋貿易株式会社</li>
          <li>三洋貿易ホットメルトシステム</li>
          <li>三洋物産貿易（上海）有限公司</li>
          <li>Sanyo Trading Asia ©., Ltd.</li>
          <li>新東洋機械工業株式会社</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- //information -->
  <a href="#main" class="gototop js-gototop font-robot bold sp__none">PAGE TOP</a>
</footer>
<!-- // footer -->
</div>
<script src="<?= get_template_directory_uri(); ?>/library/js/smoothscroll.js" defer></script>
<script src="<?= get_template_directory_uri(); ?>/js/main.js" defer></script>
<?php wp_reset_query(); ?>
<?php if (is_home() || is_front_page()): ?>
<script src="<?= get_template_directory_uri(); ?>/library/js/intersection-observer.js" defer></script>
<script src="<?= get_template_directory_uri(); ?>/js/index.js" defer></script>
<?php elseif (is_archive()): ?>
<?php elseif (is_single()||is_page()): ?>
<?php elseif (is_search()): ?>
<script src="<?= get_template_directory_uri(); ?>/js/search.js" defer></script>
<?php elseif (is_404()): ?>
<?php endif; ?>
</body>

</html>