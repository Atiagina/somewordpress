
<?php get_header(); ?>

<!-- SECTION 1 - INTRODUCTION -->  

<div class="container-fluid full-width" id="section1" >
            
    <div class="row row-fluid">
                
        <div class="col-xs-12 customfull">
            
            <div class="row invisible storebtns"> 
                    
                    <div class="col-xs-6"><a href="http://apple.co/1M4yQRi" class="btn btn-app-download storebtn" target="_blank">
                        <i class="fa fa-apple myicon"></i>
                        <strong>Bajar App<br>desde App Store</strong>
                    </a></div>
                    <div class="col-xs-6"><a href="http://bit.ly/1f1hF5U" class="btn btn-app-download storebtn" target="_blank">
                        <i class="fa fa-android myicon"></i>
                        <strong>Bajar App<br> 
                       desde Play Store</strong>
                    </a>
                    </div>
                    </div>
                    
            <div class="relativesection">
                  <?php 
		$query = new WP_Query( 'pagename=main-image' );
        
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                echo '<div id="picnic2" style="background-image: url("';
                echo $url;
                echo '")><img src="';
                echo $url;
                echo '" class="img-responsive" alt="zaveapppicnic" /></div>';
			}
		}

		/* Restore original Post Data */
        wp_reset_postdata();
		?>
                
                <div id="videoModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">


                            <div class="modal-body">
                                <button type="button" id="button-video" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <div class="embed-responsive embed-responsive-16by9">
                                
                                <iframe id="zaveVideo" class="embed-responsive-item"  src="https://www.youtube.com/embed/Ik3t3H9M1Rc" frameborder="0" allowfullscreen></iframe> 
                            </div>
                            </div>
                        </div>
                    </div>
    </div>
                       
                <div class="project-overlay">
                    <div class="row"> 
                    
                    <div class="col-xs-6"><a href="http://apple.co/1M4yQRi" class="btn btn-app-download storebtn" target="_blank">
                        <i class="fa fa-apple myicon"></i>
                        <strong>Bajar App<br>desde App Store</strong>
                    </a></div>
                    <div class="col-xs-6"><a href="http://bit.ly/1f1hF5U" class="btn btn-app-download storebtn" target="_blank">
                        <i class="fa fa-android myicon"></i>
                        <strong>Bajar App<br> 
                       desde Play Store</strong>
                    </a>
                    </div>
                    </div>
                </div> <!-- end of project-overlay -->  
                <div class="project-overlay-2">
                    <div class="row">
                            <div class="col-xs-12 videocol">
                               <a href="#videoModal" class="btn" data-toggle="modal"><i class="fa fa-play-circle" id="videobutton" aria-hidden="true"></i></a>
                            </div> <!-- end of videocol --> 
                    </div>
                </div> <!-- end of project-overlay-2 --> 
                
                <div class="project-overlay-3">  
                
                    <div class="row">
                        <div class="col-xs-12"><p id="clickvideo"><a href="#videoModal" class="btn " data-toggle="modal">Click to see 60 secs video</a></p></div>
                    </div>
                </div> <!-- end of project-overlay-3 --> 
                        
                <div class="project-overlay-4">  
                    
                    <div class="row">
                        <div class="col-xs-12"><h1 class="ahorra">Ahorra y viaja con Zave App!</h1></div>
                
                    </div>
            </div> <!-- end of project-overlay-4 -->
        </div> <!-- end of relativesection --> 
            <div class="row invisible">
                        <div class="col-xs-12"><h1 class="ahorra">Ahorra y viaja con Zave App!</h1></div>
                
                    </div>
        </div>
</div> <!-- end of row --> 
</div>

<!-- END OF SECTION 1 - INTRODUCTION -->  

<!-- SECTION 2 - SOCIAL BUTTONS -->  
        
