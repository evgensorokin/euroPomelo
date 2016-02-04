<?php
/**
 * Template Name: Contact page
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

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <section>
            <div class="container">

                <div class="contact_us">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-2">
                            <h1><?php the_title(); ?></h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2 hidden-xs"><img src="<?php echo get_template_directory_uri(); ?>/img/img_contact_us.png" class="img-responsive" /></div>
                        <div class="col-sm-6 col-xs-12">
                            <?php echo do_shortcode('[contact-form-7 id="7" title="Contact Us"]'); ?>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <div class="address"><?php the_content(); ?></div>

                            <p><b>Follow Us:</b></p>
                            <div class="social">
                                <a href="<?php the_field('url_facebook', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" width="18" /></a>
                                <a href="<?php the_field('url_twitter', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.svg" width="18" /></a>
                                <a href="<?php the_field('url_google_plus', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/googleplus.svg" width="18" /></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer('pomelo'); ?>
