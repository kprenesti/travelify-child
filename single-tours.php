<?php get_header(); ?>
<div class="wrap-left floater">

<?php  

if(have_posts()) : while(have_posts()) : the_post();
?>
  <div class="intro">
    <h1><?php the_title(); ?></h1>
    <h2><span class="duration"><?php the_field('duration'); ?></span>  |  <span class="price"><span>from $</span><?php the_field('price');?> per person</span></h2>
    <?php  
      if(get_field('start') && get_field('end')) :  ?>
        <h3><?php the_field('start');?> - <?php the_field('end'); ?></h3>
      <?php elseif(get_field('end')):?>
        <h3>Offer expires <?php the_field('end');?></h3>
      <?php endif; ?>
  </div>
  <div class="pic-desc-wrap">
    <div class="feat-img floater">
      <?php the_post_thumbnail('large'); ?>
    </div>  
    <div class="description rightF">
      <h2>Description:</h2>
      <?php the_content(); ?>
    </div>
  </div><!--end pic-desc-wrap-->
  <?php if(get_field('itin')) : ?>
  <div class="itinerary">
    <h2>Itinerary</h2>
    <?php the_field('itin'); ?>
  </div>
  <hr>
  <?php endif; 
    if(get_field('includes')) :?>
      <div class="includes">
        <h2>Package Includes:</h2>
        <?php the_field('includes'); ?>
      </div>
    <?php endif; ?>
  <?php endwhile; endif; wp_reset_postdata(); ?>
  <?php comments_template(); ?>
</div><!--end wrap-left-->

<div class="right-sidebar rightF">
  <?php get_sidebar('right'); ?>
</div>
<?php get_footer(); ?>
