<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">


    <link rel="preload" href="https://fonts.googleapis.com/css?family=Nunito:400,700" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,700"></noscript>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_stylesheet_uri()?>" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri()?>"></noscript>
    <link rel="preload" href="<?php echo get_template_directory_uri()?>/css/aos.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/aos.css"></noscript>

    <?php
    //get theme options
	$options = get_option( 'theme_settings' ); ?>

</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">

        <?php
		if ( is_front_page() ) : ?>
        <section class="hero main has-text-centered">
            <?php
		endif;
	?>

            <nav id="navbar" class="navbar is-spaced navbar is-spaced is-uppercase">

                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="#">
                            <img class="logo-main" src="<?php header_image(); ?>"
                                height="<?php echo get_custom_header()->height; ?>"
                                width="<?php echo get_custom_header()->width; ?>" alt="" />
                        </a>
                        <a role="button" class="navbar-burger" data-target="navMenu" aria-label="menu"
                            aria-expanded="false">
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                        </a>
                    </div>

                    <div id="navMenuDocumentation" class="navbar-menu">
                        <div class="navbar-end ">
                            <?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'container'      => '',
							) );
							?>
                        </div>
                    </div>
                </div>
            </nav>