<?php
/* Template Name Products: Product template */

global $post;
$productId = $post->ID;

get_header('pomelo'); ?>

<?php while ( have_posts() ) : the_post(); ?>

<section class="white-box-content">
    <div class="container">
        <h2 class="text-center"><?php the_title(); ?></h2>
    </div>
</section>

<section class="product-article">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 side-left">
                <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ); ?>
                <div class="img" style="background: url('<?= $feat_image; ?>') center no-repeat;"></div>
                <div class="category" style="background-color: <?php the_field('background_color_item'); ?>;">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img_cheese_1.png" height="50" />
                    Product Characteristics
                </div>
                <div class="small-info">
                    <?php the_field('small_info'); ?>
                </div>
            </div>
            <div class="col-sm-6 side-info">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>

<?php endwhile; ?>

<?php
$relationRecipes = array();
$args = array('post_type' => 'recipe', 'posts_per_page' => -1);
$loop = new WP_Query($args);
if( $loop->have_posts() ) {
    while ( $loop->have_posts() ) {
        $recipe = $loop->the_post();
        $posts = get_field('select_products');
        if( $posts ) {
            foreach ($posts as $p) {
                if($p->ID === $productId){
                    $relationRecipes[] = $post;
                }
            }
        }
    }
}

if( $relationRecipes ) :
?>
<section class="recipes-with">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="title">Recipes With Mozzarela Sticks</div>
                <hr/>
            </div>
        </div>
        <div class="row list-with">
            <?php foreach($relationRecipes as $recipe) :
                $feat_image = wp_get_attachment_url( get_post_thumbnail_id($recipe->ID) );
            ?>
            <div class="col-lg-2 col-md-4 col-sm-6 prod-w">
                <a href="<?= get_permalink($recipe->ID); ?>">
                    <div class="img" style="background: url('<?= $feat_image; ?>') center no-repeat;"></div>
                    <span class="text-center"><?= $recipe->post_title; ?></span>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php
$args = array('post_type' => 'product', 'posts_per_page' => 4, 'orderby' => 'rand');
$loop = new WP_Query( $args );
if( $loop->have_posts() ) :
?>

<section class="white-box-content beige-box-content list-products also-products">
    <div class="container">

        <h2 class="text-center">You May Also Like:</h2>

        <div class="row">
            <?php while ( $loop->have_posts() ) : $loop->the_post();
                $feat_image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
            ?>
            <div class="col-md-3 col-sm-6 product">
                <a href="<?php the_permalink(); ?>" class="img" style="background: url('<?= $feat_image ?>') center no-repeat;"></a>
                <div class="color-box text-center" style="background-color: <?php the_field('background_color_item'); ?>;">
                    <div>
                        <b><?php the_title(); ?></b>
                        <a href="<?php the_permalink(); ?>">View Product</a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>

    </div>
</section>
<?php endif; ?>

<?php get_footer('pomelo'); ?>
