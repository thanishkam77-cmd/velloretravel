<?php
$page_title = "vellore travels - Sitemap";
$body_id = "index";
require_once 'includes/header.php';
?>

<!-- Hero Slideshow Banner -->
    <section class="hero-slideshow">
      <div class="slides-container">
        <div class="my-slide fade">
          <img src="slides/p_0001.jpg" alt="Vellore Fort Panorama">
          <div class="slide-caption">Explore The Rich Dravidian Heritage</div>
        </div>
        <div class="my-slide fade">
          <img src="slides/p_0002.jpg" alt="Golden Temple Sripuram">
          <div class="slide-caption">Experience Divine Peace at Golden Temple</div>
        </div>
      </div>
      <!-- Slider navigation controls -->
      <button class="slide-prev" onclick="changeSlide(-1)" aria-label="Previous Slide">&#10094;</button>
      <button class="slide-next" onclick="changeSlide(1)" aria-label="Next Slide">&#10095;</button>
    </section>

<div class="main-content-grid">
  <?php require_once 'includes/left_sidebar.php'; ?>

  <main class="page-content">

        <div class="content-card">
          <h1> Sitemap <span> </span></h1><br />

        <ul class="sitemap">
          <li><a href="index.php">Home</a></li>
          <li><a href="tourist-places.php">Tourist Places</a>
		  <ul>
<li><a href="vellore-fort.php">Vellore Fort </a></li>
<li><a href="govt-museum.php">Government Museum </a></li>
<li><a href="observatory.php">Kavalur Observatory </a></li>
<li><a href="yelagiri.php"> Yelagiri </a></li>
<li><a href="amrithi-forest.php"> Amirthi Forest</a></li>
<li><a href="jalagamparai-falls.php">Jalagamparai Falls</a></li>
<!--<li><a href="#.php">Javadu  Hills </a></li>-->
</ul>
		  </li>
          <li><a href="vellore-hotels.php" >Hotels to Stay</a></li>
          <li><a href="vellore-atm.php" >ATM</a></li>
          <li><a href="vellore-banks.php">Banks</a></li>
          <li><a href="vellore-colleges.php">Colleges</a></li>
          <li><a href="online_booking.php">Online Booking</a></li>
          <li><a href="vellore-taxiservice.php">Taxi</a></li>
          <li><a href="tour-operator.php">Tour Operators</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
        </ul>
        </div>
      
  </main>

  <?php require_once 'includes/footer.php'; ?>

