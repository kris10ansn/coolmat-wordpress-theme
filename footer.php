<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coolmat
 */

?>

<footer>
	<div class="copyright">&copy;<?= date("Y") ?> Coolmat All Rights Reserved</div>
	<div class="socials">
		<a href="https://facebook.com/coolmat">
			<img src="<?= get_template_directory_uri() . "/assets/facebook-icon.svg" ?>" alt="facebook">
		</a>
		<a href="https://instagram.com/coolmat">
			<img src="<?= get_template_directory_uri() . "/assets/instagram-icon.svg" ?>" alt="instagram">
		</a>
	</div>
</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>