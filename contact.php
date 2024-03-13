<?php
/*
Template Name: Contact
*/
get_header();
?>

<div class="contact-container">
    <div class="left-section">
    <img src="http://localhost/portfolio_alinerose/wp-content/uploads/2024/03/alinerose_img.png" alt="Alinerose Image">
        <div class="text-content-left-section">
            <h2>Contactez moi !</h2>
            <p><a href="mailto:alinerose262003@gmail.com"><i class="fa fa-envelope"></i> alinerose262003@gmail.com</a></p>
            <p><i class="fa fa-phone"></i> +06 51 91 06 03</p>

            <h2>Retrouvez-moi</h2>
            <p><a href="https://www.instagram.com/alinerose.design/" target="_blank">INSTAGRAM - @alinerose.Design</a></p>
            <p><a href="https://www.behance.net/alinerose" target="_blank">BEHANCE - @alinerose</a></p>
            <p><a href="https://www.linkedin.com/in/aline-rose-1b0ab7258/" target="_blank">LINKEDIN - Aline Rose</a></p>
        </div>
    </div>
    <div class="right-section white-section-2">
        <h2 class="form_title">ME CONTACTER</h2>
        <?php echo do_shortcode('[contact-form-7 id="64b8bc7" title="Formulaire de contact 1"]'); ?>
    </div>
</div>

<main class="marg">

</main>

<?php get_footer(); ?>
