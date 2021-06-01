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
            <div class="sitemap__block--title">試作・型材料</div>
            <div class="sitemap__block--titleSub c-main font-robot">MOLD</div>
          </div>
          <ul class="sitemap__block--menu col js-accordionContent">
            <li><a href="<?= home_url(); ?>/mold/discharge"
                class="c-white c-trans-red"><?php _e('デザイン吐出', 'footer'); ?></a></li>
            <li><a href="<?= home_url(); ?>/mold/cutting"
                class="c-white c-trans-red"><?php _e('デザイン切削', 'footer'); ?></a></li>
            <li><a href="<?= home_url(); ?>/mold/casting"
                class="c-white c-trans-red"><?php _e('試作注型樹脂', 'footer'); ?></a></li>
            <li><a href="<?= home_url(); ?>/mold/mold_material"
                class="c-white c-trans-red"><?php _e('試作型材', 'footer'); ?></a></li>
            <li><a href="<?= home_url(); ?>/mold/silicone"
                class="c-white c-trans-red"><?php _e('試作シリコン', 'footer'); ?></a></li>
            <li><a href="<?= home_url(); ?>/mold/invar" class="c-white c-trans-red"><?php _e('量産インバー', 'footer'); ?></a>
            </li>
            <li><a href="<?= home_url(); ?>/mold/" class="c-white c-trans-red"><?php _e('量産砂型鋳造', 'footer'); ?></a></li>
            <li><a href="<?= home_url(); ?>/mold/" class="c-white c-trans-red"><?php _e('量産精密鋳造', 'footer'); ?></a></li>
            <li><a href="<?= home_url(); ?>/mold/" class="c-white c-trans-red"><?php _e('量産ジュエリー', 'footer'); ?></a>
            </li>
            <li><a href="<?= home_url(); ?>/mold/" class="c-white c-trans-red"><?php _e('特殊', 'footer'); ?></a></li>
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
            <li><a href="<?= home_url(); ?>/investment_casting/wax"
                class="c-white c-trans-red"><?php _e('WAX', 'footer'); ?></a></li>
            <li><a href="<?= home_url(); ?>/investment_casting/parting_powder"
                class="c-white c-trans-red">離<?php _e('散型・洗浄剤', 'footer'); ?></a>
            </li>
            <li><a href="<?= home_url(); ?>/investment_casting/binder"
                class="c-white c-trans-red"><?php _e('バインダー', 'footer'); ?></a>
            </li>
            <li><a href="<?= home_url(); ?>/investment_casting/refractory_material"
                class="c-white c-trans-red"><?php _e('砂', 'footer'); ?></a>
            </li>
            <li><a href="<?= home_url(); ?>/investment_casting/others"
                class="c-white c-trans-red"><?php _e('その他', 'footer'); ?></a></li>
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
            <li><a href="<?= home_url(); ?>" class="c-white c-trans-red"><?php _e('鋳造用フィルター', 'footer'); ?>鋳造用フィルター</a>
            </li>
            <li><a href="<?= home_url(); ?>" class="c-white c-trans-red"><?php _e('スリープ', 'footer'); ?>スリープ</a></li>
            <li><a href="<?= home_url(); ?>" class="c-white c-trans-red"><?php _e('方案用ゲート', 'footer'); ?>方案用ゲート</a></li>
            <li><a href="<?= home_url(); ?>" class="c-white c-trans-red"><?php _e('非鉄用塗型', 'footer'); ?>非鉄用塗型</a></li>
            <li><a href="<?= home_url(); ?>" class="c-white c-trans-red"><?php _e('各種対火物', 'footer'); ?>各種対火物</a></li>
            <li><a href="<?= home_url(); ?>" class="c-white c-trans-red"><?php _e('アルミ原材料', 'footer'); ?>アルミ原材料</a></li>
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
            <li><a href="<?= home_url(); ?>/jewelry/injection_wax"
                class="c-white c-trans-red"><?php _e('インジェクションWAX', 'footer'); ?></a>
            </li>
            <li><a href="<?= home_url(); ?>/jewelry/carving_wax"
                class="c-white c-trans-red"><?php _e('切削WAX', 'footer'); ?></a></li>
            <li><a href="<?= home_url(); ?>/jewelry/investing_material"
                class="c-white c-trans-red"><?php _e('埋没材', 'footer'); ?></a></li>
            <li><a href="<?= home_url(); ?>/jewelry/" class="c-white c-trans-red"><?php _e('シリコン', 'footer'); ?></a>
            </li>
            <li><a href="<?= home_url(); ?>/jewelry/matt_tool"
                class="c-white c-trans-red"><?php _e('ツールマット', 'footer'); ?></a></li>
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
            <li><a href="#" class="c-white c-trans-red"><?php _e('消臭剤', 'footer'); ?></a></li>
            <li><a href="#" class="c-white c-trans-red"><?php _e('ミネラルキャスティング', 'footer'); ?></a></li>
            <li><a href="#" class="c-white c-trans-red"><?php _e('CO2洗浄システム', 'footer'); ?></a></li>
            <li><a href="#" class="c-white c-trans-red"><?php _e('ホットメルト', 'footer'); ?></a></li>
            <li><a href="#" class="c-white c-trans-red"><?php _e('暑さ対策', 'footer'); ?></a></li>
            <li><a href="#" class="c-white c-trans-red"><?php _e('電動アシスト台車', 'footer'); ?></a></li>
            <li><a href="#" class="c-white c-trans-red"><?php _e('ベアリングセンサーシステム', 'footer'); ?></a></li>
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
        <li><a href="<?= home_url(); ?>/company" class="c-white c-trans-red"><?php _e('会社情報', 'footer'); ?></a></li>
        <li><a href="<?= home_url(); ?>/news" class="c-white c-trans-red"><?php _e('お知らせ', 'footer'); ?></a></li>
        <li><a href="#" class="c-white c-trans-red"><?php _e('個人情報保護方針', 'footer'); ?></a></li>
        <li><a href="#" class="c-white c-trans-red"><?php _e('お問い合わせ', 'footer'); ?></a></li>
      </ul>
      <p class="copyright font-robot">©2021 FREEMAAN JAPAN </p>
      <div class="affiliates">
        <h4><?php _e('関連会社', 'footer'); ?></h4>
        <ul class="companies">
          <li><?php _e('三洋貿易株式会社', 'footer'); ?></li>
          <li><?php _e('三洋貿易ホットメルトシステム', 'footer'); ?></li>
          <li><?php _e('三洋物産貿易（上海）有限公司', 'footer'); ?></li>
          <li><?php _e('Sanyo Trading Asia ©., Ltd.', 'footer'); ?></li>
          <li><?php _e('新東洋機械工業株式会社', 'footer'); ?></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- //information -->
  <a href="#main" class="gototop js-gototop font-robot bold sp__none">PAGE TOP</a>
</footer>
<!-- // footer -->
<script src="<?= get_template_directory_uri(); ?>/library/js/smoothscroll.js" defer></script>
<script src="<?= get_template_directory_uri(); ?>/js/main.js" defer></script>
<?php wp_reset_query(); ?>
<?php if (is_home() || is_front_page()): ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.8/swiper-bundle.min.js" defer></script>
<script src="<?= get_template_directory_uri(); ?>/library/js/intersection-observer.js" defer></script>
<script src="<?= get_template_directory_uri(); ?>/js/index.js" defer></script>
<?php elseif (is_category()): ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.8/swiper-bundle.min.js" defer></script>
<script src="<?= get_template_directory_uri(); ?>/js/category.js" defer></script>
<?php elseif (is_archive()): ?>
<?php elseif (is_single()||is_page()): ?>
<?php elseif (is_search()): ?>
<script src="<?= get_template_directory_uri(); ?>/js/search.js" defer></script>
<?php elseif (is_404()): ?>
<?php endif; ?>
</body>

</html>