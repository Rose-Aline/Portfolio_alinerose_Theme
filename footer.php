<footer>
    <div class="black-background">
        <div class="footer-content-full">
        <!-- Contenu de la partie transparente du footer -->
        
        <div class="footer-content">
            <div class="footer-menu">

            <div class="title_footer">
                <h2 class="title_portfolio_footer">PORTFOLIO</h2>
                <h5>ALINE ROSE</h5>
                <hr class="small_hr">
            </div>

                
                <nav>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu'
                    ));
                    ?>
                </nav>
            </div>
            
            <nav class="footer-social-menu">
                <?php
                $footer_social_menu = wp_nav_menu(array(
                    'theme_location' => 'footer-social',
                    'fallback_cb' => false,
                    'echo' => false,
                ));
                if ($footer_social_menu) {
                    echo $footer_social_menu;
                } else {
                    echo '<p>No items found in the Footer Social Menu.</p>';
                }
                ?>
            </nav>
        </div>
        <div class="footer-content-second">
            <p>alinerose262003@gmail.com</p>
            <p>+06 51 91 06 03</a></p>
        </div>
     </div>
        <p class="Mentions_footer">© 2024 Aline ROSE , Tous droits réservés.</p>
    </div>
</footer>
