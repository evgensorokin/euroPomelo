<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Euro_Pomelo
 * @since Euro Pomelo 1.0
 */
?>

<footer>
    <div class="container text-center"><?php the_field('copyright', 'option'); ?></div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
