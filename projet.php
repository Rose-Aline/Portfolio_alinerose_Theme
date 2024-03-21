<?php
/*
Template Name: Portfolio Work Template
*/
get_header(); ?>

<main class="marg">

    <div class="white-section">
        <?php
        while (have_posts()) : the_post();
        ?>
        <div class="flex-container">
            <div class="flex-item">
                <div class="projet-title">
                <h2 class="projet_title_h2"><?php echo get_the_title(); ?></h2>
                <h6 class="release-date">Publié le <?php the_date(); ?></h6>
                </div>

                <div class="projet-content">
                    <?php the_content(); ?>
                </div>
            </div>

            <div class="flex-item_image">
                <?php
                $main_image = get_field('main_img_projet');
                if ($main_image) {
                    echo '<img class="custom-image" src="' . esc_url($main_image['url']) . '" alt="' . esc_attr($main_image['alt']) . '">';
                }
                ?>
            </div>
        </div>
        <?php
        endwhile; 
        ?>
    </div>

    <div class="linked-images">
        <div class="flex-item_1_projet">
            <?php
            // Phone image
            $second_mockup = get_field('second_mockup');
            if ($second_mockup) {
                echo '<img class="phone-image" src="' . esc_url($second_mockup['url']) . '" alt="' . esc_attr($second_mockup['alt']) . '">';
            }
            ?>


<?php
$lien_projet = get_field('projet_url');
$texte_bouton = get_field('texte_bouton'); // Récupère le texte du bouton depuis ACF

if ($lien_projet && $texte_bouton) { ?>
    <div class="button_projet">
        <a href="<?php echo esc_url($lien_projet); ?>" class="button"><?php echo esc_html($texte_bouton); ?></a>
    </div>
<?php } ?>

</div>


        <div class="flex-item_2_projet">
            <div class="linked-images-inner">
                <?php
                // Linked images 1 to 4
                $linked_images = array('image_square_1', 'image_square_2', 'image_square_3', 'image_square_4');

                foreach ($linked_images as $index => $image_field) {
                    $linked_image = get_field($image_field);

                    if ($linked_image) {
                        echo '<div class="linked-image' . ($index < 2 ? ' top' : ' bottom') . '">';
                        echo '<img src="' . esc_url($linked_image['url']) . '" alt="' . esc_attr($linked_image['alt']) . '">';
                        echo '</div>';
                    }
                }
                ?>
            </div>
            <?php
            // Linked image top
            $linked_image_top = get_field('image_square_top');

            if ($linked_image_top) {
                echo '<div class="linked-image linked-image-top">';
                echo '<img src="' . esc_url($linked_image_top['url']) . '" alt="' . esc_attr($linked_image_top['alt']) . '">';
                echo '</div>';
            }
            ?>
            
        </div>
    </div>

</main>

<?php get_footer(); ?>
