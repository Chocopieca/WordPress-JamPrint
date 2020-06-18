<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/fonts/Nether/nether.otf">
    <title>Jam - Открытки на подарок</title>
    <?php wp_head() ?>
  </head>
  <body>
    <nav class="collapse navbar-collapse navbar" id="navbarContent">
        <?php wp_nav_menu( array(
          'container' => 'ul',
        ) ) ?>

      <div class="contact-top">
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

      <div class="social">
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </nav>

    <div class="shadow" role="navigation" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"></div>

    <header class="conteiner-fluid">
      <div class="container px-0 clearfix">
        <div class="float-left logo"><?php the_custom_logo();?></div>

        <?php wp_nav_menu( array(
          'container' => 'ul',
          'menu_class' => 'float-left navbar-top d-none d-lg-inline-block',
        ) ) ?>

        <div class="float-right nav-right-block">
          <a class="disabled" href="#">en</a>
          <a href="#">ru</a>
          <a class="basket" href="#">
            <svg class="bi bi-bag" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M14 5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5zM1 4v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4H1z"/>
            <path d="M8 1.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z"/>
            </svg>
          </a>
          <button class="navbar-toggler nav-button d-lg-none" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <svg class="open-burger" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="24.75px" height="24.75px" viewBox="0 0 24.75 24.75" style="enable-background:new 0 0 24.75 24.75;" xml:space="preserve">
              <g>
                <path d="M0,3.875c0-1.104,0.896-2,2-2h20.75c1.104,0,2,0.896,2,2s-0.896,2-2,2H2C0.896,5.875,0,4.979,0,3.875z M22.75,10.375H2   c-1.104,0-2,0.896-2,2c0,1.104,0.896,2,2,2h20.75c1.104,0,2-0.896,2-2C24.75,11.271,23.855,10.375,22.75,10.375z M22.75,18.875H2   c-1.104,0-2,0.896-2,2s0.896,2,2,2h20.75c1.104,0,2-0.896,2-2S23.855,18.875,22.75,18.875z"/>
              </g>
            </svg>

            <svg class="close-burger" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 492 492" style="enable-background:new 0 0 492 492;" xml:space="preserve">
              <g>
                <path d="M300.188,246L484.14,62.04c5.06-5.064,7.852-11.82,7.86-19.024c0-7.208-2.792-13.972-7.86-19.028L468.02,7.872    c-5.068-5.076-11.824-7.856-19.036-7.856c-7.2,0-13.956,2.78-19.024,7.856L246.008,191.82L62.048,7.872    c-5.06-5.076-11.82-7.856-19.028-7.856c-7.2,0-13.96,2.78-19.02,7.856L7.872,23.988c-10.496,10.496-10.496,27.568,0,38.052    L191.828,246L7.872,429.952c-5.064,5.072-7.852,11.828-7.852,19.032c0,7.204,2.788,13.96,7.852,19.028l16.124,16.116    c5.06,5.072,11.824,7.856,19.02,7.856c7.208,0,13.968-2.784,19.028-7.856l183.96-183.952l183.952,183.952    c5.068,5.072,11.824,7.856,19.024,7.856h0.008c7.204,0,13.96-2.784,19.028-7.856l16.12-16.116    c5.06-5.064,7.852-11.824,7.852-19.028c0-7.204-2.792-13.96-7.852-19.028L300.188,246z"/>
              </g>
            </svg>
          </button>
        </div>
      </div>
    </header>

