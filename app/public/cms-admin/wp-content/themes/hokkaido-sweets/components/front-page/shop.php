<?php
	$images = URL_FRONT_PAGE_IMAGES;
?>
<article class="fp-shop" id="shop">
	<section class="fp-shop__section l-section">
		<div class="fp-shop__contents l-contents">
			<div class="fp-shop__head m-head js-inview">
				<p class="m-head__sub-text">− 店舗情報 ／ アクセス −</p>
				<h1 class="m-head__main-text">Store <small class="m-head__main-text--sm">&</small> access</h1>
			</div>
			<div class="fp-shop__body">
				<div class="fp-shop-detail js-inview">
					<picture class="fp-shop-detail__picture o-fit"><img class="o-fit__body" src="<?= $images ?>shop-img.webp" width="600" height="320" loading="lazy" /></picture>
					<div class="fp-shop-detail__text">
						<h2 class="fp-shop-detail__logo"><img class="fp-shop-detail__logo-body" src="<?= URL_SVG ?>logo.svg" alt="sweets garden Prateria" width="220" height="48" /></h2>
						<p class="fp-shop-detail__desc">小樽市堺町5番29号<br>（おみやげの店 こぶしや 小樽店内併設）<br>TEL.0134-64-6122<br>営業時間　10時〜18時<br>定休日　　不定休<br>（※現在は月曜日が定休日です）</p>
					</div>
				</div>
				<div class="fp-shop-access js-inview">
					<p class="fp-shop-access__desc">小樽の人気観光スポット「堺町通り」の中心にある石造り倉庫のお土産店内に併設。<br>北一硝子駐車場からも信号を渡るとすぐの好立地。<br class="u-hide--sp">入り口は、北一硝子駐車場向かい側、堺町通り側の2カ所。</p>
					<dl class="fp-shop-access__block">
						<dt class="fp-shop-access__subject"> お車でお越しの方へ</dt>
						<dd class="fp-shop-access__note">申し訳ございませんが、駐車場はご用意しておりません。近辺の駐車場をご利用ください。</dd>
					</dl>
				</div>
				<div class="fp-shop-map o-fit js-inview"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1798.8403330725782!2d141.0055113965011!3d43.19372610287246!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0ae050241cae79%3A0x69b08ac60bc49586!2z44GK44G_44KE44GS44Gu5bqX44GT44G244GX44KE5bCP5qi95bqX!5e0!3m2!1sja!2sjp!4v1677645983503!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
			</div>
			<div class="fp-shop__foot">
				<p class="m-btn"><a class="m-btn__link" href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1798.8403330725782!2d141.0055113965011!3d43.19372610287246!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0ae050241cae79%3A0x69b08ac60bc49586!2z44GK44G_44KE44GS44Gu5bqX44GT44G244GX44KE5bCP5qi95bqX!5e0!3m2!1sja!2sjp!4v1677645983503!5m2!1sja!2sjp" target="_blank"><span>Google Mapで地図をみる</span></a></p>
			</div>
		</div>
	</section>
</article>