<?php
$page_title = "Vellore Travels - Famous Food Places, Local Cuisines, Restaurants in Vellore";
$body_id = "food";
$active_nav = "food";
require_once 'includes/header.php';
?>

<!-- Hero Slideshow Banner -->
<section class="hero-slideshow">
  <div class="slides-container">
    <div class="my-slide fade" style="display: block;">
      <img src="slides/p_0001.jpg" alt="Vellore Fort Panorama">
      <div class="slide-caption">Explore The Tastes of Dravidian Heritage</div>
    </div>
  </div>
</section>

<div class="main-content-grid">
  <?php require_once 'includes/left_sidebar.php'; ?>

  <main class="page-content">

    <div class="content-card">
      <h1>Famous Food <span>Places in Vellore</span></h1>
      <p>Vellore is not only famous for its historic monuments and medical facilities but also for its mouth-watering local cuisines and authentic South Indian delicacies. From the legendary Makkan Peda to the spicy aromatic Biryanis, Vellore offers a delightful culinary journey.</p>
      <br/>

      <div class="table-responsive">
        <table border="0" cellpadding="1" cellspacing="1" class="sub-tab">
          <tr class="head">
            <td>Must-Try Foods & Famous Restaurants</td>
          </tr>
          <tr class="light">
            <td><strong>Makkan Peda @ Arcot Chettiyar Sweet Stall</strong><br />
              <span style="color:var(--text-color);">A rich, royal sweet unique to the Arcot region. It looks like a gulab jamun but is stuffed with rich dry fruits and nuts.</span><br>
              <strong>Location:</strong> Arcot (Near Vellore) & Various Sweet Shops in Vellore City
            </td>
          </tr>
          <tr class="light">
            <td><strong>Ambur & Vaniyambadi Biryani</strong><br />
              <span style="color:var(--text-color);">Vellore district is the heartland of authentic Arcot Nawab style Biryani. There are numerous legendary Star Biryani outlets around the city offering this fragrant, slow-cooked delicacy.</span><br>
              <strong>Famous Spots:</strong> Star Biryani (various outlets), Khaja Restaurant
            </td>
          </tr>
          <tr class="light">
            <td><strong>Dawn Bakery (Since 1930s)</strong><br />
              <span style="color:var(--text-color);">Famous for its freshly baked buns, plum cakes, and puffs. A nostalgic spot for many locals and students.</span><br>
              <strong>Location:</strong> Filterbed Road, Vellore
            </td>
          </tr>
          <tr class="light">
            <td><strong>Arya Bhavan & Saravana Bhavan</strong><br />
              <span style="color:var(--text-color);">For the best authentic South Indian vegetarian meals, crispy dosas, and filter coffee.</span><br>
              <strong>Location:</strong> Near CMC Hospital / Green Circle
            </td>
          </tr>
          <tr class="light">
            <td><strong>Hundred's Heritage</strong><br />
              <span style="color:var(--text-color);">A premium multi-cuisine family restaurant offering excellent North Indian, Chinese, and Continental dishes with great ambiance.</span><br>
              <strong>Location:</strong> Katpadi Road, Vellore
            </td>
          </tr>
          <tr class="light">
            <td><strong>Limra Restaurant</strong><br />
              <span style="color:var(--text-color);">A popular spot among students for budget-friendly and delicious non-vegetarian options, tandoori items, and fast food.</span><br>
              <strong>Location:</strong> VIT Road, Katpadi
            </td>
          </tr>
        </table>
      </div>
      <br />
      <p style="text-align:center"><strong>Taste the tradition of Vellore!</strong></p>
    </div>

  </main>

  <?php require_once 'includes/footer.php'; ?>
