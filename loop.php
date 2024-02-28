<?php get_header(); ?>
    <div class="marg">
            <?php
            $video_url = 'http://localhost/portfolio_alinerose/wp-content/uploads/2024/02/splin_video_portfolio.mp4';
            ?>

        <div class="video-container">
            <video autoplay muted loop>
                <source src="<?php echo $video_url; ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

            <h4>Bonjour, je suis <span class="green"><b>ALINE ROSE</b></span>  étudiante en design graphique en MMI.</h4>

        <div class="video-container-small">
            <video autoplay muted loop>
                <source src="<?php echo $video_url; ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

            <h5>Créatrice spécialisée dans le <span class="green">design graphique et la création de sites web</span>, je vous invite à découvrir mon portfolio pour explorer en détail mon travail ainsi que mes collaborations.</h5>
            <button class="button">DÉCOUVRIR MON PROFIL</button>

        <div class="post-container">
            <div class="marg">

                <?php if (have_posts()) : ?>
                    <h2>Découvrir les nouveautés</h2>
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
         </div>
<?php get_footer(); ?>
