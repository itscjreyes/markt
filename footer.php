<footer>
  <div class="container">
	<p><a href="http://cjreyes.ca">CJ Reyes</a> &copy; <?php echo date('Y'); ?></p>
	<h5>
		<a href="<?php echo home_url( '/' ); ?>">
			<?php bloginfo( 'name' ); ?>
		</a>
	</h5>
	<div class="socialMedia">
		<a href="<?php the_field('instagram', 'option') ?>"><i class="fa fa-instagram"></i></a>
		<a href="<?php the_field('twitter', 'option') ?>"><i class="fa fa-twitter"></i></a>
		<a href="<?php the_field('facebook', 'option') ?>"><i class="fa fa-facebook"></i></a>
		<a href="<?php the_field('pinterest', 'option') ?>"><i class="fa fa-pinterest"></i></a>
	</div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/scrollreveal.js/3.1.4/scrollreveal.min.js"></script>
<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>