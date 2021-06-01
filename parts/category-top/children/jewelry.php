<?php
  $category = get_queried_object();
  $category_id = $category -> term_id; // カテゴリーID
  $category_slug = $category -> slug; // カテゴリースラッグ

  $contents = get_option('fm_category_'.intval($category_id));
  $jewelry_title = $contents['jewelry_title'] ? esc_html($contents['jewelry_title']) : '<p style="color:tomato">カテゴリページにて「リードタイトル」を設定してください</p>';
  $jewelry_text = $contents['jewelry_text'] ? esc_html($contents['jewelry_text']) : '<p style="color:tomato">カテゴリページにて「リード文」を設定してください</p>';
  $jewelry_img = $contents['jewelry_img'] ? $contents['jewelry_img'] : null;
  $jewelry_table1 = $contents['jewelry_table1'] ? $contents['jewelry_table1'] : null;
  $jewelry_table2 = $contents['jewelry_table2'] ? $contents['jewelry_table2'] : null;
  $jewelry_table3 = $contents['jewelry_table3'] ? $contents['jewelry_table3'] : null;
  $jewelry_table4 = $contents['jewelry_table4'] ? $contents['jewelry_table4'] : null;
  $jewelry_table5 = $contents['jewelry_table5'] ? $contents['jewelry_table5'] : null;

  $jewelry_tables = array();
  array_push($jewelry_tables, $jewelry_table1, $jewelry_table2, $jewelry_table3, $jewelry_table4, $jewelry_table5);

  // クエリ (同カテゴリの商品一覧)
  $args = array(
    'post_type' => 'post',
    'category_name' => $category_slug,
  );
  $the_query = new WP_Query($args);
  global $wp_query;
  $tmp_query = $wp_query;
  $wp_query = $the_query;
?>


<!-- category-lead-child-jewelry -->
<div class="category-lead-child-jewelry">
  <div class="category-lead-child-jewelry__image">
    <?php if ($jewelry_img): ?>
    <img src="<?= $jewelry_img; ?>" <?php fm_lazyload(); ?> alt="" />
    <?php else: ?>
    <p style="color:tomato">カテゴリページにて「リード画像 URL」を設定してください</p>
    <?php endif; ?>
  </div>
  <div class="category-lead-child-jewelry__description">
    <h2 class="category-lead-child-jewelry__description--title"><?= $jewelry_title; ?></h2>
    <p class="category-lead-child-jewelry__description--text"><?= $jewelry_text; ?></p>
    <p
      class="category-lead-child-jewelry__description--subTitle font-robot"><?= fm_remove_underbar($category_slug); ?></p>
  </div>
</div>
<!-- // category-lead-child-jewelry -->


<!-- category-table-child-jewelry -->
<div class="category-table category-table-child-jewelry">
  <?php foreach($jewelry_tables as $table): ?>
  <?php if (is_null($table)) break; ?>
  <div class="category-lead-child-table__block">
    <?= do_shortcode("$table"); ?>
  </div>
  <?php endforeach; ?>
</div>
<!-- // category-table-child-jewelry -->


<!-- category-child-product-link -->
<div class="category-child-product-link">
  <ul class="wide">
    <?php if ($the_query -> found_posts > 0): if ($the_query -> have_posts()): while ($the_query -> have_posts()): $the_query -> the_post(); ?>
    <li>
      <a href="<?= get_the_permalink(); ?>" class="post-card-product">
        <div class="thumbnail">
          <p class="post-thumbnail"><img src="<?= fm_default_thumb('thumb-250'); ?>" alt="" loading="lazy" /></p>
        </div>
        <div class="content">
          <p class="title"><?= get_the_title(); ?></p>
          <p class="description"><?= get_the_excerpt(); ?></p>
          <p class="more font-robot c-main"><span>MORE</span></p>
        </div>
      </a>
    </li>
    <?php endwhile;endif;endif; ?>
  </ul>
</div>
<!-- // category-child-product-link -->


<!-- category-related -->
<div class="category-related">
  <div class="products">
    <h4><?php _e('ジュエリーの関連商品一覧', 'category-children-jewelry'); ?></h4>
    <?php do_shortcode('[product category="jewelry" count="4" orderby="rand" layout="column"]'); ?>
  </div>
  <div class="articles">
    <h4><?php _e('ジュエリーの記事', 'category-children-jewelry'); ?></h4>
    <?php do_shortcode('[post category="jewelry" count="6" orderby="rand" layout="column"]'); ?>
    <div class="view-all">
      <a href="#" class="button-arrow button-line arrow-wrap">
        <span class="font-robot bold">SEE MORE</span>
        <?php get_template_part('/parts/icon/arrow'); ?>
      </a>
    </div>
  </div>
</div>
<!-- category-related -->