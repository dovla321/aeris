<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Bootstrap css-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
	
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/style.css">
	<!---animate.css--->
    <!--<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>-->
	<!--<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>-->
	<!---font Awesome--->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
	<!--<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />-->

	
	
	<?php wp_head();?>
</head>
<body class="bg-color">
	

	
<section class="abasol_section part video-section1">
	<div class="container-navi">
		<header>
		<div class="navi-logo">
			<a href="http://localhost/AERIS/home/"><img src="<?php echo esc_url(get_template_directory_uri());?>/img/menu-logo.svg"></a>
		</div>
		<nav>
			<?php  
                      
                      wp_nav_menu(
                      	array(
                      	   'menu'=>'primary-menu',
                      	   'container'=>'',
                      	   'items_wrap'=>'<ul id="menu">%3$s</ul>',
                      	   

                      	)
                      );

                   ?>
		</nav>
		<button class="mirko toggleMirko">
      <span></span>
      </button>
		</header>


		<div class="menu-map-img menu-map-aeris2">
		<img src="<?php echo esc_url(get_template_directory_uri());?>/img/menu-map.svg">
		<div class="tehno-text-vertical">
			<h5 class="marg-boot">IT TECHNOLOGY</h5>
			<h5 class="marg-boot">BUSINESS SOLUTIONS</h5>
			<h5>BY AERIS</h5>
		</div>
		
	</div>
   </div> 