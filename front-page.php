<?php get_header(); ?>

<div id="home-page" class="page-content active" style="display: block;">
    <!-- HERO SECTION -->
    <section class="relative min-h-[75vh] flex items-center pt-5">
        <div class="section-container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center relative z-10">
            <div class="space-y-6">
                <div
                    class="inline-flex items-center space-x-2 bg-green-50 text-primary px-4 py-1.5 rounded-full text-sm font-semibold border border-green-100">
                    <span>Hidup Mulia Bersama Al Qur'an</span>
                </div>
                <h2 class="text-4xl md:text-6xl font-extrabold leading-tight text-gray-900">
                    Pendidikan Islam <span class="text-primary italic">Berkualitas</span> Untuk Masa Depan
                </h2>
                <p class="text-lg text-gray-600 max-w-lg leading-relaxed">
                    Kami mengintegrasikan nilai-nilai luhur kepesantrenan dengan kurikulum modern guna mencetak generasi
                    yang cerdas intelektual dan mulia secara spiritual.
                </p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 pt-4">
                    <button onclick="document.getElementById('psb').scrollIntoView({ behavior: 'smooth' })"
                        class="bg-primary text-white text-center px-8 py-4 rounded-xl font-bold shadow-xl shadow-green-900/20 hover:scale-105 transition-transform">
                        Pendaftaran Santri Baru
                    </button>
                    <button onclick="openChatWithPrompt('Bantu saya memilih program yang cocok untuk anak saya')"
                        class="flex items-center justify-center space-x-2 text-primary font-bold border-2 border-primary/20 px-8 py-4 rounded-xl hover:bg-green-50 transition-all">
                        <span>Cek Rekomendasi Program</span>
                    </button>
                </div>
            </div>

            <div class="relative">
                <div class="relative z-10 rounded-3xl overflow-hidden shadow-2xl border-8 border-white">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ahok.png" alt="Santri Belajar"
                        class="w-full h-[450px] object-cover">
                </div>
                <div
                    class="absolute -bottom-6 -left-6 z-20 bg-white p-6 rounded-2xl shadow-xl border border-gray-100 hidden sm:block">
                    <div class="flex items-center space-x-4">
                        <div class="bg-yellow-100 p-3 rounded-xl text-yellow-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-2xl font-bold text-gray-900 leading-none">200+</p>
                            <p class="text-sm text-gray-500">Santri Aktif</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROGRAM UNGGULAN -->
    <section class="py-20 section-container mx-auto px-6">
        <div class="text-center mb-16 space-y-2">
            <h3 class="text-primary font-bold uppercase tracking-widest text-sm">Program Kami</h3>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Fokus Pendidikan Terbaik</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-10">
            <div
                class="bg-white p-10 rounded-[40px] border border-gray-100 hover:border-primary/20 transition-all duration-300 hover:shadow-2xl hover:shadow-green-900/10 group flex flex-col items-center text-center">
                <div
                    class="w-20 h-20 bg-green-50 text-primary rounded-[28px] flex items-center justify-center mb-8 group-hover:bg-primary group-hover:text-green-50 transition-all duration-300 transform group-hover:scale-110 shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <h4 class="text-2xl font-bold mb-4 text-gray-900">Tahfidzul Qur'an</h4>
                <p class="text-gray-600 leading-relaxed text-base">Program intensif menghafal Al-Qur'an 30 Juz dengan
                    metode mutqin dan sanad.</p>
            </div>
            <div
                class="bg-white p-10 rounded-[40px] border border-gray-100 hover:border-primary/20 transition-all duration-300 hover:shadow-2xl hover:shadow-green-900/10 group flex flex-col items-center text-center">
                <div
                    class="w-20 h-20 bg-green-50 text-primary rounded-[28px] flex items-center justify-center mb-8 group-hover:bg-primary group-hover:text-green-50 transition-all duration-300 transform group-hover:scale-110 shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                    </svg>
                </div>
                <h4 class="text-2xl font-bold mb-4 text-gray-900">Kajian Kitab Kuning</h4>
                <p class="text-gray-600 leading-relaxed text-base">Pendalaman khazanah Islam klasik meliputi Fiqih,
                    Akidah, Akhlak, dan Nahwu Shorof.</p>
            </div>
            <div
                class="bg-white p-10 rounded-[40px] border border-gray-100 hover:border-primary/20 transition-all duration-300 hover:shadow-2xl hover:shadow-green-900/10 group flex flex-col items-center text-center">
                <div
                    class="w-20 h-20 bg-green-50 text-primary rounded-[28px] flex items-center justify-center mb-8 group-hover:bg-primary group-hover:text-green-50 transition-all duration-300 transform group-hover:scale-110 shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h4 class="text-2xl font-bold mb-4 text-gray-900">Bahasa Arab & Inggris</h4>
                <p class="text-gray-600 leading-relaxed text-base">Penguasaan bahasa asing secara aktif sebagai sarana
                    dakwah global dan akademik.</p>
            </div>
        </div>
    </section>

    <!-- STATISTIK -->
    <section class="pb-20 section-container mx-auto px-6">
        <div class="bg-white border border-black/5 rounded-[40px] p-10 md:p-16 shadow-sm overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-0 relative">
                <div class="flex flex-col items-center text-center px-4 relative">
                    <div class="text-4xl md:text-5xl font-extrabold text-primary flex items-center mb-3">
                        <span class="count-up" data-target="50">0</span><span class="ml-1">+</span>
                    </div>
                    <p class="text-gray-500 font-bold uppercase tracking-widest text-sm">Total Pegawai</p>
                </div>
                <div class="hidden md:block absolute left-1/3 top-0 bottom-0 w-px bg-gray-100"></div>
                <div class="flex flex-col items-center text-center px-4 relative">
                    <div class="text-4xl md:text-5xl font-extrabold text-primary flex items-center mb-3">
                        <span class="count-up" data-target="200">0</span><span class="ml-1">+</span>
                    </div>
                    <p class="text-gray-500 font-bold uppercase tracking-widest text-sm">Total Santri Aktif</p>
                </div>
                <div class="hidden md:block absolute left-2/3 top-0 bottom-0 w-px bg-gray-100"></div>
                <div class="flex flex-col items-center text-center px-4 relative">
                    <div class="text-4xl md:text-5xl font-extrabold text-primary flex items-center mb-3">
                        <span class="count-up" data-target="1000">0</span><span class="ml-1">+</span>
                    </div>
                    <p class="text-gray-500 font-bold uppercase tracking-widest text-sm">Total Alumni</p>
                </div>
            </div>
        </div>
    </section>

    <!-- BERITA TERBARU -->
    <section class="py-20 bg-white" id="berita">
        <div class="section-container mx-auto px-6">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
                <div class="space-y-2">
                    <h3 class="text-primary font-bold uppercase tracking-widest text-sm">Tetap Terhubung</h3>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Berita Terkini</h2>
                </div>
                <a href="<?php echo get_permalink(get_page_by_path('berita-terkini')); ?>" 
                class="text-primary font-bold flex items-center space-x-2 group">
                    <span>Lihat Semua Berita</span>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 transform group-hover:translate-x-1 transition-transform" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
            <?php
            $args = array(
                'post_type' => 'post',
                'category_name' => 'beritaterkini',
                'posts_per_page' => 3
            );

            $query = new WP_Query($args);
            ?>

            <div class="grid md:grid-cols-3 gap-8">

            <?php if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>

                <article onclick="window.location.href='<?php the_permalink(); ?>'" class="group cursor-pointer">
                    
                    <!-- Thumbnail -->
                    <div class="rounded-[10px] overflow-hidden mb-6 relative">
                        <?php if (has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('medium', [
                                'class' => 'w-full h-64 object-cover transform group-hover:scale-105 transition-transform duration-500'
                            ]); ?>
                        <?php else: ?>
                            <img src="https://via.placeholder.com/800x600" class="w-full h-64 object-cover">
                        <?php endif; ?>
                    </div>

                    <!-- Content -->
                    <div class="space-y-3">
                        
                        <!-- Tanggal -->
                        <p class="text-gray-400 text-xs font-medium uppercase tracking-wider">
                            <?php echo get_the_date('d F Y'); ?>
                        </p>

                        <!-- Judul -->
                        <h4 class="text-xl font-bold text-gray-900 group-hover:text-primary transition-colors leading-tight">
                            <?php the_title(); ?>
                        </h4>

                        <!-- Excerpt -->
                        <p class="text-gray-600 text-sm leading-relaxed line-clamp-2">
                            <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                        </p>

                    </div>
                </article>

            <?php endwhile; wp_reset_postdata(); else: ?>

                <p class="text-gray-500">Belum ada berita.</p>

            <?php endif; ?>

            </div>
        </div>
    </section>

    <!-- Informasi Pesantren -->
    <section class="py-10 bg-white" id="info-pesantren">
    <div class="section-container mx-auto px-6">

        <!-- Header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
            <div class="space-y-2">
                <!-- <h3 class="text-primary font-bold uppercase tracking-widest text-sm"></h3> -->
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Informasi Pesantren</h2>
            </div>

            <a href="<?php echo get_permalink(get_page_by_path('informasi-pesantren')); ?>" 
               class="text-primary font-bold flex items-center space-x-2 group">
                <span>Lihat Semua Info</span>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 transform group-hover:translate-x-1 transition-transform" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>

        <?php
        $args = array(
            'post_type' => 'post',
            'category_name' => 'infopesantren',
            'posts_per_page' => 3
        );

        $query = new WP_Query($args);
        ?>

        <!-- Cards -->
        <div class="grid md:grid-cols-3 gap-6">

        <?php if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>

            <article onclick="window.location.href='<?php the_permalink(); ?>'" 
                     class="group cursor-pointer p-6 rounded-2xl border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 bg-gray-50">

                <!-- Tanggal -->
                <p class="text-gray-400 text-xs font-medium uppercase tracking-wider mb-2">
                    <?php echo get_the_date('d F Y'); ?>
                </p>

                <!-- Judul -->
                <h4 class="text-lg font-bold text-gray-900 group-hover:text-primary transition-colors leading-snug mb-3">
                    <?php the_title(); ?>
                </h4>

                <!-- Excerpt -->
                <p class="text-gray-600 text-sm leading-relaxed line-clamp-3">
                    <?php echo wp_trim_words(get_the_excerpt(), 18); ?>
                </p>

                <!-- Read more -->
                <div class="mt-4 text-primary text-sm font-semibold flex items-center gap-1">
                    <span>Baca Selengkapnya</span>
                    <span class="transform px-2 group-hover:translate-x-1 transition">→</span>
                </div>

            </article>

        <?php endwhile; wp_reset_postdata(); else: ?>

            <p class="text-gray-500">Belum ada informasi pesantren.</p>

        <?php endif; ?>

        </div>
    </div>
</section>

    <!-- GALERI SANTRI -->
    <section class="py-20" id="galeri">
        <div class="section-container mx-auto px-6">
            <div class="text-center mb-16 space-y-2">
                <h3 class="text-primary font-bold uppercase tracking-widest text-sm">Dokumentasi Pesantren</h3>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Galeri Santri</h2>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="rounded-[10px] overflow-hidden aspect-square relative group">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/fotoah2.jpg"
                        alt="Belajar di Kelas"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                </div>
                <div class="rounded-[10px] overflow-hidden aspect-square relative group">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/fotoah1.jpg"
                        alt="Makan Bersama"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                </div>
                <div class="rounded-[10px] overflow-hidden aspect-square relative group md:col-span-2 md:row-span-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ah4.jpg" alt="Shalat Berjamaah"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div
                        class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <!-- <span
                            class="text-white font-bold bg-primary/40 backdrop-blur-sm px-6 py-2 rounded-full scale-0 group-hover:scale-100 transition-transform duration-300">Kegiatan
                            Utama</span> -->
                    </div>
                </div>
                <div class="rounded-[10px] overflow-hidden aspect-square relative group">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ah2.jpg" alt="Ekstrakurikuler"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                </div>
                <div class="rounded-[10px] overflow-hidden aspect-square relative group">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ah3.jpg" alt="Hafalan Quran"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: PENERIMAAN SANTRI BARU (PSB) -->
    <section class="py-24 bg-green-50/30" id="psb">
        <div class="section-container mx-auto px-6">
            <div class="text-center mb-16 space-y-4">
                <h3 class="text-primary font-bold uppercase tracking-widest text-sm">Pendaftaran TA. 2025/2026</h3>
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight">Mari Bergabung Menjadi <br>
                    <span class="text-primary italic">Generasi Qurani</span></h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Kami membuka kesempatan bagi putra-putri terbaik untuk
                    mendalami ilmu agama dan pengetahuan umum dalam lingkungan yang asri dan islami.</p>
            </div>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Requirements & Info -->
                <div class="space-y-8">
                    <div>
                        <h4 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <span
                                class="w-8 h-8 bg-primary text-white rounded-lg flex items-center justify-center mr-3 text-sm">1</span>
                            Persyaratan Umum
                        </h4>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-primary mr-3 shrink-0" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-700">Lulus Sekolah Dasar (SD/MI) untuk tingkat MTs, atau MTs/SMP
                                    untuk tingkat SMAIT.</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-primary mr-3 shrink-0" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-700">Berakhlakul karimah dan siap mengikuti disiplin
                                    pesantren.</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-primary mr-3 shrink-0" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-700">Sehat jasmani dan rohani (bebas penyakit menular).</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-primary mr-3 shrink-0" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-700">Mampu membaca Al-Qur'an dengan dasar tajwid yang
                                    benar.</span>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <span
                                class="w-8 h-8 bg-primary text-white rounded-lg flex items-center justify-center mr-3 text-sm">2</span>
                            Berkas Administrasi
                        </h4>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div
                                class="p-4 bg-white rounded-2xl border border-gray-100 flex items-center space-x-3 shadow-sm">
                                <div class="text-primary"><svg class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg></div>
                                <span class="text-sm font-semibold text-gray-700">Fotocopy Ijazah & SKHUN</span>
                            </div>
                            <div
                                class="p-4 bg-white rounded-2xl border border-gray-100 flex items-center space-x-3 shadow-sm">
                                <div class="text-primary"><svg class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg></div>
                                <span class="text-sm font-semibold text-gray-700">Kartu Keluarga (KK)</span>
                            </div>
                            <div
                                class="p-4 bg-white rounded-2xl border border-gray-100 flex items-center space-x-3 shadow-sm">
                                <div class="text-primary"><svg class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg></div>
                                <span class="text-sm font-semibold text-gray-700">Akte Kelahiran</span>
                            </div>
                            <div
                                class="p-4 bg-white rounded-2xl border border-gray-100 flex items-center space-x-3 shadow-sm">
                                <div class="text-primary"><svg class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                    </svg></div>
                                <span class="text-sm font-semibold text-gray-700">Pas Foto 3x4 (5 Lembar)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pricing Table -->
                <div class="bg-white rounded-[40px] shadow-2xl border border-gray-100 overflow-hidden relative">
                    <div class="bg-primary p-8 text-white">
                        <h4 class="text-2xl font-bold mb-2">Estimasi Biaya Masuk</h4>
                        <p class="text-green-100/80 text-sm">Tahun Ajaran 2025/2026 (Putra/Putri)</p>
                    </div>
                    <div class="p-8">
                        <table class="w-full text-left">
                            <thead class="border-b border-gray-100">
                                <tr>
                                    <th class="py-4 font-bold text-gray-900">Uraian Biaya</th>
                                    <th class="py-4 font-bold text-gray-900 text-right">Nominal</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-50">
                                <tr>
                                    <td class="py-4 text-gray-600">Pendaftaran & Tes Seleksi</td>
                                    <td class="py-4 font-semibold text-gray-900 text-right">Rp 350.000</td>
                                </tr>
                                <tr>
                                    <td class="py-4 text-gray-600">Uang Pangkal / Infaq Bangunan</td>
                                    <td class="py-4 font-semibold text-gray-900 text-right">Rp 4.500.000</td>
                                </tr>
                                <tr>
                                    <td class="py-4 text-gray-600">Seragam (5 Set) & Atribut</td>
                                    <td class="py-4 font-semibold text-gray-900 text-right">Rp 1.800.000</td>
                                </tr>
                                <tr>
                                    <td class="py-4 text-gray-600">Kegiatan Santri (1 Tahun)</td>
                                    <td class="py-4 font-semibold text-gray-900 text-right">Rp 1.200.000</td>
                                </tr>
                                <tr>
                                    <td class="py-4 text-gray-600">Kitab & Buku Paket</td>
                                    <td class="py-4 font-semibold text-gray-900 text-right">Rp 850.000</td>
                                </tr>
                                <tr class="bg-green-50/50">
                                    <td class="py-4 pl-4 font-bold text-primary">Syahriah (SPP Bulanan)</td>
                                    <td class="py-4 pr-4 font-bold text-primary text-right">Rp 1.100.000</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="mt-10 p-6 bg-yellow-50 rounded-2xl border border-yellow-100">
                            <div class="flex">
                                <svg class="h-6 w-6 text-yellow-600 mr-3 shrink-0" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <p class="text-xs text-yellow-800 leading-relaxed">
                                    <strong>Catatan:</strong> Biaya syahriah mencakup makan 3x sehari, asrama, laundry,
                                    dan biaya operasional pendidikan. Info beasiswa tersedia bagi santri
                                    berprestasi/yatim.
                                </p>
                            </div>
                        </div>
                        <div class="mt-8">
                            <a href="http://wpalhikmah.test/wp-content/uploads/2026/04/SEMNASA24-PERANCANGAN-SISTEM-PEMESANAN-KANTIN-IBU-ELIS-BERBASIS-MOBILE.pdf"
                                class="block w-full text-center bg-primary text-white font-bold py-4 rounded-2xl shadow-xl shadow-green-900/20 hover:bg-green-900 transition-all hover:scale-[1.02]">
                                Unduh Brosur Lengkap (PDF)
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>