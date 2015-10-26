<?php
/*
Template Name: India
*/
?>

<?php get_header(); ?>
<div class="page-intro">  
  <h1><?php the_title(); ?>: The Golden Triangle</h1>
  <div class="slider-wrap">
    <iframe class="floater clearfix" width="560" height="315" src="https://www.youtube.com/embed/C3wlehFGvf8" allowfullscreen></iframe>
    <iframe class="floater clearfix" width="560" height="315" src="https://www.youtube.com/embed/NhAi3OiIU4c" allowfullscreen></iframe>
  </div>  
  <p>The magical Golden Triangle in India is one of the country's most popular tourist circuits. Comprising Delhi, Agra and Jaipur, it gets its name from the triangle that these cities form. Roughly located an equal distance of around 200-250 kilometers (125-155 miles) from each other in northern India, the cities provide a classic and unforgettable introduction to the country and its charms.</p>
  
</div>
  <hr>
  <section class="wrap-left floater clearfix">
    <h2 role="h1">Highlights</h2>
    <figure class="country-highlight">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/india/delhi.jpg" alt=" Qutab Minar-Delhi">
      <figcaption>
        <h3>Delhi</h3>
        <p>Start your tour in Delhi and get a two-for-one experience. Delhi is divided into two parts -- the crumbling old city of Old Delhi, and the orderly and well planned New Delhi -- which exist side by side, but feel like they're worlds apart.</p>
        <p><strong>Main Attractions:</strong></p>
        <ul class="main-attractions">
          <li>~India Gate</li>
          <li>~Chandni Chowk (Old Delhi's main street)</li>
          <li>~Swaminarayan Akshardham</li>
          <li>~Humayun's Tomb (The inspiration to the Taj Mahal)</li>
          <li>~Lodi Gardens</li>
          <li>~Qutab Minar</li>
          <li>~Gandhi Smriti (Mahatma Gandhi's house)</li>
        </ul>
      </figcaption>
    </figure><!--end -->
    <figure class="country-highlight">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/india/taj.jpg" alt="Taj Mahal">
      <figcaption>
        <h3>The Taj Mahal in Agra</h3>
        <p>The Taj Mahal, the famed mausoleum complex, was built over more than 20 years and is one of the most outstanding examples of Mughal architecture, which combined Indian, Persian and Islamic influences. Designated a UNESCO World Heritage site in 1983, The Taj Mahal remains one of the world’s most celebrated structures and a stunning symbol of India’s rich history.</p>
        <p><strong>Other Attractions in Agra</strong></p>
        <ul>
          <li>~Taj Nature Walk</li>
          <li>~Agra Fort</li>
          <li>~<a href="http://sheroeshangout.com/" target="_blank">Sheroes Hangout</a></li>
          <li>~<a href="http://www.tourismguildagra.com/mughal-heritage.php" target="_blank">Mughal Heritage Walk</a></li>
        </ul>
      </figcaption>
    </figure><!--end -->
    <figure class="country-highlight">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/india/jaipur.jpg" alt="Hawa Mahal in Jaipur">
      <figcaption>
        <h3>Jaipur</h3>
        <p>India's desert capital of Jaipur, affectionately referred to as the Pink City because of the pink walls and buildings of the old city, lures visitors with its stunning remnants of a bygone era. </p>
        <p><strong>Main Attractions</strong></p>
        <ul>
          <li>~Amber Fort and Palace</li>
          <li>~"Hawa Mahal" Palace of the Winds</li>
          <li>~Jantar Mantar Observatory</li>
          <li>~Ride an Elephant</li>
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