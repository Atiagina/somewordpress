<?php get_header(); ?>

<!-- SECTION 1 - INTRODUCTION -->  

<div class="container-fluid full-width" id="section1" >
            
    <div class="row row-fluid">
                
        <div class="col-xs-12 customfull">
            
            <div class="row customvisible"> 
                <div class="storebtns">
                    
                    <div class="col-xs-6"><?php 
		$query = new WP_Query( 'pagename=main-image' );
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				
                echo '<a href="';
                if (get_post_meta($post->ID, 'appstorelink', true));
                    
                echo get_post_meta($post->ID, 'appstorelink', true);
                echo '" class="btn btn-app-download storebtn" target="_blank">';
				echo '<i class="fa fa-apple myicon"></i> ';
                echo '<strong>';
                if (get_post_meta($post->ID, 'appstoretext', true));
                    
                echo get_post_meta($post->ID, 'appstoretext', true);
                echo '</strong>';
                echo '</a>';
                
			}
		}
		/* Restore original Post Data */
		wp_reset_postdata();
		?></div>
                    <div class="col-xs-6"><?php 
		$query = new WP_Query( 'pagename=main-image' );
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				
                echo '<a href="';
                if (get_post_meta($post->ID, 'playstorelink', true));
                    
                echo get_post_meta($post->ID, 'playstorelink', true);
                echo '" class="btn btn-app-download storebtn" target="_blank">';
				echo '<i class="fa fa-android myicon"></i> ';
                echo '<strong>';
                if (get_post_meta($post->ID, 'playstoretext', true));
                    
                echo get_post_meta($post->ID, 'playstoretext', true);
                echo '</strong>';
                echo '</a>';
                
			}
		}

		/* Restore original Post Data */
		wp_reset_postdata();
		?>
                    </div>
                    </div> <!-- end of div storebuttons --> 
                </div> <!-- end of div customvisible --> 
                    
            <div class="relativesection">
                  <?php 
		$query = new WP_Query( 'pagename=main-image' );
        
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'main-image' );
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
                
 <!-- Start Video Modal -->              
        <div id="videoModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">


                            <div class="modal-body">
                                <button type="button" id="button-video" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <div class="embed-responsive embed-responsive-16by9">
                                <?php 
		$query = new WP_Query( 'pagename=youtube-video' );
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				
                echo '<iframe id="zaveVideo" class="embed-responsive-item"  src="';
                if (get_post_meta($post->ID, 'youtube', true));
                    
                echo get_post_meta($post->ID, 'youtube', true);
                echo '" frameborder="0" allowfullscreen></iframe>';
				
			}
		}

		/* Restore original Post Data */
		wp_reset_postdata();
		?>
                            </div> <!-- end of embde-responsive --> 
                            </div> <!-- end of modal-body --> 
                        </div> <!-- end of modal-content --> 
                    </div> <!-- end of modal-dialog --> 
    </div> <!-- End Video Modal -->   
                       
    <div class="project-overlay">
        <div class="row"> 
                    
                    <div class="col-xs-6"><?php 
		$query = new WP_Query( 'pagename=main-image' );
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				
                echo '<a href="';
                if (get_post_meta($post->ID, 'appstorelink', true));
                    
                echo get_post_meta($post->ID, 'appstorelink', true);
                echo '" class="btn btn-app-download storebtn" target="_blank">';
				echo '<i class="fa fa-apple myicon"></i> ';
                echo '<strong>';
                if (get_post_meta($post->ID, 'appstoretext', true));
                    
                echo get_post_meta($post->ID, 'appstoretext', true);
                echo '</strong>';
                echo '</a>';
                
			}
		}
		/* Restore original Post Data */
		wp_reset_postdata();
		?>
        </div>
        <div class="col-xs-6">
                        <?php 
		$query = new WP_Query( 'pagename=main-image' );
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				
                echo '<a href="';
                if (get_post_meta($post->ID, 'playstorelink', true));
                    
                echo get_post_meta($post->ID, 'playstorelink', true);
                echo '" class="btn btn-app-download storebtn" target="_blank">';
				echo '<i class="fa fa-android myicon"></i> ';
                echo '<strong>';
                if (get_post_meta($post->ID, 'playstoretext', true));
                    
                echo get_post_meta($post->ID, 'playstoretext', true);
                echo '</strong>';
                echo '</a>';
                
			}
		}

		/* Restore original Post Data */
		wp_reset_postdata();
		?>
                        
        </div>
    </div> <!-- end of row --> 
