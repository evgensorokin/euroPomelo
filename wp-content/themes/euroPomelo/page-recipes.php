<?php
/**
 * Template Name: Recipes page
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

<section class="white-box-content list-recipes">
    <div class="container">

        <h2 class="text-center">Recipes We Recommand</h2>
        <?php
            $paged = ( get_query_var('paged') > 1 ) ? get_query_var('paged') : 1;

            $args = array('post_type' => 'recipe', 'posts_per_page' => 3, 'orderby' => 'post_date', 'order' => 'ASC', 'paged' => $paged);
            $loop = new WP_Query( $args );

            $max = $loop->max_num_pages;

            wp_localize_script(
                'pbd-alp-load-posts',
                'pbd_alp',
                array(
                    'startPage' => $paged,
                    'maxPages' => $max,
                    'nextLink' => next_posts($max, false)
                )
            );

            if( $loop->have_posts() ) :
        ?>
            <div class="row clearfix">
                <?php while ( $loop->have_posts() ) : $loop->the_post();
                        $feat_image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
                    ?>
                        <div class="col-md-4 col-sm-6 recipe post">
                            <a href="<?php the_permalink(); ?>" class="img" style="background: url('<?php echo $feat_image; ?>') center no-repeat;"></a>
                            <div class="color-box" style="background-color: <?php the_field('background_color_item'); ?>;">
                                <div class="title text-center"><?php the_title(); ?></div>
                                <hr/>
                                <ul>
                                    <?php $posts = get_field('select_products'); if( $posts ) : ?>
                                        <?php $j = 0; foreach( $posts as $p) : $j++; ?>
                                            <li><span><?= $j; ?>.</span> <?php echo get_the_title($p->ID); ?></li>
                                        <?php endforeach; ?>
                                    <?php endif; ?>

                                    <?php $ing = get_field('ingredients'); if( $ing ) : ?>
                                        <?php $i = $j; while (has_sub_field('ingredients')) : $i++; if($i > 3) { break; } ?>
                                            <li><span><?= $i; ?>.</span> <?php the_sub_field('ingredient'); ?></li>
                                            <?php if($i >= 3) { break; } endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                                <a href="<?php the_permalink(); ?>">View Recipe</a>
                            </div>
                        </div>
                <?php endwhile; ?>
            </div>

            <div id="content" role="main"></div>
        <?php endif; ?>

    </div>
</section>

<?php get_footer('pomelo'); ?>
