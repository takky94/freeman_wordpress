<!--single.php-->
<?php get_header(); ?>
<div id="single">
  <!-- main -->
  <main class="main">
    <?php fm_breadcrumb(); ?>
    <div id="content">
      <div class="container">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </main>
  <!-- // main -->
</div>
<?php get_header(); ?>