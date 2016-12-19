<!-- Header  -->
<?php get_header(); ?>

<div id="minimal-bootstrap-carousel" class="carousel default-home-slider slide carousel-fade shop-slider" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active slide-1" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/slider/10.jpg);background-position: center right;">

            <div class="carousel-caption nhs-caption nhs-caption6">
                <div class="thm-container">
                    <div class="box valign-middle">
                        <div class="content text-center">
                            <h2 data-animation="animated fadeInUp" class="this-title">Nature, Comfort & Adventure!</h2>
                            <p data-animation="animated fadeInDown">We offer a native accommodation for budget travellers, modern room for more luxurious stay, sports bar, resto, mainland adventures, music, fun and of course, Wi-Fi!</p>
                            <a data-animation="animated fadeInLeft" href="#" class="nhs-btn3 green-btn">Book now</a>
                            <a data-animation="animated fadeInRight" href="#" class="nhs-btn">know more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--
        <div class="item  slide-2" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/slider/11.jpg);background-position: center right;">

            <div class="carousel-caption nhs-caption nhs-caption7">
                <div class="thm-container">
                    <div class="box valign-middle">
                        <div class="content text-left pull-left">
                            <h2 data-animation="animated fadeInUp" class="this-title">The Best Place to Relax</h2>
                            <p data-animation="animated fadeInDown">Book a room at our resort now and get a discount of 30%. Fruit basket, soft drinks and a huge cozy bed are waiting for you. We will do everything to make you feel at home.</p>
                            <a data-animation="animated fadeInLeft" href="#" class="nhs-btn3">Book now</a>
                            <a data-animation="animated fadeInRight" href="#" class="nhs-btn">know more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item  slide-2" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/slider/12.jpg);background-position: center right;">

            <div class="carousel-caption nhs-caption nhs-caption8">
                <div class="thm-container">
                    <div class="box valign-middle">
                        <div class="content text-center">
                            <h2 data-animation="animated fadeInUp" class="this-title">We offer you the best</h2>
                            <h2 data-animation="animated fadeInUp" class="this-title">luxury hotel with an impressive history</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        -->
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="prev">
        <i class="fa fa-angle-left"></i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="next">
        <i class="fa fa-angle-right"></i>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Header  Slider style-->

<!-- Rooms And Suits style-->
<section class="container clearfix common-pad nasir-style">
    <div class="sec-header sec-header-pad">
        <h2>Rooms And Suits</h2>
        <h3>Pick a room that best suits your taste and budget</h3>
    </div>
    <div class="room-slider">
        <div class="roomsuite-slider-two">

            <?php
                $args = array('post_type' => 'rooms', 'posts_per_page' => 4, 'order' => 'ASC');
                $rooms_query = new WP_Query($args);

                if ($rooms_query->have_posts()) :
                    while ($rooms_query->have_posts()) :
                    $rooms_query->the_post();
            ?>
            <div class="room-suite room-suite-htwo">
                <div class="item">
                    <a href="<?php the_permalink(); ?>"><div class="ro-img room-radius"><?php the_post_thumbnail('rooms-thumbnail', array( 'class' => 'img-responsive room-radius' )); ?></div></a>
                    <div class="ro-txt">
                        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                        <?php the_excerpt(); ?>
                        <div class="ro-text-two">
                            <div class="left-p-two pull-left"><a href="<?php the_permalink(); ?>" class="res-btn">Details</a></div>
                            <div class="right-p-two pull-right">
                                <p>
                                    <?php $price = get_post_custom_values($key = 'room-price'); ?>
                                    <?php echo $price[0]; ?>
                                    <span>
                                        <?php $unit = get_post_custom_values($key = 'room-unit-every'); ?>
                                        <?php echo $unit[0]; ?>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                    endwhile;
                wp_reset_postdata();
                else: ?>
                <p>Sorry, no rooms found. Please add rooms through the admin panel.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Stats Counter style-->
