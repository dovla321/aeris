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
<body class="bg-color products">
  

  
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




   <div class="video-tehnowrapp12">
       <video src="<?php echo esc_url(get_template_directory_uri());?>/img/video/globe.mp4" autoplay muted loop class="video-bubble_big"></video>	
       

 		<div class="logoInYellBox mar-serv-yell-log">
     	<div class="logoAeris">
 				<img src="<?php echo esc_url(get_template_directory_uri());?>/img/ae.svg">
 				</div>
 				<div class="grayTextAerisPage">
 					<p>IT consultancy for:<br>
             Architecture<br>
             Software Development<br>
             Agile and DevOps</p>
 				</div>
 			</div>
 		<div class="yelConBox mar-serv-yell">
 			<div class="logoAeris-in-yell-box">	
         	<div class="logo">	
            <img src="<?php echo esc_url(get_template_directory_uri());?>/img/ae.svg">
            
         </div>
         <div class="gray-text">	
            <h5>CONTACT</h5>
         </div>
 			</div>
 		</div>


     <!--<div class="logoInYellBox">
     	<div class="logoAeris">
 				<img src="img/ae.svg">
 				</div>
 				<div class="grayTextAerisPage">
 					<p>IT consultancy for:<br>
             Architecture<br>
             Software Development<br>
             Agile and DevOps</p>
 				</div>
 			</div>
 		<div class="yelConBox">
 			
 		</div>-->
  <!--<video src="img/video/bubble.mp4" autoplay muted loop class="video-bubble_big"></video>	
  <video src="img/video/bubble.mp4" autoplay muted loop class="video-bubble_small"></video>	-->

  <div class="grayText grayText-universal grayText-universal2">
				  	<p>IT consultancy for:
								Architecture.
							  Software Development.
								Agile and DevOps.</p>
				  </div>
    </div>

    <!--<div class="menu-map-img menu-map-aeris2">
		<img src="img/menu-map.svg">
		<div class="tehno-text-vertical">
			<h5 class="marg-boot">IT TECHNOLOGY</h5>
			<h5 class="marg-boot">BUSINESS SOLUTIONS</h5>
			<h5>BY AERIS</h5>
		</div>
		
	</div>-->

	<div class="tehno-text-vertical-mobi tehnoMob2">
			<h5 class="marg-boot">IT TECHNOLOGY</h5>
			<h5 class="marg-boot">BUSINESS SOLUTIONS</h5>
			<h5>BY AERIS</h5>
		</div>
 </section> 



 <!-------------------------section2------------------------------------------------------------------->


 <section class="drop-and-numbers ">
	<div class="it-techno-wrap px-5 py-5">
			<div class="row px-5">
				<div class="col-md-12">
					<div class="pdng-tehno-heading product-bigHeading px-4 ">
					<h1 class="it-teh-heading">AERIS IT <span>product
                                   development </span>company</h1>
           </div>                            
				</div>
			</div>
		</div>


		<div class="product-wrapp margBoott">
			<div class="product-container">
				<div class="row py-5">
					<div class="col-lg-4 logDrop">
						<div class="backgLogoWrap">
							<div class="logo1-wrap main-log"></div>
							<div class="logo2-wrap main-log"></div>
							
							
						</div>

						<div class="logo-content">
								<h4>End-to-end,<br>
                    load and performance
                    testing tool</h4>
																		<p>QALIPSIS is a developer-centric, open-source
										performance, end-to-end and load testing tool
										designed by the IT product development
										company AERIS to test the performance of
										distributed and non-distributed systems alike. It
										collects data from different sources to perform
										independent cross-checks and verifications,
										ensuring systems meet performance and
										business requirements. Advanced analytical
										tools and dashboards of your choice allow clear
										and concise visualization of results.<br><br>
										Modeled in Kotlin, QALIPSIS provides seamless
										system performance. Not limited to testing
										websites, REST, or SOAP APIs, it also
										possesses the unique ability to target any
										application and cover an impressively broad
										range of systems and protocols.</p>
										<div class="download-icon"><i class="fas fa-file-download"></i></div>
																	</div>

						
					</div>

					<div class="col-lg-4 logDrop">
						<div class="backgLogoWrap2">
							<div class="logo3-wrap main-log"></div>
							<div class="logo4-wrap main-log"></div>
							
						</div>

						<div class="logo-content">
								<h4>End-to-end,<br>
                    load and performance
                    testing tool</h4>
																		<p>QALIPSIS is a developer-centric, open-source
										performance, end-to-end and load testing tool
										designed by the IT product development
										company AERIS to test the performance of
										distributed and non-distributed systems alike. It
										collects data from different sources to perform
										independent cross-checks and verifications,
										ensuring systems meet performance and
										business requirements. Advanced analytical
										tools and dashboards of your choice allow clear
										and concise visualization of results.<br><br>
										Modeled in Kotlin, QALIPSIS provides seamless
										system performance. Not limited to testing
										websites, REST, or SOAP APIs, it also
										possesses the unique ability to target any
										application and cover an impressively broad
										range of systems and protocols.</p>
										<div class="download-icon"><i class="fas fa-file-download"></i></div>
																	</div>
					</div>

					<div class="col-lg-4 logDrop">
						<div class="backgLogoWrap3">
							<div class="logo5-wrap main-log"></div>
							<div class="logo6-wrap main-log"></div>
							
						</div>

						<div class="logo-content">
								<h4>End-to-end,<br>
                    load and performance
                    testing tool</h4>
																		<p>QALIPSIS is a developer-centric, open-source
										performance, end-to-end and load testing tool
										designed by the IT product development
										company AERIS to test the performance of
										distributed and non-distributed systems alike. It
										collects data from different sources to perform
										independent cross-checks and verifications,
										ensuring systems meet performance and
										business requirements. Advanced analytical
										tools and dashboards of your choice allow clear
										and concise visualization of results.<br><br>
										Modeled in Kotlin, QALIPSIS provides seamless
										system performance. Not limited to testing
										websites, REST, or SOAP APIs, it also
										possesses the unique ability to target any
										application and cover an impressively broad
										range of systems and protocols.</p>
										<div class="download-icon"><i class="fas fa-file-download"></i></div>
																	</div>
					</div>
				</div>
			</div>
		</div>



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
						<h1>The best way to
                predict the future
                is to create it.</h1>
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