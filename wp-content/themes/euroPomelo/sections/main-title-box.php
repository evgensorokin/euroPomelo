<?php
/**
 * @package WordPress
 * @subpackage Euro_Pomelo
 * @since Euro Pomelo 1.0
 */
?>

<?php if( have_rows('sections') ): ?>

<section class="lite-blue-screen">
    <div class="container">

        <div class="main-page-sl text-center">
            <?php while ( have_rows('sections') ) : the_row(); if( get_row_layout() == 'main_title_box' ): ?>
                <div class="h1"><?php the_sub_field('title_h1'); ?></div>
                <div class="h2"><?php the_sub_field('title_h2'); ?></div>
                <img src="<?php the_sub_field('image'); ?>" class="img-responsive" />
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us" class="btn-blue">Learn More</a>
            <?php endif; endwhile; ?>
        </div>

    </div>
</section>

<?php endif; ?>