</div> <!-- end of project-overlay -->  
                
<div class="project-overlay-2">
                        <div class="row">
                                <div class="col-xs-12 videocol">
                                   <a href="#videoModal" class="btn" data-toggle="modal"><i class="fa fa-play-circle" id="videobutton" aria-hidden="true"></i></a>
                                </div> <!-- end of videocol --> 
                        </div> <!-- end of row --> 
</div> <!-- end of project-overlay-2 --> 
                
<div class="project-overlay-3">  
                
        <div class="row">
            <div class="col-xs-12">
                <p id="clickvideo">
                                            <?php 
                        $query = new WP_Query( 'pagename=main-image' );
                        // The Loop
                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                                $query->the_post();

                                echo '<a href="#videoModal" class="btn " data-toggle="modal">';
                                if (get_post_meta($post->ID, 'clickvideofrase', true));

                                echo get_post_meta($post->ID, 'clickvideofrase', true);
                                echo '</a>';

                            }
                        }

                        /* Restore original Post Data */
                        wp_reset_postdata();
                        ?>
                            
                </p>
            </div>
        </div> <!-- end of row --> 
</div> <!-- end of project-overlay-3 --> 
                        
<div class="project-overlay-4">  
        <div class="row">
                        <div class="col-xs-12">
                            <?php 
		$query = new WP_Query( 'pagename=main-image' );
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				
                echo '<h1 class="ahorra">';
                if (get_post_meta($post->ID, 'frase', true));
                    
                echo get_post_meta($post->ID, 'frase', true);
                echo '</h1>';
				
			}
		}

		/* Restore original Post Data */
		wp_reset_postdata();
		?>
                            
                        </div>
                
        </div><!-- end of row --> 
</div> <!-- end of project-overlay-4 -->
                
</div> <!-- end of relativesection --> 
            
<div class="row customvisible">
    <div class="col-xs-12">
                            
                <?php 
		$query = new WP_Query( 'pagename=main-image' );
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				
                echo '<h1 class="ahorra">';
                if (get_post_meta($post->ID, 'frase', true));
                    
                echo get_post_meta($post->ID, 'frase', true);
                echo '</h1>';
				
			}
		}

		/* Restore original Post Data */
		wp_reset_postdata();
		?>
                </div>
                
</div> <!-- end of row  cusomvisible --> 
            
        </div> <!-- end of div customfull --> 
</div> <!-- end of row --> 
</div> <!-- end of div container -->

<!-- END OF SECTION 1 - INTRODUCTION -->  

<!-- SECTION 2 - SOCIAL BUTTONS -->  
        
<div class="container full-width" id="section2" >
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
                    <a href="https://medium.com/@Zaveapp1" target="_blank"><p><i class="fa fa-spotify" aria-hidden="true"></i> Spotify</p></a>
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
   
</div> <!-- end of container --> 
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
                echo '" class="img-responsive asidesimple" alt="zaveapppicnic"></div>';
			
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
</div> <!-- end of container --> 
<!-- END OF SECTION 4 - ASI DE SIMPLE --> 

<!-- SECTION 5 - SLIDER --> 
<div class="container-fluid full-width" id="section5">
            <div class="row">
                <div class="col-xs-12">
                   <!-- Begin Flex Slider -->
<?php 
		$query = new WP_Query( 'pagename=slider' );
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
                add_flexslider(); 
            }
        }

		/* Restore original Post Data */
		wp_reset_postdata();
		?>
                
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
                echo '<div class="col-xs-12 col-sm-6 metaslogos multilogo">';
                
