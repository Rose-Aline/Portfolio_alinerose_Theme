<?php get_header(); ?>

<div class="joueurs-header">
    <div class="yellow-rectangle"></div>
    <img src="<?php echo esc_url('http://localhost/SAE303_hockey_cosom/wp-content/uploads/2023/11/header_principale.png'); ?>" alt="Header Image">
    <h2>Tout ce que vous devez savoir sur le hockey cosom, réuni en un seul endroit.</h2>
</div>

<div class="post-container">
    <div class="marg">

        <?php if (have_posts()) : ?>
            <h2 class="title_BLACK">Découvrir les nouveautés</h2>
            <hr class="hr_equ_loop"/>
            <div class="post-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="post" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>');">
                        <div class="post-content">
                            <h4 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <p class="post-date">Publié le <?php the_date(); ?></p>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <p class="nothing">Il n'y a pas de Post à afficher !</p>
        <?php endif; ?>
    </div>
    </div>

<?php get_footer(); ?>
