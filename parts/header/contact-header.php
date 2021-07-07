<header class="entry-header contact-header">
  <div class="container">
    <h1 class="entry-header__title"><?php the_title(); ?></h1>
    <p class="entry-header__titleSub">
      <span class="must-label"><?php _e('必須', 'contact-header'); ?></span>
      <?php _e('項目は入力必須項目です、お手数ですがご記入お願いいたします。<br class="sp__none" />商品や導入事例に関してなど、お気軽にお問い合わせくださいませ。', 'contact-header'); ?>
      </p>
    <?php fm_breadcrumb(); ?>
  </div>
</header>