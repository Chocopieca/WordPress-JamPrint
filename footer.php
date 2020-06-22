<footer class="conteiner-fluid">
      <div class="container">
        <div class="col-12 jam-card">
          <p class="col-md-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>

          <div class="jam"></div>
        </div>
        <h2 class="col-12 px-0 slogan">Things made with love</h2>

        <div class="row links-block mobile">
          <ul class="col-12 col-md-4 help order-2 order-md-1">
            <?php wp_list_categories( array (
              'orderby'            => 'name',
              'order'              => 'ASC',
              'style'              => 'list',
              'show_count'         => 0,
              'hide_empty'         => 0,
              'use_desc_for_title' => 1,
              'child_of'           => 0,
              'feed'               => '',
              'feed_type'          => '',
              'feed_image'         => '',
              'exclude'            => '1',
              'exclude_tree'       => '',
              'include'            => '',
              'hierarchical'       => true,
              'title_li'           => NULL,
              'number'             => NULL,
              'depth'              => 0,
              'current_category'   => 0,
              'pad_counts'         => 0,
              'taxonomy'           => 'category',
              'walker'             => 'Walker_Category',
              'hide_title_if_empty' => false,
              'separator'          => '<br />',
              ) ) ?>
          </ul>
            <?php wp_reset_postdata(); ?>

          <p class="d-md-none">help</p>
          <?php wp_nav_menu( array(
            'container' => 'ul',
            'menu_class' => 'col-12 col-md-4 menu order-1'
          ) ) ?>
          
          <div class="contact-bottom col-12 col-md-4 col-lg-4 col-xl-3 offset-xl-1 order-3">
            <div class="mail">
              <svg class="bi bi-envelope-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
              </svg>
              <p>jampostcardshop@gmail.com</p>
            </div>

            <div class="call">
              <i class="fas fa-phone-alt"></i>
              <p>+38 097 187 85 80</p>
            </div>
          </div>

          <div class="col-12 d-md-none social order-4">
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>

        <div class="row tablet d-none d-md-flex">
          <p class="col-4 help">help</p>

          <div class="col-4 d-none d-md-inline-block social">
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
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