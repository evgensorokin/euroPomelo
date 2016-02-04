<?php
/**
 * @package WordPress
 * @subpackage Euro_Pomelo
 * @since Euro Pomelo 1.0
 */
?>

<?php if( have_rows('sections') ): ?>

<section>
    <div class="container">

        <div class="brands">
        <?php while ( have_rows('sections') ) : the_row(); if( get_row_layout() == 'brands' ): ?>
            <div class="row">
                <div class="col-xs-12 text-center"><small class="title"><?php the_sub_field('title'); ?></small></div>
            </div>
            <hr/>
            <div class="brands-img text-center">
                <?php $images = get_sub_field('gallery');
                if( $images ): ?>
                    <?php foreach( $images as $image ): ?>
                        <img src="<?php echo $image['sizes']['thumbnail']; ?>" />
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        <?php endif; endwhile; ?>
        </div>

    </div>
</section>

<?php endif; ?>