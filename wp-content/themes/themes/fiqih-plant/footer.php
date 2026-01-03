<?php
/**
 * The template for displaying the footer
 */

?>

	<footer id="colophon" class="site-footer">
        <div class="container">
            <div class="footer-widgets" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-bottom: 2rem;">
                <!-- Widget Area 1: About -->
                <div class="footer-branding">
                    <h3 style="color: white; margin-bottom: 1rem;">Fiqih Plant</h3>
                    <p>Hijaukan ruang Anda bersama koleksi tanaman hias dan produktif terbaik dari kami. Tumbuh bersama alam.</p>
                </div>

                <!-- Widget Area 2: Links -->
                <div class="footer-links">
                    <h4 style="color: white; margin-bottom: 1rem;">Quick Links</h4>
                    <ul style="list-style: none; padding: 0;">
                        <li><a href="/shop">Belanja</a></li>
                        <li><a href="/about">Tentang Kami</a></li>
                        <li><a href="/contact">Kontak</a></li>
                        <li><a href="/blog">Blog Edukasi</a></li>
                    </ul>
                </div>

                <!-- Widget Area 3: Contact & Social -->
                <div class="footer-contact">
                    <h4 style="color: white; margin-bottom: 1rem;">Hubungi Kami</h4>
                    <p>WhatsApp: <?php echo get_theme_mod( 'fiqih_plant_phone', '+62 812 3456 7890' ); ?></p>
                    <p>Email: <?php echo get_theme_mod( 'fiqih_plant_email', 'hello@fiqihplant.com' ); ?></p>
                    <div class="social-links" style="margin-top: 1.5rem;">
                        <a href="<?php echo esc_url( get_theme_mod( 'fiqih_plant_ig', '#' ) ); ?>" style="margin-right: 10px;">Instagram</a>
                        <a href="#" style="margin-right: 10px;">Facebook</a>
                        <a href="#">TikTok</a>
                    </div>
                </div>
            </div>

            <div class="site-info" style="border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1rem; text-align: center;">
                <p>&copy; <?php echo date( 'Y' ); ?> Fiqih Plant. All rights reserved.</p>
                <p style="font-size: 0.8rem; opacity: 0.6;">
                    Built with Natural Vibes.
                </p>
            </div><!-- .site-info -->
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php
// Get phone number from customizer or default
$whatsapp_number = get_theme_mod( 'fiqih_plant_phone', '+62 812 3456 7890' );
// Clean number for link (remove spaces, symbols)
$whatsapp_clean = preg_replace( '/[^0-9]/', '', $whatsapp_number );
?>
<a href="https://wa.me/<?php echo esc_attr( $whatsapp_clean ); ?>" class="floating-whatsapp" target="_blank" rel="noopener noreferrer" aria-label="Chat with us on WhatsApp">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Free 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. --><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l121.7-31.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-4-10.5-6.8z"/></svg>
</a>
<?php wp_footer(); ?>

</body>
</html>