$gallery = get_children( 'posts_per_page=5&post_type=attachment&post_mime_type=image&post_parent=' . $post->ID );
$attr = array(
    'class' => "wp-post-image img-responsive",
);
foreach( $gallery as $image ) {
     echo wp_get_attachment_image($image->ID, $attachment_id, $attr);
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
     <?php 
		$query = new WP_Query( 'pagename=metas' );
        $metas_id = $query->queried_object->ID;
        
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				echo '<h2>' . get_the_title() . '</h2>';
                echo '<div class="row myrow">';
                echo '<div class="col-xs-12 col-sm-6">';
                the_content();
                echo '</div>';
                echo '<div class="col-xs-12 col-sm-6"></div>';
                echo '</div>';
			}
		}

		/* Restore original Post Data */
		wp_reset_postdata();
 ?>
    
</div> <!-- end of container -->

<div class="container" id="section7b">  
    <div class="row myrow">
        <div class="col-xs-12">
                    
                    
                    <ul class="nav nav-pills nav-justified" id="ulmetas">
                        <?php 
		$query = new WP_Query( 'pagename=viajar' );
        $metas_id = $query->queried_object->ID;
        
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				echo '<li class="active"><a data-toggle="pill" href="#viaja" >';
                echo get_the_title();
                echo '</a></li>';
			}
		}

		/* Restore original Post Data */
		wp_reset_postdata();
 ?>
        <?php 
		$query = new WP_Query( 'pagename=comprar' );
        $metas_id = $query->queried_object->ID;
        
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				echo '<li><a data-toggle="pill" href="#compra" >' . get_the_title() . '</a></li>';
			}
		}

		/* Restore original Post Data */
		wp_reset_postdata();
 ?>
                        
        <?php 
		$query = new WP_Query( 'pagename=ahorrar' );
        $metas_id = $query->queried_object->ID;
        
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				echo '<li><a data-toggle="pill" href="#redeem" >' . get_the_title() . '</a></li>';
			}
		}

		/* Restore original Post Data */
		wp_reset_postdata();
 ?>
        <?php 
		$query = new WP_Query( 'pagename=donar' );
        $metas_id = $query->queried_object->ID;
        
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				echo '<li><a data-toggle="pill" href="#dona" >' . get_the_title() . '</a></li>';
			}
		}

		/* Restore original Post Data */
		wp_reset_postdata();
 ?>
        
                    </ul> <!-- end of ul -->
            </div> 
        </div> <!-- end of row -->
<div class="row">
<div class="tab-content">
                <div id="viaja" class="tab-pane fade in active">
                <div class="row">
                    <?php 
		$query = new WP_Query( 'pagename=viajar' );
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
                echo '<div class="col-xs-12 col-sm-8 mainmeta">';
				echo '<h3>' . get_the_title() . '</h3>';
                the_content();
            }
        }
                /* Restore original Post Data */
		wp_reset_postdata();
		?>
                <!-- Begin Dynamic Sidebar -->
    <?php dynamic_sidebar('social') ?>					
    <!-- End Dynamic Sidebar -->
                    <?php 
		$query = new WP_Query( 'pagename=viajar' );
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				echo '</div>';
                echo '<div class="col-xs-12 col-sm-4">';
                echo '<div class="multilogo"> ';
                
$gallery = get_children( 'posts_per_page=5&post_type=attachment&post_mime_type=image&post_parent=' . $post->ID );
$attr = array(
    'class' => "attachment-$size wp-post-image",
);
foreach( $gallery as $image ) {
     echo wp_get_attachment_image($image->ID, $attachment_id);
}
                echo '</div>';
                echo '</div>';
			}
		}

		/* Restore original Post Data */
		wp_reset_postdata();
		?>
            
    </div> <!-- end of row -->           
                    
        </div> <!-- end of div viaja --> 
                        
    <div id="compra" class="tab-pane fade">
      <div class="row">
        <?php 
		$query = new WP_Query( 'pagename=comprar' );
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
                echo '<div class="col-xs-12 col-sm-8 mainmeta">';
				echo '<h3>' . get_the_title() . '</h3>';
				the_content();
				echo '</div>';
                echo '<div class="col-xs-12 col-sm-4">';
                echo '<div class="multilogo"> ';
                
