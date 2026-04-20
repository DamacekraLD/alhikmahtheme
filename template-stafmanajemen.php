<?php
/*
 * Template Name: Staf Manajemen
 */
?>

<?php get_header(); ?>

<div id="staff-page" class="page-content py-20 active" style="display: block;">
    <div class="section-container mx-auto px-6">
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <h3 class="text-primary font-bold uppercase tracking-widest text-sm">SDM Berintegritas</h3>
            <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900">Staff & Karyawan</h2>
            <p class="text-gray-600">Dibalik santri yang berprestasi, terdapat guru dan ustadz yang mendedikasikan
                ilmunya dengan ikhlas.</p>
            <div class="w-24 h-1 bg-primary mx-auto rounded-full"></div>
        </div>

        <!-- Filter Category (Placeholder logic) -->
        <div class="flex flex-wrap justify-center gap-4 mb-12">
            <button class="bg-primary text-white px-6 py-2 rounded-full font-semibold text-sm">Semua</button>
            <button
                class="bg-white text-gray-600 border border-gray-100 px-6 py-2 rounded-full font-semibold text-sm hover:border-primary transition-colors">Struktural</button>
            <button
                class="bg-white text-gray-600 border border-gray-100 px-6 py-2 rounded-full font-semibold text-sm hover:border-primary transition-colors">Guru/Ustadz</button>
            <button
                class="bg-white text-gray-600 border border-gray-100 px-6 py-2 rounded-full font-semibold text-sm hover:border-primary transition-colors">Administrasi</button>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Staff 1 -->
            <div class="group">
                <div class="relative rounded-[32px] overflow-hidden mb-4 bg-gray-100 aspect-[3/4]">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=400"
                        alt="Pimpinan"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div class="text-white">
                            <p class="text-xs font-bold uppercase tracking-widest mb-1">Mudirul Ma'had</p>
                            <div class="flex space-x-3">
                                <span class="text-sm">📧 ahmad@ar-raudhah.sch.id</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <h5 class="text-lg font-bold text-gray-900">KH. Ahmad Ridwan, M.A.</h5>
                    <p class="text-primary font-bold text-xs uppercase tracking-widest">Pimpinan Pondok</p>
                </div>
            </div>

            <!-- Staff 2 -->
            <div class="group">
                <div class="relative rounded-[32px] overflow-hidden mb-4 bg-gray-100 aspect-[3/4]">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=400"
                        alt="Kepsek"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                </div>
                <div class="text-center">
                    <h5 class="text-lg font-bold text-gray-900">Ustzh. Sarah Fauziah, S.Pd.I</h5>
                    <p class="text-primary font-bold text-xs uppercase tracking-widest">Kepala Sekolah SMAIT</p>
                </div>
            </div>

            <!-- Staff 3 -->
            <div class="group">
                <div class="relative rounded-[32px] overflow-hidden mb-4 bg-gray-100 aspect-[3/4]">
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&q=80&w=400"
                        alt="Guru"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                </div>
                <div class="text-center">
                    <h5 class="text-lg font-bold text-gray-900">Ust. Abdullah Salim, Lc.</h5>
                    <p class="text-primary font-bold text-xs uppercase tracking-widest">Kepala Bagian Pengasuhan</p>
                </div>
            </div>

            <!-- Staff 4 -->
            <div class="group">
                <div class="relative rounded-[32px] overflow-hidden mb-4 bg-gray-100 aspect-[3/4]">
                    <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&q=80&w=400"
                        alt="Bendahara"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                </div>
                <div class="text-center">
                    <h5 class="text-lg font-bold text-gray-900">Ustadzah Maryam, M.Pd.</h5>
                    <p class="text-primary font-bold text-xs uppercase tracking-widest">Bendahara Yayasan</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>