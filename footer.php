
<?php wp_footer(); ?>
<!-- FOOTER -->
    <footer class="bg-primary text-white pt-20 pb-10">
        <div class="section-container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">

                <!-- Kolom 1: Profil Singkat -->
                <div class="space-y-6">
                    <div class="flex items-center space-x-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logowhite.png" class="w-60 h-auto" alt="Logo Pondok Pesantren">
                    </div>
                    <p class="text-green-50/70 text-sm leading-relaxed">
                        Mewujudkan generasi yang bertaqwa, berakhlak mulia, dan kompetitif secara global melalui
                        integrasi ilmu agama dan umum.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#"
                            class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Kolom 2: Navigasi Cepat -->
                <div>
                <h4 class="font-bold text-lg mb-6 border-b border-white/10 pb-4 inline-block text-white">Navigasi Cepat</h4>
                    <ul class="space-y-3 text-green-50/70 text-sm">
                        <?php
                            $menu_name = 'navigasicepat-menu';
                            $locations = get_nav_menu_locations();

                            if (isset($locations[$menu_name])) :
                                $menu = wp_get_nav_menu_object($locations[$menu_name]);
                                $menu_items = wp_get_nav_menu_items($menu->term_id);

                                if ($menu_items) :
                                    foreach ($menu_items as $item) : ?>
                                        <li>
                                            <a href="<?php echo $item->url; ?>" 
                                            class="hover:text-white transition-colors cursor-pointer">
                                                <?php echo $item->title; ?>
                                            </a>
                                        </li>
                                    <?php endforeach;
                                endif;
                            else : ?>
                                <li class="italic text-xs">Menu 'Navigasi Cepat' belum diatur.</li>
                        <?php endif; ?>
                    </ul>
                </div>

                <!-- Kolom 3: Program Pendidikan -->
                <div>
                <h4 class="font-bold text-lg mb-6 border-b border-white/10 pb-4 inline-block">Pendidikan</h4>
                    <ul class="space-y-3 text-green-50/70 text-sm">
                        <?php
                            $menu_name = 'pendidikan-menu';
                            $locations = get_nav_menu_locations();

                            if (isset($locations[$menu_name])) :
                                $menu = wp_get_nav_menu_object($locations[$menu_name]);
                                $menu_items = wp_get_nav_menu_items($menu->term_id);

                                if ($menu_items) :
                                    foreach ($menu_items as $item) : ?>
                                        <li>
                                            <a href="<?php echo $item->url; ?>" 
                                            class="hover:text-white transition-colors cursor-pointer">
                                                <?php echo $item->title; ?>
                                            </a>
                                        </li>
                                    <?php endforeach;
                                endif;
                            else : ?>
                                <li class="italic text-xs">Menu 'Navigasi Cepat' belum diatur.</li>
                        <?php endif; ?>
                    </ul>
                </div>

                <!-- Kolom 4: Kontak Info -->
                <div class="space-y-4">
                    <h4 class="font-bold text-lg mb-2 border-b border-white/10 pb-4 inline-block">Hubungi Kami</h4>
                    <div class="text-sm text-green-50/70 space-y-4">
                        <div class="flex items-start space-x-3">
                            <i class="bi bi-geo-alt-fill"></i>
                            <p>Jl. Sawungrono Trayon, Kebonan, Karanggede, Dusun I, Kebonan, Boyolali, Kabupaten
                                Boyolali, Jawa Tengah 57381</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="bi bi-telephone-fill"></i>
                            <p>+62 812-3456-7890</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="bi bi-envelope-at-fill"></i>
                            <p>info@alhikmahboyolali.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bagian Bawah Footer -->
            <div
                class="pt-8 border-t border-white/10 flex flex-col md:flex-row justify-between items-center text-xs text-green-50/50 space-y-4 md:space-y-0">
                <p>&copy; 2026 Pondok Pesantren Islam Terpadu Al Hikmah Karanggede. Seluruh Hak Cipta Dilindungi.</p>
                <div class="flex space-x-6 uppercase tracking-widest font-bold">
                    <a href="#" class="hover:text-white transition-colors">Kebijakan Privasi</a>
                    <a href="#" class="hover:text-white transition-colors">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const chatToggle = document.getElementById('chat-toggle');
        const chatWindow = document.getElementById('chat-window');
        const closeChat = document.getElementById('close-chat');
        const chatInput = document.getElementById('chat-input');
        const sendBtn = document.getElementById('send-btn');
        const chatMessages = document.getElementById('chat-messages');

        // Toggle Mobile Menu
        if (menuBtn && mobileMenu) {
            menuBtn.addEventListener('click', () => {
                const isHidden = mobileMenu.classList.toggle('hidden');
                menuBtn.setAttribute('aria-expanded', String(!isHidden));
            });
        }

        // Mobile submenu toggle
        document.querySelectorAll('.mobile-dropdown-toggle').forEach(btn => {
            const parent = btn.closest('div');
            const dropdown = parent.querySelector('.mobile-dropdown');
            if (!dropdown) return;

            dropdown.style.maxHeight = '0';
            dropdown.style.overflow = 'hidden';
            dropdown.style.transition = 'max-height 0.3s ease, opacity 0.3s ease';
            dropdown.style.opacity = '0';

            btn.setAttribute('aria-expanded', 'false');
            const icon = btn.querySelector('span:last-child');

            btn.addEventListener('click', () => {
                const isHidden = dropdown.classList.contains('hidden');
                if (isHidden) {
                    dropdown.classList.remove('hidden');
                    requestAnimationFrame(() => {
                        dropdown.style.maxHeight = dropdown.scrollHeight + 'px';
                        dropdown.style.opacity = '1';
                    });
                    btn.setAttribute('aria-expanded', 'true');
                    if (icon) icon.innerText = '-';
                } else {
                    dropdown.style.maxHeight = '0';
                    dropdown.style.opacity = '0';
                    btn.setAttribute('aria-expanded', 'false');
                    if (icon) icon.innerText = '+';
                    const hideAfter = () => {
                        dropdown.classList.add('hidden');
                        dropdown.removeEventListener('transitionend', hideAfter);
                    };
                    dropdown.addEventListener('transitionend', hideAfter);
                }
            });
        });

        // Chatbot Logic
        if (chatToggle) {
            chatToggle.addEventListener('click', () => {
                chatWindow.classList.toggle('hidden');
                if (!chatWindow.classList.contains('hidden')) chatInput.focus();
            });
        }
        if (closeChat) {
            closeChat.addEventListener('click', () => chatWindow.classList.add('hidden'));
        }

        // Gemini AI Logic
        const apiKey = "AIzaSyBvCtnX9fWd8yHSuJRasAgWZjbHApxJI5k";
        const systemPrompt = `Anda adalah asisten virtual resmi Pondok Pesantren Ar-Raudhah Modern. 
        Anda membantu menjelaskan Profil Yayasan: Didirikan 2005, Ketua KH. Ahmad Ridwan, M.A. 
        Tugas Anda: Memberikan informasi ramah, islami, dan akurat.`;

        async function callGeminiAPI(userQuery) {
            const url = `https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash-preview-09-2025:generateContent?key=${apiKey}`;
            const payload = { contents: [{ parts: [{ text: userQuery }] }], systemInstruction: { parts: [{ text: systemPrompt }] } };
            let delay = 1000;
            for (let i = 0; i < 5; i++) {
                try {
                    const response = await fetch(url, { method: 'POST', headers: { 'Content-Type': 'application/json' }, body: JSON.stringify(payload) });
                    if (!response.ok) throw new Error('API Error');
                    const data = await response.json();
                    return data.candidates?.[0]?.content?.parts?.[0]?.text;
                } catch (error) {
                    if (i === 4) return "Maaf, layanan sedang sibuk.";
                    await new Promise(resolve => setTimeout(resolve, delay));
                    delay *= 2;
                }
            }
        }

        async function handleSendMessage() {
            const text = chatInput.value.trim();
            if (!text) return;
            appendMessage('user', text);
            chatInput.value = '';
            const loading = document.createElement('div');
            loading.className = 'chat-bubble bot-bubble opacity-50 italic text-xs';
            loading.innerText = 'Mengetik...';
            chatMessages.appendChild(loading);
            const response = await callGeminiAPI(text);
            chatMessages.removeChild(loading);
            appendMessage('bot', response);
        }

        function appendMessage(role, text) {
            const div = document.createElement('div');
            div.className = `chat-bubble ${role === 'user' ? 'user-bubble' : 'bot-bubble'}`;
            div.innerText = text;
            chatMessages.appendChild(div);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        if (sendBtn) {
            sendBtn.addEventListener('click', handleSendMessage);
        }
        if (chatInput) {
            chatInput.addEventListener('keypress', (e) => { if (e.key === 'Enter') handleSendMessage(); });
        }

        function openChatWithPrompt(prompt) {
            chatWindow.classList.remove('hidden');
            chatInput.value = prompt;
            handleSendMessage();
        }

        // Stats Animation
        const countUpElements = document.querySelectorAll('.count-up');
        if (countUpElements.length > 0) {
            const statsObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const el = entry.target;
                        const target = parseInt(el.getAttribute('data-target'));
                        animateCount(el, target);
                        statsObserver.unobserve(el);
                    }
                });
            }, { threshold: 0.5 });
            countUpElements.forEach(el => statsObserver.observe(el));
        }

        function animateCount(el, target) {
            let start = 0; const duration = 2000; const startTime = performance.now();
            function update(currentTime) {
                const elapsed = currentTime - startTime;
                const progress = Math.min(elapsed / duration, 1);
                el.innerText = Math.floor(progress * target);
                if (progress < 1) requestAnimationFrame(update);
                else el.innerText = target;
            }
            requestAnimationFrame(update);
        }

    </script>
</body>
</html>

