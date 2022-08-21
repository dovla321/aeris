<?php 

/*
Template Name: Page home
 */
?>
<?php $hero = get_field('hero')?>

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
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

	
	<title></title>
	<?php wp_head();?>
</head>
<body class="">
	

	
<section class="abasol_section part" data-color="white">
	<div class="container-navi">
		<header>
		<div class="navi-logo">
			<img src="<?php echo esc_url(get_template_directory_uri());?>/img/menu-logo.svg">
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
		<button class="mirko toggleMirko1">
      <span></span>
      </button>
		</header>


		 <div class="menu-map-img menu-map-aeris2 menu-map-aeris3">
		<img src="<?php echo esc_url(get_template_directory_uri());?>/img/menu-map.svg">
		<div class="tehno-text-vertical">
			<h5 class="marg-boot">IT TECHNOLOGY</h5>
			<h5 class="marg-boot">BUSINESS SOLUTIONS</h5>
			<h5>BY AERIS</h5>
		</div>
		
	</div>
   </div> 
<!--------------------------------sekcija1----------------------------------------->

  <div class="mobile-backImage">
  	<div class="container-mobil">
		<div class="tehno-text-vertical-mobi">
			<h5 class="marg-boot">IT TECHNOLOGY</h5>
			<h5 class="marg-boot">BUSINESS SOLUTIONS</h5>
			<h5>BY AERIS</h5>
		</div>
	</div>
  	<div class="contact-div">

  				<h4>CONTACT US</h4>
  				
  			</div>
  			<div class="grayText">
				  	<p>IT consultancy for:
								Architecture.
							  Software Development.
								Agile and DevOps.</p>
				  </div>
  	<div class="mobile-yellow-div">
  		<div class="ae-mini-logo">
  			<img src="<?php echo esc_url(get_template_directory_uri());?>/img/ae.svg">

  		</div>

  	</div>
  </div>
  


    


	<div class="cont-wrapp  ">
		<div class="row">


			 

			<div class="col-md-3">

			</div>
    

			<div class="col-md-4 only-contentBox">
				
        

				<div class="row">
 
					

					<div class="col-md-6">
						<div class="aeris-text-wrapp">
							<h1 data-aos="fade-left"><?php echo $hero['big_text_hero'];?></h1>

							<p data-aos="fade-right"><?php echo $hero['left_text'];?></p>
						</div>
					</div>
					<div class="col-md-6">
						<p class="sec-tex-content-cont"data-aos="fade-left"><?php echo $hero['right_text'];?></p>
					</div>

					
				</div>


			</div>



			<div class="col-md-5">
				
			</div>
		</div>
	</div>



<!--<div class="cont-wrapp-ae-yellowBox">
		<div class="container-fluide">
		
			
				<div class="row marg-right">
					<div class="col-3">
						<div class="logo-ae">
							<img src="img/ae.svg">
						</div>
						<div class="small-gray-text">
							<p>IT consultancy for:<br>
               Architecture<br>
               Software Development<br>
               Agile and DevOps</p>
						</div>
					</div>
					<div class="col-9">
						<div class="yellow-transparent-bcg"></div>
					</div>
				</div>
			</div>
			
		
	</div>-->
<!--<div class="looogo">
	<div class="logo-bootom-left">
			<img src="img/ae.svg">
		</div>
		<div class="little-gray-text">
							<p>IT consultancy for:<br>
               Architecture<br>
               Software Development<br>
               Agile and DevOps</p>
						</div>
</div>-->
	

	

	

	<!--<script language="JavaScript">
		if(window.screen.width>768){
			document.write('<div id="dynamicImageContainer"><img src="/img/dynamicImage/ej1.jpg" id="dynamicImage"</div>');
		}
	</script>-->

  
	
