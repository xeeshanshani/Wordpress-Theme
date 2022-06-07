

<body <?php body_class(); ?>>
<?php get_header(); 
get_template_part('template-parts/banner-title');

?>


  <div class="content-area">
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2 overflow-hidden">
<?php 
// while loop to display blog posts
if ( have_posts() ) :
  while ( have_posts() ) :
    the_post();
    get_template_part('template-parts/content-excerpt');
  endwhile;
  b2w_pagination();
else:
  get_template_part('template-parts/content', 'none');
endif;
  
  ?>

       
 

  

        </div>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>

</body>

</html>