<section class="resort-counert clearfix">
    <div class="container">
        <div class="row">

            <?php
                $stats_args = array('post_type' => 'stats', 'posts_per_page' => 4, 'order' => 'ASC');
                $stats_query = new WP_Query($stats_args);

                if ($stats_query->have_posts()) :
                while ($stats_query->have_posts()) :
                    $stats_query->the_post();
            ?>

            <div class="col-md-3 col-sm-6">
                <div class="rest-fact-counter">
                    <div class="text-box">
                        <h4 class="timer" data-from="0" data-to="<?php the_title(); ?>"></h4>
                    </div>
                    <div class="text-box2">
                        <?php
                        $stat_first = get_post_custom_values($key = 'stat-firstline');
                        $stat_second = get_post_custom_values($key = 'stat-secondline');
                        ?>
                        <p>
                            <?php echo $stat_first[0]; ?>
                            <span>
                        <?php echo $stat_second[0]; ?></span>
                        </p>
                    </div>
                </div>
            </div>

            <?php
                endwhile;
                    wp_reset_postdata();
                else: ?>
                <div class="col-md-12 col-sm-12">Sorry, no stats found. Please add stats through the admin panel.</div>
            <?php endif; ?>

        </div>
    </div>

</section>
<!-- Activities of Resort style-->
<div class="resot-activities clearfix">

    <div class="container clearfix common-pad">
        <div class="row">

            <div class="col-lg-6 col-md-6 activities-cont">
            <?php
            $about_page = get_page_by_title('About Us');
            $about_excerpt = $about_page->post_excerpt;
            ?>
                <div class="sec-header3">
                    <h2><?php echo get_the_title(16); ?></h2>
                    <h3>What Hangout Beach & Resort is all about</h3>
                </div>
                <?php echo $about_excerpt; ?>
                <a href="<?php echo get_permalink(16); ?>" class="res-btn">About us<i class="fa fa-arrow-right"></i></a>

            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="row nasir-welboxes">

                    <?php
                        $activities_args = array('post_type' => 'activities', 'posts_per_page' => 4, 'order' => 'ASC');
                        $activities_query = new WP_Query($activities_args);

                        if ($activities_query->have_posts()) :
                        while ($activities_query->have_posts()) :
                            $activities_query->the_post();
                    ?>

                    <div class="single_wel_cont col-sm-6">
                        <a class="wel-box" href="<?php the_permalink(); ?>">
                            <div class="icon-box"><?php the_post_thumbnail(); ?></div>
                            <h4><?php the_title(); ?></h4>
                            <div class="overlay transition3s">
                                <div class="icon_position_table">
                                    <div class="icon_container border_round">
                                        <h2><?php the_title(); ?></h2>
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <?php
                    endwhile;
                        wp_reset_postdata();
                    else: ?>
                        <div class="single_wel_cont col-sm-6">
                            <a class="wel-box" href="#">
                                <div class="icon-box"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/welcome/icon-3.png" alt="" /></div>
                                <h4>No Activity yet</h4>
                                <div class="overlay transition3s">
                                    <div class="icon_position_table">
                                        <div class="icon_container border_round">
                                            <h2>No Activity Yet</h2>
                                            <p>Please add an activity through the admin panel.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endif; ?>

                </div>

            </div>

        </div>
    </div>
</div>

<!-- Our Gallery style-->
<section class="our-galler-htwo clearfix common-pad">

    <div class="container clearfix">

        <div class="sec-header sec-w-header">
            <h2>Our Gallery</h2>
            <h3>Check out what's happening at Hangout Beach & Resort</h3>
        </div>
    </div>

    <div class="fullwidth-silder">

        <?php
        $gallery_content = get_post_field('post_content', 91);
        echo do_shortcode( $gallery_content );
        ?>

        <p>This code here below should display a gallery...</p>
        <?php
        while ( have_posts() ) : the_post();
            if ( get_post_gallery() ) :
                $gallery = get_post_gallery( get_the_ID(), false );

                /* Loop through all the image and output them one by one */
                foreach( $gallery['src'] as $src ) : ?>
                    <img src="<?php echo $src; ?>" class="my-custom-class" alt="Gallery image" />
                    <?php
                endforeach;
            endif;
        endwhile;
        ?>

<!--        OR-->
        <?php
        echo get_post_format(91);
        $gallery_args = array('post_type' => 'post', 'posts_per_page' => 1,
            'tax_query' => array(
                array(
                    array(
                        'terms'    => array( 'post-format-gallery' ),
                    )
                ),
            )
        );
        $gallery_query = new WP_Query($gallery_args);

        if ($gallery_query->have_posts()) :
        while ($gallery_query->have_posts()) :
            $gallery_query->the_post();
            the_title();
        ?>

            <?php
        endwhile;
            wp_reset_postdata();
        else: ?>
            <div class="col-md-12 col-sm-12">Sorry, no gallery found. Please add gallery through the admin panel.</div>
        <?php endif; ?>


        <div class="fullwidth-slider">

        </div>
    </div>
