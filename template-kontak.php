<?php 
/**
 * Template Name: Kontak
 */
get_header(); ?>

<main class="bg-gradient-to-b from-gray-50 to-white min-h-screen py-20">
    <div class="container mx-auto px-4">
        
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-20 space-y-4">
            <h3 class="text-primary font-bold uppercase tracking-widest text-sm">Ada Pertanyaan atau Pengajuan?</h3>
            <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900">Hubungi Kami</h2>
            <p class="text-gray-600">Kami siap membantu Anda mendapatkan informasi terkait pendidikan, kegiatan, dan pendaftaran santri baru di PPIT Al Hikmah Karanggede.</p>
            <div class="w-24 h-1 bg-primary mx-auto rounded-full"></div>
        </div>

        <!-- Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">

            <!-- Alamat -->
            <div class="group bg-white p-8 rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 hover:-translate-y-1">
                <div class="w-14 h-14 bg-green-50 text-primary rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
                    <i class="bi bi-telephone-fill"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Alamat Kampus</h3>
                <p class="text-gray-600 leading-relaxed text-sm">
                    Pondok Pesantren Islam Terpadu Al Hikmah <br>
                    Trayon, Dusun 2, Kebonan, Karanggede <br>
                    Boyolali, Jawa Tengah 57381
                </p>
            </div>

            <!-- PSB -->
            <div class="group bg-primary p-8 rounded-3xl shadow-xl hover:scale-[1.03] transition-all duration-300 text-white relative overflow-hidden">
                
                <!-- glow effect -->
                <div class="absolute -top-10 -right-10 w-40 h-40 bg-white/10 rounded-full blur-2xl"></div>

                <div class="relative z-10">
                    <div class="w-14 h-14 bg-white/20 text-white rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
                        <i class="bi bi-person-fill-up"></i>
                    </div>

                    <h3 class="text-xl font-bold mb-3">Pendaftaran Santri Baru</h3>
                    <p class="text-green-100 text-sm mb-6">
                        Informasi lengkap terkait syarat, biaya, dan proses seleksi masuk.
                    </p>

                    <a href="#" 
                    class="inline-block bg-yellow-400 text-black px-6 py-3 rounded-xl font-semibold hover:bg-yellow-300 transition">
                        Coming Soon
                    </a>
                </div>
            </div>

            <!-- Kontak -->
            <div class="group bg-white p-8 rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 hover:-translate-y-1">
                
                <div class="w-14 h-14 bg-green-50 text-primary rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
                    <i class="bi bi-telephone-fill"></i>
                </div>

                <h3 class="text-xl font-bold mb-6">Kontak Humas</h3>

                <div class="space-y-4">

                    <!-- MTs -->
                    <div class="flex items-center justify-between p-4 rounded-xl bg-gray-50 hover:bg-gray-100 transition">
                        <div>
                            <p class="text-sm text-gray-500">MTs Terpadu</p>
                            <p class="text-gray-800 font-semibold">Ust. Fulan</p>
                        </div>

                        <a href="https://wa.me/6285879534570" 
                        class="bg-green-500 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-green-600 transition">
                            Chat
                        </a>
                    </div>

                    <!-- SMA -->
                    <div class="flex items-center justify-between p-4 rounded-xl bg-gray-50 hover:bg-gray-100 transition">
                        <div>
                            <p class="text-sm text-gray-500">SMA IT Al Hikmah</p>
                            <p class="text-gray-800 font-semibold">Ust. Fulan</p>
                        </div>

                        <a href="https://wa.me/6285XXXXXXX" 
                        class="bg-green-500 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-green-600 transition">
                            Chat
                        </a>
                    </div>

                </div>
            </div>

        </div>

        <!-- Maps Section -->
        <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-gray-100">
            
            <div class="w-full h-[450px]">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3848.7669743196684!2d110.63785137490245!3d-7.3577928723958355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a746671e1eb49%3A0xb0fb7b818cc3d732!2sPondok%20Pesantren%20Islam%20Terpadu%20Al%20Hikmah!5e1!3m2!1sen!2sid!4v1776299500550!5m2!1sen!2sid"
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>