<?php get_header();  ?>

<div class="splash">
	<div class="container">
		<h1>we are <?php bloginfo('name'); ?></h1>
		<?php $mainImg = get_field('main_image') ?>
		<div class="splashImg" style="background-image: url('<?php echo $mainImg['url'] ?>')"></div>
	</div>
</div>

<div class="works">
	<div class="container">
		<?php $workImg = get_field('work_image') ?>
		<div class="workImg" style="background-image: url('<?php echo $workImg['url'] ?>')"></div>
		<h3><?php the_field('work_title') ?></h3>
	</div>
</div>

<div class="main">
	<div class="container">

		<?php // Start the loop ?>
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; // end the loop?>
	</div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>