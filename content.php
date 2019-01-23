<?php
/*
 * This is where blog posts live.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */
?>

<div class="blog-post">
	<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

 <?php the_content(); ?>

</div><!-- /.blog-post -->
