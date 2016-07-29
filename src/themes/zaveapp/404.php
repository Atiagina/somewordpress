<!DOCTYPE html>
<html lang="en">

<head>
    
    <title> <?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<!-- FAVICON -->
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/zaveicon.png">	
    <!-- END FAVICON -->
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
    <!-- Bootstrap -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap-social.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/flexslider2.css" rel="stylesheet" type="text/css">
    <link href="<?php bloginfo('template_url'); ?>/css/animate.css" rel="stylesheet">
    
    <!-- FONT STYLES -->
    <style>
    @font-face {
    font-family: Comfortaa;
    src: url(<?php bloginfo('template_url'); ?>/fonts/Comfortaa_Bold.ttf);
}

@font-face {
    font-family: OswaldDemiBold;
    src: url(<?php bloginfo('template_url'); ?>/fonts/Oswald-DemiBold.ttf);
}

    </style>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        /* Get iframe src attribute value i.e. YouTube video url
        and store it in a variable */
        var url = $("#zaveVideo").attr('src');
        /* Assign empty url value to the iframe src attribute when
        modal hide, which stop the video playing */
        $("#videoModal").on('hide.bs.modal', function(){
            $("#zaveVideo").attr('src', '');
        });
        /* Assign the initially stored url back to the iframe src
        attribute when modal is displayed again */
        $("#videoModal").on('show.bs.modal', function(){
            $("#zaveVideo").attr('src', url);
        });
    });
</script>
<script>
/* Scripts for Zaveapp Theme */


   /**
 * inViewport jQuery plugin by Roko C.B.
 * http://stackoverflow.com/a/26831113/383904
 * Returns a callback function with an argument holding
 * the current amount of px an element is visible in viewport
 * (The min returned value is 0 (element outside of viewport)
 */
;(function($, win) {
  $.fn.inViewport = function(cb) {
     return this.each(function(i,el) {
       function visPx(){
         var elH = $(el).outerHeight(),
             H = $(win).height(),
             r = el.getBoundingClientRect(), t=r.top, b=r.bottom;
         return cb.call(el, Math.max(0, t>0? Math.min(elH, H-t) : (b<H?b:H)));  
       }
       visPx();
       $(win).on("resize scroll", visPx);
     });
  };
}(jQuery, window));


    $(document).ready(function(){  $(".multilogo").inViewport(function(px){
    if(px) $(this).addClass("animated slideInRight") ;
});
});
    
    $(document).ready(function(){  $(".socialbutton").inViewport(function(px){
    if(px) $(this).addClass("animated rubberBand") ;
});
});
    
    $(document).ready(function(){  $(".asidesimple").inViewport(function(px){
    if(px) $(this).addClass("animated slideInLeft") ;
});
});
    $(document).ready(function(){  $("#pintext").inViewport(function(px){
    if(px) $(this).addClass("animated slideInUp") ;
});
});
    
    $(document).ready(function(){  $("#newsletterdiv").inViewport(function(px){
    if(px) $(this).addClass("animated slideInUp") ;
});
});
    
    $(document).ready(function(){  $(".myicon").inViewport(function(px){
    if(px) $(this).addClass("animated bounce") ;
});
});
    
    $(document).ready(function(){  $(".storebtn").inViewport(function(px){
    if(px) $(this).addClass("animated slideInDown") ;
});
});
    
    $(document).ready(function(){  $(".ahorra").inViewport(function(px){
    if(px) $(this).addClass("animated bounce") ;
});
});
    
    $(document).ready(function(){  $(".isteps").inViewport(function(px){
    if(px) $(this).addClass("animated rubberBand") ;
});
});
    
    $(document).ready(function(){  $("h2").inViewport(function(px){
    if(px) $(this).addClass("animated slideInLeft") ;
});
});
    $(document).ready(function(){  $(".img-circle").inViewport(function(px){
    if(px) $(this).addClass("animated pulse") ;
});
});
     $(document).ready(function(){  $("#section5").inViewport(function(px){
    if(px) $(this).addClass("animated slideInRight") ;
});
});
    


$(document).ready(function(){  

  // Add smooth scrolling on all links inside the navbar
  $('#navbar a[href^="#"]').on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 800, function(){
   
      // Add hash (#) to URL when done scrolling (default click behavior)
      //window.location.hash = hash;
    });
  });
});


	          
jQuery(document).ready(function() {
		var offset = 220;
		var duration = 500;
		jQuery(window).scroll(function() {
			if (jQuery(this).scrollTop() > offset) {
				jQuery('.backtotop').fadeIn(duration);
			} else {
				jQuery('.backtotop').fadeOut(duration);
			}
		});
 
		jQuery('.backtotop').click(function(event) {
			event.preventDefault();
			jQuery('html, body').animate({scrollTop: 0}, duration);
			return false;
		})
	});


$(document).ready(function() {
    $('.flexslider').flexslider({animationLoop: true,             //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
    smoothHeight: false,            //{NEW} Boolean: Allow height of the slider to animate smoothly in horizontal mode  
    startAt: 0,                     //Integer: The slide that the slider should start on. Array notation (0 = first slide)
    slideshow: true,                //Boolean: Animate slider automatically
    slideshowSpeed: 3200,});
    });
    
    
    
</script> 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Start WP head -->
<?php wp_head(); ?>
<!-- End wp head -->
</head>
    
<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar" id="body" data-offset="50" >
<?php include_once("analyticstracking.php") ?>
    
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid full-width" id="pagenavcont">
       
    <div class="navbar-header">
      
        <a class="navbar-brand" href="<?php $url = home_url();
echo esc_url( $url ); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/zavelogo.png" id="logo" alt="Zave App logo" height=80></a>
        
    </div> <!-- END OF NAVBAR-HEADER -->
        <div id="pagearrow"> <a href="<?php $url = home_url();
echo esc_url( $url ); ?>"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
            Back to ZaveApp Website</a></div>
</div>
    </nav>

<div class="container-fluid full-width pagecontent">
    <div class="row myrow">
        
        <div class="col-sm-12">
<?php 
		$query = new WP_Query( 'pagename=404-2' );
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				echo '<h2>';
                the_content();
                echo '</h2>';
                
			}
		}

		/* Restore original Post Data */
		wp_reset_postdata();
		?>  <!--end the loop -->  
        </div>
    </div>
</div>
    
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
                    <a href="https://www.linkedin.com/company/zave-app" target="_blank"><p><i class="fa fa-linkedin" aria-hidden="true"></i> LinkedIn</p></a>
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
    
    
<div class="container-fluid full-width" id="sectionstore">

    <div class="row row-fluid"> 
                    
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
    </div>
</div>   
</div> <!--  end of the content div  -->

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
     
                        </div>
                    
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
                </div>
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
     
                        </div>
                
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
     
                        </div>
                
            </div>

    </div> <!-- end of section 14 -->

<div class="container full-width">
    
    <div class="row">
        
    
   
    
        <div class="col-xs-12 " id="frasefooter">
        <small>&copy;<?=date('Y');?> Made for Zave App </small>
    </div>
    
	</div>
    </div>

	
<a href="#section1" class="backtotop">↑</a>
        
<?php wp_footer(); ?>

   </body> 
</html>
        
        