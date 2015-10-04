<?php get_header(); ?>
<div class="wrapper">
  <section class="wrap-left floater">
    <div class="page-intro">
      <h1>
        <span class="tax-label"><!--echoes taxonomy parent label-->
          <?php $the_tax = get_taxonomy( get_query_var( 'taxonomy' ) );
          echo $the_tax->labels->name; ?>:
        </span> 
        <span class="tax-name"><!--echoes specific taxonomy name-->
              <?php 
                $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); 
                echo $term->name; ?>
        </span>
      </h1>  
    </div><!--end page Intro-->
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <a href="<?php the_permalink(); ?>">
        <figure class="package">
          <?php the_post_thumbnail('large'); ?>
          <figcaption>
            <h2><?php the_title(); ?></h2>
            <?php if(get_field('duration') || get_field('price')) { ?>
              <h3><span class="duration"><?php the_field('duration'); ?></span><span class="price">from $<?php the_field('price'); ?> per person</span></h3>
            <?php  }
              if(get_field('start') && get_field('end')) {  ?>
                <h4><?php the_field('start'); ?> - <?php the_field('end'); ?></h4>
              <?php } elseif(get_field('end')) { ?>
                <h4>Offer expires <?php the_field('end'); ?></h4>
              <?php } ?>
            <p><?php the_excerpt(); ?></p>
          </figcaption>
      </figure>
    </a>
  <?php endwhile;
    else:
        echo '<p>Sorry, no content found.</p>'; 
      
    endif;
  comments_template(); ?>

  </section><!--end wrap-left floater-->
  <div class="right-sidebar clearfix rightF">
    <?php get_sidebar('right'); ?>
  </div><!--end right-sidebar-->
</div><!--end wrapper 100% width-->
<?php get_footer(); ?>