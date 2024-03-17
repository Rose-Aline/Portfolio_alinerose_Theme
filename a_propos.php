<?php
/*
Template Name: À propos
*/
get_header();
?>

<div class="contact-container">
<div class="left-section-about">
    <div class="image-container">
        <img src="http://localhost/portfolio_alinerose/wp-content/uploads/2024/03/alinerose_horizontal.jpg" alt="Alinerose Image">
        <div class="button-container">
            <button class="button button-small">MON CV</button>
            <button class="button button-small">COPIER L’URL</button>
        </div>
    </div>
    <div class="timeline">
    <h2>Découvrir mon parcours</h2>
    <div class="timeline-point">
        <span class="point"></span>
        <div class="content">
            <h3>2023-2024</h3>
            <p>BUT Métiers du Multimédia et de l'Internet (MMI)</p>
            <p>2ème année Parcours Design IUT Montbéliard.</p>
        </div>
    </div>
    <div class="timeline-point">
        <span class="point"></span>
        <div class="content">
            <h3>2022</h3>
            <p>Classe préparatoire aux écoles d’arts</p>
            <p>Ecole d’art Jacot Belfort</p>
        </div>
    </div>
    <div class="timeline-point">
        <span class="point"></span>
        <div class="content">
            <h3>2021</h3>
            <p>Baccalauréat général</p>
            <p>Lycée Louis Aragon Héricourt </p>

        </div>
    </div>
</div>

</div>

    <div class="right-section-about">
        <h1 class="about_title green">ALINE ROSE</h1>
        <h3>Étudiante au parcours design graphique en MMI (Métiers du Multimédia et de l’Internet)</h3>
        <hr class="principale_hr about_hr">
        <p class="about_description">Je suis une créatrice spécialisé dans le design graphique dans le domaine du web.
             Avec une expertise en UX/UI, développement web et création de contenu, 
             je m'efforce d'apporter une touche créative et stratégique à chaque projet pour atteindre efficacement les objectifs de mes clients.</p>

             <div class="rectangles-container">
    <div class="rectangle">
        <h1><span class="number">1.</span> UI / UX DESIGN.</h1>
        <p>Création de maquettes web et conceptualisation d'interfaces intuitives. De la réalisation d'illustrations sur mesure à la rédaction de contenus engageants, nous garantissons une expérience utilisateur optimale et unique pour chaque projet.
        </p>
    </div>
    <div class="rectangle">
        <h1><span class="number">2.</span> DÉVELOPPEMENT WEB</h1>
        <p>Nous réalisons des sites internet à la fois fonctionnels et esthétiques en utilisant des langages comme CSS/HTML pour des projets sur mesure ou en tirant parti de plateformes comme WordPress. Notre expertise nous permet de traduire les concepts de design en solutions web professionnelles et personnalisées.</p>
    </div>
    <div class="rectangle">
        <h1><span class="number">3.</span> COMMUNICATION</h1>
        <p>Dans le domaine de la communication, nous nous spécialisons dans la création de stratégies de contenu sur mesure pour les médias sociaux. De la conception de campagnes visuelles à la gestion de la présence en ligne, nous aidons nos clients à atteindre et à engager leur public cible de manière authentique et efficace. </p>
     </div>
</div>


    </div>
</div>
<div class="white-section-2">      
    <div class="about_portfolio">
      <h3 class="competences-title">PROJETS RÉCENTS</h3>
        <h6>Mes projets allient design graphique et création web. Découvrez mon portfolio pour explorer mon univers créatif.</h6>
   
   
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
    <button class="button button_portfolio">PORTFOLIO<i class="fas fa-long-arrow-alt-right"></i> </button>
</div>

            </div>
        </div>
        

        <div class="contact-container contact-container-about">
    <div class="right-section-about-2">
        <div class="right-content">
            <h1 class="about-contact-title">VOUS SOUHAITEZ M’ENVOYEZ UN MESSAGE ?</h1>
            <button class="button">Contactez moi !</button>
        </div>
    </div>
    <div class="left-section-about-2">
        <h2>Mes contacts</h2>
        <p><a href="mailto:alinerose262003@gmail.com"><i class="fa fa-envelope"></i> alinerose262003@gmail.com</a></p>
        <p><i class="fa fa-phone"></i> +06 51 91 06 03</p>
    </div>
</div>




<main class="marg">

</main>

<?php get_footer(); ?>
