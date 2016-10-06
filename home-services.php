<?php 

/* Template Name: home-services */ 
?>
<section>
	<div class="container">
   		<div class="row">   			
			<!-- section -->
			<div class="col-md-12 media">
				<div class="media-body text-left">
					<h2>Bienvenue!</br><small> au studio Bklex</small></h2>
					<p class="hidden-xs lead">À deux pas de la porte de Montreuil, nous vous offrons nos services de post-production audiovisuelles dans un cadre conviviale et professionel. Ouvert 7j/7, à vôtre écoute pour réaliser vos projets dans les délais qui vous conviennent.</p>
					<p class="visible-xs lead">À deux pas de la porte de Montreuil, Ouvert 7j/7, à vôtre écoute pour réaliser vos projets dans les meilleurs délais.</p>
					<a class="btn btn-default visible-xs col-xs-6 col-xs-offset-3 margin-bottom-20" href="#nous-contacter" role="button">Accès »</a>
				</div>

				<div class ="hidden-xs media-right media-middle">
					<a href ="#nous-contacter">
						<img class="media-object thumbnail" src="<?php echo get_template_directory_uri()?>/img/paris_small.jpg" alt="carte de Paris">
					</a>
				</div>
			</div>
			<section class="hidden-xs col-sm-12 col-md-4 text-left">
				<h3>Mixage</h3>
				<p class="hidden-xs">Le studio Bklex mixe vos reportages, documentaires ou toutes autres emissions de télévision. Nous vous livrons un fichier calibré aux normes de la chaîne prêt pour la diffusion. Nous faisons aussi la diffusion web. Le studio est equipé 5.1 mais nous n'avons pas la prétention d'un audit cinéma, cependant nous faisons des premixes 5.1 pour vos projets plus ambitieux.<p>
					<a class="btn btn-default" href="#nos-services/1" role="button">+ D'infos »</a><span>  </span><a class="btn btn-default" href="#tarifs" role="button">Tarifs <span class="caret"></span> </a></p>	
			</section>
			<section class="section hidden-xs col-sm-12 col-md-4 text-left">
				<h3>Prise de voix</h3>
				<p>Notre studio comporte deux cabines de prise de voix, permettant d'enregistrer plusieurs acteurs simultanément. Une cabine est également équipé d'un écran pour le doublage. Chacune de nos cabines bénéficie d'une accoustique professionelle, elles sont aussi adaptées à la prise d'instruments ou de chanteurs.</p>
					<a class="btn btn-default" href="#nos-services/2" role="button">+ D'infos »</a><span>  </span><a class="btn btn-default" href="#tarifs" role="button">Tarifs <span class="caret"></span> </a></p>	
			</section>
			<section class="col-sm-12 col-md-4">
					
					<?php the_widget( 'widget-area-1' ); ?>
					
			</section>
			<!-- /section -->
		</div>
	</div>
</section>

<section>
	<div class="section container">
		<div class="row featurette">
	        <div class="col-md-7 text-left">
	        <div class="visible-xs"><?php include(locate_template('dotted-line.svg')); ?></div>
	        <h2 class="featurette-heading">Mixage <span class="text-muted small">Nettoyage/Mise au norme/PAD</span></h2>
	        <div class="visible-xs"><?php include(locate_template('dotted-line.svg')); ?></div>
	          <p class="lead">La cabine de mixage bénéficie d'un traitement acoustique professionelle, garantissant une image stéréo fidèle et la portabilité du mix. Un Échantillon des mix dans la vidéo.</p>
	          <dl class="hidden-xs dl-horizontal">
	          	<dt class="lead">Nos Clients</dt>
	          	</br>
  				<dt>Jufox</dt>
  				<dd></br>Jufox nous on fait confiance pour le mixage et la mise au norme des émissions plein de ciné et Plan séance. Deux émissions diffusées sur France 2 et Arte,dont vous pouvez visioner des extraits via la vidéo.</dd>
  
  				<dt>Bleu Kristal Media</dt>
  				<dd>Pour BKM nous avons recu les réalisateurs de l'émission À vous de voir diffusée sur France 5.</dd>
  				</br>
  				<dt>Melocoton</dt>
  				<dd>Pour Melocoton nous avons Mixé la web serie de Kev' Adams Kick'on.</dd>
			  </dl>

	        </div>
	        <div class="col-md-5">
	          <div id="vimeo-vid" class="featurette-video img-responsive center-block">
	          </div>
	        </div>
	      </div>
      </div>
</section>

<section>
	<div class="section container">
		<div class="row featurette">
		    <div class="col-md-7 col-md-push-5 text-left">
		    <div class="visible-xs"><?php include(locate_template('dotted-line.svg')); ?></div>
	    	    <h2 class="featurette-heading">Enregistrement <span class="text-muted">Voix off/Chant/instruments</span></h2>
	    	<div class="visible-xs"><?php include(locate_template('dotted-line.svg')); ?></div>
	    	    <p class="hidden-xs lead">Deux micros de haute qualité sont disponibles pour vos enregistrements de voix, un micro à lampe conçu spécialement pour le studio, ainsi qu'un neumann U87 de 1986 une vrai légende parmi les micros. Le tout passe par le pré-ampli Bk.lex à lampe.</p>

	    	    <p class="visible-xs lead">Cabine de speak proffessionelle. Micros U87 et Micro tube custom Bklex.</p>
	    	</div>
	    	<div class="col-md-5 col-md-pull-7">
	    	    <img class="featurette-image img-responsive center-block" src ="<?php echo get_template_directory_uri()?>/img/prise-voix.jpg">
	   	    </div>
	   	</div>
   	</div>
</section>
