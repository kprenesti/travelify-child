<?php
/*
Template Name: Egypt
*/
?>

<?php get_header(); ?>
<div class="full-container clearfix">
<div class="page-intro">  
  <h1><?php the_title(); ?></h1>
  <div class="slider-wrap">
    <?php echo do_shortcode('[URIS id=409]'); ?>
  </div>  
  <p>Most of Egypt tourists describe their trip to Egypt as an overwhelming experience: the culture, the nature, the sights, the history, the people, the lifestyle, the cuisine… It is truly a unique experience.</p>
  <p>Unfortunately, at this time it is unsafe to travel to Egypt and we will not reccommend an Egypt land tour until the political tensions have resolved.  But "this too shall pass", and when it is again safe to travel to Egypt, Alpha J. Travel will be your passport to this dream destination. </p>
  
  <hr>
</div>
  <section class="wrap-left floater clearfix">
    <h2 role="h1">Highlights</h2>
    <figure class="country-highlight">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/egypt/luxor.jpg" alt="Luxor">
      <figcaption>
        <h3>Luxor</h3>
        <p>Luxor, once an Ancient Egyptian capital, is known today as the world's "greatest open-air museum." From the tomb of Tutankhamen in the Valley of the Kings and the magnificent sunset views at the majestic temple complexes of Karnak and Luxor to the exciting and fun Nile cruises, Luxor is the perfect choice for culture vultures.</p>
        <p><strong>Main Attractions:</strong></p>
        <ul class="main-attractions">
          <li>~Valley of the Kings</li>
          <li>~Temple of Luxor</li>
          <li>~Colossi of Memnon</li>
          <li>~Karnak Temple Complex</li>
          <li>~Nile River Cruise</li>
          <li>~Valley of the Queens</li>
          <li>~Mummification Museum</li>
        </ul>
      </figcaption>
    </figure><!--end Luxor-->
    <figure class="country-highlight">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/egypt/giza.JPG" alt="Giza">
      <figcaption>
        <h3>Giza Plateau</h3>
        <p>The Giza Plateau is home to the only one of the 7 Wonders of the Ancient World still standing: The Great Pyramids of Giza. Ride a camel past the pyramids and wave hello to the Sphinx.</p>
        <p><strong>Main Attractions</strong></p>
        <ul>
          <li>~Khufu's Pyramid</li>
          <li>~Pyramids of Khafre and Menkaure</li>
          <li>~The Sphinx</li>
          <li>~Giza Camel Ride</li>
        </ul>
      </figcaption>
    </figure><!--end Giza Plateau-->
    <figure class="country-highlight">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/egypt/cairo.png" alt="Nice">
      <figcaption>
        <h3>Cairo</h3>
        <p>Cairo is a vibrant, exhilarating, exotic, fascinating and welcoming city. Home to the best Pharaonic, Coptic and Islamic sights in Egypt, this city is where you never know what incredible, half-forgotten monument you might stumble across while wandering around.</p>
        <p><strong>Main Attractions</strong></p>
        <ul>
          <li>~Egyptian National Museum in Tahrir Square</li>
          <li>~Khan El-Khalili bazaar</li>
          <li>~Al-Azhar Park</li>
          <li>~Mosque of Muhammad Ali</li>
          <li>~Coptic Museum</li>
          <li>~Hanging Church</li>
        </ul>
      </figcaption>
    </figure><!--end Cairo-->
    <figure class="country-highlight">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/egypt/alexandria.jpg" alt="Alexandria">
      <figcaption>
        <h3>Alexandria</h3>
        <p>Famous for being called the "Pearl of the Mediterranean,” the captivating Alexandria will fascinate you with its mix of history and modernity.</p>
        <p><strong>Main Attractions</strong></p>
        <ul>
          <li>~Bibliotheca Alexandrina</li>
          <li>~The Catacombs of Kom el-Shouqafa</li>
          <li>~Qaitbey Fortress</li>
          <li>~Montazah Complex</li>
          <li>~Graeco-Roman Museum</li>
        </ul>
      </figcaption>
    </figure><!--end Alexandria-->
    <figure class="country-highlight">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/egypt/Aswan.jpg" alt="Aswan">
      <figcaption>
        <h3>Aswan</h3>
        <p>Aswan is known as the ‘the market’ because of the trade route between Egypt and the southern lands. This is the place to go shopping. You can purchase rare spices of the area-and even gold and ivory for an extra special gift or travel souvenir. Take a tour of the Botanical Gardens on Kitchener Island, or sightsee around one of the numerous temples or the Nubian Museum.</p>        
        <p><strong>Main Attractions</strong></p>
        <ul>
          <li>~Aswan Souk (The marketplace)</li>
          <li>~Temple of Philae</li>
          <li>~Agha Khan Mausoleum</li>
          <li>~St. Simeon’s Monastery</li>
          <li>~Relax on the beach</li>
        </ul>
      </figcaption>
    </figure><!--end Aswan-->
    <figure class="country-highlight">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/egypt/red-sea-coast.jpg" alt="The Red Sea Coast">
      <figcaption>
        <h3>The Red Sea Riviera</h3>
        <p>Revel under the sun in the Red Sea Riviera and enjoy some of the best seaside and family activities in eastern Egypt.</p>
        <p><strong>Main Attractions:</strong></p>
        <ul>
          <li>~Deep Sea Diving year-round</li>
          <li>~Underwater fishing</li>
          <li>~Hurghada</li>
        </ul>
      </figcaption>
    </figure><!--end Red Sea Riviera -->
  </section>
    <section class="right-sidebar rightF clearfix">
      <?php get_sidebar('right'); ?>
    </section>

</div><!--end full container-->
<?php comments_template(); ?>

<?php get_footer(); ?>