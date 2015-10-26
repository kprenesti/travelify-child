<?php
/*
Template Name: russia
*/
?>

<?php get_header(); ?>
<div class="page-intro">  
  <h1><?php the_title(); ?></h1>
  <div class="slider-wrap">
    <?php echo do_shortcode('[URIS id=437]'); ?>
  </div>  
  <p>Look at Russia on any map or globe and you will immediately appreciate why it is virtually impossible to see all the sights the world's biggest country has to offer. The country is so massive that even a lifetime is not enough to explore it all.</p>
  
</div>
<hr>
  <section class="wrap-left floater clearfix">
    <h2 role="h1">Highlights</h2>
    <figure class="country-highlight">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/russia/moscow.jpg" alt="Moscow">
      <figcaption>
       <h3>Moscow</h3>
        <p>Russia's capital, the city that never sleeps.  Steeped in a complex history, adorned by resplendent beauty, Moscow is a city not to be missed.</p>
        <p><strong>Main Attractions:</strong></p>
        <ul class="main-attractions">
          <li>~Kremlin</li>
          <li>~Red Square</li>
          <li>~St. Basil's Cathedral</li>
          <li>~Bolshoi Theatre</li>
          <li>~Christ the Saviour Cathedral</li>
          <li>~VDNKh exhibition centre</li>
          <li>~Kolomenskoe Estate</li>
          <li>~Victory Park</li>
        </ul>
      </figcaption>
    </figure><!--end Moscow-->
    <figure class="country-highlight">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/russia/stpetersburg.jpg" alt="St. Petersburg">
      <figcaption>
         <h3>St. Petersburg</h3>
        <p>One of the world's most beautiful cities, St. Petersburg has all the ingredients for an unforgettable travel experience: high art, lavish architecture, wild nightlife, an extraordinary history and rich cultural traditions that have inspired and nurtured some of the modern world's greatest literature, music, and visual art.p>
        <p><strong>Main Attractions</strong></p>
        <ul>
          <li>~Hermitage Museum</li>
          <li>~Winter Palace</li>
          <li>~The Catherine Palace</li>
          <li>~Church of Our Saviour of the Spilt Blood</li>
          <li>~The Bronze Horseman Statue</li>
        </ul>
      </figcaption>
    </figure><!--end St. Petersburg-->
    <figure class="country-highlight">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/russia/kazan.jpg" alt="Kazan">
      <figcaption>
        <h3>Kazan</h3>
        <p>On the banks of the Volga River, Kazan sits austerely, its cityscape a visual confection of architecture that somehow manages to be both playful and severe.</p>
        <p><strong>Main Attractions</strong></p>
        <ul>
          <li>Kazan Kremlin</li>
          <li>~Bauman Street</li>
          <li>~Cathedral of Apostles Peter and Paul</li>
          <li>~Temple of All Religions</li>
          <li>~Museum of Soviet Life</li>
          <li>~Annunciation Cathedral</li>
          <li>~Compound of the Raifskiy Monastery</li>
        </ul>
      </figcaption>
    </figure><!--end Kazan-->
    <figure class="country-highlight">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/russia/golden-ring.png" alt="The Golden Ring">
      <figcaption>
        <h3>The Golden Ring</h3>
        <p>The Golden Ring is textbook Russia: onion-shaped domes, kremlins and gingerbread cottages with cherry orchards. It is a string of the country’s oldest towns that formed the core of eastern Kyivan Rus. Largely untouched by Soviet industrialisation, they now attract flocks of Russian tourists in search of the lost idyll.</p>
        <p><strong>Main Attractions</strong></p>
        <ul>
          <li>~Suzdal</li>
          <li>~Yaroslavl</li>
          <li>~Kostroma</li>
          <li>~Vladimir</li>
          <li>~Levitan House Museum</li>
        </ul>
      </figcaption>
    </figure><!--end Golden Ring-->
    <figure class="country-highlight">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/russia/other.jpg" alt="Trans-Siberian Railway">
      <figcaption>
        <h3>Other Highlights of Russia</h3>
        <p>Russia is a vast land full of amazing experiences.  The following list are some of the things you must do when you visit Russia.</p>        
        <p><strong>Main Attractions</strong></p>
        <ul>
          <li>~Trans-Siberian Railway (aka The Route of the Czars)</li>
          <li>~Mt. Elbrus</li>
          <li>~Valley of Geysers</li>
          <li>~Kizhi Island</li>
          <li>~Lake Baikal</li>
        </ul>
      </figcaption>
    </figure><!--end Other Russia Highlights-->
    
    <?php comments_template(); ?> 

  </section>
    <section class="right-sidebar rightF clearfix">
       <?php if ( is_active_sidebar( 'packside' ) ) : ?>
	       <ul id="sidebar">
		        <?php dynamic_sidebar( 'packside' ); ?>
	       </ul>
      <?php endif; ?>
    </section>

<?php get_footer(); ?>