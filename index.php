<?php get_header(); 

/*Template Name: Blog */

?>
<div class="wrapper">
  <section class="wrap-left floater">
    <div class="page-intro">
      <h1>Helaine's Latest Travel Adventures</h1>
      <p>Live vicariously through Helaine's many travel adventures, and if living vicariously is not good enough, <a href="mailto:alphajtravel@aol.com">Contact Helaine</a> to book your own adventure!</p>
    </div>
  <?php
  if(have_posts()): while(have_posts()): the_post();
  ?>
    <a href="<?php the_permalink(); ?>">
        <figure class="package">
          <?php the_post_thumbnail('large');?>
          <figcaption>
            <h2><?php the_title(); ?></h2>
            <div class="single-meta">
              <span class="date single-data"><strong>Date Published: </strong><?php the_date(); ?>   </span>
              <?php $terms = get_the_terms( $post->ID, 'destinations' );
						
                if ( $terms && ! is_wp_error( $terms ) ) :
	                 $destinations = array();
	                 foreach ( $terms as $term ) {
		                  $destinations[] = $term->name;
	                   }						
	                 $destname = join( ", ", $destinations);  ?> 
                  <span class="tax single-data"><strong>Destination(s): </strong><?php echo $destname; ?></span> 
                <?php endif; wp_reset_postdata(); ?>
            <?php $terms = get_the_terms( $post->ID, 'trip-length' );
						
            if ( $terms && ! is_wp_error( $terms ) ) : 
	             $duration = array();
	             foreach ( $terms as $term ) {
		            $duration[] = $term->name;
	               }
                $lengthname = join( ", ", $duration);  ?> 
              <span class="tax single-data"><strong>Trip Duration: </strong><?php echo $lengthname; ?></span> 
              <?php endif; wp_reset_postdata(); ?>
            </div><!--end single-meta-->
            <p class="excerpt"><?php the_excerpt(); ?></p>
          </figcaption>
      </figure>
    </a>
  <?php endwhile; endif; wp_reset_postdata(); ?>
      <?php comments_template(); ?>

  </section><!--end wrap-left floater-->
  <div class="right-sidebar rightF clearfix">
    <?php get_sidebar('right'); ?>
  </div><!--end right-sidebar-->

</div><!--end wrapper 100% width-->
<?php get_footer(); ?>
