<?php
/**
 * Template Name: Contact Page
 */

get_header(); ?>

<!-- Page Header -->
<section class="page-header section-padding" style="background: var(--fp-green-dark); color: white; padding-top: 8rem; padding-bottom: 4rem;">
    <div class="container text-center">
        <h1 class="page-title" style="font-size: 3.5rem; color: white;">Hubungi Kami</h1>
        <p class="lead" style="max-width: 600px; margin: 0 auto; opacity: 0.9;">Punya pertanyaan seputar tanaman? Kami siap membantu!</p>
    </div>
</section>

<!-- Contact Content -->
<section class="contact-section section-padding">
    <div class="container grid-2">
        <!-- Contact Info -->
        <div class="contact-info">
            <h2>Informasi Kontak</h2>
            <p style="margin-bottom: 2rem;">Jangan ragu untuk menghubungi kami melalui saluran berikut atau kunjungi kebun kami.</p>
            
            <div class="info-item" style="display: flex; gap: 1rem; margin-bottom: 1.5rem; align-items: center;">
                <div class="icon" style="background: var(--fp-green-soft); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--fp-green);">📍</div>
                <div>
                    <h5 style="margin: 0;">Alamat</h5>
                    <p style="margin: 0; color: var(--fp-text-soft);"><?php echo nl2br( get_theme_mod( 'fiqih_plant_address', 'Jl. Raya Puncak No. 123, Bogor, Jawa Barat' ) ); ?></p>
                </div>
            </div>

            <div class="info-item" style="display: flex; gap: 1rem; margin-bottom: 1.5rem; align-items: center;">
                <div class="icon" style="background: var(--fp-green-soft); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--fp-green);">📞</div>
                <div>
                    <h5 style="margin: 0;">WhatsApp</h5>
                    <p style="margin: 0; color: var(--fp-text-soft);"><?php echo get_theme_mod( 'fiqih_plant_phone', '+62 812 3456 7890' ); ?></p>
                </div>
            </div>

            <div class="info-item" style="display: flex; gap: 1rem; margin-bottom: 1.5rem; align-items: center;">
                <div class="icon" style="background: var(--fp-green-soft); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--fp-green);">✉️</div>
                <div>
                    <h5 style="margin: 0;">Email</h5>
                    <p style="margin: 0; color: var(--fp-text-soft);"><?php echo get_theme_mod( 'fiqih_plant_email', 'hello@fiqihplant.com' ); ?></p>
                </div>
            </div>
            
            <div class="map-embed" style="margin-top: 2rem; border-radius: 20px; overflow: hidden; box-shadow: var(--shadow-md);">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126829.2822851493!2d106.72166540608034!3d-6.597623577319326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c58579f1d073%3A0xc00c0173549749e4!2sBogor%2C%20Bogor%20City%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1650000000000!5m2!1sen!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="contact-form-wrapper" style="background: white; padding: 3rem; border-radius: 20px; box-shadow: var(--shadow-lg);">
            <h3 style="margin-bottom: 1.5rem;">Kirim Pesan</h3>
            <form action="" method="post" class="contact-form">
                <div class="form-group" style="margin-bottom: 1.5rem;">
                    <label for="name" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Nama Lengkap</label>
                    <input type="text" id="name" name="name" style="width: 100%; padding: 0.8rem; border: 1px solid #ddd; border-radius: 10px;" placeholder="John Doe">
                </div>
                <div class="form-group" style="margin-bottom: 1.5rem;">
                    <label for="email" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Email</label>
                    <input type="email" id="email" name="email" style="width: 100%; padding: 0.8rem; border: 1px solid #ddd; border-radius: 10px;" placeholder="john@example.com">
                </div>
                <div class="form-group" style="margin-bottom: 1.5rem;">
                    <label for="message" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Pesan</label>
                    <textarea id="message" name="message" rows="5" style="width: 100%; padding: 0.8rem; border: 1px solid #ddd; border-radius: 10px; font-family: inherit;" placeholder="Tulis pesan Anda disini..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%;">Kirim Pesan</button>
            </form>
        </div>
    </div>
</section>

<?php get_footer(); ?>
