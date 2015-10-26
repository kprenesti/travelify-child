<?php
/*
Template Name: Cruises
*/
?>

<?php get_header(); ?>
<div class="page-intro">  
  <h1><?php the_title(); ?></h1>
  <p>Cruises offer an all-inclusive vacation package*, the ability to travel to multiple places in one vacation, and the convenience of only having to unpack once.  Whether you want to travel in luxury or travel with the whole family, whether you'd prefer beaches or landmarks, quiet or adventure, tradition or free-style, a cruise vacation can answer every preference. But with so many options, the trick is finding the right ship to cater to your desires.  Alpha J. Travel can help you navigate the sea of choices to ensure your dream vacation becomes an unforgettable experience.</p>
</div><!--end intro-->
  <hr>
  <section class="wrap-left floater clearfix">
    <h2 role="h1">Featured Cruise Lines</h2>
  
    <figure class="country-highlight cruiseline">
      <iframe src="https://www.youtube.com/embed/videoseries?list=PL5z8ooYZ6KscLIP-XJQmxNFX69BPehbhF" frameborder="0" allowfullscreen></iframe>
      <figcaption>
        <h3>Norwegian Cruise Line (NCL)</h3>
        <p>Innovators of the Freestyle Cruising concept, NCL makes it their mission to offer as many choices as possible.  NCL offers ships varying in size from average-sized (~1500 - 2500 passengers) to mega-ship-sized (>4000 passengers).  Every ship has a range of accommodations, from the traditional Inside, Oceanview, and Balcony rooms, to the more innovative Haven Lofts or Studio Cabins. Dining options are just as varied; every ship has at least two main dining rooms and a buffet, but they also have no fewer than five specialty restaurants. All ships have a children's club onboard, although some ships have more to offer children than others.</p>
        <p>Read Cruise Critic's comparison article: <a href="http://www.cruisecritic.com/articles.cfm?ID=1884" target="_blank">NCL vs Royal Caribbean</a></p>
      </figcaption>
    </figure><!--end NCL-->
      <figure class="country-highlight">
        <iframe src="https://www.youtube.com/embed/videoseries?list=PL-kPQ9X3_oa3mzyntjUwoV9jY4OpyGcpi" frameborder="0" allowfullscreen></iframe>
      <figcaption>
        <h3>Royal Caribbean International</h3>
        <p>Royal Caribbean, voted Best Cruise Line for the Money by Travel Weekly for twelve consecutive years,  has a reputation for innovation.  They boast having some of the largest cruise ships in the world with their Oasis class ships.  Depending on the ship, Royal Caribbean offers traditional dining, My Time dining, or Dynamic Dining options, and with their partnership with DreamWorks, cruising with kids is a joy on any of their ships.</p>
        <p>Read a comparison between Royal Caribbean and Celebrity: <a href="http://cruiseline.com/advice/how-to-book/pick-a-line/smackdown-celebrity-cruises-vs-royal-caribbean" target="_blank">Smackdown</a></p>
      </figcaption>
    </figure><!--end -->
    <figure class="country-highlight">
      <iframe src="https://www.youtube.com/embed/Rd1Imt7Mn0k" frameborder="0" allowfullscreen></iframe>
      <figcaption>
        <h3>Celebrity Cruise Line</h3>
        <p>Celebrity Cruise Line is a cruise line geared more towards passengers who would appreciate modern luxury.  Quoted from Celebrity, "On a Celebrity Cruise, where you go is important. How you get there, makes all the difference. Whether you want to complement the classic world of Europe with our modern luxury style or unwind on a pristine beach in the Caribbean while being indulged at every turn on board, Celebrity Cruises will deliver an unforgettable vacation like no other."</p>
        <p>Read more about Celebrity Cruises here: <a href="http://cruiseline.com/cruiseline/celebrity-cruises" target="_blank">About Celebrity Cruises</a></p>
      </figcaption>
    </figure><!--end -->  
       <figure class="country-highlight">
         <iframe src="https://www.youtube.com/embed/VLmOeQ1XBD0?list=PL7B0890360855E810" frameborder="0" allowfullscreen></iframe>
      <figcaption>
        <h3>Oceania Cruises</h3>
        <p>Oceania Cruises®, the world's only upper-premium cruise line, offers a winning combination of the superb cuisine, luxurious staterooms and suites, gracious and friendly service and extraordinary value. As the leader in destination cruising, Oceania Cruises sails to more than 330 ports in Europe, Asia, South Pacific, and the Americas </p>
        <p>Read more about Oceania Cruises here: <a href="http://www.avidcruiser.com/cruise-reviews/upper-premium/oceania-cruises/" target="_blank">Oceania Cruises Review</a></p>
      </figcaption>
    </figure><!--end -->
	<figure class="country-highlight cruiseline">
     <iframe width="560" height="315" src="https://www.youtube.com/embed/sfbeEWSKa84" frameborder="0" allowfullscreen></iframe>
      <figcaption>
        <h3>Viking River Cruises</h3>
        <p>From the most intimate rivers to the widest ocean horizons shimmering with possibility, there are waterways to explore, cultures to welcome you and fantastic natural beauty to behold. A glimpse into the world of Viking Cruises® reveals enriching itineraries over much of the world in some of the most rewarding and fascinating locations.</p>
		<p>Read more about Viking River Cruises: <a href="http://www.rivercruiseadvisor.com/cruise-companies/viking-river-cruises/" target="_blank">Viking River Cruises</a></p>
      </figcaption>
    </figure><!--end NCL-->
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