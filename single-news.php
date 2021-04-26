<main class="main">
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article class="article">
    <div class="article-info">
      <time datetime="<?php the_time('Y-m-d' ); ?>"><?php the_time('Y/m/d'); ?></time>
      <?php
        $terms = get_the_terms( 'news_category' );
        foreach( $terms as $term ):
      ?>
      <span class="article-category"><?php echo $term->name; ?></span>
      <?php endforeach; ?>
    </div>
    <h2 class="article-title"><?php the_title(); ?></h2>
    <div class="article-content">
      <?php the_content(); ?>
    </div>
  </article>
  <?php endwhile; endif; ?>
</main>