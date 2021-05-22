<?php
  $category = get_the_category();
  $category = $category[0];
  $category_name = $category -> cat_name; // カテゴリー名
  $category_slug = $category -> category_nicename; // カテゴリのスラッグ
?>
<header class="entry-header category-header category-header-<?= $category_slug; ?>">
  <div class="container">
    <h1 class="entry-header__title"><?= $category_name; ?></h1>
    <?php fm_breadcrumb(); ?>
  </div>
</header>