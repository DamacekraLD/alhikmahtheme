<?php get_header(); ?>

<main class="min-h-screen flex items-center justify-center bg-gray-50 px-2">
    <div class="text-center max-w-xl">
        
        <h1 class="text-7xl font-extrabold text-primary mb-4">404</h1>
        
        <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">
            Halaman Tidak Ditemukan
        </h2>
        
        <p class="text-gray-500 mb-8">
            Maaf, halaman yang kamu cari tidak tersedia atau sudah dipindahkan.
        </p>

        <div class="flex justify-center gap-4">
            <a href="<?php echo home_url(); ?>" 
               class="bg-primary text-white px-6 py-3 rounded-xl font-semibold hover:bg-green-700 transition">
                Kembali ke Beranda
            </a>

            <a href="<?php echo home_url('/berita-terkini'); ?>" 
               class="border border-primary text-primary px-6 py-3 rounded-xl font-semibold hover:bg-primary hover:text-white transition">
                Lihat Berita
            </a>
        </div>

    </div>
</main>

<?php get_footer(); ?>