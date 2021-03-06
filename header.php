<?php // 言語プラグインが有効かどうか(有効でないならja固定)
?>
<?php
if (!defined('ICL_LANGUAGE_CODE')) {
  define('ICL_LANGUAGE_CODE', 'ja');
}
if (ICL_LANGUAGE_CODE === 'ja') {
  $ja_permalink = '<span class="select-lang__link active">JP</span>';
  $en_permalink = '<a href="' . apply_filters('wpml_permalink', fm_get_current_url(), 'en') . '" class="select-lang__link">EN</a>';
  $ch_permalink = '<a href="' . apply_filters('wpml_permalink', fm_get_current_url(), 'zh-hant') . '" class="select-lang__link">CH</a>';
} elseif (ICL_LANGUAGE_CODE === 'en') {
  $ja_permalink = '<a href="' . apply_filters('wpml_permalink', fm_get_current_url(), 'ja') . '" class="select-lang__link">JP</a>';
  $en_permalink = '<span class="select-lang__link active">EN</span>';
  $ch_permalink = '<a href="' . apply_filters('wpml_permalink', fm_get_current_url(), 'zh-hant') . '" class="select-lang__link">CH</a>';
} elseif (ICL_LANGUAGE_CODE === 'zh-hant') {
  $ja_permalink = '<a href="' . apply_filters('wpml_permalink', fm_get_current_url(), 'ja') . '" class="select-lang__link">JP</a>';
  $en_permalink = '<a href="' . apply_filters('wpml_permalink', fm_get_current_url(), 'en') . '" class="select-lang__link">EN</a>';
  $ch_permalink = '<span class="select-lang__link active">CH</span>';
}
?>


