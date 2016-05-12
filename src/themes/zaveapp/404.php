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
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.flexslider-min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>

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

    
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container" id="pagenavcont">
       
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
        
        <div class="col-xs-12 col-sm-6 col-sm-offset-1">
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
		?>
    
    </div>
        
        
    
        <div class="col-xs-12 col-sm-2 col-sm-offset-1">
           <div class="socialbutton">
<a href="https://www.instagram.com/zaveapp/" target="_blank"><p><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</p></a>
</div>
<div class="socialbutton">
<a href="https://www.facebook.com/zaveapp/" target="_blank"><p><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</p></a>
 </div>
<div class="socialbutton">
<a href="https://medium.com/@Zaveapp1" target="_blank"><p><i class="fa fa-medium" aria-hidden="true"></i> Medium</p></a>
 </div>
<div class="socialbutton">
<a href="https://twitter.com/zaveapp" target="_blank"><p><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</p></a>
</div>
<div class="socialbutton">
<a href="https://www.pinterest.com/zaveapp/" target="_blank"><p><i class="fa fa-pinterest-p" aria-hidden="true"></i> Pinterest</p></a>
</div>
<div class="socialbutton">
<a href="" target="_blank"><p><i class="fa fa-spotify" aria-hidden="true"></i> Spotify</p></a>
</div>
<div class="socialbutton">
<a href="" target="_blank"><p><i class="fa fa-linkedin" aria-hidden="true"></i> LinkedIn</p></a>
</div>
    </div>
        
        
        </div>
    </div>
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
    </div>
</div>   
</div> <!--  end of the content div  -->

<?php get_footer(); ?>