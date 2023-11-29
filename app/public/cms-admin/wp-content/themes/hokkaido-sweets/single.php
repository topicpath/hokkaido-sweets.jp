<?php get_header();
 ?>
<div class="page-single l-section">
  <div class="page-single-head">
    <div class="page-single-head__contents l-contents--sm">
      <h1 class="m-page-heading text-left"><?php echo the_title(); ?></h1>
      <p class="page-single-head__date"><?php the_time('Y.n.j'); ?></p>
    </div>
  </div>
  <div class="page-single-body">
    <div class="page-single-body__contents l-contents--sm"><?php echo the_content(); ?>
      <p class="m-btn m-btn--lg"><a class="m-btn__link" href="/news/">お知らせ一覧へ戻る</a></p>
    </div>
  </div>
</div><?php get_footer(); ?>