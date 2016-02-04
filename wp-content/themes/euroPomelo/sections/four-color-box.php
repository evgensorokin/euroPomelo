<?php
/**
 * @package WordPress
 * @subpackage Euro_Pomelo
 * @since Euro Pomelo 1.0
 */
?>

<?php if( have_rows('sections') ): ?>

<section class="color-res">
    <?php while ( have_rows('sections') ) : the_row(); if( get_row_layout() == 'four_color_box' ): $rows = get_sub_field('color_boxes'); ?>

        <?php if( have_rows('color_boxes') ) : $count = count($rows); ?>

            <div class="row colors-sides">
                <?php while ( have_rows('color_boxes') ) : the_row(); if(get_row_index() == 1) : ?>
                    <div class="col-xs-6" style="background-color: <?php the_sub_field('color_item'); ?>"></div>
                <?php endif; endwhile; ?>

                <?php while ( have_rows('color_boxes') ) : the_row(); if(get_row_index() == $count) : ?>
                    <div class="col-xs-6" style="background-color: <?php the_sub_field('color_item'); ?>"></div>
                <?php endif; endwhile; ?>
            </div>
            <div class="container res-box">
                <div class="row">
                    <?php while ( have_rows('color_boxes') ) : the_row(); ?>
                        <div class="col-sm-3 item" style="background-color: <?php the_sub_field('color_item'); ?>">
                            <div>
                                <img src="<?php the_sub_field('image'); ?>" class="img-responsive" />
                                <span><?php the_sub_field('title'); ?></span>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>

        <?php endif; ?>

    <?php endif; endwhile; ?>
</section>

<?php endif; ?>
