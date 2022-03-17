<?php get_header(); ?>

    <div class="overlay"></div>
    <div class="page-title">
        <img src="<?php the_post_thumbnail('small') ?>">
        <span><?php get_the_date(); ?></span>
        <h2><?php get_the_title();?></h2>
    </div>

<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <h4>Page Not Found Sorry !!!!!!!!</h4>
            </div>
            <?php get_sidebar('sidebar')?>
        </div>
    </div>
</div> 

<?php get_footer(); ?>