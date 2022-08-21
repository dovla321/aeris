 <?php 

/*
Template Name: Page blog
 */
   get_header();


   ?>


<!--<section class="video-section">-->
 	<div class=" video-tehnowrapp12">
    <video src="<?php echo esc_url(get_template_directory_uri());?>/img/video/carrers.mp4" autoplay muted loop class=""></video>	
    
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
					<h1 class="it-teh-heading"><span>Smart </span>strategies<br>
                                       for <span>successful </span>IT</h1>
           </div>                            
				</div>
			</div>
		</div>


		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="tehno-textWrap tehno-textWrapBlog">
						
						<p>From the very beginning, we were determined that AERIS would be a place full of learning, knowledge sharing and equality. Through this
               shared culture, all of us at AERIS strive to be a shining example for other tech companies a nd are committed to improving and participating
               in our vibrant and continually evolving industry.</p><br><br>

						<p>This blog is our place to share our knowledge, thoughts and opi nions — a source of information on a broad range of IT issues. Some
               upcoming blog topics include:</p>
						<ul>
							<li>Architecture: What we’ve learned along the way</li>
							<li>Boost your software quality and testing strategies</li>
							<li>Harness the power of modern key technologies</li>
							<li>Approaches and tools for agile methods, effective teamwork and continuous improvement</li>
							<li>Emerging technologies: Test cases and opinions about some exciting newcomers</li>
							
						</ul>
            <br>

            <p><span class="bolder-blog">So, if you’d like to join us, sign up to AERIS’s blog to receive regular updates. We’d love to have you along for the ride!</span></p>
            <br>
            <div class="joinBlog-wrap">
            	<div class="input-con">
            		<h4>JOIN OUR BLOG</h4>
            		<input type="text" name="text" class="blog-inputStyle" placeholder="enter your e-mail adress">
            	</div>
            	<p>*In accordance with your data protection declaration, please sen d me information on IT topics by email on a regular basis. I can revoke this declarat ion and
               unsubscribe at any time.</p>
            </div><br>

            <p>Until next time,</p>

            <div class="ej-signCon">
            	
            </div>

					</div>
				</div>
			</div>



			</div>
	</section>




<!--section3--------------------------------------------------------------->

<section class="blog-articlesWrap">
	<div class="container">
		<div class="row">

		 <?php 

			$args = array(
			'post_type'=> 'post-blogs',
			'orderby'    => 'ID',
			'post_status' => 'publish',
			'order'    => 'DESC',
			'posts_per_page' => -1 
			);
			$result = new WP_Query( $args );
			if ( $result-> have_posts() ) : ?>
			<?php while ( $result->have_posts() ) : $result->the_post(); ?>        



			<div class="col-lg-4">
			  <div class="article-wrap">
			  	<div class="artc-image">

			  		<?php if(has_post_thumbnail()):?>
			  		<img src="<?php the_post_thumbnail_url();?>" alt="">

			  		<?php endif;?>

			  	</div>
			  	<div class="artc-smallIcon">
			  		<div class="icon-div"></div>
			  		<div class="icon-text">
			  			<p><?php the_field('tema');?></p>
			  		</div>
			  	</div>

			  	<div class="artic-mainText">
			  		<h3><?php the_field('naslov');?></h3>
			  		<p><?php the_excerpt();?></p>
                    

			  		<!--<p></p>-->

               
			  	</div>
			  	<div class="button-blog">
			  		<a href="<?php the_permalink();?>">READ MORE</a>
			  	</div>

			  	
			  </div>
		</div>

