<article class="fp-news" id="news">
	<section class="fp-news__section l-section">
		<div class="fp-news__contents l-contents--sm">
			<div class="fp-news__head m-head js-inview">
				<p class="m-head__sub-text">− お知らせ −</p>
				<h1 class="m-head__main-text">News</h1>
			</div>
			<div class="fp-news__body js-inview">
				<ul class="fp-news__list">
					<?php
						$posts = get_posts([
							'post_type'=>'post',
							'posts_per_page'=>3,
						]);
						foreach($posts as $post):
						setup_postdata($post);
					?>
					<li class="fp-news__item">
						<a href="<?= get_the_permalink(); ?>" class="fp-news__link">
							<p class="fp-news__date"><?= get_the_time('Y.n.d'); ?></p>
							<p class="fp-news__desc"><?= get_the_title(); ?></p>
						</a>
					</li>
					<?php
						endforeach;
						wp_reset_postdata();
					?>
				</ul>
				<p class="m-btn"><a class="m-btn__link bg-transparent" href="/news/" target="_blank"><span>お知らせ一覧を見る</span></a></p>
			</div>
		</div>
	</section>
</article>