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
        <h5>Créatrice spécialisée dans le <span class="green">design graphique et la création de sites web</span>, je vous invite à découvrir mon portfolio pour explorer en détail mon travail ainsi que mon parcours.</h5>
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
                <div class="outlined-word-orange">COMMUNICATION</div>
                <div class="outlined-word">ADOBE PHOTOSHOP</div>
                <div class="outlined-word">MONTAGE VIDÉO</div>
                <div class="outlined-word">RÉSEAUX SOCIAUX</div>
                <div class="outlined-word">RÉFÉRENCEMENT</div>
            </div>

            <div class="rounded-rectangle">
                <div class="outlined-word-orange">DÉVELOPPEMENT</div>
                <div class="outlined-word">WORDPRESS</div>
                <div class="outlined-word">HTML / CSS</div>
                <div class="outlined-word">VISUAL STUDIO CODE</div>
                <div class="outlined-word">TAILWIND / BOOTSTRAP</div>
            </div>

        </div>

    </div>
</div>



<div class="white-section">      
    <div class="competences">
      <h3 class="competences-title">PROJETS RÉCENTS</h3>
        <h6>Mes projets allient design graphique et création web. Découvrez mon portfolio pour explorer mon univers créatif.</h6>
   
   
        <div class="post-grid">
    <?php
    // Query to retrieve the 6 most recent pages using 'projet.php' template
    $args = array(
        'post_type'      => 'page',
        'posts_per_page' => 6, // Number of pages to display
        'order'          => 'DESC', // Sort pages in descending order
        'orderby'        => 'date', // Order pages by date
        'meta_query'     => array(
            array(
                'key'   => '_wp_page_template',
                'value' => 'projet.php', // Template name to filter by
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

<div class="cards-colors">
        <h1>CRÉEZ UNE IDENTITÉ QUI VOUS CORRESPOND</h1>
    <p>Cliquez et faites glisser une carte pour découvrir ce que vous réserve aujourd'hui.</p>

    <div class="custom-white-section" id="customWhiteSection">
        <div class="custom-draggable-card" id="customDraggableCard1">Organisation</div>
        <div class="custom-draggable-card" id="customDraggableCard2">Curiosité</div>
        <div class="custom-draggable-card" id="customDraggableCard3">Esprit d’équipe</div>
        <div class="custom-draggable-card" id="customDraggableCard4">Autonomie</div>
        <div class="custom-draggable-card" id="customDraggableCard5">Flexibilité</div>
        <div class="custom-draggable-card" id="customDraggableCard6">Communication</div>
        <div class="custom-draggable-card" id="customDraggableCard7">Positivité</div>
        <div class="custom-draggable-card" id="customDraggableCard8">Créativité</div>
        <div class="custom-draggable-card" id="customDraggableCard9">Ouverture d’esprit</div>
        <div class="custom-draggable-card" id="customDraggableCard10">Efficacité</div>
    </div>
</div>




        <div class="main_section_last">
    <div class="flex-item_1">
        <div class="footer_video">
            <video autoplay muted loop>
                <source src="<?php echo $video_url; ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
    <div class="flex-item_2">
        <h1>MERCI DE </h1>
        <h1>VOTRE VISITE</h1>
        <button class="button">ME CONTACTER</button>
    </div>
</div>


    
</div>

<?php get_footer(); ?>







<script>
    document.addEventListener("DOMContentLoaded", function () {
        const customDraggableCards = document.querySelectorAll(".custom-draggable-card");
        const customWhiteSection = document.getElementById("customWhiteSection");
        const cardsColors = document.querySelector(".cards-colors"); // Select the element with class "cards-colors"

        customDraggableCards.forEach(function (customDraggableCard, index) {
            customDraggableCard.addEventListener("mousedown", function (e) {
                e.preventDefault();

                let offsetX = e.clientX - customDraggableCard.getBoundingClientRect().left;
                let offsetY = e.clientY - customDraggableCard.getBoundingClientRect().top;

                document.addEventListener("mousemove", dragElement);
                document.addEventListener("mouseup", () => {
                    document.removeEventListener("mousemove", dragElement);
                });

                function dragElement(e) {
                    e.preventDefault();

                    let maxX = customWhiteSection.offsetWidth - customDraggableCard.offsetWidth;
                    let maxY = customWhiteSection.offsetHeight - customDraggableCard.offsetHeight;

                    let x = e.clientX - offsetX - customWhiteSection.getBoundingClientRect().left;
                    let y = e.clientY - offsetY - customWhiteSection.getBoundingClientRect().top;

                    x = Math.min(Math.max(x, 0), maxX);
                    y = Math.min(Math.max(y, 0), maxY);

                    customDraggableCard.style.left = x + "px";
                    customDraggableCard.style.top = y + "px";

                    changeColors(customDraggableCard);
                }
            });
        });

        function changeColors(customDraggableCard) {
            let bgColor, sectionColor;

            switch (customDraggableCard.id) {
    case "customDraggableCard1":
        bgColor = "#1A0949"; // Dark purple
        sectionColor = "#4A15E1"; // Bright purple
        break;
    case "customDraggableCard2":
        bgColor = "#041964"; // Dark blue
        sectionColor = "#105798"; // Bright blue
        break;
    case "customDraggableCard3":
        bgColor = "#100606"; // Dark red
        sectionColor = "#4B170C"; // Bright red
        break;
    case "customDraggableCard4":
        bgColor = "#470A0A"; // Black
        sectionColor = "#BD0F04"; // Red
        break;
    case "customDraggableCard5":
        bgColor = "#190223"; // Dark purple
        sectionColor = "#7A0F36"; // Dark red
        break;
    case "customDraggableCard6":
        bgColor = "#422E07"; // Dark brown
        sectionColor = "#9C5C11"; // Brown
        break;
    case "customDraggableCard7":
        bgColor = "#094932"; // Dark green
        sectionColor = "#E44A1A"; // Orange
        break;
    case "customDraggableCard8":
        bgColor = "#06100E"; // Dark green
        sectionColor = "#08A65A"; // Bright green
        break;
    case "customDraggableCard9":
        bgColor = "#041A3B"; // Dark blue
        sectionColor = "#2D847F"; // Teal
        break;
    case "customDraggableCard10":
        bgColor = "#060F10"; // Dark gray
        sectionColor = "#1F3F51"; // Blue-gray
        break;
    default:
        bgColor = "white";
        sectionColor = "black";
}

            document.body.style.backgroundColor = bgColor;
            customWhiteSection.style.backgroundColor = sectionColor;

            // Change background color of .cards-colors to sectionColor
            cardsColors.style.backgroundColor = sectionColor;
        }
    });
</script>
