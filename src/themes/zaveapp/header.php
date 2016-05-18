<!DOCTYPE html>
<html lang="en">

<head>
    
    <title> <?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="og:title" content="Home ZaveApp">
    <meta name="og:type" content="website">
    <meta name="og:url" content="http://zaveapp.com/">
    
	<!-- FAVICON -->
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/zaveicon.png">	
    <!-- END FAVICON -->
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
    <!-- Bootstrap -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/flexslider2.css" rel="stylesheet" type="text/css">
    <link href="<?php bloginfo('template_url'); ?>/css/animate.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css" rel="stylesheet">
    
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
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<script src="<?php bloginfo('template_url'); ?>/js/jquery.flexslider-min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
    
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

$(document).ready(function() {
    $('.o-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:2
        }
    }
});
    
    
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
    
<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar" data-offset="50" >

    
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid full-width" id="navcont">
       
    <div class="navbar-header">
      
   
                    <button id="toggle-button" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
        <a class="navbar-brand" href="<?php $url = home_url();
echo esc_url( $url ); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/zavelogo.png" id="logo" alt="Zave App logo" height=80;></a>
                    
    </div> <!-- END OF NAVBAR-HEADER -->
                
 
                    
                <ul id="navbar" class="nav navbar-nav navbar-right navbar-collapse collapse">
                     <?php
                                    wp_nav_menu( array(
                                        'menu'              => 'Main',                
                                        'depth'             => 2,
                                        'container'         => 'div',
                                        'container_class'   => 'collapse navbar-collapse main-menu-select',
                                        'menu_class'        => 'nav navbar-nav hashscroll',
                                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                        'walker'            => new wp_bootstrap_navwalker())
                                    );
                                ?>
                </ul>
  
    </div> <!-- END OF NAVBAR-COLLAPSE -->
      
    
</nav> 
           
<!-- END OF NAVIGATION -->
        