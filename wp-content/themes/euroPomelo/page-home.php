<?php
/**
 * Template Name: Home page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Euro_Pomelo
 * @since Euro Pomelo 1.0
 */

get_header('pomelo'); ?>

<?php get_template_part( 'sections/main-title-box' ); ?>

<?php get_template_part( 'sections/first-white-box' ); ?>

<?php get_template_part( 'sections/certified' ); ?>

<?php get_template_part( 'sections/three-color-box' ); ?>

<?php get_template_part( 'sections/second-white-box' ); ?>

<?php get_template_part( 'sections/brands' ); ?>

<?php get_template_part( 'sections/four-color-box' ); ?>

<?php get_footer('pomelo'); ?>