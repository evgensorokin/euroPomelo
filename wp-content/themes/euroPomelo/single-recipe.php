<?php
/* Template Name Posts: Recipes template */
get_header('pomelo'); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ); ?>
    <section class="white-box-content visible-sm visible-xs">
        <div class="container">
            <h2 class="text-center"><?php the_title(); ?></h2>
        </div>
    </section>

    <section class="recipe-single visible-sm visible-xs" style="background-color: <?php the_field('background_color_item'); ?>;">
        <div class="container">

            <div class="row">
                <div class="col-sm-6 side-left">
                    <div class="img" style="background: url('<?= $feat_image; ?>') center no-repeat;"></div>
                    <div class="ingredients">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-ingredients.png" />
                        <span class="title">Main Ingridience</span>
                        <ol>
                            <?php $products = get_field('select_products'); if( $products ) : ?>
                                <?php foreach( $products as $p) : ?>
                                    <li><?php echo get_the_title($p->ID); ?></li>
                                <?php endforeach; ?>
                            <?php endif; ?>

                            <?php $ing = get_field('ingredients'); if( $ing ) : ?>
                                <?php while (has_sub_field('ingredients')) : ?>
                                    <li><?php the_sub_field('ingredient'); ?></li>
                                    <?php endwhile; ?>
                            <?php endif; ?>
                        </ol>
                    </div>
                </div>
                <div class="col-sm-6 side-info">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>

