<?php
$page_title = "vellore travels - Tourist Places, Amrithi Forest, Falls with Park, vellore sanctuary";
$body_id = "tourist";
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
          <h1><a href="tourist-places.php">Tourst Places</a> &raquo; <span>Amrithi Forest </span></h1>
<p>Tucked away about 25 kms from Vellore is the picturesque Amirthi Forest. While one part <img src="images/tourist-places/amirthi-forest.png" alt="Amirthi Forest" style="float:right; margin:5px 0px 5px 10px;"  />of the area is maintained and developed as a wildlife sanctuary, a portion of it is open to tourists. Spread over 25 hectares, Amirthi Zoological Park is a popular getaway or picnic spot. </p>
<p>The area is lush with trees, herbal plants and different varieties of birds and animals. There is a small waterfall tucked away amidst the ravines and hills.</p>
<p>Located under the Javadu Hills of Tellai, Amirthi offers a reasonable getaway. There is a play park for kids. You can enjoy a good walk along the meandering path cut along the rock steps. Check out accommodation options and facilities from the local forest authorities.</p>
        </div>
      
  </main>

  <?php require_once 'includes/footer.php'; ?>

