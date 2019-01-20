<?php
/**
 * The header file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo get_bloginfo( 'name' ); ?></title>
  <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
  <meta name="author" content="<?php /* the_author() */ ?>">
  <meta name="viewport" content="width=view-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">
	<?php wp_head(); ?>
</head>

<body class="-colorLinks">
  <header class="-invertColor">
    <h1 role="banner" class="-large"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
    <h2><?php echo get_bloginfo( 'description' ); ?></h2>

    <nav role="navigation" class="-medium">
      <ul>
    
				<?php wp_list_pages( '&title_li=' ); ?>

      </ul>
    </nav>
  </header>
