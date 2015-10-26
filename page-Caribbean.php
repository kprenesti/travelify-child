<?php
/*
Template Name: Caribbean
*/
?>

<?php get_header(); ?>
<div class="page-intro">  
  <h1><?php the_title(); ?></h1>
  <p></p>
  <div class="slider-wrap">
    <?php// echo do_shortcode('[URIS id=131]'); ?>
  </div>  
</div>
  <section class="wrap-left floater clearfix">
    <h2 role="h1">Highlights</h2>
    <figure class="country-highlight">
      <iframe src="https://www.youtube.com/embed/9h-VWg7ktJ0" frameborder="0" allowfullscreen></iframe>      
      <figcaption>
        <h3>US Virgin Islands</h3>
        <p>If you enjoy a white sandy beach, a crystal clear ocean filled with nautical wonders and colorful fish, visit the Virgin Islands.  If you enjoy quaint towns, a rich history, and friendly people, visit the Virgin Islands.  This video was made by <a href="https://www.youtube.com/user/TheTHEFROPICK" target="_blank">Jefferey H</a> on YouTube.</p>
        <p><strong>Main Attractions:</strong></p>
        <ul class="main-attractions">
          <li>~USVI: St. Thomas</li>
          <li>~USVI: St. Croix</li>
          <li>~USVI: St. John</li>
          <li>~BVI: Tortola</li>
          <li>~BVI: Virgin Gorda &amp; The Baths</li>
          <li>~BVI: Jost Van Dyke</li>
          <li>~BVI: Anegada</li>
        </ul>
      </figcaption>
    </figure><!--end Beijing-->
    <figure class="country-highlight">
      <iframe src="https://www.youtube.com/embed/XQHJ-UlejuA" frameborder="0" allowfullscreen></iframe>
      <figcaption>
        <h3>Bahamas</h3>
        <p>Some of the most beloved and recognizable faces in The Bahamas explain why It's Better In The Bahamas! From top-notch cuisine and nightlife to pink sand beaches, the world's clearest water and the friendliest people in the Caribbean, The Islands Of The Bahamas offer so much more than a vacation!</p>
        <p><strong>Main Attractions</strong></p>
        <ul>
          <li>~Nassau &amp; Grand Bahama Island</li>
          <li>~Atlantis</li>
          <li>~Harbor Island's Pink Sand Beaches</li>
          <li>~Andros</li>
        </ul>
      </figcaption>
    </figure><!--end Shanghai-->
    <figure class="country-highlight">
      <iframe src="https://www.youtube.com/embed/knbjMK4ospg" frameborder="0" allowfullscreen></iframe>         
      <figcaption>
        <h3>Turks and Caicos</h3>
        <p>Visitors are drawn to Turks & Caicos' promise of sand, sun and an extremely relaxing atmosphere, especially on Providenciales. But thrill-seekers can also find some great diving sites, like the limestone swimming "Hole" or Middle Caicos Caves.</p>
        <p><strong>Main Attractions</strong></p>
        <ul>
          <li>~Grace Bay</li>
          <li>~Taylor Bay</li>
          <li>~Bight Reef</li>
          <li>~Smith Reef</li>
          <li>~Middle Caicos Caves</li>
        </ul>
      </figcaption>
    </figure><!--end Hong Kong-->
    <figure class="country-highlight">
      <iframe src="https://www.youtube.com/embed/z4RTpE-CptA" frameborder="0" allowfullscreen></iframe>
      <figcaption>
        <h3>Cayman Islands</h3>
        <p>A family-friendly destination, filled with nature trails both above and below the water.  Below the water encounter reefs, sea turtles, and stingrays; above the water, encounter lush forests, beautiful beaches, and local smiles.</p>
        <p><strong>Main Attractions</strong></p>
        <ul>
          <li>~Seven Mile Beach</li>
          <li>~Stingray City</li>
          <li>~Little Cayman</li>
          <li>~Grand Cayman</li>
          <li>~Cayman Brac</li>
        </ul>
      </figcaption>
    </figure><!--end Lijiang-->
    
  </section>
    <section class="right-sidebar rightF clearfix">
 <?php
if ( is_active_sidebar( 'packside' ) ) : ?>
	<ul id="sidebar">
		<?php dynamic_sidebar( 'packside' ); ?>
	</ul>
<?php endif; ?>
</section>
  <?php comments_template(); ?> 

<?php get_footer(); ?>