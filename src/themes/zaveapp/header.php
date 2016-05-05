<!DOCTYPE html>
<html lang="en">

<head>
    
    <title> <?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<!-- FAVICON -->
	<link rel="icon" type="image/png" href="img/zaveicon.png">	
    <!-- END FAVICON -->
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
    <!-- Bootstrap -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap-social.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/flexslider2.css" rel="stylesheet" type="text/css">
    
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
    <!-- Begin switch video -->
    

    
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

    
    
  
    <!-- End  switch video -->    
    
    <!-- Begin Flex Slider -->
    <script>
    $(window).load(function() {
    $('.flexslider').flexslider({animationLoop: true,             //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
    smoothHeight: false,            //{NEW} Boolean: Allow height of the slider to animate smoothly in horizontal mode  
    startAt: 0,                     //Integer: The slide that the slider should start on. Array notation (0 = first slide)
    slideshow: true,                //Boolean: Animate slider automatically
    slideshowSpeed: 4000,});
    });
    </script>
    <!-- End Flex Slider -->

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
    
<body <?php body_class(); ?> >

    
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid full-width" id="navcont">
    <div class="navbar-header">
      
   
                    <button id="nav-toggle-button" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
        <a class="navbar-brand" href="<?php $url = home_url();
echo esc_url( $url ); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/zavelogo.png" id="logo" alt="Zave App logo" height=80></a>
                    
    </div> <!-- END OF NAVBAR-HEADER -->
                
    <div id="navbar" class="navbar-right navbar-collapse collapse">
                    
                <ul class="nav navbar-nav">
                    <li>Home</li>
                    <li>Como Funciona</li>
                    <li>Metas</li>
                    <li>Nosotros</li>
                    <li>Contacto</li>
                </ul>
  
    </div> <!-- END OF NAVBAR-COLLAPSE -->
        
 </div> <!-- END OF NAVCONT -->
    
</nav> 
           
<!-- END OF NAVIGATION -->
        