<div class="container-fluid full-width" id="section2" >
    <div class="row">
                <div class="col-xs-12 col-sm-2 col-sm-offset-1">
                    <div class="socialbutton">
                    <a href="https://www.instagram.com/zaveapp/" target="_blank"><p><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</p></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-2">
                    <div class="socialbutton">
                    <a href="https://www.facebook.com/zaveapp/" target="_blank"><p><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</p></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-2">
                    <div class="socialbutton">
                    <a href="https://medium.com/@Zaveapp1" target="_blank"><p><i class="fa fa-medium" aria-hidden="true"></i> Medium</p></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-2">
                    <div class="socialbutton">
                    <a href="https://twitter.com/zaveapp" target="_blank"><p><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</p></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-2">
                    <div class="socialbutton">
                    <a href="https://www.pinterest.com/zaveapp/" target="_blank"><p><i class="fa fa-pinterest-p" aria-hidden="true"></i> Pinterest</p></a>
                    </div>
                </div>
    </div>  <!-- end of row -->     
</div>
<!-- END OF SECTION 2 - SOCIAL BUTTONS --> 

<!-- SECTION 3 - COMO FUNCIONA --> 
<div class="container-fluid full-width" id="section3" >
    <?php 
		$query = new WP_Query( 'pagename=como-funciona' );
        $comofunciona_id = $query->queried_object->ID;
        
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				echo '<h2>' . get_the_title() . '</h2>';
			}
		}

		/* Restore original Post Data */
		wp_reset_postdata();

        /*get the childern of the como funciona page */

        $args = array('post_type' => 'page',
                'post_parent' => $comofunciona_id);
        $comofunciona_query = new WP_query( $args);

        //the loop

        if($comofunciona_query->have_posts()) {
             echo '<div class="row myrow">';
            while ($comofunciona_query->have_posts()){
            $comofunciona_query->the_post();
               
                echo '<div class="col-xs-12 col-sm-4 steps">';
				the_content();
				echo '</div>';
                
            }
            echo '</div>';
        }
    /* Restore original Post Data */
		wp_reset_postdata();
		?>
   
</div>
<!-- END OF SECTION 3 - COMO FUNCIONA --> 
    
<!-- SECTION 4 - ASI DE SIMPLE --> 
<div class="container-fluid full-width" id="section4" >
            <div class="row row-fluid">
                <div class="col-xs-12">
                    <div class="relativesection">
                        <?php 
		$query = new WP_Query( 'pagename=asi-de-simple' );
        
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                echo '<div style="background-image: url("';
                echo $url;
                echo '")><img src="';
                echo $url;
                echo '" class="img-responsive" alt="zaveapppicnic"></div>';
			
                echo '<div id="pintext">';
                echo '<h2 id="onpintext">' . get_the_title() . '</h2>';
                echo '<div id="onpintext2">';
                the_content();
                echo '</div>';
                echo '</div>'; 
                            
                }
		}

		/* Restore original Post Data */
        wp_reset_postdata();
		?>
                    </div> <!-- end of relativesection --> 
                </div>
            </div> <!-- end of row --> 
</div>
<!-- END OF SECTION 4 - ASI DE SIMPLE --> 

<!-- SECTION 5 - SLIDER --> 
<div class="container-fluid full-width" id="section5">
            <div class="row">
                <div class="col-xs-12">
                   <!-- Begin Flex Slider -->
<div class="flexslider">
<ul class="slides">
<li><img src="img/slider1.png" alt="slider picture"/><blockquote>First Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget consequat sapien, nec dapibus tellus. Proin porttitor tellus vitae enim mollis, sit amet ullamcorper ipsum molestie.</blockquote></li>
<li><img src="img/slider2.png" alt="slider picture"/><blockquote>Second Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget consequat sapien, nec dapibus tellus. Proin porttitor tellus vitae enim mollis, sit amet ullamcorper ipsum molestie.</blockquote></li>
<li><img src="img/slider3.png" alt="slider picture"/><blockquote>Third Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget consequat sapien, nec dapibus tellus. Proin porttitor tellus vitae enim mollis, sit amet ullamcorper ipsum molestie.</blockquote></li>
</ul>
</div>
<!-- End Flex Slider -->
                </div>
            </div> <!-- end of row --> 
