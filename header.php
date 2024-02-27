<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body>
        <header id="vertical-header" >
            <div class="header-content">
                <?php echo '<img src="http://localhost/portfolio_alinerose/wp-content/uploads/2024/02/logo_website_portfolio.png" alt="Logo_du_site" class="site-icon">' ?>
                
                <div class="menu-container">
                    <nav class="main-menu">
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'header-menu',
                            ));
                        ?>
                    </nav>
                </div>

                <div class="social-icons">
                    <i class="fab fa-brands fa-linkedin share"></i>
                    <i class="fab fa-behance-square share"></i>
                    <i class="fab fa-instagram-square share"></i>
                </div>
            </div>
        </header>
    <div id="main-content">
        <!-- Main content of your website goes here -->
    </div>
    <?php wp_footer(); ?>
    <script>
        function toggleMenu() {
            var menuToggle = document.querySelector('.menu-toggle');
            var mainMenu = document.querySelector('.main-menu');

            if (menuToggle.classList.contains('active')) {
                menuToggle.classList.remove('active');
                mainMenu.style.display = 'none';
            } else {
                menuToggle.classList.add('active');
                mainMenu.style.display = 'block';
            }
        }
    </script>
</body>
</html>
