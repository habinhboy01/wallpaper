<!DOCTYPE html>
<html>
<head>
	<title>Wallpaper</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<!-- BOOTSTRAP -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/vendor/bootstrap5/css/bootstrap.min.css">

	 <!-- carousel -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/assets/owl.carousel.min.css">
  	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/assets//owl.theme.default.min.css">

  	 <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/reset.css"> 
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/style.css">

	 <!-- fontawesome -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/vendor/fontawesome-free-5.15.3-web/css/all.min.css">
	<?php wp_head() ?>
</head>
<body>
	<!-- menu pc -->

	<div class="container-fluid">
		<div class="background-header">
			<a class="home-url" href="<?php echo home_url(); ?>">
		        <img class="img_logo1" src="<?php echo get_theme_mod( 'Logo' ); ?>">
		    </a>
            
            <div class="menu-pc">
    		    <?php wp_nav_menu (
    		        array('theme_location' => 'menu-1', 'menu_class' => 'sub-menu'));?>
    
    		    <ul class="sub-menu">
    		       	<li>
    		       		<a href="#"><img src="<?php bloginfo('template_directory') ?>/images/shopping-cart.png"></a>
    		       	</li>
    
    		       	<li><img class="search" src="<?php bloginfo('template_directory') ?>/images/search.png"></li>
    		    </ul>
    		</div>
		</div>
	</div>

	<!-- menu mobile -->

	<div class="container-fluid">
		<div class="bg-mobile">
			<div class="bg-menu-mobile">
				<div class="container-bar" onclick="myFunction(this)">
				  	<div class="bar1"></div>
				  	<div class="bar2"></div>
				  	<div class="bar3"></div>
				</div>

				<a class="home-url" href="<?php echo home_url(); ?>">
			        <img class="img_logo" src="<?php echo get_theme_mod( 'Logo' ); ?>">
			    </a>

			    <span><img class="search" src="<?php bloginfo('template_directory') ?>/images/search.png"></span>
			</div>

		    <?php wp_nav_menu (
		        array('theme_location' => 'menu-1', 'menu_class' => 'menu-mobile'));?>
		</div>
	</div>

	<div class="bg-input-header">
		<i class="fas fa-times"></i>

		<?php echo do_shortcode('[wp_search_form]'); ?>
	</div>

	<!-- banner quảng cáo -->
	<div class="bg-banner">
        <?php wp_nav_menu (
    		array('theme_location' => 'menu-2', 'menu_class' => 'sub-menu2'));?>
	</div>

