<?php
/*
Template Name: お問い合わせ送信完了
*/
?>
<?php get_header(); ?>
<!-- main -->
<main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
  <article id="article" <?php post_class('contact-send-page'); ?>>
    <?php get_template_part('/parts/header/contact-header'); ?>
    <!-- #content -->
    <div id="content" class="contact-send">
      <div class="container">
        <h2 class="contact-send__title">
          <?php _e('お問い合わせを送信しました。<br />担当者より追ってご連絡させていただきます。', 'page-contact-send'); ?>
        </h2>
        <p class="contact-send__image">
          <?php get_template_part('/parts/svg/contact-send'); ?>
        </p>
        <div class="center">
          <a href="<?= home_url(); ?>" class="button button-arrow button-line arrow-wrap c-white c-main-bg">
            <span class="font-robot">TOP</span>
            <?php get_template_part('/parts/icon/arrow'); ?>
          </a>
        </div>
      </div>
    </div>
    <!-- // #content -->
  </article>
</main>
<!-- // main -->

<?php get_footer(); ?>