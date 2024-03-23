<?php
/*
Template Name: Horizontal - Portfolio Work Template
*/
get_header(); ?>

<main class="marg_big">

    <div class="white-section white-section-remove-big-marg ">
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

    <div class="linked-images ">
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
<div class="linked-images-inner">
    <?php
    // Linked images horizontal_1 and horizontal_2
    $linked_images = array('horizontal_1', 'horizontal_2');

    foreach ($linked_images as $index => $image_field) {
        $linked_image = get_field($image_field);

        if ($linked_image) {
            echo '<div class="linked-image-horizontal">'; 
            echo '<img src="' . esc_url($linked_image['url']) . '" alt="' . esc_attr($linked_image['alt']) . '">';
            echo '</div>';
        }
    }
    ?>
</div>
</main>

<?php get_footer(); ?>
