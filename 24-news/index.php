<!DOCTYPE html>
<html lang="en" class="no-js">
<?php
    get_header();
    //Template Name: Home
?>
<body>

<div class="container-fluid paddding mb-5">
    <div class="row mx-0">
    <?php $blog_posts = new WP_Query( array( 'post_type' => 'news', 'post_status’' => 'publish', 'posts_per_page' => 4  ) );?>
  
        <div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
            <div class="fh5co_suceefh5co_height"><img src="<?php the_post_thumbnail(); ?>" alt="img"/>
                <div class="fh5co_suceefh5co_height_position_absolute"></div>
                <div class="fh5co_suceefh5co_height_position_absolute_font">
                    <div class=""><a href="<?php the_permalink(); ?>" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php echo get_the_date('F j, Y'); ?>
                    </a></div>
                    <div class=""><a href="single.html" class="fh5co_good_font"><?php the_title(); ?></a></div>
                </div>
            </div>
            
        </div>
        <div class="col-md-6">
        
            <div class="row">
            <?php if ( $blog_posts->have_posts() ) : ?>
    <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>   
                <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co_suceefh5co_height_2"><img src="<?php echo the_post_thumbnail(); ?>" alt="img"/>
                        <div class="fh5co_suceefh5co_height_position_absolute"></div>
                        <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                            <div class=""><a href="<?php the_permalink(); ?>" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp; <?php echo get_the_date('F j, Y'); ?> </a></div>
                            <div class=""><a href="<?php the_permalink(); ?>" class="fh5co_good_font_2"> <?php the_title(); ?> </a></div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
        <?php endif; ?>
            </div>
       
        </div>
      
    </div>
</div>
<div class="container-fluid pt-3">
    <div class="container animate-box" data-animate-effect="fadeIn">
        <div>
        
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Trending Movies</div>
        </div>
       
               
        <div class="owl-carousel owl-theme js" id="slider1">
        <?php $blog_posts = new WP_Query( array( 'post_type' => 'movies', 'post_status’' => 'publish', 'posts_per_page' => 4  ) );?>
                    <?php if ( $blog_posts->have_posts() ) : ?>
        <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
            <div class="item px-2">
                <div class="fh5co_latest_trading_img_position_relative">
                    <div class="fh5co_latest_trading_img"><img src="<?php the_post_thumbnail(); ?>" alt=""
                                                           class="fh5co_img_special_relative"/></div>
                    <div class="fh5co_latest_trading_img_position_absolute"></div>
                    <div class="fh5co_latest_trading_img_position_absolute_1">
                        <a href="<?php the_permalink(); ?>" class="text-white"><?php echo the_title(); ?></a>
                        <div class="fh5co_latest_trading_date_and_name_color"> <?php the_author(); ?> -
                         <?php echo get_the_date('F j, Y');?></div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
        </div>
      
    </div>
   
</div>
<div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Latest Blogs</div>
        </div>
        <?php $blog_posts = new WP_Query( array( 'post_type' => 'post', 'post_status’' => 'publish', 'posts_per_page' => 4  ) );?>
        <?php if ( $blog_posts->have_posts() ) : ?>            
        <div class="owl-carousel owl-theme" id="slider2">
        <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post();
        $imgpath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large'); ?>
        
      
            <div class="item px-2">
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img"><img src="<?php echo $imgpath[0]; ?>" alt=""/></div>
                    <div>
                        <a href="<?php the_permalink(); ?>" class="d-block fh5co_small_post_heading"><span class=""><?php the_title(); ?></span></a>
                        <div class="c_g"><i class="fa fa-clock-o"></i> <?php echo get_the_date('F j, Y'); ?></div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        <?php endif; ?>
             
        </div>
       
    </div>
</div>

<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <?php $blog_posts = new WP_Query( array( 'post_type' => 'news', 'post_status’' => 'publish', 'posts_per_page' => 4  ) );?>
                    <?php if ( $blog_posts->have_posts() ) : ?>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">News </div>
                </div>
                <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src=" <?php the_post_thumbnail(); ?>" alt=""/></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7 animate-box">
                        <a href="<?php the_permalink(); ?>" class="fh5co_magna py-2"> <?php echo the_title(); ?> </a> <a href="<?php the_permalink(); ?>" class="fh5co_mini_time py-3"> <?php the_author(); ?> -
                         <?php echo get_the_date('F j, Y');?></a>
                        <div class="fh5co_consectetur"> <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>">Read More</a>
                    </div>
                </div>
             <?php endwhile; ?>
            <?php endif; ?>

                 
            </div>
        <?php get_sidebar('sidebar'); ?>
        </div>
        <div class="row mx-0 animate-box" data-animate-effect="fadeInUp">
            <div class="col-12 text-center pb-4 pt-4">
               <div class="btn_pagging" > <?php echo  wp_pagenavi(); ?> </div>
                
             </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
</body>
</html>