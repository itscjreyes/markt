<?php get_header();  ?>

<div class="splash">
	<div class="container">
		<?php $splashImg = get_field('splash_image') ?>
		<div class="splashBlock" style="background-image: url('<?php echo $splashImg['url'] ?>')">
			<div class="wrapper">
				<h1><?php the_field('tagline') ?></h1>
				<a href="#featured"><button class="seeFeatured">Recipes</button></a>
			</div>
		</div>
	</div>
</div>

<div class="bio">
	<div class="container">
		<div class="bioSection">
			<h2><?php the_field('name') ?></h2>
			<p><?php the_field('bio') ?></p>
			<div class="socialMedia">
				<a href="<?php the_field('instagram', 'option') ?>"><i class="fa fa-instagram"></i></a>
				<a href="<?php the_field('twitter', 'option') ?>"><i class="fa fa-twitter"></i></a>
				<a href="<?php the_field('facebook', 'option') ?>"><i class="fa fa-facebook"></i></a>
				<a href="<?php the_field('pinterest', 'option') ?>"><i class="fa fa-pinterest"></i></a>
			</div>
		</div>
		<?php $image1 = get_field('main_image') ?>
		<div class="image1" style="background-image: url('<?php echo $image1['url'] ?>')"></div>
	</div>
</div>


<div class="recipes" id="featured">
	<div class="container">
		<?php 
			$foodArgs = array(
				'post_type' => 'recipes',
				'posts_per_page' => 6,
				'order' => 'DESC',
				'orderby' => 'date'
				);
			$foodQuery = new WP_Query($foodArgs);
			if ($foodQuery->have_posts()) {
				while ($foodQuery->have_posts()) {
					$foodQuery->the_post();
					?>
					<?php $foodImg = get_field('food_image') ?>
					<figure>
					<a href="<?php the_permalink(); ?>">
						<div class="foodImg" style="background-image: url('<?php echo $foodImg['url'] ?>')"></div>
						<figcaption>
							<h3><?php the_title(); ?></h3>
						</figcaption>
					</a>
					</figure>
					<?php
				}
			}
			wp_reset_postdata();
		 ?>
	</div>
	<a href="<?php echo get_post_type_archive_link('recipes'); ?>" class="seeAll"><button>see all</button></a>
</div>


<div class="contact" id="contact">
	<div class="container">
		<?php $image2 = get_field('second_image') ?>
		<div class="image2" style="background-image: url('<?php echo $image2['url'] ?>')"></div>
		<div class="contactForm">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end the loop?>
		</div>
	</div>
</div>

<?php get_footer(); ?>