<?php
	$id = $args["id"] ?? 0;
	$img_id = $args["img_id"] ?? "";
	$imgs = $args["imgs"] ?? 0;
	$cats = $args["cats"] ?? [];
	$title = $args["title"] ?? "";
	$desc = $args["desc"] ?? "";
	$count = $args["count"] ?? "";
	$price = $args["price"] ?? "";
	$allergy = $args["allergy"] ?? "";
	$consume = $args["consume"] ? $args["consume"] : "ー";
	$shop = $args["shop"] ?? "";
	$cap = $args["cap"] ?? "";
	$url = $args["url"] ?? "";
	$volume = $args["volume"] ?? "";
	$size = $args["size"] ?? "";
	$preservation = $args["preservation"] ?? "";
	$items = $args["items"] ?? [];
	$images = URL_FRONT_PAGE_IMAGES;

?>

<div class="fp-modal js-modal" id="modal-<?= $id ?>">
	<div class="fp-modal__main">
		<article class="fp-modal__article">
			<div class="fp-modal__images">
				<div class="fp-modal__main-slider">
					<div class="fp-modal__slider swiper js-modal-slider">
						<div class="swiper-wrapper">
							<?php
								$num = 1;
								while($num < $imgs + 1):
							?>
							<div class="swiper-slide"><img src="<?= $images ?>product-large-<?= $img_id . "-" . sprintf('%02d', $num) ?>.webp" alt="" width="400" height="400" loading="lazy" /></div>
							<?php
								$num++;
								endwhile;
							?>
						</div>
					</div>
					<div class="fp-modal__arrow fp-modal__arrow--prev js-modal-slider__prev"></div>
					<div class="fp-modal__arrow fp-modal__arrow--next js-modal-slider__next"></div>
				</div>
				<div class="fp-modal__thumbnails swiper js-modal-slider-thumb">
					<div class="swiper-wrapper">
						<?php
							$num = 1;
							while($num < $imgs + 1):
						?>
						<div class="swiper-slide"><img src="<?= $images ?>product-large-<?= $img_id . "-" . sprintf('%02d', $num) ?>.webp" alt="" width="87" height="87" loading="lazy" /></div>
						<?php
							$num++;
							endwhile;
						?>
					</div>
				</div>
			</div>
			<div class="fp-modal__detail">
				<?php if(!count($cats) !== 0): ?>
				<ol class="fp-modal__categories">
					<?php foreach($cats as $cat): ?>
					<?php
						$add_cat_class = "";
						if($cat === "オンラインOK") {
							$add_cat_class = "fp-modal__category--online";
						}
					?>
					<li class="fp-modal__category <?= $add_cat_class ?>"><?= $cat ?></li>
					<?php endforeach; ?>
				</ol>
				<?php endif; ?>
				<h1 class="fp-modal__name"><?= $title ?></h1>
				<p class="fp-modal__desc"><?= $desc ?></p>
				<?php if(count($items) === 0): ?>
				<dl class="fp-modal__price">
					<dt class="fp-modal__count"><?= $count ?></dt>
					<dd class="fp-modal__price-body"><span class="fp-modal__price-num"><?= $price ?></span><span>円（税込）</span></dd>
				</dl>
				<?php if(!empty($url)): ?>
				<p class="fp-modal__btn">
					<a href="<?= $url ?>" target="_blank" class="fp-modal__link">
						<span class="fp-modal__link--main">商品の購入ページへ</span>
						<span class="fp-modal__link--sub">北海道特産品カタログWEBからご購入ください</span>
					</a>
				</p>
				<?php endif; ?>
				<?php else: ?>
				<div class="fp-modal__items">
					<?php foreach($items as $item): ?>
					<div class="fp-modal__item">
						<dl class="fp-modal__price">
							<dt class="fp-modal__count"><?= $item["count"] ?></dt>
							<dd class="fp-modal__price-body"><span class="fp-modal__price-num"><?= $item["price"] ?></span><span>円（税込）</span></dd>
						</dl>
						<p class="fp-modal__item-btn">
							<a href="<?= $item["url"] ?>" target="_blank" class="fp-modal__link">
								<span class="fp-modal__link--main">商品の購入ページへ</span>
								<span class="fp-modal__link--sub">北海道特産品カタログWEBからご購入ください</span>
							</a>
						</p>
					</div>
					<?php endforeach; ?>
				</div>
				<?php endif; ?>
				<table class="fp-modal__table">
					<caption class="fp-modal__table-caption">商品詳細</caption>
					<tbody>
						<?php if(!empty($url) || count($items) !== 0): ?>
						<tr>
							<th class="fp-modal__table-subject">内容量</th>
							<td class="fp-modal__table-desc"><?= $volume ?></td>
						</tr>
						<tr>
							<th class="fp-modal__table-subject">サイズ</th>
							<td class="fp-modal__table-desc"><?= $size ?></td>
						</tr>
						<tr>
							<th class="fp-modal__table-subject">アレルギー表示義務7品目</th>
							<td class="fp-modal__table-desc"><?= $allergy ?></td>
						</tr>
						<tr>
							<th class="fp-modal__table-subject">賞味期限</th>
							<td class="fp-modal__table-desc"><?= $consume ?></td>
						</tr>
						<tr>
							<th class="fp-modal__table-subject">保存方法</th>
							<td class="fp-modal__table-desc"><?= $preservation ?></td>
						</tr>
						<?php else: ?>
						<tr>
							<th class="fp-modal__table-subject">アレルギー表示義務7品目</th>
							<td class="fp-modal__table-desc"><?= $allergy ?></td>
						</tr>
						<tr>
							<th class="fp-modal__table-subject">消費期限</th>
							<td class="fp-modal__table-desc"><?= $consume ?></td>
						</tr>
						<?php endif; ?>
						<tr>
							<th class="fp-modal__table-subject">取り扱い店舗</th>
							<td class="fp-modal__table-desc"><?= $shop ?></td>
						</tr>
					</tbody>
				</table>
				<?php if(!empty($cap)): ?>
				<p class="fp-modal__caption"><?= $cap ?></p>
				<?php endif; ?>
				<?php if(!empty($url) || count($items) !== 0): ?>
				<p class="fp-modal__last-btn">
					<a href="https://shop.hokkaido-miyage.jp/collections/prateria" target="_blank" class="fp-modal__link fp-modal__link--w">
						<span class="fp-modal__link--main-sm">sweets garden Prateriaの通販商品一覧を<br>オンラインショップで見る</span>
						<span class="fp-modal__link--sub">北海道特産品カタログWEB</span>
					</a>
				</p>
				<?php endif; ?>
			</div>
		</article>
		<button class="fp-modal__close js-modal-close"><span class="fp-modal__close-text">×</span></button>
	</div>
	<div class="fp-modal__bg js-modal-bg"></div>
</div>