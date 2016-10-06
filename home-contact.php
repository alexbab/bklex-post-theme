<?php 

	/* Template Name: home-contact */ 
?>
<div class="container">
   	<div id="contact" class="row">

   		<div class="col-md-12">
			<?php while(have_posts()) : the_post(); ?>
				<h2 class=”post-title”><?php the_title(); ?></h2>			
			<?php endwhile; ?>
		<?php include(locate_template('dotted-line.svg')); ?>
		</div>


		<div class= "hidden-xs col-md-3 text-left">
			<h3>Infos</h3>
			<p><h5>Adresse :</h5> 
			22 rue Paul Bert</br>
			93100 Montreuil</p>
			<p><h5>Accès :</h5>
			<img src="<?php echo get_template_directory_uri()?>/img/m9-icon.png" width="20px"/> Robespierre</br>
			<img src="<?php echo get_template_directory_uri()?>/img/m9-icon.png" width="20px"/> Porte de Montreuil</br>
			<img src="<?php echo get_template_directory_uri()?>/img/m3-icon.png" width="20px"/> Gallieni
			</p>
			<h5>Téléphone :</h5>
			<span class="protectedNumber" title="+33 6 64 50 66 19"></span>
			<h5>E-mail :</h5>
			<a id="e-mail-button" class="btn btn-default" href="#nous-contacter" role="button">Découvrir l'e-mail</a>
			<div id="e-mail"></div>
		</div>

		<div class= "visible-xs text-left">
			<div class="col-xs-6">
				<p><h5>Adresse :</h5> 
				22 rue Paul Bert</br>
				93100 Montreuil</p>
			</div>
			<div class="col-xs-6">
				<p><h5>Accès :</h5>
				<img src="<?php echo get_template_directory_uri()?>/img/m9-icon.png" width="20px"/> Robespierre</br>
				<img src="<?php echo get_template_directory_uri()?>/img/m9-icon.png" width="20px"/> Porte de Montreuil</br>
				<img src="<?php echo get_template_directory_uri()?>/img/m3-icon.png" width="20px"/> Gallieni
				</p>
			</div>
			<div class="col-xs-6">
				<h5>Téléphone :</h5>
				<span class="protectedNumber" title="+33 6 64 50 66 19"></span>
				<h5>E-mail :</h5>
				<a id="e-mail-button" class="btn btn-default margin-bottom-20" href="#nous-contacter" role="button">Découvrir l'e-mail</a>
				<div id="e-mail"></div>
			</div>
		</div>

		<div class ="col-xs-12 col-md-9">

				<div id="map-overlay"></div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d168221.52476567865!2d2.1461697319385875!3d48.79217338599612!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaea1e7484e078d26!2sStudio+BK.Lex!5e0!3m2!1sfr!2sbe!4v1474382390638" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</div>