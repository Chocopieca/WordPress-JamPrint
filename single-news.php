<?php
/*
Template Name: News
Template Post Type: page
*/
?>

<?php get_header('page') ?>
    <div class="container_fluid news">
        <div class="container">
            <div class="row row-colum-md-2 row-colum-lg-3">
                <?php
                $arg = get_posts (array(
                    'numberposts' => 5,
                    'news' => 'new',
                    'post_type' => 'post'
                ) );

                foreach( $posts as $post ){
                    setup_postdata($post); ?>
                    <div class="col-12 col-md-6 col-lg-4 px-0 px-md-3">
                        <div class="news-block">
                            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
                            <a href="<?php the_permalink() ?>"><h2><?php the_title() ?></h2></a>
                            <div class="time"><time><?php the_date( 'Y-m-d' ); ?></time></div>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink() ?>" class="col-12 button"><p>Read more</p></a>
                        </div>
                    </div>
                <?php } ?>
                <?php the_posts_pagination(); ?>
            </div>


        </div>
    </div>
<?php get_footer() ?>