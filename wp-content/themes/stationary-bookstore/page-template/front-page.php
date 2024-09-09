<?php
/**
 * Template Name: Custom Home Page
 *
 * @package Stationary Bookstore
 * @subpackage stationary_bookstore
 */

get_header(); ?>

<main id="tp_content" role="main">
	<?php get_template_part( 'template-parts/home/slider' ); ?>

	<?php get_template_part( 'template-parts/home/home-content' ); ?>
</main>

<?php get_footer();