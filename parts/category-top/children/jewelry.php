<?php
  $category = get_queried_object();
  $category_id = $category -> term_id; // カテゴリーID

  $contents = get_option('fm_category_'.intval($category_id));
  $jewelry_text = $contents[jewelry_text] ? esc_html($contents[jewelry_text]) : '<p style="color:tomato">カテゴリページにて「リード文」を設定してください</p>';
  $jewelry_img = $contents[jewelry_img] ? $contents[jewelry_img] : null;
  $jewelry_table1 = $contents[jewelry_table1] ? $contents[jewelry_table1] : null;
  $jewelry_table2 = $contents[jewelry_table2] ? $contents[jewelry_table2] : null;
  $jewelry_table3 = $contents[jewelry_table3] ? $contents[jewelry_table3] : null;
  $jewelry_table4 = $contents[jewelry_table4] ? $contents[jewelry_table4] : null;
  $jewelry_table5 = $contents[jewelry_table5] ? $contents[jewelry_table5] : null;

  $jewelry_tables = array();
  array_push($jewelry_tables, $jewelry_table1, $jewelry_table2, $jewelry_table3, $jewelry_table4, $jewelry_table5);

?>


<!-- category-lead-child-jewelry -->
<div class="category-lead-child-jewelry">
  <div class="category-lead-child-jewelry__text">
    <?= $jewelry_text; ?>
  </div>
  <div class="category-lead-child-jewelry__image">
    <?php if ($jewelry_img): ?>
    <img src="<?= $jewelry_img; ?>" <?php fm_lazyload(); ?> alt="" />
    <?php else: ?>
    <p style="color:tomato">カテゴリページにて「リード画像 URL」を設定してください</p>
    <?php endif; ?>
  </div>
</div>
<!-- // category-lead-child-jewelry -->

<!-- category-table-child-jewelry -->
<div class="category-table-child-jewelry">
  <?php foreach($jewelry_tables as $table): ?>
  <?php if (is_null($table)) break; ?>
  <div class="category-lead-child-table__block">
    <?= do_shortcode("$table"); ?>
  </div>
  <?php endforeach; ?>
</div>
<!-- // category-table-child-jewelry -->