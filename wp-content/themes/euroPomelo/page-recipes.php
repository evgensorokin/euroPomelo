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

        <div class="row clearfix">
            <?php
                $args = array('post_type' => 'recipe', 'posts_per_page' => 4, 'orderby' => 'post_date', 'order' => 'ASC');
                $loop = new WP_Query( $args );

                if( $loop->have_posts() ) :
                    while ( $loop->have_posts() ) : $loop->the_post();
                    $feat_image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
            ?>
                    <div class="col-md-4 col-sm-6 recepie">
                        <div class="img" style="background: url('<?php echo $feat_image; ?>') center no-repeat;"></div>
                        <div class="color-box" style="background-color: <?php the_field('background_color_item'); ?>;">
                            <div>
                                <div class="title text-center"><?php the_title(); ?></div>
                                <hr/>
                                <ul>
                                    <li><span>1.</span> Mozzarella di Bufala  300g</li>
                                    <li><span>2.</span> Tomato 200g</li>
                                    <li><span>3.</span> Mozzarella di Bufala 100g</li>
                                </ul>
                                <div class="text-center"><a href="<?php the_permalink(); ?>">View Recipe</a></div>
                            </div>
                        </div>
                    </div>
            <?php endwhile; endif; ?>
        </div>

        <div id="content" role="main"></div>

    </div>
</section>

<?php get_footer('pomelo'); ?>
