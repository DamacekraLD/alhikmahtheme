<?php get_header(); ?>

<div class="section-container py-12">
    <p class=""><?php get_template_part( 'includes/section', 'archive');?></p>

    <?php previous_posts_link( '« Previous' ); ?>
    <?php next_posts_link( 'Next »' ); ?>
</div>

<?php get_footer(); ?>