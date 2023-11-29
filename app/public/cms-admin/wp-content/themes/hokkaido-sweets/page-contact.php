<?php get_header(); ?>
<div class="page-contact l-section">
	<div class="page-contact__head">
		<div class="page-contact__contents l-contents--sm">
			<div class="m-head">
				<p class="m-head__sub-text">− お問い合わせ −</p>
				<h1 class="m-head__main-text">Contact</h1>
			</div>
		</div>
	</div>
	<div class="page-contact__body">
		<div class="page-contact__contents l-contents--sm">
			<?php
				if(have_posts()){
					the_post();
					the_content();
				}
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>