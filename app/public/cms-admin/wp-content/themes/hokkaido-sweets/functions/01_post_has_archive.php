<?php
function post_has_archive( $args, $post_type ) {
	if ('post' == $post_type) {
        global $wp_rewrite;
        $archive_slug = 'news';
        $args['label'] = 'お知らせ';
        $args['has_archive'] = $archive_slug;
        $archive_slug = $wp_rewrite->root.$archive_slug;
        $feeds = '(' . trim( implode('|', $wp_rewrite->feeds) ) . ')';
        add_rewrite_rule("{$archive_slug}/?$", "index.php?post_type={$post_type}", 'top');
        add_rewrite_rule("{$archive_slug}/feed/{$feeds}/?$", "index.php?post_type={$post_type}".'&feed=$matches[1]', 'top');
        add_rewrite_rule("{$archive_slug}/{$feeds}/?$", "index.php?post_type={$post_type}".'&feed=$matches[1]', 'top');
        add_rewrite_rule("{$archive_slug}/{$wp_rewrite->pagination_base}/([0-9]{1,})/?$", "index.php?post_type={$post_type}".'&paged=$matches[1]', 'top');
    }
    return $args;
}
add_filter("register_post_type_args", "post_has_archive", 10, 2 );