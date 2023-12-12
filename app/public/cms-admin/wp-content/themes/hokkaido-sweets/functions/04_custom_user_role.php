<?php

if (!current_user_can('administrator')) {
	function remove_menus () {
		global $menu;
		remove_menu_page('edit.php?post_type=page');
		remove_menu_page('edit.php?post_type=mw-wp-form');
		remove_submenu_page( 'edit.php', 'edit-tags.php?taxonomy=post_tag' );
		remove_menu_page('edit-comments.php' );
		remove_menu_page('tools.php' );
		remove_menu_page("admin.php?page=aiowpsec_two_factor_auth_user");
	}
	add_action('admin_menu', 'remove_menus');

	function remove_default_post_screen_metaboxes() {
		remove_meta_box( 'postcustom','post','normal' );
		remove_meta_box( 'postexcerpt','post','normal' );
		remove_meta_box( 'commentstatusdiv','post','normal' );
		remove_meta_box( 'commentsdiv','post','normal' );
		remove_meta_box( 'trackbacksdiv','post','normal' );
		remove_meta_box( 'authordiv','post','normal' );
		remove_meta_box( 'slugdiv','post','normal' );
		remove_meta_box( 'revisionsdiv','post','normal' );
		remove_meta_box( 'tagsdiv-post_tag' , 'post' , 'side' );
	}
	add_action('admin_menu','remove_default_post_screen_metaboxes');

	function delete_column($columns) {
		unset($columns['comments'],$columns['tags']);
		return $columns;
	}
	add_filter( 'manage_posts_columns', 'delete_column');
}