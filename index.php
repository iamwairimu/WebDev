<?php get_header(); ?>

<main id="main-content">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php $excluded_titles = ["Hello world!", "Welcome to our amazing website redesign!", "My second WordPress Post"];
        if (in_array(get_the_title(), $excluded_titles)) {
            continue;
        } ?>
        <h2><a href="#"><?php the_title(); ?></a></h2>
        <?php endwhile; else : ?>
            <p><?php _e('No posts found.') ?></p>
        <?php endif; ?>
    </div>
</main>

<?php get_template_part('intro'); ?>
<?php get_template_part('main'); ?>
<?php get_template_part('highlight'); ?>
<?php get_footer(); ?>