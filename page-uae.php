<?php
/*
Template Name: UAE
*/
?>

<?php get_header(); ?>
<div class="page-intro">  
  <h1><?php the_title(); ?></h1>
  <div class="slider-wrap">
    <?php echo do_shortcode('[URIS id=423]'); ?>
  </div>  
  <p>Perpetual sun, endless white sand and turquoise seas have helped to attract many tourists over the years, but it is the UAE's unbeatable shopping, superb resorts, excellent restaurants, spectacular events, an intriguing traditional culture, and a safe and welcoming environment that lure visitors back time and time again.</p>
  
</div>
  <hr>
  <section class="wrap-left floater clearfix">
    <h2 role="h1">Highlights</h2>
  
    <figure class="country-highlight">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/uae/dubai.JPG" alt="Dubai">
      <figcaption>
        <h3>Dubai</h3>
        <p>Glitzy Dubai is the United Arab Emirates' vacation hot spot. This city of high-rises and shopping malls has transformed itself from a desert outpost to a destination du-jour, where people flock for sales bargains, sunshine and family fun.</p>
        <p><strong>Main Attractions</strong></p>
        <ul>
          <li>~Burj Khalifa</li>
          <li>~Al-Fahidi Fort and Dubai Museum</li>
          <li>~Bastakia quarter (Old / Historical Dubai)</li>
          <li>~Mall of the Emirates</li>
          <li>~Sheikh Saeed Al-Maktoum House</li>
          <li>~Jumeirah Mosque</li>
          <li>~Jumeirah Beach</li>
        </ul>
      </figcaption>
    </figure><!--end Dubai-->
      <figure class="country-highlight">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/uae/abudhabi-mosque.jpg" alt="Abu Dhabi">
      <figcaption>
        <h3>Abu Dhabi</h3>
        <p>From Forbes, "Flush with opulent hotels and resorts from the beach to the desert to the city, Abu Dhabi has more than enough luxe hospitality for travelers. But private plunge pools, lavish palace-inspired suites and 24-hour butler service aren’t the only things this capital city of the United Arab Emirates is hoping will entice you to visit. It’s also positioning itself as an international cultural hub, hosting everything from the Abu Dhabi HSBC Golf Championship to the Abu Dhabi Film Festival." <a href="http://www.forbes.com/sites/forbestravelguide/2013/01/28/why-tovisit-abu-dhabi-in-2013/" target="_blank">Read More</a></p>
        <p><strong>Main Attractions:</strong></p>
        <ul class="main-attractions">
          <li>~Sheikh Zayed Grand Mosque</li>
          <li>~Jumeirah at Etihad Towers Hotel Observation Deck</li>
          <li>~Qasr Al-Hosn</li>
          <li>~Yas Island</li>
        </ul>
      </figcaption>
    </figure><!--end Abu Dhabi-->
    <figure class="country-highlight">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/uae/ras.jpg" alt="Ras Al Khaimah">
      <figcaption>
        <h3>Ras Al Khaimah</h3>
        <p>Ras Al Khaimah offers a truly authentic Arabian experience, from its golden beaches, lush mangroves and terracotta deserts, to the towering Hajar mountains bordering Oman. As well as its boundless natural attractions and activities, Ras Al Khaimah boasts a number of ancient archaeological sites, giving visitors a fascinating insight to a rich culture that still runs through the very heart of the local population. </p>
        <p><strong>Main Attractions</strong></p>
        <ul>
          <li>~Ras Al-Khaimah National Museum</li>
          <li>~Dhayah Fort</li>
          <li>~Ras Al-Khaimah Pearl Museum</li>
          <li>~Jazirat al-Hamra</li>
          <li>~Khatt Springs</li>
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