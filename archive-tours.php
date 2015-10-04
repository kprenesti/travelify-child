<?php 

/* Template Name: All Packages */ 

get_header();

$args = array(
  'post_type' => 'tours',
  'posts_per_page' => -1
);
$query = new WP_Query($args);
?>
<section class="wrap-left floater">
    <div class="page-intro">
      <h1>Travel Packages &amp; Promotions</h1>
      <p>Below is a list of all current travel packages and promotions.  While some packages may be listed as expired, please <a href="mailto:alphajtravel@aol.com">contact Helaine</a> if you're interested in the package.  She may be able to recreate it and/or customize it to your exact specifications.</p>
    </div>
  <?php
  if($query-> have_posts()): while($query->have_posts()): $query->the_post();
  ?>
    <a href="<?php the_permalink(); ?>">
        <figure class="package">
          <?php the_post_thumbnail('large');?>
          <figcaption>
            <h2><?php the_title(); ?></h2>
            <h3><span class="duration"><?php the_field('duration'); ?></span>  |  <span class="price"><span>from $</span><?php the_field('price');?> per person</span></h3>
            <?php  
              if(get_field('start') && get_field('end')) :  ?>
                <h4><?php the_field('start');?> - <?php the_field('end'); ?></h4>
              <?php elseif(get_field('end')):?>
                <h4>Offer expires <?php the_field('end');?></h4>
              <?php endif; ?>
            <p><?php the_excerpt(); ?></p>
          </figcaption>
      </figure>
    </a>
  <?php endwhile; endif; wp_reset_postdata(); ?>

  </section><!--end wrap-left floater-->
  <div class="right-sidebar rightF clearfix">
    <?php get_sidebar('right'); ?>
  </div><!--end right-sidebar-->
  <?php comments_template(); ?>

<?php get_footer(); ?>
