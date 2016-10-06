<?php 

/* Template Name: home-page */ 
?>
	<div
	<div class=slide>
		<div class="container">
       		<div class="row">   			
				<!-- section -->
				<section class="col-md-12">

					<?php while(have_posts()) : the_post(); ?>

						<h2 class=”post-title”><?php the_title(); ?></h2>
						<div class=”post-content”><?php the_content(); ?></div>
					
					<?php endwhile; ?>


				</section>
				<!-- /section -->
			</div>
		</div>
	</div>
