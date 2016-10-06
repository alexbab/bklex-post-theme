<?php 

/* Template Name: Home-one-page */ 


get_header(); ?>

	<main role="main">
      <div id="intro" class="main-section section">
        <?php include(locate_template('grid-svg.php')); ?>
        <?php include(locate_template('grid2-svg.php')); ?>
        <div id="intro-layer">
        <?php include(locate_template('bklex-svg.php')); ?>
          <a id = "post-prod" href = "#nos-services"><h1>Post-Production</h1></a>
        </div>
      </div>
    			<?php
              $menu_items = wp_get_nav_menu_items('main');
              $i = 0;
              if( $menu_items ) {
              foreach ($menu_items as $menu_item ) {
                $args = array('p' => $menu_item->object_id,'post_type' => 'any');
                 
                global $wp_query;
                $wp_query = new WP_Query($args);

                $slug = sanitize_title($menu_item->title);
                switch ($slug) {
                  case "nos-services":
                    $templatePart = 'services';
                    break;
                  case "le-studio":
                    $templatePart = 'studio';
                    break;
                  case "nous-contacter":
                    $templatePart = 'contact';
                    break;
                  case "tarifs":
                    $templatePart = 'tarifs';
                    break;
                  case "lequipe":
                    $templatePart = 'lequipe';
                    break;
                  default:
                  
                    $templatePart = ($menu_item->title == '') ? 'pages' : $menu_item->object;

              }  

                 
              ?>
                <!-- section -->
                <div class="main-section section" id="<?php echo $slug;?>" data-anchor="<?php echo $menu_item->slug;?>">
                      <?php 
                        if ( have_posts() ){

                           include(locate_template('home-'.$templatePart.'.php'));
                           $i++;
                      } ?>
                </div>
                <!-- /section -->
        <?php }}; ?>
    					

	    </main>
    </div><!-- Wrapper -->  
  <?php get_footer(); ?>


