<?php
/*
Template Name: News
*/
?>

<?php get_header('single') ?>
    <div class="container_fluid news">
        <div class="container">
            <div class="row row-colum-md-2 row-colum-lg-3">
                <?php
                    $args = array ('post_type' => 'news',
                                   'posts_per_page' => '3',
                                   'paged' => get_query_var('paged') ?: 1);

                    query_posts ($args);

                    while( have_posts() ) {
                        the_post(); ?>
                        <div class="col-12 col-md-6 col-lg-4 px-0 px-md-3">
                            <div class="news-block">
                                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
                                <a href="<?php the_permalink() ?>"><h2><?php the_title() ?></h2></a>
                                <div class="time"><time><?php echo get_the_time( 'Y-m-d' ); ?></time></div>
                                <?php the_excerpt(); ?>
                                <a href="<?php the_permalink() ?>" class="col-12 button"><p>Read more</p></a>
                            </div>
                        </div>
                <?php } ?>
                <div class="col-12 pagination">
                    <div class="nav-previous alignleft"><?php previous_posts_link( 'Previous' ); ?></div>
                    <div class="nav-next alignright"><?php next_posts_link( 'Next' ); ?></div>
                </div>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>
<?php get_footer() ?>