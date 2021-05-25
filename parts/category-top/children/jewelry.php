<?php
  $category = get_queried_object();
  $category_id = $category -> term_id; // カテゴリーID

  $category_contents = get_option('fm_category_'.intval($category_id));
  $lead_text = $category_contents[lead_text] ? esc_html($category_contents[lead_text]) : '<p style="color:tomato">カテゴリページにて「リード文」を設定してください</p>';
  $lead_img = $category_contents[lead_img] ? $category_contents[lead_img] : null;
  $lead_table1 = $category_contents[lead_table1] ? $category_contents[lead_table1] : null;
  $lead_table2 = $category_contents[lead_table2] ? $category_contents[lead_table2] : null;
  $lead_table3 = $category_contents[lead_table3] ? $category_contents[lead_table3] : null;
  $lead_table4 = $category_contents[lead_table4] ? $category_contents[lead_table4] : null;
  $lead_table5 = $category_contents[lead_table5] ? $category_contents[lead_table5] : null;

?>


<!--category-lead-child-jewelry-->
<div class="category-lead-child-jewelry">
  <div class="category-lead-child-jewelry__text">
    <?= $lead_text; ?>
  </div>
  <div class="category-lead-child-jewelry__image">
    <?php if ($lead_img): ?>
    <img src="<?= $lead_img; ?>" <?php fm_lazyload(); ?> alt="" />
    <?php else: ?>
    <p style="color:tomato">カテゴリページにて「リード画像 URL」を設定してください</p>
    <?php endif; ?>
  </div>

</div>