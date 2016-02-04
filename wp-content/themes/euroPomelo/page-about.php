<?php
/**
 * Template Name: About page
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
<section class="white-box-content">
    <div class="container">

        <div class="content-box-img">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-4">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
            <div class="row">
                <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ); ?>
                <div class="col-sm-4"><img src="<?= $feat_image;?>" class="img-responsive" /></div>
                <div class="col-sm-8">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>

    </div>
</section>
<?php endwhile; ?>
<?php endif; ?>

<?php get_template_part( 'sections/presentation' ); ?>

<?php get_template_part( 'sections/beige-box' ); ?>

<?php get_template_part( 'sections/certified' ); ?>

<?php get_template_part( 'sections/first-white-box' ); ?>

<?php get_template_part( 'sections/brands' ); ?>

<?php get_footer('pomelo'); ?>
