<?php
/*
 * Template Name: Informasi Pesantren
 */
?>

<?php get_header(); ?>

<div class="section-container py-12">
    <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
        <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900">Informasi Pesantren</h2>
        <div class="w-24 h-1 bg-primary mx-auto rounded-full"></div>
    </div>

    <?php
    $args = array(
        'post_type' => 'post',
        'category_name' => 'infopesantren', // slug kategori
        'posts_per_page' => 10
    );

    $query = new WP_Query($args);
    ?>

    <?php if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>

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