<!DOCTYPE html>
<html lang="<?= ICL_LANGUAGE_CODE; ?>" class="<?= ICL_LANGUAGE_CODE; ?>">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;400;700&family=EB+Garamond:ital@1&family=Roboto+Condensed:wght@300;400;700&family=Noto+Serif+JP:wght@600&&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.8/swiper-bundle.min.css" />
  <?php if (is_home() || is_front_page()) : ?>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style/compressed/index.min.css" />
  <?php elseif (is_category()) : ?>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style/compressed/category.min.css" />
  <?php elseif (is_archive()) : ?>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style/compressed/archive.min.css" />
  <?php elseif (is_page_template()) : //テンプレート使用の固定ページ
  ?>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style/compressed/article-template.min.css" />
  <?php elseif (is_single() || is_page()) : ?>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style/compressed/article.min.css" />
  <?php elseif (is_search()) : ?>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style/compressed/search.min.css" />
  <?php elseif (is_404()) : ?>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style/compressed/404.min.css" />
  <?php endif; ?>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <?php wp_head(); //必須
  ?>
  <?php if (is_user_logged_in()) : ?>
    <style>
      html {
        margin-top: 0 !important;
      }
    </style>
  <?php endif; ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
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
            <span class="select-lang font-robot">
              <?= $ja_permalink; ?>
              <?= $en_permalink; ?>
              <?= $ch_permalink; ?>
            </span>
            <?php get_search_form(); ?>
          </div>
          <ul class="header__list">
            <li>
              <a href="<?= home_url(); ?>/mold" class="js-accordion <?= fm_is_active_page('mold'); ?>" data-subtitle="MOLD"><?php _e('試作・型材料', 'header'); ?></a>
              <div class="sub">
                <div class="container flex">
                  <p class="sub__title c-white font-robot sp__none">M<span class="c-main">O</span>LD</p>
                  <ul class="js-accordionContent">
                    <li class="sp-main-cat"><a href="<?= home_url(); ?>/mold/" class="c-white c-trans-red"><?php _e('試作・型材料', 'header'); ?></a></li>
                    <li><a href="<?= home_url(); ?>/mold/close_contour_paste" class="c-white c-trans-red"><?php _e('機械吐出', 'header'); ?></a></li>
                    <li><a href="<?= home_url(); ?>/mold/cutting_process" class="c-white c-trans-red"><?php _e('切削加工', 'header'); ?></a></li>
                    <li><a href="<?= home_url(); ?>/mold/resin_casting" class="c-white c-trans-red"><?php _e('注型', 'header'); ?></a></li>
                    <li><a href="<?= home_url(); ?>/mold/mold_material" class="c-white c-trans-red"><?php _e('試作・型材料', 'header'); ?></a></li>
                    <li><a href="<?= home_url(); ?>/mold/silicone" class="c-white c-trans-red"><?php _e('一般型取り用シリコーン', 'header'); ?></a></li>
                    <li><a href="<?= home_url(); ?>/mold/invar" class="c-white c-trans-red"><?php _e('インバー', 'header'); ?></a></li>
                    <li><a href="<?= home_url(); ?>/sand_casting" class="c-white c-trans-red"><?php _e('砂型鋳造', 'header'); ?></a></li>
                    <li><a href="<?= home_url(); ?>/investment_casting" class="c-white c-trans-red"><?php _e('精密鋳造', 'header'); ?></a></li>
                    <li><a href="<?= home_url(); ?>/jewelry" class="c-white c-trans-red"><?php _e('ジュエリー', 'header'); ?></a></li>
                    <li><a href="<?= home_url(); ?>/mold/special_effects" class="c-white c-trans-red"><?php _e('特殊造形用シリコーン', 'header'); ?></a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <a href="<?= home_url(); ?>/sand_casting" class="js-accordion <?= fm_is_active_page('sand_casting'); ?>" data-subtitle="SAND CASTING"><?php _e('砂型鋳造', 'header'); ?></a>
              <div class="sub">
                <div class="container flex">
                  <p class="sub__title c-white font-robot sp__none">S<span class="c-main">A</span>ND <br class="sp__none">CASTING</p>
                  <ul class="js-accordionContent">
                    <li class="sp-main-cat"><a href="<?= home_url(); ?>/sand_casting/" class="c-white c-trans-red"><?php _e('砂型鋳造', 'header'); ?></a></li>
                    <li>
                      <a href="<?= home_url(); ?>/investment_casting/ceramic-foam-filters" class="c-white c-trans-red"><?php _e('セラミックフォームフィルター', 'header'); ?></a>
                    </li>
                    <li>
                      <a href="<?= home_url(); ?>/sand_casting/断熱・発熱スリーブ%e3%80%80acefeed-in-acefeed-ex/" class="c-white c-trans-red"><?php _e('押湯スリーブ', 'header'); ?></a>
                    </li>
                    <li>
                      <a href="<?= home_url(); ?>/sand_casting/陶管・方案用ゲート" class="c-white c-trans-red"><?php _e('湯口方案スリーブ・陶管', 'header'); ?></a>
                    </li>
                    <li>
                      <a href="<?= home_url(); ?>/sand_casting/ekamold-cast-m（金属用）/" class="c-white c-trans-red"><?php _e('非鉄用塗型・コーティング材', 'header'); ?></a>
                    </li>
                    <li>
                      <a href="<?= home_url(); ?>/sand_casting/ジルコン塗型-zircon-based-coating" class="c-white c-trans-red"><?php _e('ジルコン塗型', 'header'); ?></a>
                    </li>
                    <li>
                      <a href="<?= home_url(); ?>/investment_casting/refractories/その他耐火材各種" class="c-white c-trans-red"><?php _e('耐火材・原材料', 'header'); ?></a>
                    </li>
                    <li>
                      <a href="<?= home_url(); ?>/sand_casting/アルミ原材料インゴット-aluminum-alloys" class="c-white c-trans-red"><?php _e('アルミ原材料', 'header'); ?></a>
                    </li>
                    <li>
                      <a href="<?= home_url(); ?>/sand_casting/除滓材パーライト、slug-catch" class="c-white c-trans-red"><?php _e('除滓材(パーライト)', 'header'); ?></a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <a href="<?= home_url(); ?>/investment_casting" class="js-accordion <?= fm_is_active_page('investment_casting'); ?>" data-subtitle="INVESTMENT CASTING"><?php _e('精密鋳造', 'header'); ?></a>
              <div class="sub">
                <div class="container flex">
                  <p class="sub__title c-white font-robot sp__none">INVE<span class="c-main">S</span>TMENT <br class="sp__none">CASTING</p>
                  <ul class="js-accordionContent">
                    <li class="sp-main-cat"><a href="<?= home_url(); ?>/investment_casting/" class="c-white c-trans-red"><?php _e('精密鋳造', 'header'); ?></a></li>
                    <li>
                      <a href="<?= home_url(); ?>/investment_casting/waxes" class="c-white c-trans-red"><?php _e('ワックス各種', 'header'); ?></a>
                    </li>
                    <li>
                      <a href="<?= home_url(); ?>/investment_casting/mold_releases_pattern_wash" class="c-white c-trans-red"><?php _e('離型剤・パターン洗浄剤', 'header'); ?></a>
                    </li>
                    <li>
                      <a href="<?= home_url(); ?>/investment_casting/specialty_binders" class="c-white c-trans-red"><?php _e('高機能バインダー・濃縮液', 'header'); ?></a>
                    </li>
                    <li>
                      <a href="<?= home_url(); ?>/investment_casting/refractories" class="c-white c-trans-red"><?php _e('耐火材', 'header'); ?></a>
                    </li>
                    <li>
                      <a href="<?= home_url(); ?>/investment_casting/slurry_additives_core_materials" class="c-white c-trans-red"><?php _e('スラリー添加剤・コア材料', 'header'); ?></a>
                    </li>
                    <li>
                      <a href="<?= home_url(); ?>/investment_casting/equipment" class="c-white c-trans-red"><?php _e('精密鋳造用設備', 'header'); ?></a>
                    </li>
                    <li>
                      <a href="<?= home_url(); ?>/investment_casting/master-heat-ingots" class="c-white c-trans-red"><?php _e('原材料各種', 'header'); ?></a>
                    </li>
                    <li>
                      <a href="<?= home_url(); ?>/investment_casting/crucibles" class="c-white c-trans-red"><?php _e('ルツボ', 'header'); ?></a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <a href="<?= home_url(); ?>/jewelry" class="js-accordion <?= fm_is_active_page('jewelry'); ?>" data-subtitle="JEWELRY"><?php _e('ジュエリー', 'header'); ?></a>
              <div class="sub">
                <div class="container flex">
                  <p class="sub__title c-white font-robot sp__none">JE<span class="c-main">W</span>ELRY</p>
                  <ul class="js-accordionContent">
                    <li class="sp-main-cat"><a href="<?= home_url(); ?>/jewelry/" class="c-white c-trans-red"><?php _e('ジュエリー', 'header'); ?></a></li>
                    <li>
                      <a href="<?= home_url(); ?>/jewelry/injection_wax" class="c-white c-trans-red"><?php _e('インジェクションWAX', 'header'); ?></a>
                    </li>
                    <li>
                      <a href="<?= home_url(); ?>/jewelry/carving_wax" class="c-white c-trans-red"><?php _e('カービングWAX', 'header'); ?></a>
                    </li>
                    <li>
                      <a href="<?= home_url(); ?>/jewelry/investments" class="c-white c-trans-red"><?php _e('埋没材', 'header'); ?></a>
                    </li>
                    <li>
                      <a href="<?= home_url(); ?>/jewelry/matt_tools" class="c-white c-trans-red"><?php _e('ツール関連', 'header'); ?></a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <a href="<?= home_url(); ?>/new_field" class="js-accordion <?= fm_is_active_page('new_field'); ?>" data-subtitle="NEW FIELD"><?php _e('新たな取り組み', 'header'); ?></a>
              <div class="sub">
                <div class="container flex">
                  <p class="sub__title c-white font-robot sp__none">NE<span class="c-main">W</span> FIELD</p>
                  <ul class="js-accordionContent">
                    <li class="sp-main-cat"><a href="<?= home_url(); ?>/new_field/" class="c-white c-trans-red"><?php _e('新たな取り組み', 'header'); ?></a></li>
                    <li>
                      <a href="<?= home_url(); ?>/new-filed/工業用消臭剤-エポリオン/" class="c-white c-trans-red"><?php _e('工業用消臭剤', 'header'); ?></a>
                    </li>
                    <li>
                      <a href="<?= home_url(); ?>/new-filed/ミネラルキャスティング" class="c-white c-trans-red"><?php _e('ミネラルキャスティング', 'header'); ?></a>
                    </li>
                    <li>
                      <a href="<?= home_url(); ?>/new-filed/co2クリーニング" class="c-white c-trans-red"><?php _e('CO2洗浄システム', 'header'); ?></a>
                    </li>
                    <li>
                      <a href="<?= home_url(); ?>/new-filed/プロ用ホットメルトシステム" class="c-white c-trans-red"><?php _e('ホットメルト', 'header'); ?></a>
                    </li>
                    <li>
                      <a href="<?= home_url(); ?>/new-filed/暑さ対策品" class="c-white c-trans-red"><?php _e('暑さ対策品', 'header'); ?></a>
                    </li>
                    <li>
                      <a href="<?= home_url(); ?>/new-filed/軸受診断センシングシステム" class="c-white c-trans-red"><?php _e('電動アシスト台車', 'header'); ?></a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <a href="<?= home_url(); ?>/company" class="js-accordion <?= fm_is_active_page('company'); ?>" data-subtitle="COMPANY"><?php _e('会社概要', 'header'); ?></a>
              <div class="sub">
                <div class="container flex">
                  <p class="sub__title c-white font-robot sp__none">CO<span class="c-main">M</span>PANY</p>
                  <ul class="js-accordionContent">
                    <li class="sp-main-cat"><a href="<?= home_url(); ?>/company/" class="c-white c-trans-red"><?php _e('会社概要', 'header'); ?></a></li>
                    <li><a href="<?= home_url(); ?>/company#philosophy" class="c-white c-trans-red"><?php _e('理念', 'header'); ?></a></li>
                    <li><a href="<?= home_url(); ?>/company#infographic" class="c-white c-trans-red"><?php _e('数字で見る日本フリーマン', 'header'); ?></a>
                    </li>
                    <li><a href="<?= home_url(); ?>/company#greeting" class="c-white c-trans-red"><?php _e('社長挨拶', 'header'); ?></a></li>
                    <li><a href="<?= home_url(); ?>/company#overview" class="c-white c-trans-red"><?php _e('会社概要', 'header'); ?></a></li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="header__button">
          <a href="<?= home_url(); ?>/contact" class="font-robot white button-line">
            <div>
              <div class="center">CONTACT</div>
              <img src="<?= get_template_directory_uri(); ?>/images/top/icon/mail.svg" alt="<?php _e('メールのアイコン', 'header'); ?>" />
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
