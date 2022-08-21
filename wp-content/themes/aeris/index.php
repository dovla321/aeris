<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Bootstrap css-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
	<title>Aeris</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/style.css">
	<!---animate.css--->
    <!--<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>-->
	<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<!---font Awesome--->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
	<!--<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />-->

	
	<title></title>
	<?php wp_head();?>
</head>
<body>
	<div class="first-pageWrap">

		<div class="blueQ-wrap">
			<div class="logoQ"></div>
			<div class="text-wrapQ">
				<p>Open - source load , end - to - end  and
           performance  test  for  distributed  systems</p>
			</div>
			<div class="qbutton-wrap">
				<a href="#">ENTER</a>
			</div>

		
		</div>

		<div class="yellAeris-wrapp">
        <div class="logoY"></div>
        <div class="text-wrapA">
        	<p>IT consultancy for architecture,<br>
           sofware development, agile and DevOps</p>
        </div>

        <div class="video-wrap">
        	<video src="<?php echo esc_url(get_template_directory_uri());?>/img/first-page/fvideo.mp4" autoplay muted loop class="video-bubble_big"></video>
        	<div class="button-wrap">
        	<a href="http://localhost/AERIS/home/">ENTER</a>
        	</div>
        	<div class="logoVideo"></div>
        </div>
			

		</div>
	</div>





	<?php get_footer();?>