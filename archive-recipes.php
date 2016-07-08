<?php get_header(); ?>

<div class="archiveRecipes">
	<div class="container">
		<?php 
			$foodArgs = array(
				'post_type' => 'recipes',
				'posts_per_page' => -1,
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
</div>

<?php get_footer(); ?>