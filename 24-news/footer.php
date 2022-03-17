<?php 
// Template Name: Footer
?>

<div class="container-fluid fh5co_footer_bg pb-3">
    <div class="container animate-box">
        <div class="row">
            <div class="col-12 spdp_right py-5"><img src="<?php echo get_template_directory_uri();?>/images/white_logo.png" alt="img" class="footer_logo"/></div>
            <div class="clearfix"></div>
            <div class="col-12 col-md-4 col-lg-3">
                <div class="footer_main_title py-3"> About</div>
                <div class="footer_sub_about pb-3"> Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                </div>
                <div class="footer_mediya_icon">
                    <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                        <div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div>
                    </a></div>
                    <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                        <div class="fh5co_verticle_middle"><i class="fa fa-google-plus"></i></div>
                    </a></div>
                    <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                        <div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div>
                    </a></div>
                    <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                        <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                    </a></div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-2">
                <div class="footer_main_title py-3"> Category</div>
                <ul class="footer_menu">
             
                <?php 
                // import all categories of post
                $args = array(
                    'orderby' => 'name',
                    'order' => 'ASC'
    
                    
                );
               $categories = get_categories($args);
                foreach($categories as $category) {
                     echo '<li><a href="'.get_category_link($category->term_id).'">'.$category->name.'</a></li>';
                }

                
                ?>
                
                
           
                    
            </div>
            <div class="col-12 col-md-5 col-lg-3 position_footer_relative">
                <div class="footer_main_title py-3"> Most Viewed Posts</div>
                <?php
                // show the all post
                $args = array(
                    'posts_per_page' => 3,
                    'orderby' => 'comment_count',
                    'order' => 'DESC'
                );
                $most_viewed = get_posts($args);
                foreach($most_viewed as $post) {
                    setup_postdata($post);
                    ?>
                    <div class="footer_recent_post_main">
                     
                        <div class="footer_recent_post_text">
                            
                            <div class="footer_recent_post_date">
                                <?php echo get_the_date();?>
                            </div>
                            <div class="footer_recent_post_title">
                                <a href="<?php the_permalink();?>"><?php the_title();?></a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                
                ?>
              
                 </div>
            <div class="col-12 col-md-12 col-lg-4 ">
                <div class="footer_main_title py-3"> Last Modified Posts</div>
                <a href="#" class="footer_img_post_6"><img src="<?php the_field('client') ?>" alt="img"/></a>
                
            </div>
        </div>
        <div class="row justify-content-center pt-2 pb-4">
            <div class="col-12 col-md-8 col-lg-7 ">
                <div class="input-group">
                    <span class="input-group-addon fh5co_footer_text_box" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                    <input type="text" class="form-control fh5co_footer_text_box" placeholder="Enter your email..." aria-describedby="basic-addon1">
                    <a href="#" class="input-group-addon fh5co_footer_subcribe" id="basic-addon12"> <i class="fa fa-paper-plane-o"></i>&nbsp;&nbsp;Subscribe</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid fh5co_footer_right_reserved">
    <div class="container">
        <div class="row  ">
            <div class="col-12 col-md-6 py-4 Reserved"> © Copyright 2022, All rights reserved. Design by <a href="http://zeeshanamjad.me/" >Zeeshan Amjad</a>. </div>
            <div class="col-12 col-md-6 spdp_right py-4">
              
                    <?php 
                    // Footer menu
                    wp_nav_menu( array(
                        'theme_location' => 'footer-menu',
                        'menu_class'     => 'footer_last_part_menu'
                     
                    ) );
                    
                    ?>
               
                
        </div>
    </div>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/owl.carousel.min.js"></script>
<!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<!-- Waypoints -->
<script src="<?php echo get_template_directory_uri();?>/js/jquery.waypoints.min.js"></script>
<!-- Main -->
<script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>