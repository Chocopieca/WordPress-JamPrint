<?php
/*
Template Name: FAQ
*/
?>

<?php get_header('single'); ?>

      <div class="container faq-page">
        <div class="col-12 col-md-6 offset-md-3 faq-text"><?php the_content() ?></div>

        <div class="col-md-6 px-0 faq-block float-md-left">
          <?php
          query_posts( '&category_name=questions' );

          if( have_posts() ){
            while( have_posts() ){
              the_post(); ?>
            <div class="col-12 faq-item">
              <div class="col-12 question">
                <h3><?php the_title() ?></h3>
                <div>
                  <button class="question-button faq-open" type="button"  data-toggle="collapse" data-target="answer-<?php the_ID() ?>" ></button>
                </div>
              </div>
              <div class="col-12 answer" id="answer-<?php the_ID() ?>">
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

          <p class="col-12 px-0 contact-text"><?php the_field('form_text')?></p>
        </div>

        <div class="col-12 col-md-5 offset-md-1 float-md-right form-block px-0"><?php the_field('form_code')?></div>
      </div>
    </div>
    
<?php get_footer(); ?>