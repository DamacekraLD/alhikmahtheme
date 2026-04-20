<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPIT Al Hikmah Karanggede</title>
    <?php wp_head(); ?>
    <!-- <link href="style.css" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Noto+Naskh+Arabic:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="bg-primary text-white py-2 px-4 text-center text-sm font-medium">
        <p class="section-container">
            📢 Penerimaan Santri Baru (PSB) Tahun Ajaran 2025/2026 telah dibuka!
            <a href="#psb"
                class="underline underline-offset-4 ml-2 hover:text-yellow-300 transition-colors">
                Klik di sini untuk info selengkapnya
            </a>
        </p>
    </div>
    <!-- SECTION: NAVBAR -->
    <header class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-gray-100 shadow-sm">
        <nav class="section-container mx-auto px-6 py-4 flex items-center justify-between">
            <div class="flex items-center space-x-3 cursor-pointer">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logok.png" class="w-60 h-auto"
                        alt="Logo Pondok Pesantren">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <?php
                // Ambil data menu berdasarkan lokasi 'header-menu'
                $menu_name = 'header-menu';
                $locations = get_nav_menu_locations();
                $menu = wp_get_nav_menu_object($locations[$menu_name]);
                $menu_items = wp_get_nav_menu_items($menu->term_id);

                if ($menu_items) :
                    $last_id = null;
                    foreach ($menu_items as $key => $item) :
                        // Cek apakah item ini memiliki anak (dropdown)
                        $has_children = false;
                        if (isset($menu_items[$key + 1]) && $menu_items[$key + 1]->menu_item_parent == $item->ID) {
                            $has_children = true;
                        }

                        // Jika item ini adalah menu utama (bukan anak dari menu lain)
                        if (!$item->menu_item_parent) :
                            if ($has_children) : ?>
                                <div class="relative group">
                                    <button class="nav-link text-gray-700 font-medium hover:text-primary flex items-center space-x-1">
                                        <span><?php echo $item->title; ?></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu absolute left-0 mt-2 w-64 bg-white border border-gray-100 rounded-2xl shadow-xl py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-[100]">
                                        <?php foreach ($menu_items as $subitem) : 
                                            if ($subitem->menu_item_parent == $item->ID) : ?>
                                                <a href="<?php echo $subitem->url; ?>" 
                                                class="block px-6 py-3 text-sm text-gray-700 hover:bg-green-50 hover:text-primary transition-colors">
                                                    <?php echo $subitem->title; ?>
                                                </a>
                                            <?php endif;
                                        endforeach; ?>
                                    </div>
                                </div>
                            <?php else : ?>
                                <a href="<?php echo $item->url; ?>" 
                                class="nav-link text-gray-700 font-medium hover:text-primary">
                                    <?php echo $item->title; ?>
                                </a>
                            <?php endif;
                        endif;
                    endforeach;
                endif;
                ?>
            </div>

            <button id="mobile-menu-btn" type="button"
                aria-controls="mobile-menu"
                aria-expanded="false"
                class="md:hidden text-primary focus:outline-none cursor-pointer p-2">
                
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </nav>
        

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden hidden px-6 pb-6">
            <div class="flex flex-col space-y-4">

                <?php
                $menu_name = 'header-menu';
                $locations = get_nav_menu_locations();
                $menu = wp_get_nav_menu_object($locations[$menu_name]);
                $menu_items = wp_get_nav_menu_items($menu->term_id);

                if ($menu_items) :
                    foreach ($menu_items as $item) :

                        // Cek parent
                        if (!$item->menu_item_parent) :

                            // Cek apakah punya anak
                            $has_children = false;
                            foreach ($menu_items as $subitem) {
                                if ($subitem->menu_item_parent == $item->ID) {
                                    $has_children = true;
                                    break;
                                }
                            }

                            if ($has_children) : ?>

                                <!-- Parent with dropdown -->
                                <div>
                                    <button class="w-full flex justify-between items-center text-left font-medium text-gray-700 mobile-dropdown-toggle">
                                        <span><?php echo $item->title; ?></span>
                                        <span>+</span>
                                    </button>

                                    <div class="hidden pl-4 mt-2 space-y-2 mobile-dropdown">
                                        <?php foreach ($menu_items as $subitem) :
                                            if ($subitem->menu_item_parent == $item->ID) : ?>
                                                <a href="<?php echo $subitem->url; ?>" class="block text-sm text-gray-600">
                                                    <?php echo $subitem->title; ?>
                                                </a>
                                        <?php endif; endforeach; ?>
                                    </div>
                                </div>

                            <?php else : ?>

                                <!-- Normal link -->
                                <a href="<?php echo $item->url; ?>" class="font-medium text-gray-700">
                                    <?php echo $item->title; ?>
                                </a>

                            <?php endif;

                        endif;

                    endforeach;
                endif;
                ?>

            </div>
        </div>
    </header>

