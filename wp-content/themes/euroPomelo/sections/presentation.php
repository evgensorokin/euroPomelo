<?php
/**
 * @package WordPress
 * @subpackage Euro_Pomelo
 * @since Euro Pomelo 1.0
 */
?>

<?php if( have_rows('sections') ): ?>
    <?php while ( have_rows('sections') ) : the_row(); if( get_row_layout() == 'presentation' ): ?>
    <section class="presentation" style="background: url('<?php the_sub_field('background_box'); ?>') center no-repeat;">
        <div class="container">

            <div class="row">
                <div class="col-xs-12">
                    <div class="title text-center"><?php the_sub_field('title'); ?></div>
                </div>
                <div class="col-sm-6 col-xs-12 btn-box text-right">
                    <a href="<?php the_sub_field('video'); ?>" class="btn btn-inline btn-trans-white">Watch Video</a>
                </div>
                <div class="col-sm-6 col-xs-12 btn-box">
                    <a href="<?php the_sub_field('file_download'); ?>" class="btn btn-inline btn-trans-white" download>Download Pdf</a>
                </div>
            </div>

        </div>
    </section>
    <?php endif; endwhile; ?>
<?php endif; ?>