$gallery = get_children( 'posts_per_page=5&post_type=attachment&post_mime_type=image&post_parent=' . $post->ID );
$attr = array(
    'class' => "attachment-size wp-post-image",
);
foreach( $gallery as $image ) {
     echo wp_get_attachment_image($image->ID, $attachment_id);
}
                echo '</div>';
                echo '</div>';
			}
		}

		/* Restore original Post Data */
		wp_reset_postdata();
		?>
        </div> <!-- end of row --> 
    </div> <!-- end of compra -->
    <div id="redeem" class="tab-pane fade">
        <div class="row">
        <?php 
		$query = new WP_Query( 'pagename=ahorrar' );
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
                echo '<div class="col-xs-12 col-sm-8 mainmeta">';
				echo '<h3>' . get_the_title() . '</h3>';
				the_content();
				echo '</div>';
                echo '<div class="col-xs-12 col-sm-4">';
                echo '<div class="multilogo"> ';
                
$gallery = get_children( 'posts_per_page=5&post_type=attachment&post_mime_type=image&post_parent=' . $post->ID );
$attr = array(
    'class' => "attachment-$size wp-post-image",
);
foreach( $gallery as $image ) {
     echo wp_get_attachment_image($image->ID, $attachment_id);
}
                echo '</div>';
                echo '</div>';
			}
		}

		/* Restore original Post Data */
		wp_reset_postdata();
		?>
        
        </div>
      
    </div> <!-- end of redeem -->
                        
    <div id="dona" class="tab-pane fade">
        <div class="row">
            <?php 
		$query = new WP_Query( 'pagename=donar' );
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
                echo '<div class="col-xs-12 col-sm-8 mainmeta">';
				echo '<h3>' . get_the_title() . '</h3>';
				the_content();
				echo '</div>';
                echo '<div class="col-xs-12 col-sm-4">';
                echo '<div class="multilogo"> ';
                
$gallery = get_children( 'posts_per_page=5&post_type=attachment&post_mime_type=image&post_parent=' . $post->ID );
$attr = array(
    'class' => "attachment-$size wp-post-image",
);
foreach( $gallery as $image ) {
     echo wp_get_attachment_image($image->ID, $attachment_id);
}
                echo '</div>';
                echo '</div>';
			}
		}

		/* Restore original Post Data */
		wp_reset_postdata();
		?>
        
        </div>
        </div> <!-- end of donar -->
                        
  </div> <!-- end of tab-content -->
</div> <!-- end of row -->
</div> <!-- end of container --> 
<!-- END OF SECTION 7 - METAS --> 
        
<div class="container-fluid full-width" id="section8" >
    <?php 
		$query = new WP_Query( 'pagename=testimonials' );
        $testimonials_id = $query->queried_object->ID;
        
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
        
        $args = array('posts_per_page' => 2,
                    'orderby' => 'rand',
                    'category_name' => 'testimonials');
        $testimonials_query = new WP_query( $args );

        //the loop
      

        if($testimonials_query->have_posts()) {
            
             echo '<div class="row myrow">';
            while ($testimonials_query->have_posts()){
                $testimonials_query->the_post();
               $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                echo '<div class="col-xs-12 col-sm-6">';
                echo '<div class="row">';
                echo '<div class="col-xs-4">';
                echo '<img src="';
                echo $url;
                echo '" class="img-responsive img-circle" alt="testimonial" />';
				echo '</div>';
                echo '<div class="col-xs-8">';
                the_content();
                echo '<h4>' . get_the_title() . '</h4>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            echo '</div>'; // end of row
        }
    /* Restore original Post Data */
		wp_reset_postdata();
            ?>
            
</div> <!-- end of container --> 

<!-- END OF SECTION 8 - TESTIMONIALS --> 
        
<!-- SECTION 9 - NOSOTROS --> 
<div class="container-fluid full-width" id="section9" >
            <?php 
		$query = new WP_Query( 'pagename=nosotros' );
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				echo '<h2>' . get_the_title() . '</h2>';
                echo '<div class="row myrow">';
				
                echo '<div class="col-xs-12 col-sm-6">';
                the_content();
                echo '</div>';
                echo '<div class="col-xs-12 col-sm-6">';
                echo '<div class="custombutton">';
                if (get_post_meta($post->ID, 'custombutton', true));
                    
                echo get_post_meta($post->ID, 'custombutton', true);
                echo '</div>';
				echo '</div>';
                echo '</div>';
			}
		}

		/* Restore original Post Data */
		wp_reset_postdata();
		?>
