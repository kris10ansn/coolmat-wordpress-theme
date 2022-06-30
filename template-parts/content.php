<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package coolmat
 */


global $menu_index;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class("entry"); ?>>
	<header>
		<h1><?php the_title() ?></h1>
		<div class="menu-number"><?= $menu_index ?></div>
		<div class="price"><?php the_content() ?></div>
	</header>

	<img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title() ?>">
</article><!-- #post-<?php the_ID(); ?> -->