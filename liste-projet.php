<?php
/*
Template Name: Page List with Portfolio Work Template
*/
get_header();
?>
    <main class="marg">

    <div class="portfolio-header">
        <h1 class="portfolio-title">PORTFOLIO</h1>
        <h4 class="portfolio-subtitle">Découvrir mes réalisations</h4>
    </div>

    <div class="white-section top-margin-liste">
        <div class="post-grid">
            <?php
            // Query to retrieve all pages using 'projet.php' template
            $args = array(
                'post_type'      => 'page',
                'order'          => 'DESC', // Sort pages in descending order
                'orderby'        => 'date', // Order pages by date
                'meta_query'     => array(
                    array(
                        'key'   => '_wp_page_template',
                        'value' => 'projet.php',
                    ),
                    array(
                        'key'   => '_wp_page_template',
                        'value' => 'projet-laptop.php',
                    ),
                ),
            );

            $recent_pages = new WP_Query($args);

            if ($recent_pages->have_posts()) :
                $post_count = 0;
                while ($recent_pages->have_posts()) : $recent_pages->the_post();
                    $post_count++;

                    // Add a class for the first three posts
                    $post_class = ($post_count <= 3) ? 'top-row' : 'bottom-row';
                    ?>
                    <article class="post <?php echo $post_class; ?>">
                        <a href="<?php the_permalink(); ?>" class="black-link">
                            <div class="post-image" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>');"></div>
                            <div class="post-content">
                                <h3 class="post-title custom-font-size"><?php the_title(); ?></h3>
                                <p class="post-release-date"><?php echo get_the_date(); ?></p>
                            </div>
                        </a>
                    </article>
                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p class="nothing">Il n'y a pas de Post à afficher !</p>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
