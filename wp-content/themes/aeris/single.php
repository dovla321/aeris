
<?php get_header();?>


<!--<section class="video-section">-->
 	<div class=" video-tehnowrapp12">
    <video src="<?php echo get_template_directory_uri();?>/img/video/carrers.mp4" autoplay muted loop class=""></video>	
    
 		<div class="logoInYellBox mar-serv-yell-log">
     	<div class="logoAeris">
 				<img src="<?php echo get_template_directory_uri();?>/img/ae.svg">
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
            <img src="<?php echo get_template_directory_uri();?>/img/ae.svg">
            
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
					<h1 class="it-teh-heading"><span>Creating </span> digital
                                                     business value
                                                     at AERIS</h1>
           </div>                            
				</div>
			</div>
		</div>



<div class="container">
						<div class="b2b-clients-wrapp">
							<div class="row">
								<div class="col-md-12">
									<div class="b2b-text-wrap pCrrer-lineH tehno-textWrap tehno-textWrapSingBlog">
										<h1><?php the_title();?></h1>
										<?php if(has_post_thumbnail()):?>
         
         <img src="<?php the_post_thumbnail_url('blog-large');?>"alt="<?php the_title();?>" class="img-fluid mb-4">
	    <?php endif;?>
										<?php if(have_posts() ) :while(have_posts() ): the_post();?>


    

	<?php the_content();?>

	<?php 
    $fname=get_the_author_meta('first_name');
    $lname=get_the_author_meta('last_name');

	?>
	<p><b>Posted by</b> <?php echo $fname;?> <?php echo $lname;?></p>
	<p><?php echo get_the_date();?></p>


	<?php 
	$tags=get_the_tags();
     if($tags):
     foreach($tags as $tag):?>

     	<a href="<?php echo get_tag_link( $tag->term_id);?>" class="btn btn-primary">
     		<?php echo $tag->name;?>

     	</a>


	<?php endforeach; endif;?>

	<?php  
     $categories=get_the_category();
     foreach($categories as $cat):?>
                 
                 <a href="<?php echo get_category_link($cat->term_id);?>" >
                 <?php echo $cat->name;?>

                 </a>


	<?php endforeach;?>



	



<?php endwhile; else: endif;?>

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
						<h1>Get in touch
                            with AERIS!</h1>
					</div>
				</div>
			</div>
			<!--<div class="yellow-box-footer-div"></div>-->
		</div>
	

	<div class="footer-sec-heading zz-ind-footerUp">
		<h3>Come — join us!</h3>
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