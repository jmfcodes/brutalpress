<?php
/*
 * This is what pages look like.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */
?>


<?php get_header(); ?>

<div class="page">

  <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
      get_template_part( 'content', get_post_format() );

		endwhile; endif;
  ?>

</div>

<?php get_footer(); ?>
