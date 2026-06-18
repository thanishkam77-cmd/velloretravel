<?php
$page_title = "vellore travels - Hotels to Stay, Vellore Hotels, Restaurants in vellore, Star Hotels";
$body_id = "hotels";
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
          <h1>Hotels <span>to Stay </span></h1>
<p>&nbsp;</p>
<div class="table-responsive"><table border="0" cellpadding="1" cellspacing="1" class="sub-tab">
<tr class="head">
<td>Vellore Hotels </td>
</tr>
<tr class="light">
<td><strong>Hotel Darling</strong><br />
11/8, Officers Line,<br />
 Vellore-632001,<br />
 Phone: 0416-2213002 </td>
</tr>
<tr class="light">
<td><strong>Park Avenue Hotel </strong><br />
3, 1st Main Road,<br />
Anna Nagar,<br />
 Vellore-632001<br />
 Phone: 0416-2220767 </td>
</tr>
<tr class="light">
<td><strong>Hotel Sams </strong><br />
Katpadi Road, Thiru Nagar,<br />
 Vellore-632006<br />
 Phone: 0416-2245327  </td>
</tr><tr class="light">
<td><strong>Gokul Hotel </strong><br />
67-A, Arcot Road, <br>Thottapalayam, <br>Vellore-632004
 Phone: 0416-2222454 </td>
</tr>
<tr class="light">
<td><strong>Hotel Aruvi </strong><br />
17, Vaniyambadii Road,<br>Tirupattur, <br>Vellore-635601.
 Phone: 04179-222555  </td>
</tr>
</table></div>
<br />
<p style="text-align:center"><strong><a href="http://vellorecity.com/hotel.asp" target="_blank"> For More Details &gt;&gt;</a></strong></p>
        </div>
      
  </main>

  <?php require_once 'includes/footer.php'; ?>

