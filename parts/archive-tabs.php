<!--archive-tabs-->
<?php
  $args = array('taxonomy' => 'news_category', 'orderby' => 'description');
  $categories = get_categories($args); // 全カスタムタクソノミー

  $term_id = get_queried_object_id(); // 現在のカスタムタクソノミーID
?>

<nav id="archiveTabs" class="archive-tabs">
  <ul>
    <li <?php if (!is_tax('news_category')) echo 'class="active"'; ?>>
      <a href="<?= get_post_type_archive_link('news'); ?>">ALL</a>
    </li>
    <?php foreach($categories as $category): ?>
    <li <?php if ($category -> term_id == $term_id) echo 'class="active"'; ?>>
      <a href="<?= esc_url(get_category_link($category -> term_id)); ?>"><?= $category -> name; ?></a>
    </li>
    <?php endforeach; ?>
  </ul>
</nav>