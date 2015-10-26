<?php  
  /*
  Template Name: Dream Destinations
  */
get_header(); 
?>
<div class="page-intro">
  <h1><?php the_title(); ?></h1>
  <p>You have a dream: a dream of culture, art, and food in places exotic and mundane.  You have a dream of luxury accomidations or priceless family moments.  You have a dream of travel, and we are the passport to your dream destinations. Explore the world (and our site), and GO! The world is yours...capture it! </p>
</div>
<section class="wrap-left floater">
  <div class="full-container">
    <?php 

    $child_pages = new WP_Query( array(
        'post_type'      => 'page', // set the post type to page
        'posts_per_page' => -1, // number of posts (pages) to show
        'post_parent'    => 16, // enter the post ID of the parent page
        'orderby'        => 'id',
        'order'          => 'ASC',
        'no_found_rows'  => true, // no pagination necessary so improve efficiency of loop
    ) );


    if ( $child_pages->have_posts() ) : while ( $child_pages->have_posts() ) : $child_pages->the_post(); ?>
      <a href="<?php the_permalink(); ?>">
        <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
        ?>
        <div class="dd-country" style="background: url('<?php echo $src[0]; ?>') center center no-repeat; background-size: cover;">
          <h3><?php the_title(); ?></h3>
        </div>
      </a>

    <?php endwhile; endif; wp_reset_postdata(); ?>

  </div><!--end flex-->
</section><!--end wrap-left floater-->
<section class="right-sidebar clearfix rightF">
  <?php get_sidebar('right'); ?>
</section>
<?php comments_template(); ?>
<?php get_footer(); ?>

