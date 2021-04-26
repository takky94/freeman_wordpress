<?php
// カスタム投稿(news)の一覧ページ
$args = array(
  'post_type' => 'news', // 投稿タイプを指定
  'posts_per_page' => 10, // 表示する記事数
);
$news_query = new WP_Query( $args );
?>

<?php get_headers() ?>

<?php if($news_query->have_posts()): while($news_query->have_posts()): $news_query->the_post(); ?>



<?php endwhile; endif; wp_reset_postdata(); ?>