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

<section class="white-box-content list-recepies">
    <div class="container">

        <h2 class="text-center">Recepies We Recommand</h2>
        <?php
            $paged = ( get_query_var('paged') > 1 ) ? get_query_var('paged') : 1;

            $args = array('post_type' => 'recipe', 'posts_per_page' => 3, 'orderby' => 'post_date', 'order' => 'ASC', 'paged' => $paged);
            $loop = new WP_Query( $args );

            $max = $loop->max_num_pages;

            // Add some parameters for the JS.
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
                        <div class="col-md-4 col-sm-6 recepie post">
                            <div class="img" style="background: url('<?php echo $feat_image; ?>') center no-repeat;"></div>
                            <div class="color-box" style="background-color: <?php the_field('background_color_item'); ?>;">
                                <div>
                                    <div class="title text-center"><?php the_title(); ?></div>
                                    <hr/>
                                    <ul>
                                        <?php $posts = get_field('select_products'); if( $posts ) : ?>
                                            <?php foreach( $posts as $p) : ?>
                                            <li><span>1.</span> <?php echo get_the_title($p->ID); ?></li>
                                            <?php endforeach; ?>
                                        <?php endif; ?>

                                        <?php $ing = get_field('ingredients'); if( $ing ) : ?>
                                            <?php $i = 1; while (has_sub_field('ingredients')) : $i++; ?>
                                            <li><span><?= $i; ?>.</span> <?php the_sub_field('ingredient'); ?></li>
                                            <?php if($i == 3) { break; } endwhile; ?>
                                        <?php endif; ?>
                                    </ul>
                                    <div class="text-center"><a href="<?php the_permalink(); ?>">View Recipe</a></div>
                                </div>
                            </div>
                        </div>
                <?php endwhile; ?>
            </div>

            <div id="content" role="main"></div>
        <?php endif; ?>

    </div>
</section>

<?php get_footer('pomelo'); ?>
