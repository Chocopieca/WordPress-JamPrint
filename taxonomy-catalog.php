<?php
/*
Template Name: Catalog
*/
?>

<?php get_header('page'); ?>

      <div class="container catalog_page">
        <div class="row">
          <?php wp_nav_menu( array(
            'theme_location' => 'cat-menu',
            'name' => 'Categorys',
            'container' => null,
            'menu_class' => 'col-10 offset-1 owl-carousel catalog-carousel catalog-filters'
          ) ) ?>
      </div>

      <div class="container px-0 cotalog-main">
        <div class="row row-cols-2 row-cols-md-4">
        <?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
          <div class="col-6 cotalog-item">
            <img src="/img/postcard-lascuits.jpg" alt="buy postcards">
            <?php the_title() ?>
            <p><span>$ </span>0,7</p>
          </div>
        <?php } } else { ?>
          <p>Записей нет.</p>
        <?php } ?>

          <div class="col-6 cotalog-item">
            <img src="/img/postcard-idea.jpg" alt="buy postcards">
            <p> do what you love</p>
            <p><span>$ </span>0,7</p>
          </div>

          <div class="col-6 cotalog-item">
            <img src="/img/postcard-lascuits.jpg" alt="buy postcards">
            <p> do what you love</p>
            <p><span>$ </span>0,7</p>
          </div>

          <div class="col-6 cotalog-item">
            <img src="/img/postcard-idea.jpg" alt="buy postcards">
            <p> do what you love</p>
            <p><span>$ </span>0,7</p>
          </div>

          <div class="col-6 cotalog-item">
            <img src="/img/postcard-lascuits.jpg" alt="buy postcards">
            <p> do what you love</p>
            <p><span>$ </span>0,7</p>
          </div>

          <div class="col-6 cotalog-item">
            <img src="/img/postcard-idea.jpg" alt="buy postcards">
            <p> do what you love</p>
            <p><span>$ </span>0,7</p>
          </div>

          <div class="col-6 cotalog-item">
            <img src="/img/postcard-lascuits.jpg" alt="buy postcards">
            <p> do what you love</p>
            <p><span>$ </span>0,7</p>
          </div>

          <div class="col-6 cotalog-item">
            <img src="/img/postcard-idea.jpg" alt="buy postcards">
            <p> do what you love</p>
            <p><span>$ </span>0,7</p>
          </div>

          <div class="col-6 cotalog-item">
            <img src="/img/postcard-lascuits.jpg" alt="buy postcards">
            <p> do what you love</p>
            <p><span>$ </span>0,7</p>
          </div>

          <div class="col-6 cotalog-item">
            <img src="/img/postcard-idea.jpg" alt="buy postcards">
            <p> do what you love</p>
            <p><span>$ </span>0,7</p>
          </div>
        </div>

        <div class="row mx-0">
          <div class="col-12 col-md-4 offset-md-4 button">
            <p>show more</p>
          </div>
        </div>
      </div>

      <div class="container inst-block">
        <div class="row">
          <div class="col-12 px-0 title">your perfect instagram
            with our postcards
          </div>

          <div class="col-12 col-md-10 offset-md-1 owl-carousel inst-carousel">
            <div class="inst-item">
              <img src="/img/inst-item-one.jpg" alt="my instagram">
              <p>@janeanders</p>
            </div>

            <div class="inst-item">
              <img src="/img/inst-item-second.jpg" alt="my instagram">
              <p>@janeanders</p>
            </div>

            <div class="inst-item">
              <img src="/img/inst-item-third.jpg" alt="my instagram">
              <p>@janeanders</p>
            </div>

            <div class="inst-item">
              <img src="/img/inst-item-second.jpg" alt="my instagram">
              <p>@janeanders</p>
            </div>
          </div>

          <a href="#" class="col-12 col-md-4 offset-md-4 button">
            <p>follow us</p>
          </a>
        </div>
      </div>
    </div>

<?php get_footer(); ?>