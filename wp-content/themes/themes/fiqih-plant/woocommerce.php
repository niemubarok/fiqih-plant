<?php
/**
 * The template for displaying WooCommerce pages
 *
 * This catch-all template allows us to wrap WooCommerce content cleanly.
 */

get_header();
?>

<main id="primary" class="site-main container" style="margin-top: 2rem; margin-bottom: 2rem;">
    <?php woocommerce_content(); ?>
</main>

<?php
get_footer();
