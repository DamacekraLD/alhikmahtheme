<?php get_header(); ?>

<main class="bg-white min-h-screen py-16">
    <div class="container mx-auto px-4">
        <article class="max-w-3xl mx-auto">
            
            <?php if (have_posts() ): while (have_posts()): the_post(); ?>
                
                <header class="text-center mb-12">
                    <div class="flex items-center justify-center space-x-3 mb-6">
                        <span class="bg-green-100 text-primary px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                            <?php the_category(', '); ?>
                        </span>
                        <span class="text-gray-400 text-sm">•</span>
                        <span class="text-gray-500 text-sm font-medium"><?php echo get_the_date(); ?></span>
                    </div>

                    <h1 class="text-3xl md:text-5xl font-extrabold text-gray-900 leading-tight mb-8">
                        <?php the_title(); ?>
                    </h1>
                </header>

                <!-- Thumbnail -->
                <?php if (has_post_thumbnail()): ?>
                    <div class="mb-10 overflow-hidden rounded-2xl shadow-sm">
                        <?php the_post_thumbnail('large', [
                            'class' => 'w-full h-auto object-cover'
                        ]); ?>
                    </div>
                <?php endif; ?>

                <div class="prose prose-lg prose-green max-w-none text-gray-700 leading-relaxed text-justify">
                    <?php the_content(); ?>
                </div>

                <footer class="mt-16 pt-8 border-t border-gray-100">
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="text-sm font-bold text-gray-400 mr-2 uppercase tracking-widest">Tags:</span>
                        <?php 
                        $tags = get_the_tags();
                        if ($tags) :
                            foreach($tags as $tag) : ?>
                                <a href="<?php echo get_tag_link($tag->term_id); ?>" 
                                   class="text-sm bg-gray-50 hover:bg-green-50 text-gray-600 hover:text-primary px-3 py-1 rounded-md transition-colors border border-gray-100">
                                    #<?php echo $tag->name; ?>
                                </a>
                            <?php endforeach;
                        endif; 
                        ?>
                    </div>
                </footer>

            <?php endwhile; endif; ?>

        </article>

        <nav class="max-w-3xl mx-auto mt-16 flex border-t border-gray-100 pt-8 justify-between items-center">
            <div class="w-1/2 pr-4">
                <?php $prev_post = get_previous_post(); if($prev_post): ?>
                    <p class="text-xs text-gray-400 uppercase font-bold mb-1">Sebelumnya</p>
                    <a href="<?php echo get_permalink($prev_post->ID); ?>" class="text-primary font-bold hover:underline line-clamp-1">
                        <?php echo $prev_post->post_title; ?>
                    </a>
                <?php endif; ?>
            </div>
            <div class="w-1/2 pl-4 text-right border-l border-gray-100">
                <?php $next_post = get_next_post(); if($next_post): ?>
                    <p class="text-xs text-gray-400 uppercase font-bold mb-1">Berikutnya</p>
                    <a href="<?php echo get_permalink($next_post->ID); ?>" class="text-primary font-bold hover:underline line-clamp-1">
                        <?php echo $next_post->post_title; ?>
                    </a>
                <?php endif; ?>
            </div>
        </nav>
    </div>
</main>

<?php get_footer(); ?>