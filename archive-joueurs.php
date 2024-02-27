<?php get_header(); ?>

<div class="joueurs-header">
    <div class="yellow-rectangle"></div>
    <img src="<?php echo esc_url('http://localhost/SAE303_hockey_cosom/wp-content/uploads/2023/11/header_1-e1699434720827.png'); ?>" alt="Header Image">
    <h2>Liste des joueurs</h2>
</div>

<?php
    $args = array(
        'post_type' => 'joueurs',
        'posts_per_page' => 30, // Limite à 30 joueurs
    );
    $the_query = new WP_Query($args);
?>

<div class="bigmarg">
    <div class="joueurs">
        <div class="joueurs-grid">
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <article class="joueurs">
                        <a href="<?php the_permalink(); ?>"> <!-- Ajout du lien autour de l'image -->
                            <?php the_post_thumbnail(''); ?>
                        </a>
                        <h3 class="title">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <div class="content">
                            <?php the_content(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
