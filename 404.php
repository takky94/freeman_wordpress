<?php get_header(); ?>
<!-- main -->
<main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
  <article id="article" <?php post_class('notfound-page'); ?>>
    <?php get_template_part('/parts/header/notfound-header'); ?>
    <!-- #content -->
    <div id="content" class="notfound">
      <div class="container">
        <h2 class="notfound__title">お探しのページは見つかりませんでした。</h2>
        <p class="notfound__text">アクセスしようとしたページは削除されたかURLが変更されているため、<br class="sp__none" />見つけることができませんでした。</p>
        <p class="notfound__image">
          <?php get_template_part('/parts/svg/robot-404'); ?>
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