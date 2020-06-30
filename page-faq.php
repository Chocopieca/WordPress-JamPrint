<?php
/*
Template Name: FAQ
*/
?>

<?php get_header('page'); ?>

      <div class="container faq-page">
        <div class="col-12 col-md-6 offset-md-3 faq-text"><?php the_content() ?></div>

        <div class="col-md-6 px-0 faq-block float-md-left">
          
          <?php
          query_posts( 'cat=0' );

          if( have_posts() ){ 
              while( have_posts() ){ 
                the_post(); ?>
          <div class="col-12 faq-item">
            <div class="col-12 question">
              <h3><?php the_title() ?></h3>
              <div>
                <button class="question-button faq-open" type="button"  data-toggle="collapse" data-target="answer-1" ></button>
              </div>
            </div>
            <div class="col-12 answer" id="answer-1">
              <p><?php the_content() ?></p>
            </div>
          </div>
              <?php }
              wp_reset_query();
          } ?>
        </div>

        <div class="col-12 col-md-5 offset-md-1 px-0 float-md-right social-block">
          <div class="col-12 social">
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>

          <p class="col-12 px-0 contact-text">We always ready to help you with making an order, clarifying the issue of delivery and payment, discussing your unique wishes, which our shop can fulfill, as well as other questions!</p>
        </div>

        <form class="col-12 col-md-5 offset-md-1 float-md-right form-block px-0">
          <div class="col-12 px-0">
            <input placeholder="YOUR NAME">
          </div>

          <div class="col-12 px-0">
            <input type="email" placeholder="EMAIL">
          </div>

          <div class="col-12 px-0">
            <textarea name="messege" cols="30" rows="10" placeholder="YOUR MESSAGE..."></textarea>
          </div>

          <div class="col-12 col-md-5 offset-md-7 px-0">
            <input type="submit" value="send">
          </div>
        </form>
      </div>
    </div>
    
<?php get_footer(); ?>