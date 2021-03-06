<!-- footer -->
<?php wp_footer(); //必須
?>
<footer class="footer js-scrollSnap">
  <?php if (is_category()) : ?>
    <div class="cta-lead">
      <div class="container">
        <p class="cta-lead__text">
          <?php _e('その他にも国内外の幅広い製品を取り扱っています！<br />もし上記にお探しの製品が無くても、お気軽にお問い合わせ下さい。', 'footer'); ?>
        </p>
      </div>
    </div>
  <?php endif; ?>
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
        <div class="overseas__titleSub">海外主要サプライヤー</div>
      </div>
      <div class="overseas__right">
        <img src="<?= get_template_directory_uri(); ?>/images/footer/freeman.png" alt="海外主要取引先 FREEMAN ロゴ" <?php fm_lazyload(); ?> />
        <img src="<?= get_template_directory_uri(); ?>/images/footer/ransom_randolph.png" alt="海外主要取引先 RANSOM&RANDOLPH ロゴ" <?php fm_lazyload(); ?> />
        <img src="<?= get_template_directory_uri(); ?>/images/footer/lanik.png" alt="海外主要取引先 LANIK ロゴ" <?php fm_lazyload(); ?> />
        <img src="<?= get_template_directory_uri(); ?>/images/footer/remet.png" alt="海外主要取引先 Remet ロゴ" <?php fm_lazyload(); ?> />
      </div>
    </div>
  </div>
  <!-- //overseas -->
  <!-- sitemap -->
  <div class="sitemap">
    <div class="container">
      <img src="<?= get_template_directory_uri(); ?>/images/logo-white.svg" class="sitemap__logo" alt="株式会社FREEMAN ロゴ" />
      <div class="sitemap__menu">
        <!-- sitemap__block -->
        <div class="sitemap__block grow-1">
          <div class="js-accordion">
            <div class="sitemap__block--title">
              <a class="c-white c-trans-red" href="<?= home_url(); ?>/mold">試作・型材料</a>
            </div>
            <div class="sitemap__block--titleSub c-main font-robot">MOLD</div>
          </div>
          <ul class="sitemap__block--menu col js-accordionContent">
            <li class="sp-main-cat"><a href="<?= home_url(); ?>/mold/" class="c-white c-trans-red"><?php _e('試作・型材料', 'header'); ?></a></li>
            <li><a href="<?= home_url(); ?>/mold/close_contour_paste" class="c-white c-trans-red"><?php _e('機械吐出', 'footer'); ?></a></li>
            <li><a href="<?= home_url(); ?>/mold/cutting_process" class="c-white c-trans-red"><?php _e('切削加工', 'footer'); ?></a></li>
            <li><a href="<?= home_url(); ?>/mold/resin_casting" class="c-white c-trans-red"><?php _e('注型', 'footer'); ?></a></li>
            <li><a href="<?= home_url(); ?>/mold/mold_material" class="c-white c-trans-red"><?php _e('試作・型材料', 'footer'); ?></a></li>
            <li><a href="<?= home_url(); ?>/mold/silicone" class="c-white c-trans-red"><?php _e('一般型取り用シリコーン', 'footer'); ?></a></li>
            <li><a href="<?= home_url(); ?>/mold/invar" class="c-white c-trans-red"><?php _e('インバー', 'footer'); ?></a>
            </li>
            <li><a href="<?= home_url(); ?>/sand_casting" class="c-white c-trans-red"><?php _e('量産砂型鋳造', 'footer'); ?></a></li>
            <li><a href="<?= home_url(); ?>/investment_casting" class="c-white c-trans-red"><?php _e('量産精密鋳造', 'footer'); ?></a></li>
            <li><a href="<?= home_url(); ?>/jewelry" class="c-white c-trans-red"><?php _e('ジュエリー型シリコーン', 'footer'); ?></a>
            </li>
            <li><a href="<?= home_url(); ?>/mold/special_effects" class="c-white c-trans-red"><?php _e('特殊効果・造形用シリコーン', 'footer'); ?></a>
            </li>
          </ul>
        </div>
        <!-- // sitemap__block -->
        <!-- sitemap__block -->
        <div class="sitemap__block shrink">
          <div class="js-accordion">
            <div class="sitemap__block--title">
              <a class="c-white c-trans-red" href="<?= home_url(); ?>/investment_casting">精密鋳造</a>
            </div>
            <div class="sitemap__block--titleSub c-main font-robot">INVESTMENT CASTING</div>
          </div>
          <ul class="sitemap__block--menu js-accordionContent">
            <li class="sp-main-cat"><a href="<?= home_url(); ?>/investment_casting/" class="c-white c-trans-red"><?php _e('精密鋳造', 'header'); ?></a></li>
            <li>
              <a href="<?= home_url(); ?>/investment_casting/waxes" class="c-white c-trans-red"><?php _e('ワックス各種', 'footer'); ?></a>
            </li>
            <li>
              <a href="<?= home_url(); ?>/investment_casting/mold_releases_pattern_wash" class="c-white c-trans-red"><?php _e('離型剤・パターン洗浄剤', 'footer'); ?></a>
            </li>
            <li>
              <a href="<?= home_url(); ?>/investment_casting/specialty_binders" class="c-white c-trans-red"><?php _e('高機能バインダー・濃縮液', 'footer'); ?></a>
            </li>
            <li>
              <a href="<?= home_url(); ?>/investment_casting/refractories" class="c-white c-trans-red"><?php _e('耐火材', 'footer'); ?></a>
            </li>
            <li>
              <a href="<?= home_url(); ?>/investment_casting/slurry_additives_core_materials" class="c-white c-trans-red"><?php _e('スラリー添加剤・コア材料', 'footer'); ?></a>
            </li>
            <li>
              <a href="<?= home_url(); ?>/investment_casting/equipment" class="c-white c-trans-red"><?php _e('精密鋳造用設備', 'footer'); ?></a>
            </li>
            <li>
              <a href="<?= home_url(); ?>/investment_casting/master-heat-ingots" class="c-white c-trans-red"><?php _e('原材料各種', 'footer'); ?></a>
            </li>
            <li>
              <a href="<?= home_url(); ?>/investment_casting/crucibles" class="c-white c-trans-red"><?php _e('ルツボ', 'footer'); ?></a>
            </li>
          </ul>
        </div>
        <!-- // sitemap__block -->
        <!-- sitemap__block -->
        <div class="sitemap__block shrink">
          <div class="js-accordion">
            <div class="sitemap__block--title">
              <a class="c-white c-trans-red" href="<?= home_url(); ?>/sand_casting">砂型鋳造</a>
            </div>
            <div class="sitemap__block--titleSub c-main font-robot">SAND CASTING</div>
          </div>
          <ul class="sitemap__block--menu js-accordionContent">
            <li class="sp-main-cat"><a href="<?= home_url(); ?>/sand_casting/" class="c-white c-trans-red"><?php _e('砂型鋳造', 'header'); ?></a></li>
            <li>
              <a href="<?= home_url(); ?>/investment_casting/ceramic-foam-filters" class="c-white c-trans-red"><?php _e('セラミックフォームフィルター', 'footer'); ?></a>
            </li>
            <li>
              <a href="<?= home_url(); ?>/sand_casting/断熱・発熱スリーブ%e3%80%80acefeed-in-acefeed-ex/" class="c-white c-trans-red"><?php _e('押湯スリーブ', 'footer'); ?></a>
            </li>
            <li>
              <a href="<?= home_url(); ?>/sand_casting/陶管・方案用ゲート" class="c-white c-trans-red"><?php _e('湯口方案スリーブ・陶管', 'footer'); ?></a>
            </li>
            <li>
              <a href="<?= home_url(); ?>/sand_casting/ekamold-cast-m（金属用）/" class="c-white c-trans-red"><?php _e('非鉄用塗型・コーティング材', 'footer'); ?></a>
            </li>
            <li>
              <a href="<?= home_url(); ?>/sand_casting/ジルコン塗型-zircon-based-coating" class="c-white c-trans-red"><?php _e('ジルコン塗型', 'footer'); ?></a>
            </li>
            <li>
              <a href="<?= home_url(); ?>/investment_casting/refractories/その他耐火材各種" class="c-white c-trans-red"><?php _e('耐火材・原材料', 'footer'); ?></a>
            </li>
            <li>
              <a href="<?= home_url(); ?>/sand_casting/アルミ原材料インゴット-aluminum-alloys" class="c-white c-trans-red"><?php _e('アルミ原材料', 'footer'); ?></a>
            </li>
            <li>
              <a href="<?= home_url(); ?>/sand_casting/除滓材パーライト、slug-catch" class="c-white c-trans-red"><?php _e('除滓材(パーライト)', 'footer'); ?></a>
            </li>
          </ul>
        </div>
        <!-- // sitemap__block -->
        <!-- sitemap__block -->
        <div class="sitemap__block shrink">
          <div class="js-accordion">
            <div class="sitemap__block--title">
              <a class="c-white c-trans-red" href="<?= home_url(); ?>/jewelry">ジュエリー</a>
            </div>
            <div class="sitemap__block--titleSub c-main font-robot">JUWELRY</div>
          </div>
          <ul class="sitemap__block--menu js-accordionContent">
            <li class="sp-main-cat"><a href="<?= home_url(); ?>/jewelry/" class="c-white c-trans-red"><?php _e('ジュエリー', 'header'); ?></a></li>
            <li><a href="<?= home_url(); ?>/jewelry/injection_wax" class="c-white c-trans-red"><?php _e('インジェクションワックス', 'footer'); ?></a>
            </li>
            <li><a href="<?= home_url(); ?>/jewelry/carving_wax" class="c-white c-trans-red"><?php _e('カービングワックス', 'footer'); ?></a></li>
            <li><a href="<?= home_url(); ?>/jewelry/investments" class="c-white c-trans-red"><?php _e('埋没材', 'footer'); ?></a></li>
            <li><a href="<?= home_url(); ?>/jewelry/matt_tools" class="c-white c-trans-red"><?php _e('ワックス関連工具', 'footer'); ?></a></li>
          </ul>
        </div>
        <!-- // sitemap__block -->
        <!-- sitemap__block -->
        <div class="sitemap__block grow-2">
          <div class="js-accordion">
            <div class="sitemap__block--title">
              <a class="c-white c-trans-red" href="<?= home_url(); ?>/new_field">新たな取り組み</a>
            </div>
            <div class="sitemap__block--titleSub c-main font-robot">NEW FIELD</div>
          </div>
          <ul class="sitemap__block--menu col js-accordionContent">
            <li class="sp-main-cat"><a href="<?= home_url(); ?>/new_field/" class="c-white c-trans-red"><?php _e('新たな取り組み', 'header'); ?></a></li>
            <li>
              <a href="<?= home_url(); ?>/new-filed/工業用消臭剤-エポリオン/" class="c-white c-trans-red"><?php _e('工業用消臭剤', 'footer'); ?></a>
            </li>
            <li>
              <a href="<?= home_url(); ?>/new-filed/ミネラルキャスティング" class="c-white c-trans-red"><?php _e('ミネラルキャスティング', 'footer'); ?></a>
            </li>
            <li>
              <a href="<?= home_url(); ?>/new-filed/co2クリーニング" class="c-white c-trans-red"><?php _e('CO2洗浄システム', 'footer'); ?></a>
            </li>
            <li>
              <a href="<?= home_url(); ?>/new-filed/プロ用ホットメルトシステム" class="c-white c-trans-red"><?php _e('ホットメルト', 'footer'); ?></a>
            </li>
            <li>
              <a href="<?= home_url(); ?>/new-filed/暑さ対策品" class="c-white c-trans-red"><?php _e('暑さ対策品', 'footer'); ?></a>
            </li>
            <li>
              <a href="<?= home_url(); ?>/new-filed/軸受診断センシングシステム" class="c-white c-trans-red"><?php _e('電動アシスト台車', 'footer'); ?></a>
            </li>
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
        <li><a href="<?= home_url(); ?>/privacy_policy" class="c-white c-trans-red"><?php _e('個人情報保護方針', 'footer'); ?></a></li>
        <li><a href="<?= home_url(); ?>/contact" class="c-white c-trans-red"><?php _e('お問い合わせ', 'footer'); ?></a></li>
      </ul>
      <p class="copyright font-robot">©2021 FREEMAAN JAPAN </p>
      <div class="affiliates">
        <h4><?php _e('関連会社', 'footer'); ?></h4>
        <ul class="companies">
          <li>
            <a href="https://www.sanyo-trading.co.jp/" class="c-white c-trans-red" target="_blank" rel="noopener noreferrer">
              <?php _e('三洋貿易株式会社', 'footer'); ?>
            </a>
          </li>
          <li>
            <a href="http://www.sanyo-trading-china.com/" class="c-white c-trans-red" target="_blank" rel="noopener noreferrer">
              <?php _e('三洋物産貿易(上海)有限公司', 'footer'); ?>
            </a>
          </li>
          <li>
            <a href="https://www.sanyo-trading.co.jp/business/kikai_t/" class="c-white c-trans-red" target="_blank" rel="noopener noreferrer">
              <?php _e('三洋貿易科学機器事業部', 'footer'); ?>
            </a>
          </li>
          <li>
            <a href="https://www.sanyo-hotmelt.com/" class="c-white c-trans-red" target="_blank" rel="noopener noreferrer">
              <?php _e('三洋ホットメルトシステム', 'footer'); ?>
            </a>
          </li>
          <li>
            <a href="http://www.sanyo-trading.co.th/" class="c-white c-trans-red" target="_blank" rel="noopener noreferrer">
              <?php _e('Sanyo Trading Asia Co., Ltd.', 'footer'); ?>
            </a>
          </li>
          <li>
            <a href="http://www.shin-toyo.jp/" class="c-white c-trans-red" target="_blank" rel="noopener noreferrer">
              <?php _e('新東洋機械工業株式会社 (工業用ポンプ)', 'footer'); ?>
            </a>
          </li>
          <li>
            <a href="http://www.cosmos-shoji.co.jp/" class="c-white c-trans-red" target="_blank" rel="noopener noreferrer">
              <?php _e('コスモス商事株式会社 (石油・ガス・海洋)', 'footer'); ?>
            </a>
          </li>
          <li>
            <a href="http://www.chem-inter.co.jp/" class="c-white c-trans-red" target="_blank" rel="noopener noreferrer">
              <?php _e('株式会社ケムインター (精密化学品、エレクトロニクス)', 'footer'); ?>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- //information -->
  <a href="#main" class="gototop js-gototop font-robot bold">PAGE TOP</a>
</footer>
<!-- // footer -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/picturefill/3.0.3/picturefill.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.8/swiper-bundle.min.js" defer></script>
<script src="<?= get_template_directory_uri(); ?>/library/js/smoothscroll.js" defer></script>
<script src="<?= get_template_directory_uri(); ?>/js/main.js" defer></script>
<?php wp_reset_query(); ?>
<?php if (is_home() || is_front_page()) : ?>
  <script src="<?= get_template_directory_uri(); ?>/library/js/intersection-observer.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-scrollify@1/jquery.scrollify.min.js" defer></script>
  <script src="<?= get_template_directory_uri(); ?>/js/index.js" defer></script>
<?php elseif (is_category()) : ?>
  <script src="<?= get_template_directory_uri(); ?>/js/category.js" defer></script>
<?php elseif (is_archive()) : ?>
<?php elseif (is_single() || is_page()) : ?>
  <script src="<?= get_template_directory_uri(); ?>/js/single.js" defer></script>
<?php elseif (is_search()) : ?>
  <script src="<?= get_template_directory_uri(); ?>/js/search.js" defer></script>
<?php elseif (is_404()) : ?>
<?php endif; ?>
</body>

</html>
