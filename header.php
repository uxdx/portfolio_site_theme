<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!--

Template 2082 Pure Mix

http://www.tooplate.com/view/2082-pure-mix

-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
</head>

<body>


    <!-- Preloader section
================================================== -->
    <div class="preloader">

        <div class="sk-spinner sk-spinner-pulse"></div>

    </div>


    <!-- Navigation section
================================================== -->
    <div class="nav-container">
        <nav class="nav-inner transparent">

            <div class="navbar">
                <div class="container">
                    <div class="row">

                        <div class="brand">
                            <a href="<?php echo get_home_url(); ?>">Pure Mix</a>
                        </div>

                        <div class="navicon">
                            <div class="menu-container">

                                <div class="circle dark inline">
                                    <i class="icon ion-navicon"></i>
                                </div>

                                <div class="list-menu">
                                    <i class="icon ion-close-round close-iframe"></i>
                                    <?php
                                    $args = array(
                                        'menu'            => '',
                                        'container'       => 'div',
                                        'container_class' => 'intro-inner',
                                        'container_id'    => '',
                                        'menu_class'      => '',
                                        'menu_id'         => 'nav-menu',
                                        'echo'            => true,
                                        'fallback_cb'     => 'wp_page_menu',
                                        'before'          => '',
                                        'after'           => '',
                                        'link_before'     => '',
                                        'link_after'      => '',
                                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                        'item_spacing'    => 'preserve',
                                        'depth'           => 0,
                                        'walker'          => '',
                                        'theme_location'  => 'primary',
                                    );
                                    ?>
                                    <?php wp_nav_menu($args); ?>
                                    <!-- <div class="intro-inner">
                                        <ul id="nav-menu">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </div> -->
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </nav>
    </div>