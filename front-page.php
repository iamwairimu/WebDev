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
          
<!-- Highlights -->
      <section id="highlights" class="wrapper style3">
        <div class="title">The Endorsements</div>
        <div class="container">
          <div class="row aln-center">
            <div class="col-4 col-12-medium">
              <section class="highlight">
                <a href="#" class="image featured">
                <img src="<?php echo get_template_directory_uri(); ?>/img/pic02.jpg" alt="Image">
               </a>
                <h3><a href="#">Aliquam diam consequat</a></h3>
                <p>
                  Eget mattis at, laoreet vel amet sed velit aliquam diam ante,
                  dolor aliquet sit amet vulputate mattis amet laoreet lorem.
                </p>
                <ul class="actions">
                  <li><a href="#" class="button style1">Learn More</a></li>
                </ul>
              </section>
            </div>
            <div class="col-4 col-12-medium">
              <section class="highlight">
                <a href="#" class="image featured" >
                    <img src="<?php echo get_template_directory_uri(); ?>/img/pic03.jpg" alt="Image">
               </a>
                <h3><a href="#">Nisl adipiscing sed lorem</a></h3>
                <p>
                  Eget mattis at, laoreet vel amet sed velit aliquam diam ante,
                  dolor aliquet sit amet vulputate mattis amet laoreet lorem.
                </p>
                <ul class="actions">
                  <li><a href="#" class="button style1">Learn More</a></li>
                </ul>
              </section>
            </div>
            <div class="col-4 col-12-medium">
              <section class="highlight">
                <a href="#" class="image featured" >
                    <img src="<?php echo get_template_directory_uri(); ?>/img/pic04.jpg" alt="Image">
                </a>
                <h3><a href="#">Mattis tempus lorem</a></h3>
                <p>
                  Eget mattis at, laoreet vel amet sed velit aliquam diam ante,
                  dolor aliquet sit amet vulputate mattis amet laoreet lorem.
                </p>
                <ul class="actions">
                  <li><a href="#" class="button style1">Learn More</a></li>
                </ul>
              </section>
            </div>
          </div>
        </div>
      </section>
      
<?php get_footer(); ?>