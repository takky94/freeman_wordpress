<!--archive-tabs-->
<?php
  $args = array('taxonomy' => 'news_category', 'orderby' => 'description');
  $categories = get_categories($args); // 全カスタムタクソノミー

  $term_id = get_queried_object_id(); // 現在のカスタムタクソノミーID
?>

<nav id="archiveTabs" class="archive-tabs">
  <ul>
    <li>
      <?php if (!is_tax('news_category')): ?>
      <span class="archive-tabs__item active">ALL</span>
      <?php else: ?>
      <a class="archive-tabs__item" href="<?= esc_url(get_post_type_archive_link('news')); ?>">ALL</a>
      <?php endif; ?>
    </li>
    <?php foreach($categories as $category): ?>
    <?php $is_active = $category -> term_id == $term_id; ?>
    <?php $post_link = esc_url(get_category_link($category -> term_id)); ?>
    <li>
      <?php if($is_active): ?>
      <span class="archive-tabs__item active"><?= $category -> name; ?></span>
      <?php else: ?>
      <a href="<?= $post_link ?>" class="archive-tabs__item c-trans-red"><?= $category -> name; ?></a>
      <?php endif; ?>
    </li>
    <?php endforeach;wp_reset_query(); ?>
  </ul>
</nav>