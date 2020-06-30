<?php
/*
Template Name: Contact
*/
?>

<?php get_header('page'); ?>

      <div class="container contact-page">
        <div class="row">
          <div class="col-12 col-md-5 px-0 order-md-1 social-block">
            <div class="col-12 social">
                <a href="<?php echo esc_html (get_option( 'twitter', '' ) ); ?>"><i class="fab fa-twitter"></i></a>
                <a href="<?php echo esc_html (get_option( 'facebook', '' ) ); ?>"><i class="fab fa-facebook-f"></i></a>
                <a href="<?php echo esc_html (get_option( 'instagram', '' ) ); ?>"><i class="fab fa-instagram"></i></a>
            </div>

            <p class="col-12 px-0 contact-text">We always ready to help you with making an order, clarifying the issue of delivery and payment, discussing your unique wishes, which our shop can fulfill, as well as other questions!</p>
          </div>

          <div class="col-12 col-md-10 offset-md-1 order-md-3 px-0 contact-info">
            <div class="row">
              <div class="contact-info-block col-12 col-md-4">
                <svg class="bi bi-envelope-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                </svg>
                <p><?php echo esc_html( get_option( 'email', '' ) ); ?></p>
              </div>

              <div class="contact-info-block col-12 col-md-4">
                  <svg class="bi bi-geo-alt" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                  </svg>
                  <p><?php echo esc_html( get_option( 'address', '' ) ); ?></p>
              </div>

              <div class="contact-info-block col-12 col-md-4">
                  <i class="fas fa-phone-alt"></i>
                  <p><?php echo esc_html( get_option( 'phone', '' ) ); ?></p>
              </div>
            </div>
          </div>

          <form class="col-12 col-md-6 order-md-2 offset-md-1 form-block px-0">
            <div class="row mx-0">
              <div class="col-12 col-md-6">
                <input placeholder="YOUR NAME">
              </div>

              <div class="col-12 col-md-6">
                <input type="email" placeholder="EMAIL">
              </div>

              <div class="col-12 col-md-12">
                <textarea name="messege" cols="30" rows="10" placeholder="YOUR MESSAGE..."></textarea>
              </div>

              <div class="col-12 col-md-5 offset-md-7">
                <input type="submit" value="send">
              </div>
            </div>
          </form>

          <iframe class="col-12 order-md-4 px-0 google-map" src="<?php echo esc_html (get_option( 'google_maps', '' ) ); ?>" style="border:none;"></iframe>
        </div>
      </div>
    </div>
    
<?php get_footer(); ?>