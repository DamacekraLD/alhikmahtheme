<div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
    <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900">Berita & Info</h2>
    <?php
    $categories = get_the_category();
    if ($categories):
    ?>
        <div class="flex justify-center flex-wrap gap-2">
            <?php foreach ($categories as $cat): ?>
                <span class="bg-primary/10 text-primary px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                    <?php echo $cat->name; ?>
                </span>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <div class="w-24 h-1 bg-primary mx-auto rounded-full"></div>
</div>

<?php if (have_posts() ): while (have_posts()): the_post();?>

    <a href="<?php the_permalink(); ?>" class="block group mb-4">
        <div class="border border-gray-200 rounded-2xl p-6 bg-white shadow-sm hover:shadow-md hover:border-primary transition-all duration-300">
            <h2 class="text-xl font-bold text-gray-800 group-hover:text-primary mb-2 transition-colors">
                <?php the_title();?>
            </h2>
            
            <div class="text-gray-600 text-justify text-sm leading-relaxed">
                <?php the_excerpt();?>
            </div>
            
            <div class="mt-4 text-primary font-medium text-sm flex items-center">
                Baca selengkapnya 
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </div>
        </div>
    </a>

<?php endwhile; else: ?>
    <p class="text-center text-gray-500">Belum ada postingan yang diterbitkan.</p>
<?php endif;?>