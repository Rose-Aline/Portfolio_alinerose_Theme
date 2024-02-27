<?php get_header(); ?>

<div class="joueurs-header">
    <div class="yellow-rectangle"></div>
    <?php
    $header_image_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
    if ($header_image_url) {
    ?>
    <img src="<?php echo esc_url($header_image_url); ?>" alt="Header Image">
    <?php } ?>
    <h2>   <?php the_title(); ?> </h2>
</div>

<div class="marg">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <div class="title-container">
                <h2 class="title">Présentation</h2>
                <div class="team-logo">
                    <?php
                    $logo_image = get_field('logo');
                    if ($logo_image) {
                    ?>
                    <img src="<?php echo esc_url($logo_image['url']); ?>" alt="<?php echo esc_attr($logo_image['alt']); ?>">
                    <?php } ?>
                </div>
            </div>
            <hr class="hr_equ"/>
            <div class="content">
                
                <?php the_content(); ?>
                <div class="informations">
                    <li> Équipe créée le <?php the_field("datecrea"); ?> et située à <?php the_field("lieu"); ?> </li>
                    </div> </div>
                    </div>

            <div class="team-players-section">

                <div class="title-container-white">
                    <h2 class="title">Présentation</h2>
                    <hr class="hr_equ"/>
                </div>

                <?php
                // Afficher la liste des joueurs de l'équipe (relation "liste_joueurs")
                $team_players = get_field('liste_joueurs');
                if ($team_players) :
                ?>
                <div class="bigmarg">
                    <div class="joueurs">
                        <div class="joueurs-grid">
                            <?php foreach ($team_players as $player) : ?>
                                <article class="joueurs">
                                    <a href="<?php echo get_permalink($player->ID); ?>">
                                        <?php
                                        // Récupérer la miniature du joueur
                                        $player_thumbnail = get_the_post_thumbnail($player->ID, 'thumbnail');
                                        if ($player_thumbnail) {
                                            echo $player_thumbnail;
                                        }
                                        ?>
                                    </a>
                                    <h3 class="title">
                                        <a href="<?php echo get_permalink($player->ID); ?>">
                                            <?php echo get_the_title($player->ID); ?>
                                        </a>
                                    </h3>
                                    <div class="content">
                                        <?php echo get_post_field('post_content', $player->ID); ?>
                                    </div>
                                </article>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </article>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
