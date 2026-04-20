<?php
/*
 * Template Name: Visi Misi
 */
?>

<?php get_header(); ?>

<div id="visi-misi-page" class="page-content py-20 bg-green-50/20 active" style="display: block;">
    <div class="section-container mx-auto px-6">
        <div class="text-center max-w-3xl mx-auto mb-20 space-y-4">
            <h3 class="text-primary font-bold uppercase tracking-widest text-sm">Landasan Idealisme</h3>
            <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900">Visi & Misi</h2>
            <p class="text-gray-600">Arah dan tujuan yang membimbing setiap langkah pendidikan di Al Hikmah.</p>
            <div class="w-24 h-1 bg-primary mx-auto rounded-full"></div>
        </div>

        <div class="grid lg:grid-cols-2 gap-10">
            <!-- Visi Card -->
            <div class="bg-primary text-white p-12 rounded-[40px] shadow-2xl relative overflow-hidden group">
                <div
                    class="absolute -top-10 -right-10 w-40 h-40 bg-white/10 rounded-full blur-3xl transition-transform group-hover:scale-150">
                </div>
                <div class="relative z-10 space-y-6 text-center lg:text-left">
                    <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mx-auto lg:mx-0">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <h4 class="text-3xl font-bold uppercase tracking-widest">Visi</h4>
                    <p class="text-2xl font-medium leading-relaxed italic">
                        "Mencetak Da'i berwawasan Ilmu Pengetahuan dan Teknologi berkarakter Robbani."
                    </p>
                </div>
            </div>

            <!-- Misi Card -->
            <div class="bg-white p-12 rounded-[40px] shadow-sm border border-gray-100 space-y-8">
                <div class="relative z-10 space-y-6 text-center lg:text-left">
                    <div class="w-16 h-16 bg-primary text-white rounded-2xl flex items-center justify-center mx-auto lg:mx-0">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>
                    </div>
                    <h4 class="text-3xl font-bold uppercase tracking-widest">Misi</h4>
                </div>
                <ul class="space-y-6">
                    <li class="flex items-start space-x-4 group">
                        <span
                            class="bg-primary text-white w-8 h-8 rounded-full flex items-center justify-center shrink-0 font-bold text-sm">1</span>
                        <p class="text-gray-700 leading-relaxed">Mendidik Santri untuk memahami islam secara Integral dan Universal dalam Lingkungan Pesantren yang Nyaman</p>
                    </li>
                    <li class="flex items-start space-x-4 group">
                        <span
                            class="bg-primary text-white w-8 h-8 rounded-full flex items-center justify-center shrink-0 font-bold text-sm">2</span>
                        <p class="text-gray-700 leading-relaxed">Menjadikan Pesantren sebagai Sentra Kaderisasi Da'i Berakhlaq Al Qur'an</p>
                    </li>
                    <li class="flex items-start space-x-4 group">
                        <span
                            class="bg-primary text-white w-8 h-8 rounded-full flex items-center justify-center shrink-0 font-bold text-sm">3</span>
                        <p class="text-gray-700 leading-relaxed">Membentuk Kader Pemimpin yang Jujur, Cerdas, Mandiri, dan Kreatif</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>