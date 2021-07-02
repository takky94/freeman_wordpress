<?php
  $category = get_queried_object();
  $category_name = $category -> cat_name; // カテゴリー名
  $category_slug = $category -> category_nicename; // カテゴリのスラッグ
?>
<header class="entry-header category-header category-header-<?= $category_slug; ?>">
  <div class="container">
    <h1 class="entry-header__title">
    <?php if($category_slug === 'jewelry'): ?>
    <?php _e('ジュエリーキャスト用副資材', 'category-jewelry'); ?>
    <?php else: ?>
    <?= $category_name; ?>
    <?php endif; ?>
    </h1>
    <?php fm_breadcrumb(); ?>
  </div>
</header>