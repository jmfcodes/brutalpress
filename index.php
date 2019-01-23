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
 * This template is based on https://emsenn.neocities.org/brutstrap/
 * And created with help from https://www.taniarascia.com/developing-a-wordpress-theme-from-scratch/
 *
 */

get_header(); ?>

		<section>

			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();

				get_template_part( 'content', get_post_format() );

			endwhile; endif;
			?>

		</section> <!-- /.blog-main -->

<?php get_footer(); ?>
