<?php get_header();  ?>

<div class="splash">
	<div class="container">
		<?php $foodImg = get_field('food_image') ?>
		<div class="foodHeadImg" style="background-image: url('<?php echo $foodImg['url'] ?>')">
			<div class="singleTitle">
				<h1><?php the_title(); ?></h1>
				<a href="<?php echo get_post_type_archive_link('recipes'); ?>"><button class="seeFeatured">See All</button></a>
			</div>
			<div class="wrapper">
				<p class="nav-previous"><?php previous_post_link('%link', '<i class="fa fa-angle-left"></i>'); ?></p>
				<p class="nav-next"><?php next_post_link('%link', '<i class="fa fa-angle-right"></i>'); ?></p>
			</div>
		</div>
	</div>
</div>

<?php echo the_field('social_sharing') ?>

<div class="main">
	<div class="container">
		<div class="stats">
			<p class="cookTime">TIME: <?php the_field('cook_time') ?></p> 
			<p class="servings">SERVINGS: <?php the_field('serving') ?></p>
		</div>
		
		<div class="recipe">
			<div class="ingredients">
				<h3>Ingredients</h3>
				<?php the_field('ingredients') ?>
			</div>

			<div class="steps">
				<h3>Steps</h3>
				<?php the_field('steps') ?>
			</div>
		</div>

		<?php // Start the loop ?>
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div class="blog">
			<h3>How I did it</h3>
			<div class="content">
				<?php the_content(); ?>
			</div>
		</div>
		<?php endwhile; // end the loop?>
	</div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>