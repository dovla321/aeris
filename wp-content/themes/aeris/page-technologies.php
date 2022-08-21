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
<body class="bg-color technologies">
  

  
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




   <!--<section class="video-section">-->
 	<div class=" video-tehnowrapp12">
    <video src="<?php echo esc_url(get_template_directory_uri());?>/img/video/wave2.mp4" autoplay muted loop class=""></video>	
    
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


<!--section2--------------------------------------------------------------->

  <section class="drop-and-numbers part" data-color="color2">
	<div class="it-techno-wrap px-5 py-5">
			<div class="row px-5">
				<div class="col-md-12">
					<div class="pdng-tehno-heading px-4">
					<h1 class="it-teh-heading"><span>Cutting-edge IT </span>technologies used</h1>
           </div>                            
				</div>
			</div>
		</div>


		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="tehno-textWrap">
						<h4>Tailor-made IT solutions for your competitive advantage</h4>
						<p>A key factor for the long-term success of any IT solution is rock-solid architecture that employs a mix of both mature and
             cutting-edge IT technologies, perfectly suited to your specific project. We pride ourselves on our extensive experience of proven,
             mature technological offerings, all while continuously staying up to date with pioneer ing newcomers too. By drawing on this broad
             knowledge, we can handpick the perfect blend that precisely ali gns with your business requirements.</p><br><br>

						<p>Some of our considerations when choosing the right technologies are:</p>
						<ul>
							<li>State-of-the-art for your area of business</li>
							<li>Quality, stability and security</li>
							<li>Performance</li>
							<li>Highly user and developer-friendly</li>
							<li>Maturity and quality of support</li>
							<li>Governance and long-term evolution for open-source projects</li>
							<li>Skills and experience of your internal teams</li>
						</ul>
            <br>
            <p>We select the tools to match your current requirements, ensuring our IT solution acts as a catalyst to accelerate your business and
            position you years ahead of your competition.</p>
            <br>
            <p>This is by no means an exhaustive list, but here are some of ou r favorites:</p>

					</div>
				</div>
			</div>