</div>
<!-- END OF SECTION 5 - SLIDER --> 

<!-- SECTION 6 - SEGURIDAD --> 
<div class="container-fluid full-width" id="section6" >
    	<?php 
		$query = new WP_Query( 'pagename=seguridad' );
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				echo '<h2>' . get_the_title() . '</h2>';
                echo '<div class="row myrow">';
				echo '<div class="col-xs-12 col-sm-6">';
				the_content();
				echo '</div>';
                echo '<div class="col-xs-12 col-sm-6 metaslogos">';
                
$gallery = get_children( 'posts_per_page=5&post_type=attachment&post_mime_type=image&post_parent=' . $post->ID );
$attr = array(
    'class' => "attachment-$size wp-post-image",
);
foreach( $gallery as $image ) {
     echo wp_get_attachment_image($image->ID, $attachment_id, 'img-responsive multilogo');
}
                echo '</div>';
                echo '</div>';
			}
		}

		/* Restore original Post Data */
		wp_reset_postdata();
		?>
            
</div>
<!-- END OF SECTION 6 - SEGURIDAD --> 
        
<!-- SECTION 7 - METAS --> 
<div class="container-fluid full-width" id="section7" >
            <h2>Metas</h2>
            
            <div class="row myrow">
                <div class="col-xs-12 col-sm-6">
                Short History of application and team. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget consequat sapien, nec dapibus tellus. Proin porttitor tellus vitae enim mollis, sit amet ullamcorper ipsum molestie.
                </div>
                <div class="col-xs-12 col-sm-6"></div>
            </div> <!-- end of row --> 
            
    
    <div class="row myrow">
                <div class="col-xs-12">
                    
                    
                    <ul class="nav nav-pills nav-justified" id="ulmetas">
                      <li class="active"><a data-toggle="pill" href="#viaja" >Viaja</a></li>
                      <li><a data-toggle="pill" href="#compra">Compra</a></li>
                      <li><a data-toggle="pill" href="#redeem">Redima</a></li>
                      <li><a data-toggle="pill" href="#dona">Dona</a></li>
                    </ul>
                    
                    <div class="tab-content">
                <div id="viaja" class="tab-pane fade in active" style="background-image:url(img/viajeros.jpg);">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h3>Viaja</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget consequat sapien, nec dapibus tellus. Proin porttitor tellus vitae enim mollis, sit amet ullamcorper ipsum molestie.

Curabitur eget consequat sapien, nec dapibus tellus. mollis, sit amet ullamcorper ipsum molestie.</p>


                </div> <!-- end of col -->
                <div class="col-xs-12 col-sm-3 col-sm-offset-3">
                    <div class="col-xs-12 metaslogos"> 
                <ul>
                <li><img src="img/expedialogo.png" alt="expedia"></li>
                <li><img src="img/expedialogo.png" alt="expedia"></li>
                <li><img src="img/expedialogo.png" alt="expedia"></li>
                </ul>
        </div> <!-- end of metaslogos -->
                    </div>
        
       
    </div> <!-- end of row -->
                     
                    
        </div> <!-- end of div viaja --> 
                        
    <div id="compra" class="tab-pane fade">
      <div class="row">
        <div class="col-xs-12 col-sm-2">
            <i class="fa fa-money imetas" aria-hidden="true"></i>
          </div> <!-- end of col --> 
        <div class="col-xs-12 col-sm-6">
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget consequat sapien, nec dapibus tellus. Proin porttitor tellus vitae enim mollis, sit amet ullamcorper ipsum molestie.

