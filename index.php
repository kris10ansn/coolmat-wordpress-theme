<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package coolmat
 */

function get_category_description($category_name)
{
	return category_description(
		get_cat_ID($category_name)
	);
}

get_header();

query_posts('post_type=menu_item&posts_per_page=1&orderby=rand');

if (have_posts()) {
	the_post();
}

?>

<section id="hero">
	<div class="inner">
		<h1><?php bloginfo("name") ?> <span class="colored"><?= get_the_title() ?></span></h1>
		<p><span class="colored"><?php bloginfo("name") ?></span> <?php bloginfo("description") ?></p>
	</div>
</section>

<?php

query_posts('post_type=intro');
if (have_posts()) {
	the_post();
}

?>
<section id="intro">
	<div class="inner">
		<h1><?= get_the_title() ?></h1>
		<p><?= get_the_content() ?></p>
	</div>
</section>

<section id="menu">
	<h1 class="section-title"><?= get_category_description("Menu") ?></h1>

	<div class="grid">
		<?php
		query_posts([
			"post_type" => "menu_item",
			"order_by" => "meta_value",
			"meta_key" => "menu_item_number",
			"order" => "DESC"
		]);

		if (have_posts()) {
			while (have_posts()) {
				the_post();
				get_template_part('template-parts/content', get_post_type());
			}

			the_posts_navigation();
		} else {
			get_template_part('template-parts/content', 'none');
		}
		?>
	</div>

</section>

<section id="directions">
	<div class="inner">
		<h1 class="section-title"><?= get_category_description("Locations") ?></h1>

		<div class="locations">
			<?php
			query_posts('post_type=location');

			if (have_posts()) {
				while (have_posts()) {
					the_post();
			?>

					<div class="location">
						<iframe src="<?php the_field("map") ?>" class="map" width="710" height="720" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

						<div class="info">
							<h2>Business Name</h2>
							<p><?php the_field("business_name") ?></p>
							<h2>Address</h2>
							<p><?php the_field("adress") ?></p>
							<h2>Phone Number</h2>
							<p><?php the_field("phone_number") ?></p>
							<h2>Direction</h2>
							<p><?php the_field("direction") ?></p>
						</div>
					</div>

			<?php  }
			} ?>
		</div>
	</div>
</section>

<?php
get_footer();
