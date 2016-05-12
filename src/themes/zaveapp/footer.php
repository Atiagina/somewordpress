<!-- starting footer -->

<div class="container-fluid full-width" id="section14" >
        <div class="row row-fluid footerleft">
                <div class="col-xs-12 col-sm-3">
                    <a href="<?php $url = home_url();
echo esc_url( $url ); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/zavelogo.png" id="footerlogo" alt="Zave App logo" height=40></a>
                </div>
<div class="col-xs-12 col-sm-2">
            <?php 
		$query = new WP_Query( 'pagename=aviso-de-privacidad' );
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
                echo '<div class="centerbutton" type="button" data-toggle="modal" data-target="#privasidadModal">';
                echo get_the_title();
                echo '</div>';
                echo '<div id="privasidadModal" class="modal fade">';
                echo '<div class="modal-dialog">';
                echo '<div class="modal-content">';

                echo '<div class="modal-header">';
                echo '<button type="button" class="close" data-dismiss="modal">&times;</button>';
				echo '<h4 class="modal-title">' . get_the_title() . '</h4>';
                echo '</div>';
                echo '<div class="modal-body">';
                the_content();
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
			}
		}

		/* Restore original Post Data */
		wp_reset_postdata();
		?>
     
                        </div> <!-- end of col -->
                    
<div class="col-xs-12 col-sm-2">
<?php 
		$query = new WP_Query( 'pagename=terminos-y-condiciones' );
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
                echo '<div type="button" class="centerbutton" data-toggle="modal" data-target="#terminosModal">';
                echo get_the_title();
                echo '</div>';
                echo '<div id="terminosModal" class="modal fade">';
                echo '<div class="modal-dialog">';
                echo '<div class="modal-content">';

                echo '<div class="modal-header">';
                echo '<button type="button" class="close" data-dismiss="modal">&times;</button>';
				echo '<h4 class="modal-title">' . get_the_title() . '</h4>';
                echo '</div>';
                echo '<div class="modal-body">';
                the_content();
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
			}
		}

		/* Restore original Post Data */
		wp_reset_postdata();
		?>
</div> <!-- end of col -->
                
<div class="col-xs-12 col-sm-2">
            <?php 
		$query = new WP_Query( 'pagename=faq' );
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
                echo '<div type="button" class="centerbutton" data-toggle="modal" data-target="#faqModal">';
                echo get_the_title();
                echo '</div>';
                echo '<div id="faqModal" class="modal fade">';
                echo '<div class="modal-dialog">';
                echo '<div class="modal-content">';

                echo '<div class="modal-header">';
                echo '<button type="button" class="close" data-dismiss="modal">&times;</button>';
				echo '<h4 class="modal-title">' . get_the_title() . '</h4>';
                echo '</div>';
                echo '<div class="modal-body">';
                the_content();
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
			}
		}

		/* Restore original Post Data */
		wp_reset_postdata();
		?>
      
</div> <!-- end of col -->
                
<div class="col-xs-12 col-sm-2">
            <?php 
		$query = new WP_Query( 'pagename=careers' );
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
                echo '<div type="button" class="centerbutton" data-toggle="modal" data-target="#careersModal">';
                echo get_the_title();
                echo '</div>';
                echo '<div id="careersModal" class="modal fade">';
                echo '<div class="modal-dialog">';
                echo '<div class="modal-content">';
                echo '<div class="modal-header">';
                echo '<button type="button" class="close" data-dismiss="modal">&times;</button>';
				echo '<h4 class="modal-title">' . get_the_title() . '</h4>';
                echo '</div>';
                echo '<div class="modal-body">';
                the_content();
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
			}
		}

		/* Restore original Post Data */
		wp_reset_postdata();
		?>
     
</div> <!-- end of col -->
                
</div> <!-- end of row -->
        

    </div> <!-- end of container section 14 -->

<div class="container full-width">
    
    <div class="row">
        
    
   
    <div class="col-xs-12 col-sm-8">
    <nav class="footer-main" id="menufooter">
   <?php
                                    wp_nav_menu( array(
                                        'menu'              => 'Main',                
                                        'depth'             => 2,
                                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                        'walker'            => new wp_bootstrap_navwalker())
                                    );
                                ?>
    </nav>
	</div>
        <div class="col-xs-12 col-sm-4" id="frasefooter">
        <small>&copy;<?=date('Y');?> Made for Zave App </small>
    </div>
    
<a href="#section1" class="backtotop">↑</a>
	</div>
    </div>

	


   
<?php wp_footer(); ?>

   </body> 
</html>
