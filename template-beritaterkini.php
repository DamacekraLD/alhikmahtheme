<?php
/*
 * Template Name: Berita Terkini
 */
?>

<?php get_header(); ?>

<div class="section-container py-12">
    <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
        <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900">Berita Terkini</h2>
        <div class="w-24 h-1 bg-primary mx-auto rounded-full"></div>
    </div>

    <?php
    $args = array(
        'post_type' => 'post',
        'category_name' => 'beritaterkini', // slug kategori
        'posts_per_page' => 10
    );

    $query = new WP_Query($args);
    ?>

    <?php if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>

        <a href="<?php the_permalink(); ?>" class="block group mb-6">
            <div class="flex flex-col md:flex-row gap-6 border border-gray-200 rounded-2xl p-4 bg-white shadow-sm hover:shadow-md hover:border-primary transition-all duration-300">
                
                <!-- Thumbnail -->
                <div class="md:w-1/3 w-full overflow-hidden rounded-xl">
                    <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail('medium', ['class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-300']); ?>
                    <?php else: ?>
                        <img src="https://via.placeholder.com/400x250" class="w-full h-full object-cover" alt="No Image">
                    <?php endif; ?>
                </div>

                <!-- Content -->
                <div class="md:w-2/3 w-full flex flex-col justify-between">
                    
                    <!-- Tanggal -->
                    <span class="text-sm text-gray-400 mb-2">
                        <?php echo get_the_date('d M Y'); ?>
                    </span>

                    <!-- Judul -->
                    <h2 class="text-xl font-bold text-gray-800 group-hover:text-primary mb-2 transition-colors">
                        <?php the_title(); ?>
                    </h2>
                    
                    <!-- Excerpt -->
                    <div class="text-gray-600 text-justify text-sm leading-relaxed">
                        <?php the_excerpt(); ?>
                    </div>
                    
                    <!-- Read More -->
                    <div class="mt-4 text-primary font-medium text-sm flex items-center">
                        Baca selengkapnya →
                    </div>
                </div>

            </div>
        </a>

    <?php endwhile; wp_reset_postdata(); else: ?>
        <p class="text-center text-gray-500">Belum ada postingan yang diterbitkan.</p>
    <?php endif; ?>

        <?php previous_posts_link( '« Previous' ); ?>
        <?php next_posts_link( 'Next »' ); ?>
    </div>

<?php get_footer(); ?>