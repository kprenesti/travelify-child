<?php
/*
Template Name: Greece
*/
?>

<?php get_header(); ?>
<div class="page-intro">  
  <h1><?php the_title(); ?></h1>  <div class="slider-wrap">
    <?php echo do_shortcode('[URIS id=375]'); ?>
  </div>  
</div>
  <hr>
  <section class="wrap-left floater clearfix">
    <h2 role="h1">Highlights</h2>
  
    <figure class="country-highlight">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/greece/athens.jpg" alt="Athens">
      <figcaption>
        <h3>Athens</h3>
        <p>Athens has been the center of Greek civilization for some 4,000 years. The capital of modern Greece, it’s still dominated by 5th-century-B.C.E. landmarks, including the Acropolis, a hilltop citadel topped with ancient buildings such as the colonnaded Parthenon temple. But it’s also a contemporary city, and it’s not uncommon for the nightlife hubs of Kolonaki, Psiri and Gazi to stay busy until dawn.</p>
        <p>Check out this<a href="http://content.time.com/time/travel/cityguide/article/0,31489,1942641_1942848_1941169,00.html" target="_blank">Time article</a> about Athens</p>
        <p><strong>Main Attractions</strong></p>
        <ul>
          <li>~Acropolis</li>
          <li>~Parthenon</li>
          <li>~National Archeological Museum</li>
          <li>~Ancient Agora</li>
          <li>~Anafiotika</li>
        </ul>
      </figcaption>
    </figure><!--end Athens-->
      <figure class="country-highlight">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/greece/Mykonos.JPG" alt="Mykonos">
      <figcaption>
        <h3>Mykonos</h3>
        <p>Set out on a journey to discover a fascinating world where glamour meets simplicity. On Mykonos celebrities, college students and families mingle together to celebrate the Greek summer. Whether you are an entertainment junkie out for a real good time, or a visitor who wishes to explore the island’s history and tradition, Mykonos will certainly meet your expectations.</p>
        <p><strong>Main Attractions:</strong></p>
        <ul class="main-attractions">
          <li>~Paradise Beach</li>
          <li>~Little Venice</li>
          <li>~The Windmills</li>
          <li>~Paraportiani Church</li>
        </ul>
      </figcaption>
    </figure><!--end Mykonos-->
    <figure class="country-highlight">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/greece/Santorini.jpg" alt="Santorini">
      <figcaption>
        <h3>Santorini</h3>
        <p>Even if you’ve never been to this Cyclades island in the Aegean Sea, you’d still recognize it immediately – candy-colored houses carved into cliffs, sapphire waters, gleaming white buildings topped with half-spheres the color of a stormy sky. Here you’ll find peace as you roam the black sand beaches or the streets of a provincial village like Imerovigli. Beautiful Oia is world famous for its sunsets, which seem tinted with every shade of an artist’s palette.</p>
        <p><strong>Main Attractions</strong></p>
        <ul>
          <li>~Caldera / Cliff / Volcano</li>
          <li>~Thirassia</li>
          <li>~Hot Springs - Sulfur beach</li>
          <li>~Red Beach</li>
          <li>~Sunset in Ola</li>
        </ul>
      </figcaption>
    </figure><!--end Santorini-->    
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