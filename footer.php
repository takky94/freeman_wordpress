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
        <img src="<?= get_template_directory_uri(); ?>/images/footer/freeman.png" alt="海外主要取引先 FREEMAN ロゴ" />
        <img src="<?= get_template_directory_uri(); ?>/images/footer/ransom_randolph.png"
          alt="海外主要取引先 RANSOM&RANDOLPH ロゴ" />
        <img src="<?= get_template_directory_uri(); ?>/images/footer/lanik.png" alt="海外主要取引先 LANIK ロゴ" />
        <img src="<?= get_template_directory_uri(); ?>/images/footer/remet.png" alt="海外主要取引先 Remet ロゴ" />
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
        <p>HOGE</p>
      </div>
    </div>
  </div>
  <!-- //sitemap -->
  <!-- copyright -->
  <div class="copyright">
    <div class="container">

    </div>
  </div>
  <!-- //copyright -->
</footer>
<!-- // footer -->
</div>
<script src="<?= get_template_directory_uri(); ?>/js/main.js"></script>
<?php if (is_home() || is_front_page()):  ?>
<?php elseif (is_archive()): ?>
<?php elseif (is_single()||is_page()): ?>
<?php elseif (is_search()): ?>
<script src="<?= get_template_directory_uri(); ?>/js/search.js"></script>
<?php elseif (is_404()): ?>
<?php endif; ?>
</body>

</html>