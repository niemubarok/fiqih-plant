<?php
// We are in /wp-content/themes/fiqih-plant/setup-products.php
// wp-load.php is at /var/www/html/wp-load.php (3 levels up)
require_once( __DIR__ . '/../../../wp-load.php' );

if ( ! class_exists( 'WooCommerce' ) ) {
    die( "WooCommerce is not active." );
}

echo "<h1>Setting up Fiqih Plant Products...</h1>";

// 1. Setup Categories
$categories = [
    'Tanaman Hias',
    'Tanaman Buah', 
    'Outdoor',
    'Indoor',
    'Bibit & Media'
];

$cat_ids = [];

foreach ( $categories as $cat_name ) {
    $term = term_exists( $cat_name, 'product_cat' );
    if ( $term ) {
        echo "Category '{$cat_name}' exists.<br>";
        $cat_ids[$cat_name] = $term['term_id'];
    } else {
        $term = wp_insert_term( $cat_name, 'product_cat' );
        if ( ! is_wp_error( $term ) ) {
            echo "Created Category '{$cat_name}'.<br>";
            $cat_ids[$cat_name] = $term['term_id'];
        }
    }
}

// 2. Setup Products
$products = [
    [
        'name' => 'Monstera Deliciosa',
        'price' => '150000',
        'desc' => 'Tanaman hits dengan daun berlubang yang estetik. Cocok untuk sudut ruangan.',
        'cats' => ['Tanaman Hias', 'Indoor'],
        'image' => 'https://images.unsplash.com/photo-1614594975525-e45190c55d0b?auto=format&fit=crop&w=800&q=80'
    ],
    [
        'name' => 'Sansevieria (Lidah Mertua)',
        'price' => '75000',
        'desc' => 'Tanaman pembersih udara alami. Sangat mudah dirawat dan tahan banting.',
        'cats' => ['Tanaman Hias', 'Indoor'],
        'image' => 'https://images.unsplash.com/photo-1599598425947-320d319a9f9f?auto=format&fit=crop&w=800&q=80'
    ],
    [
        'name' => 'Kaktus Mini',
        'price' => '25000',
        'desc' => 'Kaktus mungil menggemaskan untuk meja kerja Anda.',
        'cats' => ['Tanaman Hias', 'Indoor'],
        'image' => 'https://images.unsplash.com/photo-1459411552884-841db9b3cc2a?auto=format&fit=crop&w=800&q=80'
    ],
    [
        'name' => 'Bibit Mangga Arumanis',
        'price' => '65000',
        'desc' => 'Bibit mangga unggulan dengan rasa manis dan daging tebal.',
        'cats' => ['Tanaman Buah', 'Outdoor'],
        'image' => 'https://images.unsplash.com/photo-1553279768-865429fa0078?auto=format&fit=crop&w=800&q=80'
    ],
    [
        'name' => 'Media Tanam Organik 5KG',
        'price' => '40000',
        'desc' => 'Campuran tanah, sekam, dan pupuk kandang siap pakai.',
        'cats' => ['Bibit & Media'],
        'image' => 'https://images.unsplash.com/photo-1416879156036-2cd3ec4642ad?auto=format&fit=crop&w=800&q=80'
    ]
];

foreach ( $products as $p ) {
    // Check duplication by title
    $existing = get_page_by_title( $p['name'], OBJECT, 'product' );
    if ( $existing ) {
        echo "Product '{$p['name']}' already exists.<br>";
        continue;
    }

    $product = new WC_Product_Simple();
    $product->set_name( $p['name'] );
    $product->set_regular_price( $p['price'] );
    $product->set_description( $p['desc'] );
    $product->set_status( 'publish' );
    $product->set_catalog_visibility( 'visible' );
    $product->set_stock_status( 'instock' );
    $product->set_manage_stock( true );
    $product->set_stock_quantity( 50 );
    
    // Categories
    $p_cat_ids = [];
    foreach ( $p['cats'] as $c ) {
        if ( isset( $cat_ids[$c] ) ) $p_cat_ids[] = $cat_ids[$c];
    }
    $product->set_category_ids( $p_cat_ids );

    // Try to Upload Image (Sideload)
    // We need to include media.php built-ins
    require_once( ABSPATH . 'wp-admin/includes/media.php' );
    require_once( ABSPATH . 'wp-admin/includes/file.php' );
    require_once( ABSPATH . 'wp-admin/includes/image.php' );
    
    $image_id = media_sideload_image( $p['image'], 0, $p['name'], 'id' );
    if ( ! is_wp_error( $image_id ) ) {
        $product->set_image_id( $image_id );
        echo " - Image attached.<br>";
    } else {
        echo " - Image failed: " . $image_id->get_error_message() . "<br>";
    }

    $id = $product->save();
    echo "Created Product: <strong>{$p['name']}</strong> (ID: $id)<br>";
}

echo "<h2>Product Setup Complete! <a href='/shop'>Visit Shop</a></h2>";
?>