Curabitur eget consequat sapien, nec dapibus tellus. mollis, sit amet ullamcorper ipsum molestie.</p>
        </div> <!-- end of col --> 
          <div class="metaslogos"> 
        <ul>
        <li><img src="img/expedialogo.png" alt="expedia"></li>
        <li><img src="img/expedialogo.png" alt="expedia"></li>
        <li><img src="img/expedialogo.png" alt="expedia"></li>
        </ul>
        </div> <!-- end of metalogos --> 
        </div> <!-- end of row --> 
    </div> <!-- end of compra -->
    <div id="redeem" class="tab-pane fade">
      <h3>Redeem</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div> <!-- end of redeem -->
                        
    <div id="dona" class="tab-pane fade">
      <h3>Dona</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div> <!-- end of dona -->
                        
  </div> <!-- end of tab-content -->
                </div> <!-- end of col -->
            </div> <!-- end of row --> 

        </div>
<!-- END OF SECTION 7 - METAS --> 
        
        <div class="container-fluid full-width" id="section8" >
            <h2>Testimonials</h2>
            <div class="row myrow">
                <div class="col-xs-12 col-sm-6">
                    <div class="row">
                        <div class="col-xs-4">
                    <img src="img/person1.jpg" class="img-responsive img-circle" alt="testimonial" />
                            </div>
                        <div class="col-xs-8">
                    <p>Lorem ipsum dolor sit amet, con
sectetur adipiscing elit. Curabitur eget consequat sapien, nec dapibus tellus. Proin porttitor tellus vitae enim mollis, sit amet ullamcorper ipsum molestie.
</p>
                    <h4>Nombre de usuario</h4>
                    </div>
                </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="row">
                        <div class="col-xs-4">
                    <img src="img/person1.jpg" class="img-responsive img-circle" alt="testimonial" />
                            </div>
                        <div class="col-xs-8">
                    <p>Lorem ipsum dolor sit amet, con
sectetur adipiscing elit. Curabitur eget consequat sapien, nec dapibus tellus. Proin porttitor tellus vitae enim mollis, sit amet ullamcorper ipsum molestie.
</p>
                    <h4>Nombre de usuario</h4>
                    </div>
                </div>
                </div>
            </div>
        </div>
        
        <div class="container-fluid full-width" id="section9" >
            <h2>Nosotros</h2>
            <div class="row myrow">
                <div class="col-xs-12 col-sm-6">
                    <p>Short History of application and team. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget consequat sapien, nec dapibus tellus. Proin porttitor tellus vitae enim mollis, sit amet ullamcorper ipsum molestie.</p>
                    <p>Short History of application and team. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget consequat sapien, nec dapibus tellus. Proin porttitor tellus vitae enim mollis, sit amet ullamcorper ipsum molestie.</p>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <p>Section to put Nosotros - history</p>
                </div>
            </div>
        </div>
        
        <div class="container-fluid full-width" id="section10" >
            <h2>Zave App Team</h2>
            <div class="row myrow">
                <div class="col-xs-12 col-sm-6">
                    <div class="row">
                        <div class="col-xs-4">
                    <img src="img/person1.jpg" class="img-responsive img-circle" alt="testimonial" />
                            </div>
                        <div class="col-xs-8">
                    <h4>Nombre, ocupacion</h4>
                    <p>Lorem ipsum dolor sit amet, con
sectetur adipiscing elit. Curabitur eget consequat sapien, nec dapibus tellus. Proin porttitor tellus vitae enim mollis, sit amet ullamcorper ipsum molestie.
</p>
                            <p>Lorem ipsum dolor sit amet, con
sectetur adipiscing elit. Curabitur eget consequat sapien, nec dapibus tellus. Proin porttitor tellus vitae enim mollis, sit amet ullamcorper ipsum molestie.
</p>
                    </div>
                </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="row">
                        <div class="col-xs-4">
                    <img src="img/person1.jpg" class="img-responsive img-circle" alt="testimonial" />
                            </div>
                        <div class="col-xs-8">
                    <h4>Nombre, ocupacion</h4>
                    <p>Lorem ipsum dolor sit amet, con
