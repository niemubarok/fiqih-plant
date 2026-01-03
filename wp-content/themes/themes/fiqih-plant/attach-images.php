<?php
require_once( __DIR__ . '/../../../wp-load.php' );
require_once( ABSPATH . 'wp-admin/includes/image.php' );
require_once( ABSPATH . 'wp-admin/includes/file.php' );
require_once( ABSPATH . 'wp-admin/includes/media.php' );

echo "<h1>Retrying Failed Attachments...</h1>";

// Partial match keys to filenames
$map = [
    'Sansevieria' => 'sansevieria.jpg',
    'Media Tanam' => 'media.jpg',
];

$upload_dir = wp_upload_dir();

foreach ( $map as $partial_name => $file ) {
    // Find product by looser search
    global $wpdb;
    $product_id = $wpdb->get_var( $wpdb->prepare( 
        "SELECT ID FROM $wpdb->posts WHERE post_title LIKE %s AND post_type = 'product' LIMIT 1", 
        '%' . $wpdb->esc_like( $partial_name ) . '%' 
    ) );

    if ( ! $product_id ) {
        echo "Product matching '$partial_name' not found.<br>";
        continue;
    }
    
    $product = wc_get_product( $product_id );
    echo "Found Product: " . $product->get_name() . " (ID: $product_id)<br>";

    $source_path = __DIR__ . '/assets/dummy/' . $file;
    if ( ! file_exists( $source_path ) ) {
        echo "File not found: $source_path <br>";
        continue;
    }

    // Process upload
    $filename = basename( $source_path );
    if ( wp_mkdir_p( $upload_dir['path'] ) ) {
        $file_path = $upload_dir['path'] . '/' . $filename;
    } else {
        $file_path = $upload_dir['basedir'] . '/' . $filename;
    }
    
    copy( $source_path, $file_path );
    
    $file_type = wp_check_filetype( $filename, null );
    $attachment = [
        'post_mime_type' => $file_type['type'],
        'post_title' => sanitize_file_name( $filename ),
        'post_content' => '',
        'post_status' => 'inherit'
    ];

    $attach_id = wp_insert_attachment( $attachment, $file_path, $product_id );
    require_once( ABSPATH . 'wp-admin/includes/image.php' );
    $attach_data = wp_generate_attachment_metadata( $attach_id, $file_path );
    wp_update_attachment_metadata( $attach_id, $attach_data );
    
    $product->set_image_id( $attach_id );
    $product->save();
    echo "Attached $filename to " . $product->get_name() . "<br>";
}
echo "<h2>Done!</h2>";
?>
