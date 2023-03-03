<?php

add_action('init', function () {
	/**
	 * General Settings
	 */
	define('NAME_SITE', get_bloginfo('name'));
	define('URL_HOME', home_url('/'));
	define('NAME_HOME', '');

	/**
	 * Break Point
	 */
	define('BASE_BREAKPOINT', 768);

	/**
	 * ASSETS
	 */
	define('URL_ASSETS', get_template_directory_uri() . '/assets/');
	define('URL_IMAGES', URL_ASSETS . 'images/');
	define('URL_CSS', URL_ASSETS . 'css/');
	define('URL_JS', URL_ASSETS . 'js/');
	define('URL_FILE', URL_ASSETS . 'file/');

	define('URL_COMMON_IMAGES', URL_IMAGES . 'common/');
	define('URL_FRONT_PAGE_IMAGES', URL_IMAGES . 'front-page/');
	define('URL_PAGES_IMAGES', URL_IMAGES . 'pages/');
	define('URL_TEMP_IMAGES', URL_IMAGES . 'temp/');
	define('URL_SVG', URL_IMAGES . 'svg/');

	define('URL_OGIMAGE', URL_IMAGES . 'ogp.jpg');
	define('URL_OGIMAGE_WIDTH', 1200);
	define('URL_OGIMAGE_HEIGHT', 630);

	define('URL_FAVICON', URL_IMAGES . 'favicon.ico');
	define('URL_TOUCH_ICON', URL_IMAGES . 'apptouch.png');
	define('URL_NO_IMAGE', URL_IMAGES . 'noimage.png');
	define('URL_APP_JS', URL_JS . 'app.js');
	define('URL_APP_CSS', URL_CSS . 'app.css');
	define('URL_LOGO', URL_SVG . 'logo.svg');
	define('URL_LOGO_SP', URL_SVG . 'logo-sp.svg');
	define('NAME_LOGO', '');

	/**
	 * CONTENTS
	 */
	define("URL_SHOP", "#shop");
	define("URL_NEWS", "#news");
	define("URL_CONTACT", "mailto:prateria@hokkaido-sweets.co.jp");
	define("URL_CART", "");
	define("URL_ONLINE_SHOP", "");
	define("URL_PRIVACY", "");
	define("URL_LAW", "");

	/**
	 * SNS
	 */

	define('URL_FACEBOOK', "");
	define('URL_FACEBOOK_ICON', URL_SVG . "icon-facebook.svg");
	define('URL_INSTAGRAM', "");
	define('URL_INSTAGRAM_ICON', URL_SVG . "icon-instagram.svg");

	// share
	define('URL_TWITTER_SHARE', "https://twitter.com/intent/tweet");
	define('URL_FACEBOOK_SHARE', "https://www.facebook.com/sharer/sharer.php");
	define('URL_LINE_SHARE', "https://social-plugins.line.me/lineit/share");

	/**
	 * file
	 */


}, 0);
