<?php
  $category = get_queried_object();
  $category_id = $category -> term_id; // カテゴリーID

  $contents = get_option('fm_category_'.intval($category_id));
  $others_img = $contents[others_img] ? $contents[others_img] : null;
  $others_slider_img1 = $contents[others_slider_img1] ? $contents[others_slider_img1] : null;
  $others_slider_img2 = $contents[others_slider_img2] ? $contents[others_slider_img2] : null;
  $others_slider_img3 = $contents[others_slider_img3] ? $contents[others_slider_img3] : null;
  $others_slider_img4 = $contents[others_slider_img4] ? $contents[others_slider_img4] : null;
  $others_slider_img5 = $contents[others_slider_img5] ? $contents[others_slider_img5] : null;
  $others_lead_text = $contents[others_lead_text] ? esc_html($contents[others_lead_text]) : '<p style="color:tomato">カテゴリページにて「リード文」を設定してください</p>';

?>


<!--category-lead-child-jewelry-->
<div class="category-lead-child-jewelry">
  <div class="category-lead-child-others__text">
    <?= $others_text; ?>
  </div>
  <div class="category-lead-child-others__image">
    <?php if ($others_img): ?>
    <img src="<?= $others_img; ?>" <?php fm_lazyload(); ?> alt="" />
    <?php else: ?>
    <p style="color:tomato">カテゴリページにて「リード画像 URL」を設定してください</p>
    <?php endif; ?>
  </div>

</div>