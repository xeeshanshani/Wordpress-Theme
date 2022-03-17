
 <?php get_header();
 the_post(); ?>

     
    <div class="page-title">
    <?php $imgpath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');?> <img src="<?php echo $imgpath[0]; ?>" alt="">
        <span><?php echo get_the_date(); ?></span>
        <h2><?php the_title();?></h2>
    </div>

<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <?php the_content(); ?>
                <?php wp_get_attachment_image_src(get_post_thumbnail_id())   ?>
                <?php 
                // display attached images
                 wp_get_attachment_image(get_post_thumbnail_id(), 'large');
                ?>
            </div>
            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4"><?php get_sidebar('sidebar') ?></div>
                </div>
            </div>
        </div>
    </div>
</div>

               
             

 <?php get_footer(); ?>  

