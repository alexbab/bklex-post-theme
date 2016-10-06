<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="col-md-12">
			
				<h1><?php _e( 'Latest Posts', 'bklex' ); ?></h1>

				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>
					
		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
