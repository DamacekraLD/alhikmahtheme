<?php
/*
 * Template Name: Profil Yayasan
 */
?>

<?php get_header(); ?>

<div id="profil-yayasan-page" class="page-content py-20 active" style="display: block;">
    <div class="section-container mx-auto px-6">
        <!-- Header Profil -->
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900">Profil Yayasan <br><span
                    class="text-primary italic">Al Hikmah Boyolali</span></h2>
            <div class="w-24 h-1 bg-primary mx-auto rounded-full"></div>
        </div>

        <div class="grid lg:grid-cols-2 gap-16 items-center mb-24">
            <div class="space-y-6">
                <h4 class="text-2xl font-bold text-gray-900">Sejarah Berdirinya</h4>
                <p class="text-gray-600 leading-relaxed">
                    Yayasan Al Hikmah Boyolali (YABI) didirikan pada tahun 2000 atas inisiasi para tokoh masyarakat dan
                    ulama yang memiliki keresahan akan pentingnya pendidikan Islam yang moderat dan berkualitas di era
                    globalisasi. Dimulai dari sebuah pengajian kecil, Al Hikmah kini bertransformasi menjadi salah satu
                    pilar pendidikan pesantren modern di Indonesia.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Nama <strong>Al Hikmah</strong> yang berarti "Kebijaksanaan" dipilih dengan harapan pesantren ini menjadi
                    taman ilmu bagi para pencari kebenaran, di mana nilai-nilai luhur Al-Qur'an dan Sunnah dapat tumbuh
                    subur di hati setiap santri.
                </p>
                <div class="pt-4 flex space-x-8">
                    <div>
                        <p class="text-3xl font-extrabold text-primary">20th</p>
                        <p class="text-xs text-gray-500 uppercase font-bold tracking-widest mt-1">Pengalaman</p>
                    </div>
                    <div>
                        <p class="text-3xl font-extrabold text-primary">24/7</p>
                        <p class="text-xs text-gray-500 uppercase font-bold tracking-widest mt-1">Dedikasi</p>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="rounded-[40px] overflow-hidden shadow-2xl border-4 border-white">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ah5.jpg"
                        alt="Gedung Yayasan" class="w-full h-[400px] object-cover">
                </div>
                <div
                    class="absolute -bottom-6 -right-6 bg-white p-6 rounded-3xl shadow-xl border border-gray-100 hidden sm:block max-w-[200px]">
                    <p class="text-sm font-bold text-primary italic">"Hidup Mulia Bersama Al Qur'an"</p>
                </div>
            </div>
        </div>

        <!-- Legalitas Section
        <div class="bg-primary rounded-[40px] p-10 md:p-16 text-white mb-24 relative overflow-hidden">
            <div class="absolute top-0 right-0 opacity-10 transform translate-x-20 -translate-y-20">
                <svg class="w-96 h-96" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2L4 5v6.09c0 5.05 3.41 9.76 8 10.91 4.59-1.15 8-5.86 8-10.91V5l-8-3z" />
                </svg>
            </div>
            <div class="relative z-10 grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <h4 class="text-3xl font-bold">Aspek Legalitas</h4>
                    <p class="text-green-50 opacity-90 leading-relaxed">
                        Yayasan Al Hikmah Boyolali merupakan lembaga resmi yang diakui negara dan memiliki payung hukum yang
                        kuat untuk menjalankan operasional pendidikan.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-4 bg-white/10 p-4 rounded-2xl border border-white/20">
                            <div class="bg-white/20 p-2 rounded-lg">
                                <i class="bi bi-envelope-paper-fill"></i>
                            </div>
                            <div>
                                <p class="text-xs font-bold uppercase tracking-widest text-green-300">Akta Notaris</p>
                                <p class="font-medium text-sm">No. 12/AHU-09.05/2005</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4 bg-white/10 p-4 rounded-2xl border border-white/20">
                            <div class="bg-white/20 p-2 rounded-lg">
                                <i class="bi bi-building"></i>
                            </div>
                            <div>
                                <p class="text-xs font-bold uppercase tracking-widest text-green-300">SK Kemenkumham</p>
                                <p class="font-medium text-sm">No. AHU-456.AH.01.04.Tahun 2005</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4 bg-white/10 p-4 rounded-2xl border border-white/20">
                            <div class="bg-white/20 p-2 rounded-lg">
                                <i class="bi bi-card-checklist"></i>
                            </div>
                            <div>
                                <p class="text-xs font-bold uppercase tracking-widest text-green-300">Izin Operasional
                                    Kemendag</p>
                                <p class="font-medium text-sm">No. 510033090116</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center md:text-left bg-white/5 p-8 rounded-3xl border border-white/10">
                    <h5 class="text-xl font-bold mb-4">Visi Utama Yayasan</h5>
                    <p class="text-lg italic font-medium leading-relaxed">
                        "Menjadi pusat unggulan pendidikan Islam yang integratif, melahirkan pemimpin masa depan yang
                        bertaqwa, cerdas, dan berwawasan luas."
                    </p>
                </div>
            </div>
        </div> -->

        <!-- Sambutan Ketua -->
        <div class="flex flex-col md:flex-row gap-12 items-center">
            <div class="w-full md:w-1/3">
                <div class="rounded-full overflow-hidden border-8 border-green-50 aspect-square shadow-lg">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ketua.png"
                        alt="Ketua Yayasan" class="w-full h-full object-cover">
                </div>
                <div class="text-center mt-6">
                    <h5 class="text-xl font-bold text-gray-900">H. Abdulah Ihsan Al Farhan,S.T.</h5>
                    <p class="text-primary font-bold text-sm">Ketua Dewan Pengurus Yayasan</p>
                </div>
            </div>
            <div class="w-full md:w-2/3 space-y-6">
                <h4 class="text-3xl font-extrabold text-gray-900 flex items-center">
                    <span class="text-primary mr-3 text-5xl">“</span>
                    Sambutan Ketua Yayasan
                </h4>
                <div
                    class="bg-white p-8 rounded-3xl border border-gray-100 italic text-gray-600 leading-relaxed shadow-sm">
                    "Assalamu'alaikum Warahmatullahi Wabarakatuh. Puji syukur kita panjatkan ke hadirat Allah SWT.
                    Yayasan Al Hikmah Boyolali hadir bukan sekadar sebagai institusi pendidikan, melainkan sebagai rumah bagi
                    tumbuh kembangnya karakter santri. Kami percaya bahwa pendidikan terbaik adalah yang menyentuh akal
                    dan hati. Melalui sinergi antara kurikulum modern dan tradisi pesantren, kami berkomitmen mencetak
                    generasi yang tidak hanya mahir teknologi, namun juga kokoh dalam aqidah dan santun dalam budi
                    pekerti."
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>