<div id="dynamicImageContainer">

    
		  <img src="<?php echo esc_url(get_template_directory_uri());?>/img/dynamicImages/ej1.jpg" id="dynamicImage">
		  
      <div class="transparent-bcg" data-aos="fade-left"></div>
      <div class="looogo" data-aos="fade-right">
				<div class="logo-bootom-left">
						<img src="<?php echo esc_url(get_template_directory_uri());?>/img/ae.svg">
						<h4 class="loogo-contact">CONTACT</h4>
					</div>
					<div class="little-gray-text">
										<p>IT consultancy for:<br>
			               Architecture<br>
			               Software Development<br>
			               Agile and DevOps</p>
									</div>
               </div>

						   <div class="gray-text-under-pic">
						   	    <p>IT consultancy for:
									      Architecture.
									      Software Development.
					              Agile and DevOps.</p>
						   </div>
           </div>
	


 
 

	<!--<div class="menu-map-img">
		<img src="img/menu-map.svg">
		<div class="tehno-text-vertical">
			<h5 class="marg-boot">IT TECHNOLOGY</h5>
			<h5 class="marg-boot">BUSINESS SOLUTIONS</h5>
			<h5>BY AERIS</h5>
		</div>
		
	</div>-->


</section>
<!--sekcija 2--------------------------------------------------------------->


<section class="part mar-topp-sec-2" data-color="whiteblue">
	
	<div class="container-fluide " id="It_section" style="margin-top: 200px;">
		<div class="it-techno-wrap px-5">
			<div class="row px-5">
				<div class="col-md-12">
					<div class="pdng-tehno-heading px-4">
					<h1 class="it-teh-heading" data-aos="fade-left"><?php the_field('big_central_title');?></h1>
           </div>                            
				</div>
			</div>
		</div>

		<div class="yellow-box-background">
      <div class="yell-box-minConteiner "></div>
			<!--<img src="img/bcgBox.svg">-->
			 <div class="text-container-sec-2">
			 	<div class="row">
			 		<div class="col-md-12 min_widt">
			 			<div class="content-width-p">
					<p data-aos="fade-right"><span><?php the_field('central_bold_title');?></span></p>
					<p data-aos="fade-left">
					<?php the_field('central_text_area');?></p>
						</div>		 		

					</div>

			 		<!--<div class="col-md-6 min_widt">
			 			
			 		</div>-->
			 	</div>
			 </div>

			 <div class="row rw-absol">
			 	<div class="col-md-6">
			 		
			 	</div>
			 	<div class="col-md-6">
			 		<div class="row no-gutter">
			 			<div class="col-md-6">
			 				<div class="softwer-black-con z-ind1"data-aos="fade-down">
			 					<h3>Software<br>
                   development<br>
                   consulting</h3>
                   <div class="some-content">
                   	<p>Comprehensive and intelligent from the
										ground up<br>
										Designing the best-suited IT architecture is
										where AERIS excels. We develop strategic
										architecture models that provide the
										framework for a secure, reliable and efficient
										IT system, whether that be microservices or
										monolith. We consider numerous factors,
										such as a positive effect on costs, project
										duration, scalability, as well as the
										productive use of your IT systems.</p>
										<img src="<?php echo esc_url(get_template_directory_uri());?>/img/yell-logo.svg">
								 </div>
			 				</div>
			 			</div>

			 			<div class="col-md-6">
			 				
			 			</div>

			 		</div>
			 	</div>
			 </div>


		</div>

		<div class="row rw-absol">
			 	<div class="col-md-6">
			 		<div class="row no-gutter">
			 			<div class="col-md-6">
			 				
			 			</div>
			 			<div class="col-md-6">
			 				<div class="softwer-black-con z-ind2"data-aos="fade-right">
			 					<h3>Architecture<br>
                    consulting</h3>
                    <div class="some-content">
                   	<p>Comprehensive and intelligent from the
										ground up<br>
										Designing the best-suited IT architecture is
										where AERIS excels. We develop strategic
										architecture models that provide the
										framework for a secure, reliable and efficient
										IT system, whether that be microservices or
										monolith. We consider numerous factors,
										such as a positive effect on costs, project
										duration, scalability, as well as the
										productive use of your IT systems.</p>
										<img src="<?php echo esc_url(get_template_directory_uri());?>/img/yell-logo.svg">
								 </div>
			 				</div>
			 			</div>
			 		</div>
			 	</div>
			 	<div class="col-md-6">
			 		<div class="row no-gutter">
			 			<div class="col-md-6">
			 				
			 			</div>

			 			<div class="col-md-6">
			 				<div class="softwer-black-con z-ind3"data-aos="fade-left">
			 					<h3>Agile and DevOps<br>
                    consulting</h3>
                    <div class="some-content">
                   	<p>Comprehensive and intelligent from the
										ground up<br>
										Designing the best-suited IT architecture is
										where AERIS excels. We develop strategic
										architecture models that provide the
										framework for a secure, reliable and efficient
										IT system, whether that be microservices or
										monolith. We consider numerous factors,
										such as a positive effect on costs, project
										duration, scalability, as well as the
										productive use of your IT systems.</p>
										<img src="<?php echo esc_url(get_template_directory_uri());?>/img/yell-logo.svg">
								 </div>
			 				</div>
			 			</div>

			 		</div>
			 	</div>
			 </div>

	</div>
