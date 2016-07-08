<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php  wp_title('|', true, 'right'); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!-- stylesheets should be enqueued in functions.php -->
	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
	<div class="container">
		<h2>
			<a href="<?php echo home_url( '/' ); ?>">
				<?php bloginfo( 'name' ); ?>
			</a>
		</h2>

		<div class="hamburger">
			<span></span>
			<span></span>
			<span></span>
		</div>
		
		<nav class="mainNav">
			<ul>
				<li><a href="<?php echo home_url(); ?>">home</a></li>
				<li><a href="<?php echo get_post_type_archive_link('recipes'); ?>">recipes</a></li>
				<li><a href="<?php echo home_url(); ?>/#contact">contact</a></li>
			</ul>
		</nav>
	</div> <!-- /.container -->
</header><!--/.header-->

