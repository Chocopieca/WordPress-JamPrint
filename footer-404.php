<footer class="conteiner-fluid">
      <div class="container">

        <h2 class="col-12 px-0 slogan">Things made with love</h2>

        <div class="row links-block mobile">
          <p class="d-md-none">help</p>
          <?php wp_nav_menu( array(
            'theme_location' => 'bot-cat',
            'name' => 'bot-cat',
            'container' => 'ul',
            'menu_class' => 'col-12 col-md-4 help nav-set'
          ) ) ?>
          
          <?php wp_nav_menu( array (
            'theme_location' => 'bot-menu',
            'name' => 'bot-main',
            'container' => 'ul',
            'menu_class' => 'col-12 col-md-4 menu nav-set'
            ) ) ?>

          <div class="contact-bottom col-12 col-md-4 col-lg-4 col-xl-3 offset-xl-1 order-3">
            <div class="mail">
              <svg class="bi bi-envelope-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
              </svg>
              <p><?php echo esc_html (get_option( 'email', '' ) ); ?></p>
            </div>

            <div class="call">
              <i class="fas fa-phone-alt"></i>
              <p><?php echo esc_html (get_option( 'phone', '' ) ); ?></p>
            </div>
          </div>

          <div class="col-12 d-md-none social order-4">
            <a href="<?php echo esc_html (get_option( 'twitter', '' ) ); ?>"><i class="fab fa-twitter"></i></a>
            <a href="<?php echo esc_html (get_option( 'facebook', '' ) ); ?>"><i class="fab fa-facebook-f"></i></a>
            <a href="<?php echo esc_html (get_option( 'instagram', '' ) ); ?>"><i class="fab fa-instagram"></i></a>
          </div>
        </div>

        <div class="row tablet d-none d-md-flex">
          <p class="col-4 help">help</p>

          <div class="col-4 d-none d-md-inline-block social">
            <a href="<?php echo esc_html (get_option( 'twitter', '' ) ); ?>"><i class="fab fa-twitter"></i></a>
            <a href="<?php echo esc_html (get_option( 'facebook', '' ) ); ?>"><i class="fab fa-facebook-f"></i></a>
            <a href="<?php echo esc_html (get_option( 'instagram', '' ) ); ?>"><i class="fab fa-instagram"></i></a>
          </div>

          <p class="col-4 contact-bottom right">contact us</p>
        </div>
      </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php wp_footer() ?>
  </body>
</html>