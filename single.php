<?php get_header(); ?>
<div class="wrap-left floater">

<?php  if(have_posts()) : while(have_posts()) : the_post(); ?>
  <div class="intro">
    <h1><?php the_title(); ?></h1>
  </div>
  <div class="single-meta">
    <span class="date single-data"><strong>Date Published: </strong><?php the_date(); ?>   </span>
        <?php 

        $terms = get_the_terms( $post->ID, 'destinations' );
						
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
  </div>
  <div class="pic-desc-wrap">
    <div class="feat-img">
      <?php the_post_thumbnail('large'); ?>
    </div>  
    <hr>
    <div class="description">
      <?php the_content(); ?>
    </div>
  </div><!--end pic-desc-wrap-->
  
  <?php endwhile; endif; wp_reset_postdata(); ?>
  <?php comments_template(); ?>
</div><!--end wrap-left-->

<div class="right-sidebar clearfix rightF">
  <?php get_sidebar('right'); ?>
</div>
<?php get_footer(); ?>
