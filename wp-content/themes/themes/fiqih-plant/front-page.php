<?php
/**
 * The template for displaying the front page
 */

get_header();
?>

<!-- Hero Section -->
<!-- Hero Section -->
<section class="hero-section">
    <div class="leaf-container">
        <!-- SVG Leaves -->
        <svg class="leaf" viewBox="0 0 24 24" fill="#4CAF50" style="width: 30px; height: 30px;"><path d="M17,8C8,10,5.9,16.17,3.82,21.34L5.71,22l1-2.3A4.49,4.49,0,0,0,8,20C19,20,22,3,22,3,11,5,10.54,12.84,10.54,12.84L10,14.31l-3.32-3.32C6.68,10.9,8.79,9,17,8Z"/></svg>
        <svg class="leaf" viewBox="0 0 24 24" fill="#81C784" style="width: 20px; height: 20px;"><path d="M17,8C8,10,5.9,16.17,3.82,21.34L5.71,22l1-2.3A4.49,4.49,0,0,0,8,20C19,20,22,3,22,3,11,5,10.54,12.84,10.54,12.84L10,14.31l-3.32-3.32C6.68,10.9,8.79,9,17,8Z"/></svg>
        <svg class="leaf" viewBox="0 0 24 24" fill="#2E7D32" style="width: 25px; height: 25px;"><path d="M17,8C8,10,5.9,16.17,3.82,21.34L5.71,22l1-2.3A4.49,4.49,0,0,0,8,20C19,20,22,3,22,3,11,5,10.54,12.84,10.54,12.84L10,14.31l-3.32-3.32C6.68,10.9,8.79,9,17,8Z"/></svg>
        <svg class="leaf" viewBox="0 0 24 24" fill="#66BB6A" style="width: 35px; height: 35px;"><path d="M17,8C8,10,5.9,16.17,3.82,21.34L5.71,22l1-2.3A4.49,4.49,0,0,0,8,20C19,20,22,3,22,3,11,5,10.54,12.84,10.54,12.84L10,14.31l-3.32-3.32C6.68,10.9,8.79,9,17,8Z"/></svg>
         <svg class="leaf" viewBox="0 0 24 24" fill="#388E3C" style="width: 15px; height: 15px;"><path d="M17,8C8,10,5.9,16.17,3.82,21.34L5.71,22l1-2.3A4.49,4.49,0,0,0,8,20C19,20,22,3,22,3,11,5,10.54,12.84,10.54,12.84L10,14.31l-3.32-3.32C6.68,10.9,8.79,9,17,8Z"/></svg>
    </div>
    <div class="hero-content container">
        <h1 class="hero-title">Hijaukan Ruang Anda<br>Bersama Fiqih Plant</h1>
        <p class="hero-subtitle">Temukan koleksi tanaman hias dan produktif terbaik untuk hunian yang lebih asri dan menenangkan.</p>
        <div class="hero-cta">
            <?php 
            $shop_url = home_url( '/shop' );
            $consult_url = home_url( '/contact' );
            if ( class_exists( 'WooCommerce' ) ) {
                $shop_id = wc_get_page_id( 'shop' );
                if ( $shop_id > 0 ) {
                    $shop_url = get_permalink( $shop_id );
                }
            }
            ?>
            <a href="<?php echo esc_url( $shop_url ); ?>" class="btn btn-primary">Belanja Sekarang</a>
            <a href="<?php echo esc_url( $consult_url ); ?>" class="btn btn-outline" style="margin-left: 1rem; color: white; border-color: white;">Konsultasi Gratis</a>
        </div>
    </div>
    <div class="hero-overlay"></div>
    <!-- Placeholder for Hero Image - ideally set via Customizer -->
    <img src="https://images.unsplash.com/photo-1459411552884-841db9b3cc2a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="Fiqih Plant Hero" class="hero-bg-img">
</section>

<!-- USP / Features Section -->
<section class="usp-section section-padding">
    <div class="container grid-3">
        <div class="usp-item animate-on-scroll">
            <div class="usp-icon">🌿</div>
            <h3>Tanaman Sehat</h3>
            <p>Setiap tanaman dirawat oleh ahli untuk memastikan kualitas terbaik saat sampai di tangan Anda.</p>
        </div>
        <div class="usp-item animate-on-scroll">
            <div class="usp-icon">🚚</div>
            <h3>Pengiriman Aman</h3>
            <p>Packaging khusus yang menjamin tanaman tetap segar dan utuh hingga tujuan.</p>
        </div>
        <div class="usp-item animate-on-scroll">
            <div class="usp-icon">💬</div>
            <h3>Konsultasi Gratis</h3>
            <p>Bingung cara merawat? Tim kami siap membantu Anda kapan saja.</p>
        </div>
    </div>
