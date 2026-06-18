<?php
$page_title = "vellore travels - Tourist Places, Government Museum, Vellore Museum, Museum with Fort, historical monuments, Vellore Tourist guide";
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
          <h1><a href="tourist-places.php">Tourst Places</a> &raquo; <span>Government Museum </span></h1>
<p>This state Government Museum is inside the fort and can be found on map. This Museum was opened to the public in 1985. It consists of objects of art, archaeology, pre-history, weapons, sculptures, bronzes, wood carvings, handicrafts, numismatics, philately, botany, geology and zoology. <img src="images/tourist-places/govtmuseum.png" alt="Govt Museum" style="float:right; margin:5px 0px 5px 10px;"  />It treasures ancient and present day curios relating to Anthropology, Art and Archaeology, Botany, Geology, Numismatics, Pre-history, Zoology, etc.</p>
<p>The historical monuments of the erst while composite North Arcot District are gracefully depicted in the Gallery. Special exhibits include Bronze double antenna sword from Vellore Taluk, dating back to 400 BC., Stone sculptures from Late Pallava to Vijayanagar periods, Ivory chess board and coins used by the last Kandian King of Sri Lanka, Vikrama Raja Singha.</p>
<p> The educational activities of this Museum include Art camp for school students, Study of inscriptions and iconography for college students etc.</p>
<p>The Government Museum is situated besides the main bus stand in Lakshmanaswamy Town Hall. The museum is under the watch of Department of Museums. This might be the most unusual museum that you will ever see. The museum is open on all days from 9 a.m to 12 noon and from 2 p.m. to 5 p.m. </p>
        </div>
      
  </main>

  <?php require_once 'includes/footer.php'; ?>

