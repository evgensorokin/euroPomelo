<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>

    <div class="container">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="pull-left"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" /></a>
        <span class="button-menu"><img src="<?php echo get_template_directory_uri(); ?>/img/menu.png" /></span>
        <?php
        wp_nav_menu( array(
            'theme_location' => 'primary',
            'menu_class'     => 'pull-left',
        ) );
        ?>
    </div>

</header>