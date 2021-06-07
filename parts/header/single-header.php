<?php
  $category = wp_get_object_terms($post -> ID, 'category');
  $category = $category[0];
  $parent_id = $category -> parent;
  $parent_cateogry = get_category($parent_id);

  $category_name = $parent_id ? $parent_cateogry -> name : $category -> name;
?>
<header class="entry-header single-header">
  <div class="container">
    <p class="entry-header__title"><?= $category_name; ?></p>
    <?php fm_breadcrumb(); ?>
  </div>
</header>