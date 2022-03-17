<?php  get_header();?>

<?php while(have_posts())
              the_post();
              $imgpath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
              ?>
              <?php the_title(); ?>
              <img src="<?php echo $imgpath[0]; ?>" alt="">
              <p><?php the_excerpt(); ?></p>
              <p><?php get_the_date();?></p>
              <a href=" <?php the_permalink(); ?>"><input type="button" name="" value="Read More"></a>
        <div class="clear">
        <?php echo wp_pagenavi(); ?>
        </div>
<?php get_footer(); ?>        