<!-------------------------------------dropdown--------------------------------------------------->
			<div class="row">
				<div class="col-md-12">
					<div class="faq">	
                       <div class="question">
                         <div class="dropdown-textCon">
                         	<h4>Apache Kafka</h4>
                         	<span class="round-borderText">Master of data streams</span>
                         </div>
                      
                          <div class="toggle-wrappDiv">
                          	<p class="text text1">SHOW MORE</p>
                          	<p class="text text2">CLOSE</p>
                          	<div class="dropdown-arrow"><i class="fas fa-chevron-down"></i></div>
                          </div>
                       </div>

                       <div class="answer">	
                         <p>AERIS offers a broad spectrum of IT services, from specialist and technical concept planning to so ftware development, systems operations and support forAERIS offers a broad spectrum of IT services, from specialist and technical concept planning to so ftware development, systems operations and support for
                         your internal IT Team. We tackle each project with passion and expertise to ensure your business’s success
                         your internal IT Team. We tackle each project with passion and expertise to ensure your business’s success</p>
                       </div>
                    </div>
				</div>
			</div>


			<div class="row">
				<div class="col-md-12">
					<div class="faq">	
                       <div class="question">
                         <div class="dropdown-textCon">
                         	<h4>Docker</h4>
                         	<span class="round-borderText">The compact container platform</span>
                         </div>
                      
                          <div class="toggle-wrappDiv">
                          	<p class="text text1">SHOW MORE</p>
                          	<p class="text text2">CLOSE</p>
                          	<div class="dropdown-arrow"><i class="fas fa-chevron-down"></i></div>
                          </div>
                       </div>

                       <div class="answer">	
                         <p>AERIS offers a broad spectrum of IT services, from specialist and technical concept planning to so ftware development, systems operations and support forAERIS offers a broad spectrum of IT services, from specialist and technical concept planning to so ftware development, systems operations and support for
                         your internal IT Team. We tackle each project with passion and expertise to ensure your business’s success
                         your internal IT Team. We tackle each project with passion and expertise to ensure your business’s success</p>
                       </div>
                    </div>
				</div>
			</div>


			<div class="row">
				<div class="col-md-12">
					<div class="faq">	
                       <div class="question">
                         <div class="dropdown-textCon">
                         	<h4>Elasticsearch</h4>
                         	<span class="round-borderText">The universal talent</span>
                         </div>
                      
                          <div class="toggle-wrappDiv">
                          	<p class="text text1">SHOW MORE</p>
                          	<p class="text text2">CLOSE</p>
                          	<div class="dropdown-arrow"><i class="fas fa-chevron-down"></i></div>
                          </div>
                       </div>

                       <div class="answer">	
                         <p>AERIS offers a broad spectrum of IT services, from specialist and technical concept planning to so ftware development, systems operations and support forAERIS offers a broad spectrum of IT services, from specialist and technical concept planning to so ftware development, systems operations and support for
                         your internal IT Team. We tackle each project with passion and expertise to ensure your business’s success
                         your internal IT Team. We tackle each project with passion and expertise to ensure your business’s success</p>
                       </div>
                    </div>
				</div>
			</div>


			<div class="row">
				<div class="col-md-12">
					<div class="faq">	
                       <div class="question">
                         <div class="dropdown-textCon">
                         	<h4>Go</h4>
                         	<span class="round-borderText">All-round talent with great potential</span>
                         </div>
                      
                          <div class="toggle-wrappDiv">
                          	<p class="text text1">SHOW MORE</p>
                          	<p class="text text2">CLOSE</p>
                          	<div class="dropdown-arrow"><i class="fas fa-chevron-down"></i></div>
                          </div>
                       </div>

                       <div class="answer">	
                         <p>AERIS offers a broad spectrum of IT services, from specialist and technical concept planning to so ftware development, systems operations and support forAERIS offers a broad spectrum of IT services, from specialist and technical concept planning to so ftware development, systems operations and support for
                         your internal IT Team. We tackle each project with passion and expertise to ensure your business’s success
                         your internal IT Team. We tackle each project with passion and expertise to ensure your business’s success</p>
                       </div>
                    </div>
				</div>
			</div>



			<div class="row">
				<div class="col-md-12">
					<div class="faq">	
                       <div class="question">
                         <div class="dropdown-textCon">
                         	<h4>Groovy</h4>
                         	<span class="round-borderText">Efficient, dynamic, versatile</span>
                         </div>
                      
                          <div class="toggle-wrappDiv">
                          	<p class="text text1">SHOW MORE</p>
                          	<p class="text text2">CLOSE</p>
                          	<div class="dropdown-arrow"><i class="fas fa-chevron-down"></i></div>
                          </div>
                       </div>

                       <div class="answer">	
                         <p>Open-Source Programming language</p>
                         <ul>
                         	<li>Concise, dynamically and statically typed, interoperable with Java</li>
                         	<li>For scripts and compiled programs alike</li>
                         	<li>Thanks to its low learning curve, development velocity is incre ased</li>
                         	<li>Ideal for extending runtime application capabilities by configuration</li>

                         </ul><br>
                         <h6>Download full description of Groovy</h6>
                       </div>
                    </div>
				</div>
			</div>



			<div class="row">
				<div class="col-md-12">
					<div class="faq">	
                       <div class="question">
                         <div class="dropdown-textCon">
                         	<h4>Java</h4>
                         	<span class="round-borderText">Secure and lasting for cross-platform applications</span>
                         </div>
                      
                          <div class="toggle-wrappDiv">
                          	<p class="text text1">SHOW MORE</p>
                          	<p class="text text2">CLOSE</p>
                          	<div class="dropdown-arrow"><i class="fas fa-chevron-down"></i></div>
                          </div>
                       </div>

                       <div class="answer">	
                         <p>AERIS offers a broad spectrum of IT services, from specialist and technical concept planning to so ftware development, systems operations and support forAERIS offers a broad spectrum of IT services, from specialist and technical concept planning to so ftware development, systems operations and support for
                         your internal IT Team. We tackle each project with passion and expertise to ensure your business’s success
                         your internal IT Team. We tackle each project with passion and expertise to ensure your business’s success</p>
                       </div>
                    </div>
				</div>
			</div>


			<div class="row">
				<div class="col-md-12">
					<div class="faq">	
                       <div class="question">
                         <div class="dropdown-textCon">
                         	<h4>Jenkins</h4>
                         	<span class="round-borderText">All-round talent of automation</span>
                         </div>
                      
                          <div class="toggle-wrappDiv">
                          	<p class="text text1">SHOW MORE</p>
                          	<p class="text text2">CLOSE</p>
                          	<div class="dropdown-arrow"><i class="fas fa-chevron-down"></i></div>
                          </div>
                       </div>

                       <div class="answer">	
                         <p>AERIS offers a broad spectrum of IT services, from specialist and technical concept planning to so ftware development, systems operations and support forAERIS offers a broad spectrum of IT services, from specialist and technical concept planning to so ftware development, systems operations and support for
                         your internal IT Team. We tackle each project with passion and expertise to ensure your business’s success
                         your internal IT Team. We tackle each project with passion and expertise to ensure your business’s success</p>
                       </div>
                    </div>
				</div>
			</div>



			<div class="row">
				<div class="col-md-12">
					<div class="faq">	
                       <div class="question">
                         <div class="dropdown-textCon">
                         	<h4>Kotlin</h4>
                         	<span class="round-borderText">Clever & nimble</span>
                         </div>
                      
                          <div class="toggle-wrappDiv">
                          	<p class="text text1">SHOW MORE</p>
                          	<p class="text text2">CLOSE</p>
                          	<div class="dropdown-arrow"><i class="fas fa-chevron-down"></i></div>
                          </div>
                       </div>

                       <div class="answer">	
                         <p>AERIS offers a broad spectrum of IT services, from specialist and technical concept planning to so ftware development, systems operations and support forAERIS offers a broad spectrum of IT services, from specialist and technical concept planning to so ftware development, systems operations and support for
                         your internal IT Team. We tackle each project with passion and expertise to ensure your business’s success
                         your internal IT Team. We tackle each project with passion and expertise to ensure your business’s success</p>
                       </div>
                    </div>
				</div>
			</div>



			<div class="row">
				<div class="col-md-12">
					<div class="faq">	
                       <div class="question">
                         <div class="dropdown-textCon">
                         	<h4>Kubernetes & Openshift</h4>
                         	<span class="round-borderText">The noble art of orchestration</span>
                         </div>
                      
                          <div class="toggle-wrappDiv">
                          	<p class="text text1">SHOW MORE</p>
                          	<p class="text text2">CLOSE</p>
                          	<div class="dropdown-arrow"><i class="fas fa-chevron-down"></i></div>
                          </div>
                       </div>

                       <div class="answer">	
                         <p>AERIS offers a broad spectrum of IT services, from specialist and technical concept planning to so ftware development, systems operations and support forAERIS offers a broad spectrum of IT services, from specialist and technical concept planning to so ftware development, systems operations and support for
                         your internal IT Team. We tackle each project with passion and expertise to ensure your business’s success
                         your internal IT Team. We tackle each project with passion and expertise to ensure your business’s success</p>
                       </div>
                    </div>
				</div>
			</div>


			<div class="row">
				<div class="col-md-12">
					<div class="faq">	
                       <div class="question">
                         <div class="dropdown-textCon">
                         	<h4>Redis</h4>
                         	<span class="round-borderText">High-speed superhero</span>
                         </div>
                      
                          <div class="toggle-wrappDiv">
                          	<p class="text text1">SHOW MORE</p>
                          	<p class="text text2">CLOSE</p>
                          	<div class="dropdown-arrow"><i class="fas fa-chevron-down"></i></div>
                          </div>
                       </div>

                       <div class="answer">	
                         <p>AERIS offers a broad spectrum of IT services, from specialist and technical concept planning to so ftware development, systems operations and support forAERIS offers a broad spectrum of IT services, from specialist and technical concept planning to so ftware development, systems operations and support for
                         your internal IT Team. We tackle each project with passion and expertise to ensure your business’s success
                         your internal IT Team. We tackle each project with passion and expertise to ensure your business’s success</p>
                       </div>
                    </div>
				</div>
			</div>



			<div class="row">
				<div class="col-md-12">
					<div class="faq">	
                       <div class="question">
                         <div class="dropdown-textCon">
                         	<h4>Vue.js</h4>
                         	<span class="round-borderText">Simple and straightforward</span>
                         </div>
                      
                          <div class="toggle-wrappDiv">
                          	<p class="text text1">SHOW MORE</p>
                          	<p class="text text2">CLOSE</p>
                          	<div class="dropdown-arrow"><i class="fas fa-chevron-down"></i></div>
                          </div>
                       </div>

                       <div class="answer">	
                         <p>AERIS offers a broad spectrum of IT services, from specialist and technical concept planning to so ftware development, systems operations and support forAERIS offers a broad spectrum of IT services, from specialist and technical concept planning to so ftware development, systems operations and support for
                         your internal IT Team. We tackle each project with passion and expertise to ensure your business’s success
                         your internal IT Team. We tackle each project with passion and expertise to ensure your business’s success</p>
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
					<div class="footer-heading_wrapper footer-secondary-heading1-wrapper">
						<h1>There are no keys
                to success — only
                tools.</h1>
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