<?php
/*
Template Name: Category
*/
?>

<?php get_header(); ?>

    <div class="wrapper container-fluid catalog-page px-0">
      <div class="container catalog-filters">
        <div class="row">
          <ul class="col-12 px-0 bradcrumb">
              <li class="breadcrumb-item"><a href="#">home</a></li>
              <li class="breadcrumb-item">catalog</li>
          </ul>

          <h1 class="col-12 slogan"><?php the_title() ?></h1>

          <div class="col-10 offset-1 owl-carousel catalog-carousel">
            <div class="new-category">
              <p>all items</p>
            </div>

            <div class="new-category">
              <p>postcards & posters</p>
            </div>

            <div class="ne
            
            w-category">
              <p>calendars</p>
            </div>
          </div> 
        </div>
      </div>

      <div class="container px-0 cotalog-main">
        <div class="row row-cols-2 row-cols-md-4">
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
            with our postcards</div>
          
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
            <p>follow us on intagram</p>
          </a>
        </div>
      </div>
    </div>

<?php get_footer(); ?>