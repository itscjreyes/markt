<?php get_header();  ?>

<div class="splash">
	<div class="container clearfix">
		<div class="splashBlock">
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
		</div>
		<?php $image1 = get_field('main_image') ?>
		<div class="image1" style="background-image: url('<?php echo $image1['url'] ?>')"></div>
	</div>
</div>

<div class="divider"></div>

<div class="recipes" id="featured">
	<div class="container">
		<?php 
			$foodArgs = array(
				'post_type' => 'recipes',
				'posts_per_page' => 6,
				'order' => 'ASC',
				'orderby' => 'date'
				);
			$foodQuery = new WP_Query($foodArgs);
			if ($foodQuery->have_posts()) {
				while ($foodQuery->have_posts()) {
					$foodQuery->the_post();
					?>
					<?php $foodImg = get_field('food_image') ?>
					<figure>
						<div class="foodImg" style="background-image: url('<?php echo $foodImg['url'] ?>')"></div>
						<figcaption>
							<h3><?php the_title(); ?></h3>
						</figcaption>
					</figure>
					<?php
				}
			}
			wp_reset_postdata();
		 ?>
		<a href="<?php echo get_post_type_archive_link('recipes'); ?>"><button class="seeAll">all</button></a>
	</div>
</div>

<div class="divider"></div>

<div class="contact" id="contact">
	<div class="container">
		<?php $image2 = get_field('second_image') ?>
		<div class="image2" style="background-image: url('<?php echo $image2['url'] ?>')"></div>
		<div class="contactForm">
			
		</div>
	</div>
</div>

<?php get_footer(); ?>