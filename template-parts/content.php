<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package coolmat
 */

require_once __DIR__ . "/../util/get_custom_field.php";

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("entry"); ?>>
	<header>
		<h1><?php the_title() ?></h1>
		<div class="menu-number"><?php get_custom_field("menu_item_number") ?></div>
		<div class="price"><?php the_content() ?></div>
	</header>

	<img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title() ?>">
</article><!-- #post-<?php the_ID(); ?> -->