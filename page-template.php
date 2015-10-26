<?php
/*
Template Name: 
*/
?>

<?php get_header(); ?>
<div class="page-intro">  
  <h1><?php the_title(); ?></h1>
  <div class="slider-wrap">
    <?php echo do_shortcode('[URIS id=]'); ?>
  </div>  
  <p></p>
  
</div>
  <hr>
  <section class="wrap-left floater clearfix">
    <h2 role="h1">Highlights</h2>
  
    <figure class="country-highlight">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/" alt="">
      <figcaption>
        <h3></h3>
        <p></p>
        <p><strong>Main Attractions</strong></p>
        <ul>
          <li>~</li>
          <li>~</li>
          <li>~</li>
          <li>~</li>
          <li>~</li>
          <li>~</li>
          <li>~</li>
        </ul>
      </figcaption>
    </figure><!--end Dubai-->
      <figure class="country-highlight">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/" alt="">
      <figcaption>
        <h3></h3>
        <p></p>
        <p><strong>Main Attractions:</strong></p>
        <ul class="main-attractions">
          <li>~</li>
          <li>~</li>
          <li>~</li>
          <li>~</li>
        </ul>
      </figcaption>
    </figure><!--end Abu Dhabi-->
    <figure class="country-highlight">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/" alt="">
      <figcaption>
        <h3></h3>
        <p></p>
        <p><strong>Main Attractions</strong></p>
        <ul>
          <li>~</li>
          <li>~</li>
          <li>~</li>
          <li>~</li>
          <li>~</li>
        </ul>
      </figcaption>
    </figure><!--end -->    
  </section>
    <section class="right-sidebar rightF clearfix">
      <?php
        if ( is_active_sidebar( 'packside' ) ) : ?>
	         <ul id="sidebar">
		          <?php dynamic_sidebar( 'packside' ); ?>
	         </ul>
      <?php endif; ?>    
    </section>

</div><!--end full container-->
<?php comments_template(); ?>

<?php get_footer(); ?>