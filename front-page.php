<?php get_header(); ?>

<main id="main-content">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php $excluded_titles = ["Hello world!", "Welcome to our amazing website redesign!", "My second WordPress Post", "Home", "DropDown", "Left SideBar", "Right SideBar", "No SideBar"];
        if (in_array(get_the_title(), $excluded_titles)) {
            continue;
        } ?>
        <?php endwhile; else : ?>
            <p><?php _e('No posts found.') ?></p>
        <?php endif; ?>
    </div>
</main>

  <!-- Wordpress loop -->

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
     
                <?php the_content(); ?>

                <?php endwhile; else: ?>
                    <p><?php _e('Sorry, no posts matched your criteria') ?></p>
                <?php endif; ?>

            <!-- End WordPress loop -->

<?php get_footer(); ?>