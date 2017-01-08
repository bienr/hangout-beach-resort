<!-- Header  -->
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<!-- Header  Slider style-->
 
 <!-- Header  Inner style-->
 <section class="row final-inner-header">
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
            <?php the_post_thumbnail("about-aside"); ?>
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
         <div class="img-l-box"><?php echo get_the_post_thumbnail(129); ?></div>
         <div class="img-r-box">
             <div class="img-box1"><?php echo get_the_post_thumbnail(131); ?></div>
             <div class="img-box2"><?php echo get_the_post_thumbnail(133); ?></div>
         </div>

         </div>
     <div class="col-lg-6 col-md-6 col-xs-12">
         
         <div class="resort-r-value">
             <div class="sec-header sec-header-pad">
         <h2>What Hangout Beach & Resort</h2>
             <h3>Our Values We Bring to You</h3>
         </div>
         <div class="accordian-area">
             
         <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <?php
            $values_args = array('post_type' => 'values', 'posts_per_page' => 3, 'order' => 'ASC');
            $values_query = new WP_Query($values_args);

            if ($values_query->have_posts()) :
                while ($values_query->have_posts()) :
                    $values_query->the_post();
                    ?>
                        <div class="panel panel-default">
                            <?php
                            $values_class = get_post_custom_values($key = 'values-class')[0];
                            ?>
                            <div class="panel-heading" role="tab" id="heading-<?php echo $values_class; ?>">
                                <h4 class="panel-title">
                                <a <?php echo !($values_class == 'first') ? 'class="collapsed"' : ''; ?> role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapse-<?php echo $values_class; ?>" aria-expanded="<?php echo ($values_class == 'first') ? true : false; ?>" aria-controls="collapse-<?php echo $values_class; ?>">
                                <span><?php the_title(); ?></span><i class="fa fa-minus"></i><i class="fa fa-plus"></i>
                                </a>
                                </h4>
                            </div>
                            <div id="collapse-<?php echo $values_class; ?>" class="panel-collapse collapse <?php echo ($values_class == 'first') ? 'in' : ''; ?>" role="tabpanel" aria-labelledby="heading-<?php echo $values_class; ?>">
                                <div class="panel-body faq-content">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else: ?>
                        <p>Sorry, no values post found. Please post values through the admin panel.</p>
                    <?php endif; ?>
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

    <?php
    $testi_args = array('post_type' => 'testimonials', 'posts_per_page' => 3, 'order' => 'ASC');
    $testi_query = new WP_Query($testi_args);

    if ($testi_query->have_posts()) :
        while ($testi_query->have_posts()) :
            $testi_query->the_post();
            ?>
          <div class="item">
          <div class="test-cont"><p><?php the_content(); ?></p></div>
             <div class="test-bot">
             <div class="tst-img"><?php the_post_thumbnail('testi-thumbnail', array('class' => 'img-responsive rounded-testi')); ?></div>
             <div class="client_name">
                 <h5>
                     <?php
                     $testi_position = get_post_custom_values($key = 'testi-position');
                     $testi_rating = get_post_custom_values($key = 'testi-rating')[0];
                     ?>
                     <a href="<?php the_permalink(); ?>"><?php the_title(); ?> - <span><?php echo $testi_position[0]; ?></span></a>
                 </h5>
                 <ul>
                     <?php for($i = 1; $i <= $testi_rating; $i++) { ?>
                         <li><a href="#"><i class="fa fa-star"></i></a></li>
                     <?php }; ?>
                 </ul>
                 </div>
             
             </div>
          </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else: ?>
                <p>Sorry, no testimonials found. Please add testimonials through the admin panel.</p>
            <?php endif; ?>

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