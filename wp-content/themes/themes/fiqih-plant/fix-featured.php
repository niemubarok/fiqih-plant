<?php
// We are in /wp-content/themes/fiqih-plant/fix-featured.php
// wp-load.php is at /var/www/html/wp-load.php (3 levels up)
require_once( __DIR__ . '/../../../wp-load.php' );

echo "<h1>Setting Products as Featured...</h1>";

$args = [
    'post_type' => 'product',
    'posts_per_page' => -1,
];
$products = get_posts( $args );

foreach ( $products as $post ) {
    $product = wc_get_product( $post->ID );
    if ( $product ) {
        $product->set_featured( true );
        $product->save();
        echo "Marked '{$product->get_name()}' as Featured.<br>";
    }
}
echo "<h2>Done!</h2>";
?>
