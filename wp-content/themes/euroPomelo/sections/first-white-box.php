<?php
/**
 * @package WordPress
 * @subpackage Euro_Pomelo
 * @since Euro Pomelo 1.0
 */
?>

<?php if( have_rows('sections') ): ?>

<section class="white-box-content">
    <div class="container">

        <div class="content-box-img">
            <div class="row">
                <?php while ( have_rows('sections') ) : the_row(); if( get_row_layout() == 'first_white_box' ): ?>
                <div class="col-sm-4"><img src="<?php the_sub_field('image'); ?>" class="img-responsive" /></div>
                <div class="col-sm-8">
                    <h2><?php the_sub_field('title'); ?></h2>
                    <?php the_sub_field('text'); ?>
                </div>
                <?php endif; endwhile; ?>
            </div>
        </div>

    </div>
</section>

<?php endif; ?>