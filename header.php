<?php
if (!isset($page_title)) { $page_title = 'Vellore Travels'; }
if (!isset($body_id)) { $body_id = ''; }
if (!isset($active_nav)) { $active_nav = 'home'; }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Vellore City Travel Information, tourist places, hotels, taxi and bank details.">
  <meta name="keywords" content="Vellore Travels, Vellore Fort, Golden Temple, Yelagiri, Kavalur Observatory, Amirthi Forest, Jalagamparai Falls, hotels in vellore, vellore taxi">
  <title><?php echo $page_title; ?></title>
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;0,800;1,600&display=swap" rel="stylesheet">
  
  <!-- Custom Responsive Stylesheet -->
  <link rel="stylesheet" href="css/style.css">
  
  <!-- FontAwesome for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body id="<?php echo $body_id; ?>">

  <!-- Wrapper Grid Container -->
  <div class="site-container">
    


    <!-- Header Section -->
    <header class="main-header">
      <div class="header-inner">
        <a href="index.php" class="logo-area">

          <div class="logo-text">
            <h1>Vellore <span>Travels</span></h1>
            <p>Your Fort City Companion</p>
          </div>
        </a>
        
        <!-- Hamburger Menu Button -->
        <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation Menu">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </button>
      </div>
    </header>

    <!-- Main Navigation Bar -->
    <nav class="main-navigation" id="mainNavigation">
      <ul class="nav-menu">
        <li><a href="index.php" class="<?php echo ($active_nav == 'home') ? 'active' : ''; ?>">Home</a></li>
        <li class="has-dropdown">
          <a href="tourist-places.php" class="<?php echo ($active_nav == 'tourist') ? 'active' : ''; ?>">Tourist Places <i class="fa-solid fa-chevron-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="vellore-fort.php">Vellore Fort</a></li>
            <li><a href="golden-temple.php">Golden Temple</a></li>
            <li><a href="govt-museum.php">Government Museum</a></li>
            <li><a href="observatory.php">Kavalur Observatory</a></li>
            <li><a href="yelagiri.php">Yelagiri</a></li>
            <li><a href="amrithi-forest.php">Amirthi Forest</a></li>
            <li><a href="jalagamparai-falls.php">Jalagamparai Falls</a></li>
          </ul>
        </li>
        <li><a href="vellore-hotels.php" class="<?php echo ($active_nav == 'hotels') ? 'active' : ''; ?>">Hotels to Stay</a></li>
        <li><a href="vellore-food.php" class="<?php echo ($active_nav == 'food') ? 'active' : ''; ?>">Famous Food</a></li>
        <li><a href="vellore-atm.php" class="<?php echo ($active_nav == 'atm') ? 'active' : ''; ?>">ATM</a></li>
        <li><a href="vellore-banks.php" class="<?php echo ($active_nav == 'banks') ? 'active' : ''; ?>">Banks</a></li>
        <li><a href="vellore-taxiservice.php" class="<?php echo ($active_nav == 'taxi') ? 'active' : ''; ?>">Taxi</a></li>
        <li><a href="tour-operator.php" class="<?php echo ($active_nav == 'operators') ? 'active' : ''; ?>">Tour Operators</a></li>
        <li><a href="contactus.php" class="<?php echo ($active_nav == 'contact') ? 'active' : ''; ?>">Contact Us</a></li>
      </ul>
    </nav>
