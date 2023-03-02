<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
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
	<script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/jquery.inview.min.js" defer></script>
	<script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/app.js" defer></script>
	<?php if(is_home() || is_front_page()): ?>
	<script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/front-page.js" defer></script>
	<?php endif; ?>
	<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/app.css">
</head>
<body>
	<div class="wrapper">
		<header class="header js-header js-front-page-header">
			<a href="<?= URL_HOME ?>" class="header__logo">
				<img src="<?= URL_SVG ?>logo.svg" alt="sweets garden Prateria" loading="lazy">
			</a>
			<div class="header__contents">
				<nav class="header-nav">
					<ol class="header-nav__list">
						<li class="header-nav__item">
							<a href="#shop" class="header-nav__link">
								<p class="header-nav__sub">Store & access</p>
								<p class="header-nav__main">店舗情報／アクセス</p>
							</a>
						</li>
						<li class="header-nav__item">
							<a href="#news" class="header-nav__link">
								<p class="header-nav__sub">NEWS</p>
								<p class="header-nav__main">お知らせ</p>
							</a>
						</li>
						<li class="header-nav__item">
							<a href="#contact" class="header-nav__link">
								<p class="header-nav__sub">contact</p>
								<p class="header-nav__main">お問い合わせ</p>
							</a>
						</li>
					</ol>
				</nav>
				<a href="" class="header-nav__link header-nav__link--cart">
					<img src="<?= URL_SVG ?>icon-cart.svg" alt="">
				</a>
				<a href="" class="header-nav__link header-nav__link--online">
					<p class="header-nav__sub c-white">online shop</p>
					<p class="header-nav__main c-white">オンラインショップ</p>
				</a>
			</div>
		</header>
		<main class="container">