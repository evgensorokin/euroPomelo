<?php
/* Template Name Taxonomy: Brand template */

get_header('pomelo');

$args = array(
    'orderby'       => 'id',
    'order'         => 'ASC',
    'hide_empty'    => false,
    'fields'        => 'all',
    'hierarchical'  => true,
    'child_of'      => 0,
    'get'           => 'all',
    'pad_counts'    => false,
    'childless'     => false
);

$categoriesBrand = get_terms('brand', $args);
$currentTerm = get_queried_object();

?>

<?php if($categoriesBrand) : ?>
<section class="tab-brands">
    <div class="clearfix">
        <?php $i = 0; foreach ($categoriesBrand as $cat) : $i++; ?>
        <div class="col-xs-6 <?= $i == 1 ? 'text-right' : '' ?> <?= $currentTerm->term_id == $cat->term_id ? 'active-tab' : '' ?>">
            <div class="tab">
                <?php if($i == 1) { ?>
                    <a href="<?= get_term_link($cat) ?>"><?php echo $cat->name ?></a>
                    <img src="<?php the_field('logo', $cat); ?>" />
                <?php } else if($i == count($categoriesBrand)) { ?>
                    <img src="<?php the_field('logo', $cat); ?>" />
                    <a href="<?= get_term_link($cat) ?>"><?php echo $cat->name ?></a>
                <?php } ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<?php endif; ?>

<section class="white-box-content">
    <div class="container">

        <div class="row">
            <div class="col-xs-12">
                <h1 class="text-center"><?php the_field('title_h1', $currentTerm); ?></h1>
                <?php the_field('description', $currentTerm); ?>
                <hr/>
            </div>
        </div>

    </div>
</section>

<?php if(have_posts()) : ?>

<section class="list-products">
    <div class="container">

        <h2 class="text-center">Our range of products</h2>

        <div class="row">
            <?php while(have_posts()) : the_post(); ?>
                <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ); ?>
                <div class="col-md-3 col-sm-6 product">
                    <div class="img" style="background: url('<?= $feat_image; ?>') center no-repeat;"></div>
                    <div class="color-box text-center" style="background-color: <?php the_field('background_color_item'); ?>;">
                        <div>
                            <b><?php the_title(); ?></b>
                            <a href="<?php the_permalink(); ?>">View Product</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>

            <?php echo do_shortcode('[ajax_load_more post_type="product" taxonomy="brand" taxonomy_terms="'.$currentTerm->slug.'" taxonomy_operator="IN" offset="4" posts_per_page="4" pause="true" max_pages="0" transition="fade" button_label="Load More" container_type="div"]'); ?>
        </div>

    </div>
</section>
<?php endif; ?>

<?php get_footer('pomelo'); ?>
