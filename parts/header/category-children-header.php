<?php
  $category = get_queried_object();
  $category_name = $category -> cat_name; // カテゴリー名
  $category_slug = $category -> category_nicename; // カテゴリのスラッグ

  if (!defined('ICL_LANGUAGE_CODE')){
    define('ICL_LANGUAGE_CODE', 'ja');
  }
?>
<header class="entry-header category-children-header category-children-header-<?= $category_slug; ?>">
  <div class="container">
    <h1 class="entry-header__title">
        <span><?= $category_name; ?></span>
        <?php if(ICL_LANGUAGE_CODE !== 'en'): ?>
        <?php if($category_slug === 'invar'): ?>
        <span class="eng-title">Invar®</span>
        <?php elseif($category_slug === 'mold_releases_pattern_wash'):  ?>
        <span class="eng-title">Mold Releases, Pattern Wash</span>
        <?php elseif($category_slug === 'slurry_additives_core_materials'):  ?>
        <span class="eng-title">Slurry Additives, Core Materials</span>
        <?php else: ?>
        <span class="eng-title"><?= fm_remove_underbar($category_slug); ?></span>
        <?php endif; ?>
        <?php endif; ?>
        </h1>
    <?php fm_breadcrumb(); ?>
  </div>
</header>