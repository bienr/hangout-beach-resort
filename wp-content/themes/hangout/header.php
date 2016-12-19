<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php bloginfo('name') ?></title>
<!-- reponsive meta -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <?php wp_head(); ?>
</head>
<body>
<!-- .hidden-bar removed -->

    <section class="top-bar dhomev">
        <div class="container">
            <div class="pull-left left-infos contact-infos">
                <ul class="pull-left left-infos contact-infos">
                    <li>
                        <a href="" class="top-bar-reach">REACH US THROUGH:</a>
                    </li><!-- comment for inline hack
                     -->
                    <?php
                        $contact_args = array('post_type' => 'contacts', 'posts_per_page' => 5, 'order' => 'ASC');
                        $contact_query = new WP_Query($contact_args);

                        if ($contact_query->have_posts()) :
                        while ($contact_query->have_posts()) :
                        $contact_query->the_post();
                    ?>
                    <li>
                        <a href="<?php echo get_the_content(); ?>">
                            <?php $class = get_post_custom_values($key = 'contact-class'); ?>
                            <i class="fa fa-<?php echo $class[0]; ?>"></i> <?php the_title(); ?></a>
                    </li><!-- comment for inline hack
                     -->
                    <?php
                        endwhile;
                            wp_reset_postdata();
                        else: ?>
                        <li>Sorry, no contacts found. Please add contacts through the admin panel.</li>
                    <?php endif; ?>
                </ul>
            </div><!-- /.pull-left left-infos -->
        </div><!-- /.container -->
    </section><!-- /.top-bar -->

    <nav class="navbar navbar-default  _fixed-header _light-header stricky" id="main-navigation-wrapper">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<?php echo home_url(); ?>" class="navbar-brand">
                    <img alt="Hangout Beach Resort Logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="main-navigation">
                <?php /* Primary navigation */
                wp_nav_menu( array(
                        'theme_location' => 'header',
                        'depth' => 2,
                        'container' => false,
                        'menu_class' => 'nav navbar-nav',
                        //Process nav menu using our custom nav walker
                        'walker' => new wp_bootstrap_navwalker())
                );
                ?>
                <ul class="nav navbar-nav right-side-nav">
                    <li class="dropdown">
                        <a href="#"><span class="phone-only">Search</span> <i class="icon icon-Search"></i></a>
                        <ul class="dropdown-submenu has-search-form align-right">
                            <li>
                                <form action="#" class="navbar-form">
                                    <input type="text" placeholder="Enter Your Keyword" />
                                    <button type="submit"><i class="icon icon-Search"></i></button>
                                </form><!-- /.navbar-form -->
                            </li>
                        </ul>
                    </li>
                </ul><!-- /.nav navbar-right -->
                <form action="#" class="nav-search-form row">
                	<div class="input-group">
                		<input type="search" class="form-control" placeholder="Type here for search">
                		<span class="input-group-addon">
                			<button type="submit"><i class="icon icon-Search"></i></button>
                		</span>
                	</div>
                </form>
            </div>
        </div>
    </nav>

<!-- Header  Slider style-->