</section>

<!--sekcija 3--------------------------------------------------------------->

<section class="slider_section part" data-color="lightblue">
	

	<div class="sec3_heading">
		<div class="img_quotes">
			<img src="<?php echo esc_url(get_template_directory_uri());?>/img/homepage/qu.svg">
		</div>
		<h2>Satisfied clients are what we do best</h2>
	</div>

	<!-- SLIDER -->

	<?php get_template_part('include/section','slider');?>


			   


</section>

<!--footer--------------------------------------------------------------->


<footer class="part" data-color="blue">

  <div class="yellow-box-footerMain-div">
    <div class="btn-divMain-footer">
          <a href="#">CONTACT US</a>
        </div>
        <div class="inprint-icon-container">
          <div class="in-icon"></div>
           <div class="in-some-text">
            <p>Imprint<br>
               Terms and conditions<br>
               Data protection</p>
           </div>

        </div>
           <div class="blog-input-wrapper">
            <div class="blog-text-wrapper">
              <h4>JOIN OUR BLOG</h4>
            </div>
            <input type="text" name="text" placeholder="enter your e-mail adress..">
          </div>
  </div>



  <div class="footer-container">
    <div class="main-wrap_footer-heading">
      <div class="row">
        <div class="col-md-12">
          <div class="footer-heading_wrapper">
            <h1>Differentiate your
                  business with
                  AERIS.</h1>
          </div>
        </div>
      </div>
      <!--<div class="yellow-box-footer-div"></div>-->
    </div>
  

  <div class="footer-sec-heading zz-ind-footerUp">
    <h3>Let’s create a powerful and effective IT solution together.</h3>
  </div>

  <div class="real-footer-wrapp">
    <div class="row ">
      <div class="col-md-3 min-heig-footer disp-none-footer">
        <div class="inprint-coll-wrapp">
          <div class="in-div"></div>
          <div class="inprint-text">
            <a href="#"><p>Imprint<br>
               Terms and conditions<br>
               Data protection
               </p></a>
          </div>
        </div>
      </div>

      <div class="col-md-3 min-heig-footer">
        <div class="footer-blog-wrapp blog-disp-non">
          <h4>JOIN OUR BLOG</h4>
          <input type="text" name="text" placeholder="enter your e-mail adress...">
        </div>
      </div>

      <div class="col-md-3 disp-none-footer">
        
      </div>

      <!--<div class="col-md-3">
        <div class="btn-div-footer">
          <a href="#">CONTACT US</a>
        </div>
      </div>-->

    </div>
  </div>
  </div>  
  

</footer>





<?php get_footer();?>