<?php
/*
Template Name: FAQ
*/
?>

<?php get_header('page'); ?>

      <div class="container faq-page">
        <p class="col-12 col-md-6 offset-md-3 faq-text">Have any questions about purchasing our products or services? You can find answers to frequently asked questions, as well as ask any question in a special form or by our contact.
        </p>

        <div class="col-md-6 px-0 faq-block float-md-left">
          
        <?php 
        $quastion = new wp_Query( [
          'category_name' => 'quastion'
        ]);
        while ( $quastion->have_posts() ){ $quastion->the_post(); ?>
          <div class="col-12 faq-item">
            <div class="col-12 question">
              <h3><?php the_title() ?></h3>
              <button class="question-button faq-open" type="button"  data-toggle="collapse" data-target="answer-1" ></button>
            </div>
            <a href="<?php the_permalink() ?>">Somewear</a>
            <div class="col-12 answer" id="answer-1">
              <p><?php the_content() ?></p>
            </div>
          </div>
        <?php } ?>

          <div class="col-12">
            <div class="faq-item">
              <div class="col-12 question">
                <h3>Question number 02 goes here and it can be the long question and maybe longer</h3>
                <button class="question-button faq-open" type="button"  data-toggle="collapse" data-target="answer-2" ></button>
              </div>
              <div class="col-12 answer" id="answer-2">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
              </div>
            </div>
          </div>

          <div class="col-12">
            <div class="faq-item">
              <div class="col-12 question">
                <h3>Question number 03 goes here and it can be the long question and maybe longer</h3>
                <button class="question-button faq-open" type="button"  data-toggle="collapse" data-target="answer-3" ></button>
              </div>
              <div class="col-12 answer" id="answer-3">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
              </div>
            </div>
          </div>

          <div class="col-12">
            <div class="faq-item">
              <div class="col-12 question">
                <h3>Question number 04 goes here and it can be the long question and maybe longer</h3>
                <button class="question-button faq-open" type="button"  data-toggle="collapse" data-target="answer-4" ></button>
              </div>
              <div class="col-12 answer" id="answer-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
              </div>
            </div>
          </div>

          <div class="col-12">
            <div class="faq-item">
              <div class="col-12 question">
                <h3>Question number 05 goes here and it can be the long question and maybe longer</h3>
                <button class="question-button faq-open" type="button"  data-toggle="collapse" data-target="answer-5" ></button>
              </div>
              <div class="col-12 answer" id="answer-5">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
              </div>
            </div>
          </div>

          <div class="col-12">
            <div class="faq-item">
              <div class="col-12 question">
                <h3>Question number 06 goes here and it can be the long question and maybe longer</h3>
                <button class="question-button faq-open" type="button"  data-toggle="collapse" data-target="answer-6" ></button>
              </div>
              <div class="col-12 answer" id="answer-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
              </div>
            </div>
          </div>
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