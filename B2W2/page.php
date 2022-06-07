
<body <?php body_class(); ?>>
<?php get_header(); 
get_template_part('template-parts/banner-title');

?>
<div class="content-area">

<div class="container">

  <div class="row">
  <?php 
// while loop to display blog posts
if ( have_posts() ) :
  while ( have_posts() ) :
    the_post();
    endwhile;
?>

    <div class="col-md-8 offset-md-2 overflow-hidden">

    <article id="post <?php the_ID(); ?>" <?php post_class(); ?> >
    <?php
    if(has_post_thumbnail()){
      the_post_thumbnail('large', array('class' => 'img-fluid'));
    }
    the_content();
    ?>
       
    </article>

    </div>
<?php
else:
    get_template_part('template-parts/content', 'none');
endif;
    
    ?>
    </div>
</div>

</div>

<?php get_footer(); ?>