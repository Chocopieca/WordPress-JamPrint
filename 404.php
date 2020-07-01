<?php
/*
Template Name: 404
*/
?>

<?php get_header(); ?>

    <div class="container_fluid error_404">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="col-md-6 offset-md-6">
                        <h1>Sorry!</h1>
                        <p>Page not found...</p>
                    </div>
                </div>
                <div class="col-md-4 error_page"><img src="../img/404.png" alt="error 404"></div>
            </div>
        </div>
    </div>

<?php get_footer('404'); ?>