<!-- wrapper -->
    <div class="wrapper container-fluid px-0">
    <div class="container baner">
        <div class="row tablet">
        <div class="col-12 col-md-4 order-md-2 slogan">
            <p>Find the best<br>for you</p>
        </div>
        <div class="col-12 baner-carousel px-0 d-md-none mobile-block">
            <div class="owl-carousel first-carousel">
            <div class="baner-first">
                <div class="hidden">
                <p>postcards</p>
                <img src="/img/poster-1.png" alt="postcards">
                </div>
                <a href="#" class="button">
                <p>shop now</p>
                </a>
            </div>

            <div class="baner-second">
                <div class="hidden">
                <p>sale</p>
                <img src="/img/poster-2.png" alt="sale">
                </div>
                <a href="#" class="button">
                <p>shop now</p>
                </a>
            </div>
            </div>
        </div>

        <div class="col-md-4 order-1 tablet-baner firs-block d-none d-md-inline-block px-0">
            <div class="tablet-baner-one">
            <p>postcards</p>
            <a href="#" class="button">
                <p>shop now</p>
            </a>
            </div>
        </div>
        <div class="col-md-4 order-3 tablet-baner d-none d-md-inline-block px-0">
            <div class="tablet-baner-two">
            <p>sale</p>
            <a href="#" class="button">
                <p>shop now</p>
            </a>
            </div>
        </div>
        </div>
    </div>

    <div class="container print-block">
        <div class="row">
        <div class="col-12 col-md-6 d-md-none title">need a corporate print design ?</div>
        <div class="col-12 col-md-6">
            <img src="img/cards.png" alt="printing cards">
        </div>
        <div class="col-md-6 px-0 px-md-4 px-lg-5">
            <div class="col-12 d-none d-md-block title">need a corporate print design ?</div>
            <p class="col-12 content">Our store will create printed materials for your company, keeping your corporate identity.<br><br>Calendars, posters, banners, checklists, brochures, postcards and everything you need!</p>
            <a href="#form" class="button col-12">
            <p>write us</p>
            </a>
        </div>
        </div>
    </div>

    <div class="container catalog-block">
        <div class="row tablet">
        <div class="catalog-way col-12 order-1 col-md-6 order-md-2">
            <h1 class="slogan">Delicious postcards<br>for your mood</h1>
            <a href="#" class="button d-none d-md-block">
            <p>see all</p>
            </a>
        </div>

        <div class="col-12 px-0 owl-carousel second-carousel mobile-cotalog order-2 d-md-none">
            <div class="catalog-card card-1">
            <img src="/img/card-idea.png" alt="turn your idea">
            <p class="card-name">turn your idea</p>
            <p class="price"><span class="currency">$ </span>0,7</p>
            </div>

            <div class="catalog-card card-2">
            <img src="/img/card-wish.png" alt="make a wish">
            <p class="card-name">make a wish</p>
            <p class="price"><span class="currency">$ </span>0,8</p>
            </div>
        </div>

        <a href="#" class="col-12 col-md-6 button order-3 order-md-3 d-md-none">
            <p>see all</p>
        </a>

        <div class="catalog-card card-1 col-3 d-none d-md-inline-block order-md-1 tablet-cotalog">
            <img src="/img/card-idea.png" alt="turn your idea">
            <p class="card-name">turn your idea</p>
            <p class="price"><span class="currency">$ </span>0,7</p>
        </div>

        <div class="catalog-card card-2 col-3 d-none d-md-inline-block order-md-4 tablet-cotalog">
            <img src="/img/card-wish.png" alt="make a wish">
            <p class="card-name">make a wish</p>
            <p class="price"><span class="currency">$ </span>0,8</p>
        </div>
        </div>
    </div>

    <div class="container business-card-block">
        <div class="row">
        <div class="col-12 col-md-6 d-md-none title">want a unique business card?</div>
        <div class="col-12 col-md-6 d-flex align-items-center">
            <img src="/img/cards-2.jpg" alt="printing buisness cards">
        </div>
        <div class="col-md-6 px-0 px-md-4 px-lg-5">
            <div class="col-12 d-none d-md-block title">need a corporate print design ?</div>
            <p class="col-12 content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <a href="#form" class="button col-12">
            <p>get it now</p>
            </a>
        </div>
        </div>
    </div>

    <div class="container reviews-block">
        <div class="row">
        <div class="col-12 title">reviews</div>
        <div class="col-12 col-md-10 offset-md-1 owl-carousel third-carousel">
            <div class="row row-cols-2 row-cols-md-1 mx-0 align-items-center">
            <div class="col-3 col-md-2 col-lg-1 offset-1 offset-md-0 px-0">
                <div class="portrait"></div>
            </div>
            <div class="col-6 col-md-3 col-lg-2 reviews-data">
                <p>Jane Anders</p>
                <time datetime="2018-09-17">17 Sept 2018</time>
            </div>
            <div class="col-11 col-md-6 col-lg-8 review">
                <p>Very beautiful postcard! Thank you for quality product.</p>
                <div class="stars"></div>
            </div>
            </div>
            
            <div class="row row-cols-2 row-cols-md-1 mx-0 align-items-center">
            <div class="col-3 col-md-2 col-lg-1 offset-1 offset-md-0 px-0">
                <div class="portrait"></div>
            </div>
            <div class="col-6 col-md-3 col-lg-2 reviews-data">
                <p>Jane Anders</p>
                <time datetime="2018-09-17">17 Sept 2018</time>
            </div>
            <div class="col-11 col-md-6 col-lg-8 review">
                <p>Very beautiful postcard! Thank you for quality product.</p>
                <div class="stars"></div>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="container form-block" id="form">
        <div class="row">
        <div class="col-12 px-0 d-md-none title">want a unique business
            card? jam will help you</div>
        
        <img class="col-12 col-md-6 col-lg-5 px-0" src="/img/jam-card.jpg" alt="jam">

        <div class="form-call col-12 col-md-5 px-0 offset-md-1 offset-lg-1 tablet">
            <div class="col-12 px-0 d-none d-md-inline-block title">want a unique business card jam will help you</div>
            <form>
            <input class="col-12 col-md-8" placeholder="YOUR NAME">
            <input class="col-12 col-md-8" type="email" placeholder="EMAIL">
            <input class="col-12 col-md-6" type="submit" value="order a call">
            </form>
        </div>
        </div>
    </div>
    </div>
<!-- wrapper -->
    
    <footer class="conteiner-fluid">
      <div class="container">
        <h2 class="col-12 px-0 slogan">Things made with love</h2>

        <div class="row links-block mobile">
          <p class="d-md-none">menu</p>
          <?php wp_nav_menu( array(
            'container' => 'ul',
            'menu_class' => 'col-12 col-md-4 menu'
          ) ) ?>
          
          <ul class="col-12 col-md-4 help">
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
              'echo'               => 1,
              'depth'              => 0,
              'current_category'   => 0,
              'pad_counts'         => 0,
              'taxonomy'           => 'category',
              'walker'             => 'Walker_Category',
              'hide_title_if_empty' => false,
              'separator'          => '<br />',
              ) ) ?>
          </ul>

          <div class="contact-bottom col-12 col-md-4 col-lg-4 col-xl-3 offset-xl-1">
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

          <div class="col-12 d-md-none social">
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>

        <div class="row tablet d-none d-md-flex">
          <p class="col-4 menu">menu</p>

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