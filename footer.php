      <footer>
      <div class="transparent-background">
        <!-- Contenu de la partie transparente du footer -->
              <nav>
                <h3>NAVIGATION</h3>
                <?php
                wp_nav_menu ( array (
                  'theme_location' => 'footer-menu'
                ) ); ?>
              </nav>
    </div>
    <div class="yellow-background">
      <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
      <img src="<?php echo esc_url('http://localhost/SAE303_hockey_cosom/wp-content/uploads/2023/11/logonoir.png'); ?>" class="Img_logo" alt="Rechercher">  
    </div>

    </footer>
        </div>

    <?php wp_footer(); ?>
  </body>
</html>
