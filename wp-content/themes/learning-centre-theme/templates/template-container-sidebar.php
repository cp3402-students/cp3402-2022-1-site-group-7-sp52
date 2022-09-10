<?php

/**
 * Template Name: Container with Sidebar Template
 */

get_header();
?>

<div class="container">
	<div class="row">
		<div class="col-md-8 order-md-2 col-sm-12">
			<?php
			get_template_part('template-parts/content', 'page');
			?>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>