<!-- footer -->
<?php wp_footer(); //必須 ?>
<footer class="footer">
  <!-- cta -->
  <a href="#" class="cta dev">
    <div class="container">
      <div class="cta__title c-white font-robot dev">CONTACT</div>
      <div class="cta__titleSub c-white">お問い合わせ</div>
      <img src="<?= get_template_directory_uri(); ?>/images/top/icon/arrowRight.svg" class="cta__icon" width="15"
        alt="" />
    </div>
  </a>
  <!-- //cta -->
  <!-- overseas -->
  <div class="overseas dev">
    <div class="container">
      <div class="overseas__left">
        <div class="overseas__title font-robot dev">OVERSEAS SUPPLIER</div>
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
        <!-- // sitemap__block -->
        <!-- sitemap__block -->
        <div class="sitemap__block shrink">
          <div class="js-accordion">
            <div class="sitemap__block--title">精密鋳造</div>
            <div class="sitemap__block--titleSub c-main font-robot">INVESTMENT CASTING</div>
          </div>
          <ul class="sitemap__block--menu js-accordionContent">
            <li><a href="#">WAX</a></li>
            <li><a href="#">理散財・洗浄剤</a></li>
            <li><a href="#">バインダー</a></li>
            <li><a href="#">砂</a></li>
            <li><a href="#">その他</a></li>
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
            <li><a href="#">鋳造用フィルター</a></li>
            <li><a href="#">スリープ</a></li>
            <li><a href="#">方案用ゲート</a></li>
            <li><a href="#">非鉄用塗型</a></li>
            <li><a href="#">各種対火物</a></li>
            <li><a href="#">アルミ原材料</a></li>
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
            <li><a href="#">インジェクションWAX</a></li>
            <li><a href="#">切削WAX</a></li>
            <li><a href="#">埋没材</a></li>
            <li><a href="#">シリコン</a></li>
            <li><a href="#">ツールマット</a></li>
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
            <li><a href="#">消臭剤</a></li>
            <li><a href="#">ミネラルキャスティング</a></li>
            <li><a href="#">CO2洗浄システム</a></li>
            <li><a href="#">ホットメルト</a></li>
            <li><a href="#">暑さ対策</a></li>
            <li><a href="#">電動アシスト台車</a></li>
            <li><a href="#">ベアリングセンサーシステム</a></li>
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
        <li><a href="#">会社情報</a></li>
        <li><a href="#">お知らせ</a></li>
        <li><a href="#">個人情報保護方針</a></li>
        <li><a href="#">お問い合わせ</a></li>
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
  <a href="#" class="gototop font-robot">PAGE TOP</a>
</footer>
<!-- // footer -->
</div>
<script src="<?= get_template_directory_uri(); ?>/js/main.js" defer></script>
<?php wp_reset_query(); ?>
<?php if (is_home() || is_front_page()): ?>
<script src="<?= get_template_directory_uri(); ?>/js/index.js" defer></script>
<?php elseif (is_archive()): ?>
<?php elseif (is_single()||is_page()): ?>
<?php elseif (is_search()): ?>
<script src="<?= get_template_directory_uri(); ?>/js/search.js" defer></script>
<?php elseif (is_404()): ?>
<?php endif; ?>
</body>

</html>