<?php endwhile; ?>
<?php endif; wp_reset_postdata(); ?>


		<!--<div class="col-lg-4">
			<div class="article-wrap">
			  	<div class="artc-image">
			  		
			  	</div>
			  	<div class="artc-smallIcon">
			  		<div class="icon-div"></div>
			  		<div class="icon-text">
			  			<p>Thema Lorem Ipsum</p>
			  		</div>
			  	</div>

			  	<div class="artic-mainText">
			  		<h3>Blog Headline Lorem ipsum
                dolor sit amet.</h3>
			  		<p>Lorem ipsum dolor sit amet, consectetuer
               adipiscing elit. Aenean commodo ligula eget
               dolor. Aenean massa. Cum sociis natoque
               penatibus et magnis dis parturient montes,
               nascetur ridiculus mus. Donec quam felis,
               ultricies nec, pellentesque eu, pretium quis,
               sem.</p>

               
			  	</div>
			  	<div class="button-blog">
			  		<a href="#">READ MORE</a>
			  	</div>

			  	
			  </div>
		</div>

		<div class="col-lg-4">
			<div class="article-wrap">
			  	<div class="artc-image">
			  		
			  	</div>
			  	<div class="artc-smallIcon">
			  		<div class="icon-div"></div>
			  		<div class="icon-text">
			  			<p>Thema Lorem Ipsum</p>
			  		</div>
			  	</div>

			  	<div class="artic-mainText">
			  		<h3>Blog Headline Lorem ipsum
                dolor sit amet.</h3>
			  		<p>Lorem ipsum dolor sit amet, consectetuer
               adipiscing elit. Aenean commodo ligula eget
               dolor. Aenean massa. Cum sociis natoque
               penatibus et magnis dis parturient montes,
               nascetur ridiculus mus. Donec quam felis,
               ultricies nec, pellentesque eu, pretium quis,
               sem.</p>

               
			  	</div>
			  	<div class="button-blog">
			  		<a href="#">READ MORE</a>
			  	</div>

			  	
			  </div>
		</div>
		</div>


		<div class="row py-5">
			<div class="col-lg-4">
			  <div class="article-wrap">
			  	<div class="artc-image">
			  		
			  	</div>
			  	<div class="artc-smallIcon">
			  		<div class="icon-div"></div>
			  		<div class="icon-text">
			  			<p>Thema Lorem Ipsum</p>
			  		</div>
			  	</div>

			  	<div class="artic-mainText">
			  		<h3>Blog Headline Lorem ipsum
                dolor sit amet.</h3>
			  		<p>Lorem ipsum dolor sit amet, consectetuer
               adipiscing elit. Aenean commodo ligula eget
               dolor. Aenean massa. Cum sociis natoque
               penatibus et magnis dis parturient montes,
               nascetur ridiculus mus. Donec quam felis,
               ultricies nec, pellentesque eu, pretium quis,
               sem.</p>

               
			  	</div>
			  	<div class="button-blog">
			  		<a href="#">READ MORE</a>
			  	</div>

			  	
			  </div>
		</div>

		<div class="col-lg-4">
			<div class="article-wrap">
			  	<div class="artc-image">
			  		
			  	</div>
			  	<div class="artc-smallIcon">
			  		<div class="icon-div"></div>
			  		<div class="icon-text">
			  			<p>Thema Lorem Ipsum</p>
			  		</div>
			  	</div>

			  	<div class="artic-mainText">
			  		<h3>Blog Headline Lorem ipsum
                dolor sit amet.</h3>
			  		<p>Lorem ipsum dolor sit amet, consectetuer
               adipiscing elit. Aenean commodo ligula eget
               dolor. Aenean massa. Cum sociis natoque
               penatibus et magnis dis parturient montes,
               nascetur ridiculus mus. Donec quam felis,
               ultricies nec, pellentesque eu, pretium quis,
               sem.</p>

               
			  	</div>
			  	<div class="button-blog">
			  		<a href="#">READ MORE</a>
			  	</div>

			  	
			  </div>
		</div>

		<div class="col-lg-4">
			<div class="article-wrap">
			  	<div class="artc-image">
			  		
			  	</div>
			  	<div class="artc-smallIcon">
			  		<div class="icon-div"></div>
			  		<div class="icon-text">
			  			<p>Thema Lorem Ipsum</p>
			  		</div>
			  	</div>

			  	<div class="artic-mainText">
			  		<h3>Blog Headline Lorem ipsum
                dolor sit amet.</h3>
			  		<p>Lorem ipsum dolor sit amet, consectetuer
               adipiscing elit. Aenean commodo ligula eget
               dolor. Aenean massa. Cum sociis natoque
               penatibus et magnis dis parturient montes,
               nascetur ridiculus mus. Donec quam felis,
               ultricies nec, pellentesque eu, pretium quis,
               sem.</p>

               
			  	</div>
			  	<div class="button-blog">
			  		<a href="#">READ MORE</a>
			  	</div>

			  	
			  </div>
		</div>-->
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
						<h1>Knowledge is
                power. Knowledge
                shared is
                power multiplied.</h1>
					</div>
				</div>
			</div>
			<!--<div class="yellow-box-footer-div"></div>-->
		</div>
	

	<div class="footer-sec-heading zz-ind-footerUp">
		<h3>Robert Boyce</h3>
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