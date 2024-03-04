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
            <hr class="principale_hr">

            <div class="wrapper">
    <div class="video-container-small">
        <video autoplay muted loop>
            <source src="<?php echo $video_url; ?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <div class="container-title-section">
        <h5>Créatrice spécialisée dans le <span class="green">design graphique et la création de sites web</span>, je vous invite à découvrir mon portfolio pour explorer en détail mon travail ainsi que mes collaborations.</h5>
        <button class="button">DÉCOUVRIR MON PROFIL</button>
    </div>
</div>

<div class="white-section">
    <div class="section_competences">
    <img class="profile-image" src="http://localhost/portfolio_alinerose/wp-content/uploads/2024/03/alinerose_img.png" alt="Aline_Rose_portrait">
          
        <div class="competences">
            <h3 class="competences-title">MES COMPÉTENCES</h3>

            <div class="rounded-rectangle">
                <div class="outlined-word-orange">DESIGN GRAPHIQUE</div>
                <div class="outlined-word">LOGO</div>
                <div class="outlined-word">ILLUSTRATION</div>
                <div class="outlined-word">ANIMATION</div>
                <div class="outlined-word">MAQUETTAGE</div>
            </div>

            <div class="rounded-rectangle">
                <div class="outlined-word-orange">DÉVELOPPEMENT</div>
                <div class="outlined-word">WORDPRESS</div>
                <div class="outlined-word">HTML / CSS</div>
                <div class="outlined-word">VISUAL STUDIO CODE</div>
                <div class="outlined-word">TAILWIND / BOOTSTRAP</div>
            </div>

            <div class="rounded-rectangle">
                <div class="outlined-word-orange">COMMUNICATION</div>
                <div class="outlined-word">ADOBE PHOTOSHOP</div>
                <div class="outlined-word">MONTAGE VIDÉO</div>
                <div class="outlined-word">RÉSEAUX SOCIAUX</div>
                <div class="outlined-word">RÉFÉRENCEMENT</div>
            </div>
        </div>

    </div>
</div>

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
