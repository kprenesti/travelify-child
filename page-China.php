<?php
/*
Template Name: China
*/
?>

<?php get_header(); ?>
<div class="page-intro">  
  <h1><?php the_title(); ?></h1>
  <p>Fast-changing and diverse, China is an adventure not to be missed.  China is a place of lush scenery, complex history, and exotic cuisine.</p>
  <div class="slider-wrap">
    <?php echo do_shortcode('[URIS id=131]'); ?>
  </div>  
</div>
  <section class="wrap-left floater clearfix">
    <h2 role="h1">Highlights</h2>
    <figure class="country-highlight">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/China/beijing.jpg" alt="Beijing">
      <figcaption>
        <h3>Beijing</h3>
        <p>As one of the six ancient cities in China and her capitol, it has been the heart and soul of politics and society throughout its long history and consequently there is an unparalleled wealth of discovery to delight and intrigue travelers as they explore the city's ancient past and exciting modern development. </p>
        <p><strong>Main Attractions:</strong></p>
        <ul class="main-attractions">
          <li>~The Great Wall of China</li>
          <li>~Tianamen Square</li>
          <li>~The Forbidden City</li>
          <li>~National Stadium (Bird's Nest)</li>
          <li>~Beijing Zoo</li>
          <li>~Ming Tombs</li>
        </ul>
      </figcaption>
    </figure><!--end Beijing-->
    <figure class="country-highlight">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/China/shanghai.jpg" alt="Shanghai">
      <figcaption>
        <h3>Shanghai</h3>
        <p>Shanghai, Hu for short, is a renowned international metropolis drawing more and more attention from all over the world. Situated on the estuary of Yangtze River, it serves as the most influential economic, financial, international trade, cultural, science and technology center in East China.</p>
        <p><strong>Main Attractions</strong></p>
        <ul>
          <li>~The Bund</li>
          <li>~Nanjing Road</li>
          <li>~Yuyan Garden</li>
          <li>~Jade Buddha Temple</li>
          <li>~World Financial Center</li>
        </ul>
      </figcaption>
    </figure><!--end Shanghai-->
    <figure class="country-highlight">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/China/hongkong.jpg" alt="Hong Kong">
      <figcaption>
        <h3>Hong Kong</h3>
        <p>Hong Kong, the Manhattan of China. This enigmatic city of skyscrapers, ancient traditions and heavenly food will fascinate, whether it's your first visit or your 50th.</p>
        <p><strong>Main Attractions</strong></p>
        <ul>
          <li>~Victoria Peak</li>
          <li>~Avenue of Stars</li>
          <li>~Symphony of Lights</li>
          <li>~Hong Kong Disneyland</li>
          <li>~Ngong Ping 360</li>
        </ul>
      </figcaption>
    </figure><!--end Hong Kong-->
    <figure class="country-highlight">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/China/Lijiang.jpg" alt="Lijiang">
      <figcaption>
        <h3>Lijiang</h3>
        <p>Lijiang is a beautifully preserved ancient Chinese town, infused with cultural flavor. Strolling along the 800-year-old bridges and waterways of the world-famous Old Town district is like stepping back in time.</p>
        <p><strong>Main Attractions</strong></p>
        <ul>
          <li>~Lijiang Old Town</li>
          <li>~Lugu Lake</li>
          <li>~Shuhe Ancient Town</li>
          <li>~Mufu Palace</li>
          <li>~Black Dragon Pond Park</li>
        </ul>
      </figcaption>
    </figure><!--end Lijiang-->
    <figure class="country-highlight">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/China/xian.jpg" alt="Xi'an">
      <figcaption>
        <h3>Xi'an</h3>
        <p>Xian is the shining pearl on the Yellow River along which the ancient Chinese culture originated. The astonishing Terracotta Warriors and Horses of Emperor Qin Shi Huang were excavated in this city and the famous Silk Road started here via brilliant Dunhuang to Europe thousands of years ago.</p>
        <p><strong>Main Attractions</strong></p>
        <ul>
          <li>~Tang Palace</li>
          <li>~Terracotta Army</li>
          <li>~Silk Road</li>
          <li>~Shaanxi History Museum</li>
          <li>~Huaqing Hot Springs</li>
          <li>~Ancient Wall of South Gate Yan'an</li>
        </ul>
      </figcaption>
    </figure><!--end Xi'an-->
    <figure class="country-highlight">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/China/Yangtze.jpg" alt="Yangtze River">
      <figcaption>
        <h3>Yangtze River Cruise</h3>
        <p>Yangtze cruises between Chongqing and Yichang/Wuhan/Shanghai are frequently-chosen itineraries. Tourists can discover a river abounding with amazing natural beauties and historic relics.</p>
        <p><strong>Main Attractions:</strong></p>
        <ul>
          <li>~Quotang Gorge</li>
          <li>~Wu Gorge</li>
          <li>~Fengdu Ghost City</li>
          <li>~Shibaozhai</li>
          <li>~Three Gorges Dam</li>
          <li>~Wuhan Yangtze Bridge</li>
        </ul>
      </figcaption>
    </figure><!--end Yangtze River Cruise -->
        
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