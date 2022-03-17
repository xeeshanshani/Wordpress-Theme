<?php get_header(); 
// Template Name: Blog
the_post(); 
$blog_posts = new WP_Query( array( 'post_type' => 'post', 'post_status’' => 'publish', 'posts_per_page' => 4  ) );
?>
 
<html lang="en" class="no-js">
<div class="container-fluid contact_us_bg_img">
    <div class="container">
        <div class="row">
            <a href="<?php echo home_url(); ?>" class="fh5co_con_123"><i class="fa fa-home"></i></a>
            <a href="<?php the_permalink(); ?>" class="fh5co_con pt-2"> <?php the_title(); ?></a>
        </div>
    </div>
</div>
<body>
<?php 
           // display name of category with number of post
           
           $cat = get_categories(array('taxonomy'=>'category')); 
            foreach($cat as $catvalue)
            {
              ?>
              <a href="<?php echo get_category_link($catvalue->term_id); ?>"><?php echo $catvalue->name; ?>(<?php echo $catvalue->count;  ?>) </a>
              <?php
            }

           ?> 

<?php if ( $blog_posts->have_posts() ) : ?>

<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                 
                <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
                <div class="row pb-4">
                    <div class="col-md-5">
                   
                        <div class="fh5co_hover_news_img">
                        <div class="fh5co_news_img">
                            <?php the_post_thumbnail(); ?>
                            <img src="image" alt=""></div>
                        </div>
                    </div>
                    <div class="col-md-7 animate-box">
                        <a href="<?php the_permalink(); ?>" class="fh5co_magna py-2"> 
                           <h3><?php the_title(); ?></h3></a> <a href="link with" class="fh5co_mini_time py-3"> <?php the_author();  ?> -
                         <?php echo get_the_date('F j, Y'); ?> </a>
                        <div class="fh5co_consectetur"> <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>">Read More</a>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php else: ?>
                    <p class = "no-blog-posts">
<?php esc_html_e('Sorry, no posts matched your criteria.', 'theme-domain'); ?> 
</p>
<?php endif; 
wp_reset_postdata(); ?>

              
                
            </div>
            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                <div>
                     <?php get_sidebar('sidebar') ?>
                </div>
             
            </div>
        </div>
        <div class="row mx-0">
        <div class="col-12 text-center pb-4 pt-4">
        <a   class="btn_mange_pagging">   <?php 
                    // show the wppagenavi plugin if it is active
                     wp_pagenavi( array( 'query' => $blog_posts ) );
                   
                    previous_posts_link( '&laquo; Previous Page' );
                    next_posts_link( 'Next Page &raquo;', $blog_posts->max_num_pages );
                 

                    ?></a>

        </div>
    </div>
</div>
</div>
 <?php  get_footer();?> 

</body>
</html>
