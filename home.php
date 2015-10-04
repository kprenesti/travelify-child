<?php 
/*Template Name: Home */
get_header(); ?>
<section class="page-intro home-intro">
  <h1 class="site-welcome">Welcome to Alpha J. Travel</h1>
  <h3 class="site-desc"><?php bloginfo('description'); ?></h3>
  <p>Welcome to Alpha J. Travel, where our passion for travel results in your dream experience. Owned and operated by Helaine Zagaro, an avid traveller with more than twenty-years experience as a travel agent, Alpha J. Travel offers customized European experiences, cruise vacations, domestic travel plans, and more. Whether you're seeking an all-inclusive slice of luxury or a moment your whole family will cherish, Alpha J. Travel is committed to ensuring you get stellar service for a hassle-free experience. Learn more about Alpha J. Travel and Helaine Zagaro <a href="http://www.alphajtravel.com/about-us">here</a></p>
</section>
<section class="offers">
  <h2>Current Offers</h2>
  <div class="services-list"><!--this creates the flexbox-->
  <?php 
    $args = array (
      'post_type' => 'tours',
      'posts_per_page' => 4,
    );
    $query = new WP_Query($args);
    if($query->have_posts()): while($query->have_posts()) : $query->the_post();
  ?>
  <a href="<?php the_permalink(); ?>">
    <div class="service floater clearfix">
      <?php the_post_thumbnail(); ?>
      <div class="service-info">
        <h3><?php the_title(); ?></h3>
        <h4><span class="duration"><?php the_field('duration'); ?></span>  |  <span class="price"><span>from $</span><?php the_field('price');?> per person</span></h4>
              <?php  
                if(get_field('start') && get_field('end')) :  ?>
                    <h5><?php the_field('start');?> - <?php the_field('end'); ?></h5>
                    <?php elseif(get_field('end')):?>
                        <h5>Offer expires <?php the_field('end');?></h5>
                <?php endif; ?>
          <?php the_excerpt(); ?>
      </div><!--end service-info-->
    </div><!--end service-->
  </a><!--end link to each offer-->
  <?php endwhile; endif; wp_reset_postdata(); ?>
  </div><!--end services-list (flexbox end)-->
  <a class="readmore rightF clearfix" href="/packages-and-promotions" role="button">See all offers</a>
</section><!--end offers section-->
<section class="about">
  <h2>About Alpha J. Travel</h2>
  <div class="about floater clearfix">
    <div class="blog">
      <h3>Helaine's Latest Adventure:</h3>
      <br>
      <?php 
        $args = array(
          'post_type'=>'post',
          'posts_per_page' => 1
        );
        $blog= new WP_Query($args);
        if($blog->have_posts()) : while($blog->have_posts()): $blog->the_post(); ?>
      <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('medium'); ?>
        <h3><?php the_title(); ?></h3>
      </a>
      <?php endwhile; endif; wp_reset_postdata(); ?>
      <a class="readmore rightF clearfix" href="http://www.alphajtravel.com/my-travel-adventures">See All Posts</a>
    </div>
    <div class="connect blog">
    <h3>Why Use a Travel Agent?</h3>
    <p>With so many online booking options available, you may be wondering why you would ever want to book with a travel agent.  Here are three reasons you won't want to ignore:</p>
    <ul>
      <li><strong>Security:</strong>  A travel agent knows how to navigate murky waters and help you deal with unforseen complications. A travel agent has your back.</li>
      <li><strong>Knowledge: </strong> Don't get stuck in a crappy hotel in the middle of nowhere.  A travel agent has personal knowledge of the places you'll visit, so you're always assured to get the most bang for your buck.</li>
      <li><strong>Value: </strong>  When you use a travel agent, you're likely to get every promotion available, thus getting more and paying less.</li>
    </ul>
  </div><!--end Why Use a TA-->
  </div>
  <div class="services-list">
      <div class="service floater clearfix">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/travel-signs.jpg">
        <div class="service-info">
          <h3>Custom Itineraries</h3>
          <p>Our dedication to travel leads to your dream vacation.  Wherever you want to go, however you want to get there, Alpha J. Travel can find the perfect accommodations and tours for your travel needs. <a style="color:#FBFBCA" href="http://www.alphajtravel.com/about-us#fit">Read more</a></p>
        </div>
      </div><!--end Custom Itineraries-->
      <div class="service floater clearfix">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/travel-plans.jpg">
        <div class="service-info">
          <h3>Complete Travel Solutions</h3>
          <p>From transportation, to accommodations, to tours and events, Alpha J. Travel will take care of all the details so all you need to do is relax and have fun!</p>
        </div>
      </div><!--end complete travel solutions-->
      <div class="service floater clearfix">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/luxury_hotel.jpg">
        <div class="service-info">
          <h3>Luxury Accommodations</h3>
          <p>If you want a luxury experience with no expense spared, Helaine will ensure you have an unforgettable experience; Helaine has travelled extensively and has first-hand knowledge of the venues she reccommends. </p>
        </div>
      </div><!--end luxury accommodations-->
      <div class="service floater clearfix">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fam-vac.jpg">
        <div class="service-info">
          <h3>Family-Friendly Travel</h3>
          <p>Alpha J. Travel will ensure that every member of the family, from granparents to babies and everyone in between, has an awesome time on their vacation.</p>
        </div>
      </div><!--end family-friendly-->
      <div class="service floater clearfix">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cruiseship.jpg">
        <div class="service-info">
          <h3>Cruises</h3>
          <p>Helaine Zagaro is a cruise specialist, which means that when you tell her the type of vacation you're looking for, she'll navigate you to the best cruise option for your needs.</p>
        </div>
      </div><!--end cruises-->
      <div class="service floater clearfix">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dest-wed.jpg">
        <div class="service-info">
          <h3>Destination Weddings</h3>
          <p>If you want to say "I do" on the shores of a brilliant white sandy beach or atop the Eiffel Tower (or anywhere else), Alpha J. Travel can ensure your day is spectacular.</p>
        </div>
      </div><!--end destination wedding-->
      <div class="service floater clearfix">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/romantic.jpg">
        <div class="service-info">
          <h3>Destination Celebrations</h3>
          <p>Celebrate your birthday in paradise; have an anniversary kiss atop the Eiffel Tower; celebrate a graduation on the Ocean.  Whatever the occasion, Alpha J. Travel can make it a priceless memory.</p>
        </div>
      </div><!--end destination celebrations-->
      <div class="service floater clearfix">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/group.jpg">
        <div class="service-info">
          <h3>Group Travel</h3>
          <p>Want the whole gang together again? Alpha J. Travel can make that dream vacation a reality.</p>
        </div>
      </div><!--end group travel-->
    </div><!--end services-list-->
  </section><!--end about-->
<?php get_footer(); ?>