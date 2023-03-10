<?php get_header();
 ?>
<div class="page-archive l-section">
  <div class="page-archive-head">
    <div class="page-archive-head__contents l-contents--sm">
      <div class="m-head">
        <p class="m-head__sub-text">− お知らせ −</p>
        <h1 class="m-head__main-text">News</h1>
      </div>
    </div>
  </div>
  <div class="page-archive-body">
    <div class="page-archive-body__contents l-contents--sm">
      <ol class="page-archive-list"><?php $paged = get_query_var('paged', 1);
$args = array(
	'paged' => $paged,
	'post_type' => 'post',
	'orderby' => 'date',
	'order' => 'DESC',
	'posts_per_page' => 2,
);
$the_query = new WP_Query($args);
while ($the_query->have_posts()):
$the_query->the_post(); ?>
        <li class="page-archive-list__item"><a class="page-archive-list__link" href="&lt;?= get_the_permalink() ?&gt;">
            <p class="page-archive-list__date"><?php the_time('Y.n.j'); ?></p>
            <p class="page-archive-list__desc"><?php the_title(); ?></p></a></li><?php endwhile;
 ?>
      </ol>
      <div class="page-archive-pagination"><?php wp_pagenavi(array('query' => $the_query));
wp_reset_postdata();
 ?>
      </div>
    </div>
  </div>
</div><?php get_footer(); ?>