</section>

<!-- Categories Section -->
<section class="categories-section section-padding" style="background-color: white;">
    <div class="container">
        <h2 class="section-title text-center animate-on-scroll">Jelajahi Kategori</h2>
        <div class="cat-grid animate-on-scroll">
            <!-- Example Category 1 -->
            <a href="<?php echo home_url( '/product-category/tanaman-hias' ); ?>" class="cat-card">
                <img src="https://images.unsplash.com/photo-1485955900006-10f4d324d411?auto=format&fit=crop&w=600&q=80" alt="Tanaman Hias">
                <div class="cat-info">
                    <h3>Tanaman Hias</h3>
                    <span>Indah & Estetik</span>
                </div>
            </a>
            <!-- Example Category 2 -->
            <!-- Example Category 2 -->
             <a href="<?php echo home_url( '/product-category/tanaman-buah' ); ?>" class="cat-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cat-fruit.png" alt="Tanaman Buah">
                <div class="cat-info">
                    <h3>Tanaman Buah</h3>
                    <span>Segar & Produktif</span>
                </div>
            </a>
            <!-- Example Category 3 -->
             <a href="<?php echo home_url( '/product-category/outdoor' ); ?>" class="cat-card">
                <img src="https://images.unsplash.com/photo-1558904541-efa843a96f01?auto=format&fit=crop&w=800&q=80" alt="Tanaman Outdoor">
                <div class="cat-info">
                    <h3>Tanaman Outdoor</h3>
                    <span>Tahan Cuaca</span>
                </div>
            </a>
            <!-- Example Category 4 -->
             <a href="<?php echo home_url( '/product-category/bibit-media' ); ?>" class="cat-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cat-seeds.png" alt="Bibit & Media">
                <div class="cat-info">
                    <h3>Bibit & Media</h3>
                    <span>Perlengkapan</span>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Featured Products -->
<section class="featured-products section-padding">
    <div class="container animate-on-scroll">
        <div class="section-header" style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 2rem;">
            <h2 class="section-title">Produk Pilihan</h2>
            <a href="<?php echo esc_url( home_url( '/shop' ) ); ?>" class="btn-link">Lihat Semua →</a>
        </div>
        
        <?php 
        if ( class_exists( 'WooCommerce' ) ) {
            // Using WooCommerce shortcode to display featured products
            echo do_shortcode( '[products limit="4" columns="4" visibility="featured"]' ); 
        } else {
            echo '<p>Please verify WooCommerce is installed and active.</p>';
        }
        ?>
    </div>
</section>

<!-- About Snippet -->
<section class="about-snippet section-padding" style="background-color: var(--fp-green); color: white;">
    <div class="container grid-2">
        <div class="about-text animate-on-scroll">
            <h2 style="color: white;">Tentang Fiqih Plant</h2>
            <p style="margin-bottom: 1.5rem; opacity: 0.9;">
                Berawal dari hobi kecil, Fiqih Plant kini tumbuh menjadi penyedia tanaman terpercaya. Kami percaya bahwa setiap rumah layak memiliki sudut hijau yang menenangkan jiwa.
                <br><br>
                Visi kami adalah menghijaukan setiap sudut kota, satu pot tanaman pada satu waktu.
            </p>
            <a href="<?php echo home_url( '/about' ); ?>" class="btn btn-outline" style="border-color: white; color: white;">Pelajari Lebih Lanjut</a>
        </div>
        <div class="about-image animate-on-scroll" style="display: flex; justify-content: flex-end;">
            <!-- Placeholder -->
            <img src="https://images.unsplash.com/photo-1530968464165-7a1861cbaf9f?auto=format&fit=crop&w=800&q=80" alt="About Fiqih Plant" style="border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.2);">
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="testimonials section-padding">
    <div class="container text-center">
        <h2 class="section-title animate-on-scroll">Apa Kata Mereka?</h2>
        <div class="grid-3 animate-on-scroll" style="margin-top: 3rem;">
            <div class="testimonial-card">
                <p>"Tanaman sampai dengan segar, packingnya aman banget! Recommended seller."</p>
                <h5>- Andi, Jakarta</h5>
            </div>
            <div class="testimonial-card">
                <p>"Suka banget sama monstera-nya, daunnya lebar dan sehat. Makasih Fiqih Plant!"</p>
                <h5>- Sarah, Bandung</h5>
            </div>
            <div class="testimonial-card">
                <p>"Konsultasinya sangat membantu buat pemula seperti saya. Tanaman jadi awet."</p>
                <h5>- Budi, Surabaya</h5>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