<?php endwhile; ?>

    <section class="white-box-content list-recipes">
        <div class="container">

            <h2 class="text-center">Recipes We Recommand</h2>

            <?php
            $argsN = array('post_type' => 'recipe', 'posts_per_page' => 2, 'post__not_in' => array(get_the_ID()), 'orderby' => 'post_date', 'order' => 'ASC');
            $loopN = new WP_Query( $argsN );

            $argsI = array('post_type' => 'recipe', 'posts_per_page' => 1, 'post__in' => array(get_the_ID()));
            $loopI = new WP_Query( $argsI );
            ?>

            <div class="row">
                <?php if( $loopI->have_posts() ) : ?>
                    <?php while ( $loopI->have_posts() ) : $loopI->the_post();
                        $feat_image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ); ?>
                        <div class="col-md-4 col-sm-6 recipe">
                            <a href="<?php the_permalink(); ?>" class="img" style="background: url('<?php echo $feat_image; ?>') center no-repeat;"></a>
                            <div class="color-box" style="background-color: <?php the_field('background_color_item'); ?>;">
                                <div class="title text-center"><?php the_title(); ?></div>
                                <hr/>
                                <ul>
                                    <?php $products = get_field('select_products'); if( $products ) : ?>
                                        <?php $j = 0; foreach( $products as $p) : $j++; ?>
                                            <li><span><?= $j; ?>.</span> <?php echo get_the_title($p->ID); ?></li>
                                        <?php endforeach; ?>
                                    <?php endif; ?>

                                    <?php $ing = get_field('ingredients'); if( $ing ) : ?>
                                        <?php $i = $j; while (has_sub_field('ingredients')) : $i++; ?>
                                            <li><span><?= $i; ?>.</span> <?php the_sub_field('ingredient'); ?></li>
                                            <?php if($i == 3) { break; } endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                                <a href="<?php the_permalink(); ?>">View Product</a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php if( $loopN->have_posts() ) : $arrId = array(); $arrId[] = get_the_ID(); ?>
                    <?php while( $loopN->have_posts() ) : $loopN->the_post();
                        $arrId[] = get_the_ID();
                        $feat_image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ); ?>
                        <div class="col-md-4 col-sm-6 recipe">
                            <a href="<?php the_permalink(); ?>" class="img" style="background: url('<?php echo $feat_image; ?>') center no-repeat;"></a>
                            <div class="color-box" style="background-color: <?php the_field('background_color_item'); ?>;">
                                <div class="title text-center"><?php the_title(); ?></div>
                                <hr/>
                                <ul>
                                    <?php $products = get_field('select_products'); if( $products ) : ?>
                                        <?php $j = 0; foreach( $products as $p) : $j++; ?>
                                            <li><span><?= $j; ?>.</span> <?php echo get_the_title($p->ID); ?></li>
                                        <?php endforeach; ?>
                                    <?php endif; ?>

                                    <?php $ing = get_field('ingredients'); if( $ing ) : ?>
                                        <?php $i = $j; while (has_sub_field('ingredients')) : $i++; ?>
                                            <li><span><?= $i; ?>.</span> <?php the_sub_field('ingredient'); ?></li>
                                            <?php if($i == 3) { break; } endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                                <a href="<?php the_permalink(); ?>">View Product</a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php while ( have_posts() ) : the_post(); ?>
                <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ); ?>
                    <style type="text/css">
                        .recipe-single-middle:before,
                        .recipe-single-middle:after{background-color: <?php the_field('background_color_item'); ?>;}
                    </style>
                    <section class="recipe-single recipe-single-middle hidden-sm hidden-xs" style="background-color: <?php the_field('background_color_item'); ?>;">
                        <span class="arrow-cur"></span>
                        <div class="clearfix">
                            <a href="#" class="arrow arrow-left"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-left.png" /></a>
                            <div class="row">
                                <div class="col-sm-6 side-left">
                                    <div class="img" style="background: url('<?= $feat_image; ?>') center no-repeat;"></div>
                                    <div class="ingredients">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-ingredients.png" />
                                        <span class="title">Main Ingridience</span>
                                        <ol>
                                            <?php $posts = get_field('select_products'); if( $posts ) : ?>
                                                <?php foreach( $posts as $p) : ?>
                                                    <li><?php echo get_the_title($p->ID); ?></li>
                                                <?php endforeach; ?>
                                            <?php endif; ?>

                                            <?php $ing = get_field('ingredients'); if( $ing ) : ?>
                                                <?php while (has_sub_field('ingredients')) : ?>
                                                    <li><?php the_sub_field('ingredient'); ?></li>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </ol>
                                    </div>
                                </div>
                                <div class="col-sm-6 side-info">
                                    <div class="title"><?php the_title(); ?></div>
                                    <hr/>
                                    <?php the_content(); ?>
                                </div>
                            </div>
                            <a href="#" class="arrow arrow-right"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-right.png" /></a>
                        </div>
                    </section>
                <?php endwhile; ?>

                <?php
                $argsB = array('post_type' => 'recipe', 'posts_per_page' => 3, 'post__not_in' => $arrId, 'orderby' => 'post_date', 'order' => 'ASC');
                $loopB = new WP_Query( $argsB );
                ?>

                <?php if( $loopB->have_posts() ) : ?>
                    <?php while( $loopB->have_posts() ) : $loopB->the_post();
                        $feat_image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ); ?>
                        <div class="col-md-4 col-sm-6 recipe">
                            <a href="<?php the_permalink(); ?>" class="img" style="background: url('<?php echo $feat_image; ?>') center no-repeat;"></a>
                            <div class="color-box" style="background-color: <?php the_field('background_color_item'); ?>;">
                                <div class="title text-center"><?php the_title(); ?></div>
                                <hr/>
                                <ul>
                                    <?php $products = get_field('select_products'); if( $products ) : ?>
                                        <?php $j = 0; foreach( $products as $p) : $j++; ?>
                                            <li><span><?= $j; ?>.</span> <?php echo get_the_title($p->ID); ?></li>
                                        <?php endforeach; ?>
                                    <?php endif; ?>

                                    <?php $ing = get_field('ingredients'); if( $ing ) : ?>
                                        <?php $i = $j; while (has_sub_field('ingredients')) : $i++; ?>
                                            <li><span><?= $i; ?>.</span> <?php the_sub_field('ingredient'); ?></li>
                                            <?php if($i == 3) { break; } endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                                <a href="<?php the_permalink(); ?>">View Product</a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php get_footer('pomelo'); ?>