</div> <!-- end of container --> 
<!-- END OF SECTION 9 - NOSOTROS --> 

<!-- SECTION 10 - ZAVE APP TEAM --> 
        
<div class="container-fluid full-width" id="section10" >
             <?php 
		$query = new WP_Query( 'pagename=zave-app-team' );
        $zaveappteam_id = $query->queried_object->ID;
        
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
                'post_parent' => $zaveappteam_id,
                'order'   => 'ASC');
        $zaveappteam_query = new WP_query( $args );

        //the loop
      

        if($zaveappteam_query->have_posts()) {
            
             echo '<div class="row myrow">';
            echo '<div class="o-carousel">';
            while ($zaveappteam_query->have_posts()){
                $zaveappteam_query->the_post();
               $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                echo '<div class="item">';
               echo '<div class="teamdiv">';
               echo '<div class="row">';
                echo '<div class="col-xs-4">';
                echo '<img src="';
                echo $url;
                echo '" class="img-responsive img-circle" alt="testimonial" />';
				echo '</div>';
               echo '<div class="col-xs-8">';
                echo '<h4>' . get_the_title() . '</h4>';
                the_content();
               echo '</div>';
               echo '</div>';
               echo '</div>';
                echo '</div>';
            }
            echo '</div>';  //end of owl-carousel 
            echo '</div>';  //end of row 
        }
    /* Restore original Post Data */
		wp_reset_postdata();
            ?>
            
</div>
<!-- END OF SECTION 10 - ZAVEAPP TEAM -->

<!-- SECTION 11 - PARTNERS --> 
        
<div class="container-fluid full-width" id="section11" >
            <?php 
		$query = new WP_Query( 'pagename=partners' );
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				echo '<h2>' . get_the_title() . '</h2>';
                echo '<div class="row myrow">';
				echo '<div class="col-xs-12 col-sm-6">';
				the_content();
				echo '</div>';
                echo '<div class="col-xs-12 col-sm-6 multilogo">';
                
$gallery = get_children( 'posts_per_page=5&post_type=attachment&post_mime_type=image&post_parent=' . $post->ID );
$attr = array(
    'class' => "attachment-size wp-post-image",
);
foreach( $gallery as $image ) {
     echo wp_get_attachment_image($image->ID, $attachment_id);
}
                echo '</div>';
                echo '</div>';
			}
		}

		/* Restore original Post Data */
		wp_reset_postdata();
		?>
            
</div> <!-- end of container section11 --> 
<!-- END OF SECTION 11 - PARTNERS --> 
        
<!-- SECTION 12 - PRENSA --> 
<div class="container-fluid full-width" id="section12" >
    <?php 
		$query = new WP_Query( 'pagename=prensa' );
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				echo '<h2>' . get_the_title() . '</h2>';
                echo '<div class="row myrow">';
				
                echo '<div class="col-xs-12 col-sm-8 multilogo">';
                the_content();
                echo '</div>';
                echo '<div class="col-xs-12 col-sm-4">';
                echo '<div class="custombutton">';
                if (get_post_meta($post->ID, 'custombutton', true));
                    
                echo get_post_meta($post->ID, 'custombutton', true);
                echo '</div>';
				echo '</div>';
                echo '</div>';
			}
		}

		/* Restore original Post Data */
		wp_reset_postdata();
		?>
    
            
</div>
<!-- END OF SECTION 12 - PRENSA --> 




<!-- SECTION 13 - CONTACTO --> 
        
