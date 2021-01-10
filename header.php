<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <?php wp_head();?>
</head>

<body id="page-top">
    <?php 

    // WordPress 5.2 wp_body_open implementation
    if ( function_exists( 'wp_body_open' ) ) {
        wp_body_open();
    } else {
        do_action( 'wp_body_open' );
    }

    ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content'); ?></a>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <div class="navbar-brand js-scroll-trigger" href="<?php echo esc_url( home_url( '/' )); ?>">
                    <a class="site-title"
                        href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_html(bloginfo('name')); ?></a>
                </div>
                <button
                    class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded"
                    type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a
                                class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                                href="#portfolio">Services</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a
                                class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1"><a
                                class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- MASTHEAD -->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <?php 
                $avatar = get_field('avatar');
                if( !empty( $avatar ) ): ?>
                <img class="masthead-avatar mb-5 rounded-circle" src="<?php echo esc_url($avatar['url']); ?>"
                    alt="<?php echo esc_attr($avatar['alt']); ?>" />
                <?php endif; ?>
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0"><?php the_field('page_title'); ?></h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">
                    <?php the_field('tag_line'); ?>
                </p>
            </div>

        </header>
        <!-- END MASTHEAD -->
        <main>