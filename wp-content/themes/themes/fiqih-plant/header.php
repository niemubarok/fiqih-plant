<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'fiqih-plant' ); ?></a>

	<header id="masthead" class="site-header">
        <div class="container header-container">
            <div class="site-branding">
                <?php
                if ( has_custom_logo() ) {
                    the_custom_logo();
                } else {
                    ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-logo-link">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" class="site-logo-img">
                        </a>
                    <?php
                }
                ?>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation">
                <!-- Mobile Menu Button -->
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
                <div class="main-navigation">
                    <ul>
                        <li><a href="<?php echo home_url('/'); ?>">Beranda</a></li>
                        <li><a href="<?php echo home_url('/shop'); ?>">Produk</a></li>
                        <li><a href="<?php echo home_url('/about'); ?>">Tentang Kami</a></li>
                        <li><a href="<?php echo home_url('/contact'); ?>">Kontak</a></li>
                    </ul>
                </div>
            </nav><!-- #site-navigation -->

            <div class="header-actions">

                <a href="<?php echo function_exists('wc_get_cart_url') ? esc_url( wc_get_cart_url() ) : '#'; ?>" class="cart-link">
                    <!-- Cart Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                    <?php if ( class_exists( 'WooCommerce' ) && WC()->cart->get_cart_contents_count() > 0 ) : ?>
                        <span class="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                    <?php endif; ?>
                </a>
            </div>
        </div>
	</header><!-- #masthead -->