<div class="container-fluid full-width" id="section13" >
            <?php 
		$query = new WP_Query( 'pagename=contacto' );
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				echo '<h2>' . get_the_title() . '</h2>';
                echo '<div class="row myrow">';
				echo '<div class="col-xs-12 col-sm-8">';
				the_content();
				echo '</div>';
                echo '<div class="col-xs-12 col-sm-4">';
                echo '<div class="socialbutton">';
                echo '<a href="https://www.instagram.com/zaveapp/" target="_blank"><p><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</p></a>';
                echo '</div>';
                echo '<div class="socialbutton">';
                echo '<a href="https://www.facebook.com/zaveapp/" target="_blank"><p><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</p></a>';
                echo '</div>';
                echo '<div class="socialbutton">';
                echo '<a href="https://medium.com/@Zaveapp1" target="_blank"><p><i class="fa fa-medium" aria-hidden="true"></i> Medium</p></a>';
                echo '</div>';
                echo '<div class="socialbutton">';
                echo '<a href="https://twitter.com/zaveapp" target="_blank"><p><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</p></a>';
                echo '</div>';
                echo '<div class="socialbutton">';
                echo '<a href="https://www.pinterest.com/zaveapp/" target="_blank"><p><i class="fa fa-pinterest-p" aria-hidden="true"></i> Pinterest</p></a>';
                echo '</div>';
                echo '<div class="socialbutton">';
                echo '<a href="" target="_blank"><p><i class="fa fa-spotify" aria-hidden="true"></i> Spotify</p></a>';
                echo '</div>';
                echo '<div class="socialbutton">';
                echo '<a href="" target="_blank"><p><i class="fa fa-linkedin" aria-hidden="true"></i> LinkedIn</p></a>';
                echo '</div>';
                echo '</div>';
                echo '<div class="col-xs-12 col-sm-6">';
                if (get_post_meta($post->ID, 'direccion', true));
                echo get_post_meta($post->ID, 'direccion', true);
                echo '</div>';
                echo '</div>';
			}
		}


		/* Restore original Post Data */
		wp_reset_postdata();
		?>
</div> <!-- end of container --> 
<!-- END OF SECTION 13 - CONTACTO --> 

<div class="container-fluid full-width" id="sectionstore">

    <div class="row myrow"> 
                    
        <div class="col-xs-6 storefooter"><?php 
		$query = new WP_Query( 'pagename=main-image' );
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				
                echo '<a href="';
                if (get_post_meta($post->ID, 'appstorelink', true));
                    
                echo get_post_meta($post->ID, 'appstorelink', true);
                echo '" class="btn btn-app-download storebtn" target="_blank">';
				echo '<i class="fa fa-apple myicon"></i> ';
                echo '<strong>';
                if (get_post_meta($post->ID, 'appstoretext', true));
                    
                echo get_post_meta($post->ID, 'appstoretext', true);
                echo '</strong>';
                echo '</a>';
                
			}
		}
		/* Restore original Post Data */
		wp_reset_postdata();
		?>
        </div>
        <div class="col-xs-6 storefooter">
                        <?php 
		$query = new WP_Query( 'pagename=main-image' );
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				
                echo '<a href="';
                if (get_post_meta($post->ID, 'playstorelink', true));
                    
                echo get_post_meta($post->ID, 'playstorelink', true);
                echo '" class="btn btn-app-download storebtn" target="_blank">';
				echo '<i class="fa fa-android myicon"></i> ';
                echo '<strong>';
                if (get_post_meta($post->ID, 'playstoretext', true));
                    
                echo get_post_meta($post->ID, 'playstoretext', true);
                echo '</strong>';
                echo '</a>';
                
			}
		}

		/* Restore original Post Data */
		wp_reset_postdata();
		?>
                        
        </div>
    </div> <!-- end of row --> 
</div> <!-- end of container --> 

<!-- SECTION NEWSLETTER --> 
<div class="container-fluid full-width" id="newsletter" >
            <div class="row row-fluid">
                <div class="col-xs-12">
                    <div class="relativesection">
                        <?php 
		$query = new WP_Query( 'pagename=newsletter' );
        
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                echo '<div style="background-image: url("';
                echo $url;
                echo '")><img src="';
                echo $url;
                echo '" class="img-responsive asidesimple" alt="zaveapppicnic"></div>';
			
                echo '<div id="newsletterdiv">';
                echo '<h2 id="newslettertext">' . get_the_title() . '</h2>';
                echo '<div id="newslettertext2">';
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
</div> <!-- end of container newsletter --> 
<!-- END OF SECTION NEWSLETTER --> 

<?php get_footer(); ?>