sectetur adipiscing elit. Curabitur eget consequat sapien, nec dapibus tellus. Proin porttitor tellus vitae enim mollis, sit amet ullamcorper ipsum molestie.
</p>
                            <p>Lorem ipsum dolor sit amet, con
sectetur adipiscing elit. Curabitur eget consequat sapien, nec dapibus tellus. Proin porttitor tellus vitae enim mollis, sit amet ullamcorper ipsum molestie.
</p>
                    </div>
                </div>
                </div>
            </div>
            <div class="row myrow">
                <div class="col-xs-12 col-sm-6">
                    <div class="row">
                        <div class="col-xs-4">
                    <img src="img/person1.jpg" class="img-responsive img-circle" alt="testimonial" />
                            </div>
                        <div class="col-xs-8">
                    <h4>Nombre, ocupacion</h4>
                    <p>Lorem ipsum dolor sit amet, con
sectetur adipiscing elit. Curabitur eget consequat sapien, nec dapibus tellus. Proin porttitor tellus vitae enim mollis, sit amet ullamcorper ipsum molestie.
</p>
                            <p>Lorem ipsum dolor sit amet, con
sectetur adipiscing elit. Curabitur eget consequat sapien, nec dapibus tellus. Proin porttitor tellus vitae enim mollis, sit amet ullamcorper ipsum molestie.
</p>
                    </div>
                </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="row">
                        <div class="col-xs-4">
                    <img src="img/person1.jpg" class="img-responsive img-circle" alt="testimonial" />
                            </div>
                        <div class="col-xs-8">
                    <h4>Nombre, ocupacion</h4>
                    <p>Lorem ipsum dolor sit amet, con
sectetur adipiscing elit. Curabitur eget consequat sapien, nec dapibus tellus. Proin porttitor tellus vitae enim mollis, sit amet ullamcorper ipsum molestie.
</p>
                            <p>Lorem ipsum dolor sit amet, con
sectetur adipiscing elit. Curabitur eget consequat sapien, nec dapibus tellus. Proin porttitor tellus vitae enim mollis, sit amet ullamcorper ipsum molestie.
</p>
                    
                    </div>
                </div>
                </div>
            </div>
        </div>
        
        <div class="container-fluid full-width" id="section11" >
            <h2>Partners</h2>
            <div class="row myrow">
                <div class="col-xs-12 col-sm-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget consequat sapien, nec dapibus tellus. Proin porttitor tellus vitae enim mollis, sit amet ullamcorper ipsum molestie.</p>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget consequat sapien, nec dapibus tellus. Proin porttitor tellus vitae enim mollis, sit amet ullamcorper ipsum molestie.</p>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <img src="img/wayra.jpg" class="img-responsive multilogo" alt="wayra" />
                    <img src="img/igc.jpg" class="img-responsive multilogo" alt="igc" />
                </div>
            </div>
        </div>
        
        <div class="container-fluid full-width" id="section12" >
            <h2>Prensa</h2>
            <div class="row myrow">
                <div class="col-xs-12 col-sm-9">
                     <img src="img/forbes.png" class="img-responsive multilogo" alt="forbes" />
                    <img src="img/proceso.png" class="img-responsive multilogo" alt="proceso" />
                    <img src="img/wayra.jpg" class="img-responsive multilogo" alt="wayra" />
                    <img src="img/igc.jpg" class="img-responsive multilogo" alt="igc" />
                    <img src="img/forbes.png" class="img-responsive multilogo" alt="forbes" />
                    <img src="img/proceso.png" class="img-responsive multilogo" alt="proceso" />
                </div>
                <div class="col-xs-12 col-sm-3">
                    <button> Download Press Kit</button>
                </div>
            </div>
        </div>
        
        <div class="container-fluid full-width" id="section13" >
            <h2>Contacto</h2>
            <div class="row myrow">
                <div class="col-xs-12">
                    <p>Section to put contacts</p>
                </div>
            </div>
        <small>index.php</small>
        </div>

<?php get_footer(); ?>
