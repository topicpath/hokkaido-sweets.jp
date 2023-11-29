<?php
	get_header();
	$url = get_permalink();
	$text = wp_get_document_title();
	$share_url = urlencode($url);
	$share_text = urlencode($text);
	$images = URL_FRONT_PAGE_IMAGES;
?>

<?php get_template_part('components/front-page/mv'); ?>
<?php get_template_part('components/front-page/pickup'); ?>
<?php get_template_part('components/front-page/feature'); ?>
<?php get_template_part('components/front-page/about'); ?>
<?php get_template_part('components/front-page/product'); ?>
<?php get_template_part('components/front-page/shop'); ?>
<?php get_template_part('components/front-page/news'); ?>
<?php get_template_part('components/front-page/bnr'); ?>
<?php get_template_part('components/front-page/modal'); ?>

<?php get_footer(); ?>
