<!-- Header  -->
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<!-- Header  Slider style-->
 
 <!-- Header  Inner style-->
 <section class="row final-inner-header" style="background-image: url('<?php the_post_thumbnail_url(); ?>') !important;">
 	<div class="container">
 		<h2 class="this-title"><?php the_title(); ?></h2>
 	</div>
 </section>
 <section class="row final-breadcrumb">
 	<div class="container">
 		<ol class="breadcrumb">
 			<li><a href="<?php echo home_url(); ?>">Home</a></li>
 			<li class="active">About us</li>
 		</ol>
 	</div>
 </section>
<!-- Header  Slider style-->
    

<!-- About Resort style-->
  <section class="container clearfix common-pad about-info-box">
    
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
      
      <div class="sec-header3">
         <h2><?php the_title(); ?></h2>
             <h3>What Hangout Beach Resort is all about</h3>
         </div><?php the_content(); ?>
        
      </div>
      
      <div class="col-sm-4 hidden-xs">
      
      <div class="img-cap-effect">
          <div class="img-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/about/1.jpg" alt="">
          <div class="img-caption">
              
              </div>
          </div>
          
          </div>
      </div>
    </div>
    </section> 
    
<!-- About Resort style-->
    

<!-- Our Resort Values style-->
 <section class="clearfix news-wrapper">
    <div class="container clearfix common-pad">
     <div class="row">
     
     <div class="col-lg-6 col-md-6 col-xs-12 our-resort-value hidden-xs">
         <div class="img-l-box"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/our-resort-values/1.jpg" alt=""></div>
         <div class="img-r-box"><div class="img-box1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/our-resort-values/2.jpg" alt=""></div><div class="img-box2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/our-resort-values/3.jpg" alt=""></div></div>
         
         
         </div>
     <div class="col-lg-6 col-md-6 col-xs-12">
         
         <div class="resort-r-value">
             <div class="sec-header sec-header-pad">
         <h2>What Hangout Beach & Resort</h2>
             <h3>Our Values We Bring to You</h3>
         </div>
         <div class="accordian-area">
             
         <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <span>WE offer luxury service to our customer</span><i class="fa fa-minus"></i><i class="fa fa-plus"></i> 
                                </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body faq-content">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                WE offer luxury service to our customer<i class="fa fa-minus"></i><i class="fa fa-plus"></i> 
                                </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body faq-content">
                                    
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                WE offer luxury service to our customer<i class="fa fa-minus"></i><i class="fa fa-plus"></i> 
                                </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body faq-content">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                                    
                                </div>
                            </div>
                        </div>
                     
                    </div>
             </div>
         
         </div>
        
         </div>
     
        </div>
     
     </div>
    
    
    </section>   
<!-- Our Resort Values style-->    

 <!-- Testimonials Resort  -->
  <section class="container clearfix common-pad testimonials-sec">
   <div class="sec-header">
         <h2>Testimonials</h2>
             <h3>Pick a room that best suits your taste and budget</h3>
         </div> 
      
      <div class="testimonials-wrapper">
      <div class="testimonial-sliders">
    
         
          <div class="item">
          <div class="test-cont"><p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p></div>             
             <div class="test-bot">
             <div class="tst-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonials/1.png" alt="" class="img-responsive"></div>
             <div class="client_name">
               <h5>Mark John - <span>Nescom Technology- Director</span></h5>  
                 <ul>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
									</ul>
                 </div>
             
             </div>
          </div> 
          
           <div class="item">         
             <div class="test-cont"><p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p></div>             
             <div class="test-bot">
             <div class="tst-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonials/2.png" alt="" class="img-responsive"></div>
             <div class="client_name">
               <h5>Mark John - <span>Nescom Technology- Director</span></h5>  
                 <ul>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
									</ul>
                 </div>             
             </div>        
         </div> 
          <div class="item">
          <div class="test-cont"><p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p></div>             
             <div class="test-bot">
             <div class="tst-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonials/3.png" alt="" class="img-responsive"></div>
             <div class="client_name">
               <h5>Mark John - <span>Nescom Technology- Director</span></h5>  
                 <ul>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
									</ul>
                 </div>
             
             </div>
          </div> 
          
           <div class="item">         
             <div class="test-cont"><p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p></div>             
             <div class="test-bot">
             <div class="tst-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonials/4.png" alt="" class="img-responsive"></div>
             <div class="client_name">
               <h5>Mark John - <span>Nescom Technology- Director</span></h5>  
                 <ul>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
									</ul>
                 </div>             
             </div>        
         </div> 
          <div class="item">         
             <div class="test-cont"><p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p></div>             
             <div class="test-bot">
             <div class="tst-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonials/5.png" alt="" class="img-responsive"></div>
             <div class="client_name">
               <h5>Mark John - <span>Nescom Technology- Director</span></h5>  
                 <ul>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
										<li><a href="#"><i class="fa fa-star"></i></a></li>
									</ul>
                 </div>             
             </div>        
         </div> 
          
          
    
    </div>
          
      </div>
 </section> 
 <!-- Testimonials  Resort -->

 <!-- Welcome banner  style-->

<!-- footer  style-->
<?php endwhile; else : ?>
    <h4>No content found</h4>
<?php endif;
get_footer();
?>