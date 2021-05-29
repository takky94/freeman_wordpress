<?php
  $category = get_queried_object();
  $category_name = $category -> cat_name; // カテゴリー名
  $category_slug = $category -> category_nicename; // カテゴリのスラッグ
?>
<header class="entry-header category-children-header category-children-header-<?= $category_slug; ?>">
  <div class="container">
    <h1
      class="entry-header__title"><?= $category_name; ?> <span class="eng-title"><?= fm_remove_underbar($category_slug); ?></span></h1>
    <?php fm_breadcrumb(); ?>
  </div>
</header>