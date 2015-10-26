<?php 

/* Template Name: News */ 

get_header();

$args = array(
  'post_type' => 'news',
  'posts_per_page' => -1,
  'order' => 'date',
  'orderby' => 'DESC'
);
$query = new WP_Query($args);
?>
<section class="wrap-left floater">
    <div class="page-intro">
      <h1>News and Announcements</h1>
      <p>Take a look at the latest News and Announcements for Alpha J. Travel.  If you have questions or concerns, please feel free to <a href="mailto:alphajtravel.com">Contact us.</a></p>
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
                <h4>Expires: <?php the_field('end');?></h4>
              <?php endif; ?>
            <p><?php the_excerpt(); ?></p>
          </figcaption>
      </figure>
    </a>
  <?php endwhile; 
  else: echo "At the moment, there are neither news nor announcements, but check back often for the latest travel news!";
endif; wp_reset_postdata(); ?>

  </section><!--end wrap-left floater-->
  <div class="right-sidebar rightF clearfix">
    <?php get_sidebar('right'); ?>
  </div><!--end right-sidebar-->
  <?php comments_template(); ?>

<?php get_footer(); ?>