</section>

<!-- Testimonials & Our Events style-->
<div class="container clearfix common-pad">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="sec-header-two">
                <h2>Testimonials</h2>
            </div>
            <div class="testimonials-wrapper">
                <div class="testimonial-sliders-two">
                    <?php
                        $testi_args = array('post_type' => 'testimonials', 'posts_per_page' => 3, 'order' => 'ASC');
                        $testi_query = new WP_Query($testi_args);

                        if ($testi_query->have_posts()) :
                        while ($testi_query->have_posts()) :
                            $testi_query->the_post();
                    ?>
                    <div class="item">
                        <div class="test-cont"><?php the_content(); ?></div>
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
        </div>
        <div class="col-lg-6 col-md-6 event-wrapper">

            <div class="sec-header-two">
                <h2>Our Events</h2>
            </div>

            <div class="our-event-t-wrapper">

                <?php
                $events_args = array('post_type' => 'events', 'posts_per_page' => 3, 'order' => 'DESC');
                $events_query = new WP_Query($events_args);

                if ($events_query->have_posts()) :
                while ($events_query->have_posts()) :
                    $events_query->the_post();
                ?>

                <div class="media">
                    <div class="media-left">
                        <div class="date-box">
                            <div class="date-inner">
                                <div class="date-c-inner">
                                    <?php
                                    $events_day = get_post_custom_values($key = 'events-day')[0];
                                    $events_month = get_post_custom_values($key = 'events-month')[0];
                                    ?>
                                    <a href="<?php the_permalink(); ?>"><p><?php echo $events_day; ?><span><?php echo $events_month; ?></span></p></a>
                                </div>
                            </div>
                        </div></div>
                    <div class="media-body">
                        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                        <?php the_excerpt(); ?>
                    </div>
                </div>

                <?php
                    endwhile;
                        wp_reset_postdata();
                    else: ?>
                        <p>Sorry, no events found. Please add events through the admin panel.</p>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>
<!-- Get in Touch & Drop a Message style   -->
<div class="resot-activities clearfix">

    <div class="container clearfix common-pad">
        <div class="row">

            <div class="col-lg-6 col-md-7 get-touch-two">

                <div class="get-touch-wrapper row m0">
                    <div class="touch-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/yolly.png" class="img-responsive room-radius" alt=""></div>
                    <div class="touch-txt">
                        <div class="sec-header-touch">
                            <h2>Get in Touch</h2>
                        </div>

                        <h3>Yolly Bornilla<span>(General Manager)</span></h3>
                        <p>Phone : 604-786-4440</p>
                        <p>Email : info@contactjohndoe.com</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-5 home-two-msgwrapper">

                <div class="sec-header-touch">
                    <h2>Drop a Message</h2>
                </div>

                <div class="drop-wrapper input_form">

                    <form action="contact_process.php" method="post" id="contactForm">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your name">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email"></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                <textarea class="form-control" rows="6" id="message" name="message" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><button type="submit" class="res-btn">Submit Now <i class="fa fa-arrow-right"></i></button></div>
                        </div>
                    </form>
                    <div id="success"><p>Your message sent successfully.</p></div>
                    <div id="error"><p>Something is wrong. Message cant be sent!</p></div>

                </div>

            </div>


        </div>
    </div>
</div>
<!-- Welcome banner  style-->
<div class="nasir-subscribe-form-row row">
    <div class="container">
        <div class="row this-dashed">
            <div class="this-texts">
                <h2>STAY TUNED WITH US</h2>
                <h3>Get our updated offers, discounts, events and much more!</h3>
            </div>
            <form class="this-form input-group" action="#" method="post">
                <input type="email" class="form-control" placeholder="Enter your email address">
                <span class="input-group-addon">
					<button type="submit" class="res-btn">subscribe<i class="fa fa-arrow-right"></i></button>
				</span>
            </form>
        </div>
    </div>
</div>

<p>CHRIS POGI!</p>
<!-- Welcome banner  style-->

<!-- footer  style-->

<?php get_footer(); ?>