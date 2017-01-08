<!-- Header  -->
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<!-- News style-->
  <section class="container clearfix common-pad-inner">
   <div class="row">
      <div class="col-md-4 col-md-push-8">
       </div>
      <div class="col-md-8 col-md-pull-4">

       <div class="single-room-wrapper">

           <!-- Description of Room style-->
           <div class="room-dec-wrapper">
            <h2><?php the_title(); ?></h2>
               <?php the_post_thumbnail("room-lg-thumbnail"); ?>
               <br/><br/>
               <?php the_content(); ?>
           </div>
           <!-- Description of Room style-->

           <!-- Room Overview style-->
           <div class="room-overview">
           <h2>Room Overview</h2>

               <div class="table-responsive">
                   <table class="table table-striped">
                       <colgroup> <col class="col-xs-1"> <col class="col-xs-7"> </colgroup>
                       <tbody>
                       <?php
                       $room_occupancy = get_post_custom_values($key = 'room-occupancy')[0];
                       $room_facilities = get_post_custom_values($key = 'room-facilities')[0];
                       $room_size = get_post_custom_values($key = 'room-size')[0];
                       $room_view = get_post_custom_values($key = 'room-view')[0];
                       $room_pitch = get_post_custom_values($key = 'room-pitch')[0];
                       ?>
                            <tr> <th scope="row"> <code>Room Name:</code> </th> <td><?php the_title(); ?></td> </tr>
                            <tr> <th scope="row"> <code>Occupancy:</code> </th> <td><?php echo $room_occupancy; ?></td> </tr>
                            <tr> <th scope="row"> <code>Facilities:</code> </th> <td><?php echo $room_facilities; ?></td> </tr>
                            <tr> <th scope="row"> <code>Size:</code> </th> <td><?php echo $room_size; ?></td> </tr>
                            <tr> <th scope="row"> <code>View:</code> </th> <td><?php echo $room_view; ?></td> </tr>
                       </tbody>
                   </table>
               </div>

            <h5><?php echo $room_pitch; ?></h5>

           </div>

           <!-- Room Overview style-->

           <!-- Have any question style-->
           <div class="question-wrapper">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h2>Have any question</h2></div>

               <div class="col-lg-4"><input type="text" class="form-control" id="name" name="name" placeholder="Name"></div>
                   <div class="col-lg-4"><input type="text" class="form-control" id="phone" name="phone" placeholder="Phone"></div>
                   <div class="col-lg-4"><input type="text" class="form-control" id="email" name="name" placeholder="Email"></div>

              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                       <textarea class="form-control" rows="6" id="message" name="message" placeholder="Please specify the type of the room/facility in your question"></textarea>
                    </div>

                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><button type="submit" class="res-btn">Submit Now <i class="fa fa-arrow-right"></i></button></div>



           </div>
           <!-- Have any question style-->


          </div>
       </div>

      </div>
   </section> 
    
<!-- News style-->

<!-- footer  style-->

<?php endwhile; else : ?>
    <h4>No content found</h4>
<?php endif;
    get_footer();
?>