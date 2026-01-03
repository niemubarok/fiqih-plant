<?php
/**
 * Template Name: About Page
 */

get_header(); ?>

<!-- Page Header -->
<section class="page-header section-padding" style="background: var(--fp-green-dark); color: white; padding-top: 8rem; padding-bottom: 4rem;">
    <div class="container text-center">
        <h1 class="page-title" style="font-size: 3.5rem; color: white;">Tentang Fiqih Plant</h1>
        <p class="lead" style="max-width: 600px; margin: 0 auto; opacity: 0.9;">Tumbuh bersama alam, menghadirkan ketenangan di setiap sudut ruang Anda.</p>
    </div>
</section>

<!-- Our Story -->
<section class="story-section section-padding">
    <div class="container grid-2">
        <div class="story-image">
            <img src="https://images.unsplash.com/photo-1466692476868-aef1dfb1e735?auto=format&fit=crop&w=800&q=80" alt="Garden Story" style="border-radius: 20px; box-shadow: var(--shadow-lg);">
        </div>
        <div class="story-text">
            <h2>Berawal dari Benih Kecil</h2>
            <p style="margin-bottom: 1rem; color: var(--fp-text-soft);">
                Fiqih Plant didirikan pada tahun 2023 dengan satu misi sederhana: membuat tanaman berkualitas dapat diakses oleh semua orang. Kami percaya bahwa berkebun bukan hanya sekadar hobi, tetapi sebuah gaya hidup yang membawa kedamaian.
            </p>
            <p style="margin-bottom: 2rem; color: var(--fp-text-soft);">
                Dari teras kecil hingga taman luas, kami menyediakan berbagai jenis tanaman hias, tanaman buah, dan perlengkapan berkebun yang telah dikurasi oleh para ahli kami.
            </p>
            
            <div class="stats-grid" style="display: flex; gap: 2rem;">
                <div class="stat-item">
                    <h3 style="font-size: 2.5rem; color: var(--fp-green); margin-bottom: 0;">1000+</h3>
                    <span>Tanaman Terjual</span>
                </div>
                <div class="stat-item">
                    <h3 style="font-size: 2.5rem; color: var(--fp-green); margin-bottom: 0;">500+</h3>
                    <span>Pelanggan Bahagia</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values -->
<section class="values-section section-padding" style="background-color: white;">
    <div class="container text-center">
        <h2 class="section-title">Nilai Kami</h2>
        <div class="grid-3" style="margin-top: 3rem;">
            <div class="usp-item">
                <div class="usp-icon">🌱</div>
                <h3>Keaslian</h3>
                <p>Tanaman asli yang dirawat dengan penuh kasih sayang tanpa bahan kimia berbahaya.</p>
            </div>
            <div class="usp-item">
                <div class="usp-icon">🤝</div>
                <h3>Komunitas</h3>
                <p>Kami membangun komunitas pecinta tanaman untuk saling berbagi ilmu.</p>
            </div>
            <div class="usp-item">
                <div class="usp-icon">💚</div>
                <h3>Berkelanjutan</h3>
                <p>Praktik bisnis yang ramah lingkungan dan penggunaan kemasan biodegradable.</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
