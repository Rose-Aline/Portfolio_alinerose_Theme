<?php
/*
Template Name: Portfolio Work Template
*/

get_header(); ?>
    <div class="parallax-container">
        <?php
        $parallax_image = get_field('image_header');
        if ($parallax_image) {
            echo '<div class="parallax-image" style="background-image: url(' . esc_url($parallax_image['url']) . ');"></div>';
        }
        ?>
    </div>
    
    <main class="marg_middle ">
    <?php
    while (have_posts()) : the_post();
    ?>
    <div class="flex-container ">
        <div class="left-container">
            
        <h2 class="projet_title_h2"><?php echo strtoupper(get_the_title()); ?></h2>
<hr/> <!-- Removed spaces here -->

<div class="flexed_date ">
    <h6 class="release-date">Publié le <?php the_date(); ?></h6>
    <p>&#x2022;</p>
    <?php
    $terms = get_the_terms(get_the_ID(), 'projet_tags'); // 'projet_tags' is the taxonomy slug
    if ($terms && !is_wp_error($terms)) {
        echo '<div class="taxonomy-terms">';
        $count = 0;
        foreach ($terms as $term) {
            if ($count < 2) { // Limit to maximum of two tags
                echo $term->name; // Output tag name as plain text
                if ($count < 1 && count($terms) > 1) {
                    echo ' '; // Add space between tags if there are more than one
                }
                $count++;
            }
        }
        echo '</div>';
    }
    ?>
</div>

        <div class= tags_container>
                <?php
                // Display taxonomy terms associated with the project
                $terms = get_the_terms(get_the_ID(), 'post_tags_categories'); 
                if ($terms && !is_wp_error($terms)) {
                    echo '<div class="taxonomy-terms">';
                    $count = 0;
                    foreach ($terms as $term) {
                        if ($count < 6) {
                            echo '<button class="tag">' . $term->name . '</button>';
                            $count++;
                        }
                    }
                    echo '</div>';
                }
                ?>
            </div>
        </div>
       
       
        <div class="right-container">
    <?php the_content(); ?>

    <?php
    $projet_url = get_field('projet_url');
    
    if ($projet_url) {
        echo '<a href="' . esc_url($projet_url) . '" class="button voir-projet">Voir le projet</a>';
    }
    ?>
</div>
</div>
</main>

    <div class="white-section ">
        <div class= "padding_project final_section ">
            <div class="flexed_concept">
                    <div class="flexed-image-2_concept">
                        <?php
                        $image_concept = get_field('image_concept');
                        if ($image_concept) {
                            echo '<img src="' . esc_url($image_concept['url']) . '" alt="' . esc_attr($image_concept['alt']) . '">';
                        }
                        ?>

                    </div>
                    <div class="flexed-text_project_concept">
                        <?php
                            $concept_title = get_field('concept_title');
                            if ($concept_title) {
                                echo '<h2>' . esc_html($concept_title) . '</h2>';
                            }
                        $text_project_concept = get_field('text_project_concept');
                        if ($text_project_concept) {
                            echo '<p>' . esc_html($text_project_concept) . '</p>';
                        }
                        ?>
                    </div>
            </div>

            <div class="centered-image">
            <?php
                        $horizontal_picture = get_field('horizontal_picture');
                        if ($horizontal_picture) {
                            echo '<img src="' . esc_url($horizontal_picture['url']) . '" alt="' . esc_attr($horizontal_picture['alt']) . '">';
                        }
                        ?>
    </div>


    <div class="white-section ">
            <div class="flexed_concept ">
            <div class="flexed-text_project_concept">
                        <?php
                            $finalite_title = get_field('finalite_title');
                            if ($finalite_title) {
                                echo '<h2>' . esc_html($finalite_title) . '</h2>';
                            }
                        $text_project_concept = get_field('Texte_finalite_projet');
                        if ($text_project_concept) {
                            echo '<p>' . esc_html($text_project_concept) . '</p>';
                        }
                        ?>

                     <div class="Tags_programmes">
                            <div class="realise-avec">
                                Réalisé avec
                            </div>
                            <div class="programme-icons">
                    
                                <?php
                                // Define an array to map program names to icons
                                $program_icons = array(
                                    'html-css' => 'fab fa-html5', // Icon for HTML & CSS
                                    'visual-studio-code' => 'fas fa-code', // Icon for Visual Studio Code
                                    'photoshop' => 'fas fa-layer-group', // Icon for Photoshop (changed to layer group icon)
                                    'illustrator' => 'fas fa-layer-group', // Icon for Illustrator (changed to layer group icon)
                                    'figma' => 'fab fa-figma', // Icon for Figma
                                    'spline' => 'fas fa-pen-nib', // Icon for Spline (pen nib icon for 3D)
                                    'blender' => 'fas fa-pen-nib', // Icon for Blender 3D (pen nib icon for 3D)
                                    'wordpress' => 'fab fa-wordpress', // Icon for WordPress
                                );

                                $terms = get_the_terms(get_the_ID(), 'programme'); // 'programme' is the taxonomy slug
                                if ($terms && !is_wp_error($terms)) {
                                    echo '<div class="programme-icons">';
                                    foreach ($terms as $term) {
                                        // Check if the term name has an associated icon
                                        if (isset($program_icons[$term->slug])) {
                                            // Display the icon with a larger size
                                            echo '<div class="programme-icon">';
                                            echo '<i class="' . esc_attr($program_icons[$term->slug]) . ' fa-2x"></i>';
                                            // Output term name as plain text
                                            echo '<span>' . esc_html($term->name) . '</span>';
                                            echo '</div>';
                                        }
                                    }
                                    echo '</div>';
                                }
                                ?>
                            </div>
                        </div>



                    </div>

                    <div class="flexed-image-2_concept max_height_picture">
                        <?php
                        // Get the value of 'image_square_2' custom field
                        $image_mockup = get_field('image_mockup');
                        if ($image_mockup) {
                            echo '<img src="' . esc_url($image_mockup['url']) . '" alt="' . esc_attr($image_mockup['alt']) . '">';
                        }
                        ?>
                        
                    </div>
            </div>
         </div>
    </div>



    <?php
    endwhile; 
    ?>

</div>


<div class="about_portfolio_projet">
      <h3 class="competences-title">DÉCOUVRIR PLUS DE PROJETS</h3>   
   
        <div class="post-grid">
    <?php
    $args = array(
        'post_type'      => 'page',
        'posts_per_page' => 3, 
        'order'          => 'DESC', 
        'orderby'        => 'date',
        'meta_query'     => array(
            array(
                'key'   => '_wp_page_template',
                'value' => 'projet.php', 
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
                <a href="<?php the_permalink(); ?>">
                    <div class="post-image" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>');"></div>
                    <div class="post-content"></div>
                </a>
            </article>
        <?php endwhile;
        wp_reset_postdata();
    else : ?>
        <p class="nothing">Il n'y a pas de Post à afficher !</p>
    <?php endif; ?>
</div>
</div>
<?php get_footer(); ?>

<script>
    window.addEventListener('scroll', function() {
        const parallax = document.querySelector('.parallax-image');
        let scrollPosition = window.pageYOffset;
        parallax.style.backgroundPositionY = scrollPosition * 0.1 + 'px'; // Adjust the multiplier to make the effect less strong
    });
</script>
