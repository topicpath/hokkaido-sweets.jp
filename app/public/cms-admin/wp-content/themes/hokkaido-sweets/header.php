<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Google tag (gtag.js) -->
	<script async src="   https://www.googletagmanager.com/gtag/js?id=G-1C9YJPD709  "></script>
	<script>
	 window.dataLayer = window.dataLayer || [];
	 function gtag(){dataLayer.push(arguments);}
	 gtag('js', new Date());

	 gtag('config', 'G-1C9YJPD709');
	</script>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Style-Type" content="text/css">
	<meta http-equiv="Content-Script-Type" content="text/javascript">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="shortcut icon" href="<?= URL_FAVICON ?>">
    <link rel="apple-touch-icon-precomposed" href="<?= URL_TOUCH_ICON ?>">
	<?php wp_head(); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer></script>
	<script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/swiper-bundle.min.js" defer></script>
	<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/swiper-bundle.min.css">
	<script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/smooth-scroll.polyfills.min.js" defer></script>
	<script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/app.js" defer></script>
	<?php if(is_home() || is_front_page()): ?>
	<script type="text/javascript" src="https://player.vimeo.com/api/player.js" defer></script>
	<script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/front-page.js" defer></script>
	<?php endif; ?>
	<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/app.css">
	<?php global $local_css, $local_js; ?>
	<?php if (isset($local_css)): ?>
	<?php foreach($local_css as $css): ?>
	<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/pages/<?= $css ?>">
	<?php endforeach; ?>
	<?php endif; ?>
	<?php if (isset($local_js)): ?>
	<?php foreach($local_js as $js): ?>
	<script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/pages/<?= $js ?>" defer></script>
	<?php endforeach; ?>
	<?php endif; ?>
</head>
<body>
	<div class="wrapper">
		<?php
			if(is_home() || is_front_page()) {
				$header_add_class = " js-front-page-header";
				$container = "";
			}else {
				$header_add_class = "";
				$container = " secondary";
			}
		?>
		<header class="header js-header<?= $header_add_class ?>">
			<a href="<?= URL_HOME ?>" class="header__logo">
				<img src="<?= URL_SVG ?>logo.svg" alt="sweets garden Prateria" loading="lazy">
			</a>
			<div class="header__contents js-header-nav">
				<nav class="header-nav">
					<ol class="header-nav__list">
						<li class="header-nav__item">
							<a href="<?= URL_SHOP ?>" class="header-nav__link js-smooth-link">
								<p class="header-nav__sub">Store & access</p>
								<p class="header-nav__main">店舗情報／アクセス</p>
							</a>
						</li>
						<li class="header-nav__item">
							<a href="<?= URL_NEWS ?>" class="header-nav__link">
								<p class="header-nav__sub">NEWS</p>
								<p class="header-nav__main">お知らせ</p>
							</a>
						</li>
						<li class="header-nav__item">
							<a href="<?= URL_RECRUIT ?>" class="header-nav__link">
								<p class="header-nav__sub">Recruitment</p>
								<p class="header-nav__main">採用情報</p>
							</a>
						</li>
						<li class="header-nav__item">
							<a href="<?= URL_CONTACT ?>" class="header-nav__link">
								<p class="header-nav__sub">Contact</p>
								<p class="header-nav__main">お問い合わせ</p>
							</a>
						</li>
						<li class="header-nav__item pc">
							<a href="https://shop.hokkaido-miyage.jp/" target="_blank" class="header-nav__btn">
								<p class="header-nav__btn__main">
									<span class="header-nav__btn__main--icon"><img src="<?= URL_SVG ?>icon-cart.svg" alt=""></span>
									<span class="header-nav__btn__main--text">オンラインショップ</span>
								</p>
								<p class="header-nav__btn__sub">北海道特産品カタログWEB</p>
							</a>
						</li>
						<li class="header-nav__item header-nav__item__btn sp">
							<a href="https://shop.hokkaido-miyage.jp/collections/prateria" target="_blank" class="fp-modal__link fp-modal__link--w">
								<span class="fp-modal__link--main-sm">sweets garden Prateriaの通販商品一覧を<br>オンラインショップで見る</span>
								<span class="fp-modal__link--sub">北海道特産品カタログWEB</span>
							</a>
						</li>
					</ol>
				</nav>
			</div>
			<div class="sp">
				<a href="https://shop.hokkaido-miyage.jp/" target="_blank" class="header-nav__btn">
					<p class="header-nav__btn__main">
						<span class="header-nav__btn__main--icon"><img src="<?= URL_SVG ?>icon-cart.svg" alt=""></span>
						<span>オンライン<br>ショップ</span>
					</p>
				</a>
			</div>
			<div class="js-header-nav__btn">
				<div class="js-header-nav__btn-body"></div>
			</div>
		</header>
		<main class="container<?= $container ?>">