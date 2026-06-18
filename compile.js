const fs = require('fs');
const path = require('path');

// Target directory is current directory
const targetDir = '.';

// Exclude these files from user-facing compilation
const excludeFiles = [
  'mail.php',
  'mail1.php',
  'mail-right.php',
  'where-to-stay.php', // Redirect file
];

// Helper to extract a regex match safely
function getMatch(content, regex, defaultVal = '') {
  const match = content.match(regex);
  return match ? match[1].trim() : defaultVal;
}

// Master Layout Template
const getTemplate = (title, bodyId, mainContent, currentPage) => {
  // Determine which nav item is active based on bodyId or filename
  const getActiveClass = (id) => (bodyId === id ? 'active' : '');
  const getNavActiveClass = (filename) => (currentPage === filename ? 'active' : '');

  // We want to highlight the main nav categories
  const homeActive = getNavActiveClass('index.html') ? 'active' : '';
  const touristActive = (bodyId === 'tourist' || currentPage === 'tourist-places.html' || [
    'vellore-fort.html', 'golden-temple.html', 'govt-museum.html',
    'observatory.html', 'yelagiri.html', 'amrithi-forest.html', 'jalagamparai-falls.html'
  ].includes(currentPage)) ? 'active' : '';
  const hotelsActive = getNavActiveClass('vellore-hotels.html') ? 'active' : '';
  const atmActive = getNavActiveClass('vellore-atm.html') ? 'active' : '';
  const banksActive = getNavActiveClass('vellore-banks.html') ? 'active' : '';
  const collegesActive = getNavActiveClass('vellore-colleges.html') ? 'active' : '';
  const bookingActive = getNavActiveClass('online_booking.html') ? 'active' : '';
  const taxiActive = getNavActiveClass('vellore-taxiservice.html') ? 'active' : '';
  const operatorsActive = getNavActiveClass('tour-operator.html') ? 'active' : '';
  const contactActive = getNavActiveClass('contactus.html') ? 'active' : '';

  return `<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Vellore City Travel Information, tourist places, hotels, taxi and bank details.">
  <meta name="keywords" content="Vellore Travels, Vellore Fort, Golden Temple, Yelagiri, Kavalur Observatory, Amirthi Forest, Jalagamparai Falls, hotels in vellore, vellore taxi">
  <title>${title || 'Vellore Travels - Guide to Vellore City'}</title>
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  
  <!-- Custom Responsive Stylesheet -->
  <link rel="stylesheet" href="css/style.css">
  
  <!-- FontAwesome for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body id="${bodyId}">

  <!-- Wrapper Grid Container -->
  <div class="site-container">
    
    <!-- Topbar (Contact details & quick links) -->
    <div class="top-bar">
      <div class="top-bar-content">
        <div class="contact-info">
          <span><i class="fa-solid fa-phone"></i> +91 416 2224545</span>
          <span><i class="fa-solid fa-envelope"></i> info@velloretravels.com</span>
        </div>
        <div class="social-links">
          <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" aria-label="Twitter"><i class="fa-brands fa-twitter"></i></a>
          <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
        </div>
      </div>
    </div>

    <!-- Header Section -->
    <header class="main-header">
      <div class="header-inner">
        <a href="index.html" class="logo-area">
          <div class="logo-wrapper">
            <img src="images/logo.png" alt="Vellore Travels Logo" class="spinning-logo">
          </div>
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
        <li><a href="index.html" class="${homeActive}">Home</a></li>
        <li class="has-dropdown">
          <a href="tourist-places.html" class="${touristActive}">Tourist Places <i class="fa-solid fa-chevron-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="vellore-fort.html">Vellore Fort</a></li>
            <li><a href="golden-temple.html">Golden Temple</a></li>
            <li><a href="govt-museum.html">Government Museum</a></li>
            <li><a href="observatory.html">Kavalur Observatory</a></li>
            <li><a href="yelagiri.html">Yelagiri</a></li>
            <li><a href="amrithi-forest.html">Amirthi Forest</a></li>
            <li><a href="jalagamparai-falls.html">Jalagamparai Falls</a></li>
          </ul>
        </li>
        <li><a href="vellore-hotels.html" class="${hotelsActive}">Hotels to Stay</a></li>
        <li><a href="vellore-atm.html" class="${atmActive}">ATM</a></li>
        <li><a href="vellore-banks.html" class="${banksActive}">Banks</a></li>
        <li><a href="vellore-colleges.html" class="${collegesActive}">Colleges</a></li>
        <li><a href="online_booking.html" class="${bookingActive}">Online Booking</a></li>
        <li><a href="vellore-taxiservice.html" class="${taxiActive}">Taxi</a></li>
        <li><a href="tour-operator.html" class="${operatorsActive}">Tour Operators</a></li>
        <li><a href="contactus.html" class="${contactActive}">Contact Us</a></li>
      </ul>
    </nav>

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
        <div class="my-slide fade">
          <img src="slides/p_0003.jpg" alt="Yelagiri Hill Station">
          <div class="slide-caption">Unwind in the Serene Hills of Yelagiri</div>
        </div>
      </div>
      <!-- Slider navigation controls -->
      <button class="slide-prev" onclick="changeSlide(-1)" aria-label="Previous Slide">&#10094;</button>
      <button class="slide-next" onclick="changeSlide(1)" aria-label="Next Slide">&#10095;</button>
    </section>

    <!-- Main Content Layout (Sidebar-Content-Sidebar Grid) -->
    <div class="main-content-grid">
      
      <!-- LEFT SIDEBAR -->
      <aside class="sidebar sidebar-left">
        <div class="sidebar-widget">
          <h2 class="widget-title"><i class="fa-solid fa-map-location-dot"></i> Tourist Places</h2>
          <ul class="widget-links">
            <li><a href="vellore-fort.html"><i class="fa-solid fa-angle-right"></i> Vellore Fort</a></li>
            <li><a href="govt-museum.html"><i class="fa-solid fa-angle-right"></i> Government Museum</a></li>
            <li><a href="observatory.html"><i class="fa-solid fa-angle-right"></i> Kavalur Observatory</a></li>
            <li><a href="yelagiri.html"><i class="fa-solid fa-angle-right"></i> Yelagiri Hills</a></li>
            <li><a href="amrithi-forest.html"><i class="fa-solid fa-angle-right"></i> Amirthi Forest</a></li>
            <li><a href="jalagamparai-falls.html"><i class="fa-solid fa-angle-right"></i> Jalagamparai Falls</a></li>
          </ul>
        </div>
        
        <div class="sidebar-widget golden-temple-widget">
          <h2 class="widget-title"><i class="fa-solid fa-gopuram"></i> Golden Temple</h2>
          <div class="widget-body">
            <a href="golden-temple.html" class="widget-img-link">
              <img src="images/golden-temple.gif" alt="Golden Temple Sripuram" class="responsive-img">
              <span class="overlay-text">Visit Sripuram</span>
            </a>
          </div>
        </div>
      </aside>

      <!-- MAIN PAGE CONTENT -->
      <main class="page-content">
        <div class="content-card">
          ${mainContent}
        </div>
      </main>

      <!-- RIGHT SIDEBAR -->
      <aside class="sidebar sidebar-right">
        
        <!-- Quick Enquiry Form -->
        <div class="sidebar-widget enquiry-widget">
          <h2 class="widget-title"><i class="fa-solid fa-paper-plane"></i> Quick Enquiry</h2>
          <form action="mail-right.php" method="post" class="enquiry-form" id="quickEnquiryForm">
            <div class="form-group">
              <label for="enquiryName" class="sr-only">Name</label>
              <input type="text" id="enquiryName" name="Name" placeholder="Your Name" required>
            </div>
            
            <div class="form-group">
              <label for="enquiryMobile" class="sr-only">Mobile No.</label>
              <input type="tel" id="enquiryMobile" name="Mobile_No" placeholder="Mobile Number" required>
            </div>
            
            <div class="form-group">
              <label for="enquiryEmail" class="sr-only">Email Id.</label>
              <input type="email" id="enquiryEmail" name="EMail" placeholder="Email Address" required>
            </div>
            
            <div class="form-group">
              <label for="enquiryMessage" class="sr-only">Message</label>
              <textarea id="enquiryMessage" name="Message" rows="4" placeholder="Your Message" required></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary btn-block">Send Enquiry <i class="fa-solid fa-paper-plane"></i></button>
          </form>
        </div>

        <!-- Testimonial Rotator Widget -->
        <div class="sidebar-widget testimonial-widget">
          <h2 class="widget-title"><i class="fa-solid fa-quote-left"></i> Testimonial</h2>
          <div class="testimonial-slider-container">
            <div class="testimonial-slide active">
              <div class="testimonial-content">
                <p>"The marketing consultants of flats and plots dealing with the real estate."</p>
                <h3>Shrine Properties</h3>
              </div>
            </div>
            <div class="testimonial-slide">
              <div class="testimonial-content">
                <p>"Excellent cabs and tour service in Vellore. Prompt and very professional drivers."</p>
                <h3>Ramesh Kumar</h3>
              </div>
            </div>
            <div class="testimonial-slide">
              <div class="testimonial-content">
                <p>"Vellore Travels made our visit to Sripuram Golden Temple and Yelagiri extremely comfortable."</p>
                <h3>Anita Sharma</h3>
              </div>
            </div>
          </div>
        </div>
      </aside>

    </div>

    <!-- Site Footer -->
    <footer class="main-footer">
      <div class="footer-links">
        <a href="index.html">Home</a>
        <span class="divider">|</span>
        <a href="tourist-places.html">Tourist Places</a>
        <span class="divider">|</span>
        <a href="vellore-hotels.html">Hotels to Stay</a>
        <span class="divider">|</span>
        <a href="vellore-atm.html">ATM</a>
        <span class="divider">|</span>
        <a href="vellore-banks.html">Banks</a>
        <span class="divider">|</span>
        <a href="vellore-colleges.html">Colleges</a>
        <span class="divider">|</span>
        <a href="online_booking.html">Online Booking</a>
        <span class="divider">|</span>
        <a href="vellore-taxiservice.html">Taxi</a>
        <span class="divider">|</span>
        <a href="tour-operator.html">Tour Operators</a>
        <span class="divider">|</span>
        <a href="contactus.html">Contact Us</a>
        <span class="divider">|</span>
        <a href="sitemap.html">Sitemap</a>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2026 Vellore Travels. All Rights Reserved. Designed with Responsive Layout.</p>
      </div>
    </footer>

  </div>

  <!-- Javascript for Interactions -->
  <script src="js/main.js"></script>
</body>
</html>`;
};

// Start script execution
fs.readdir(targetDir, (err, files) => {
  if (err) {
    console.error('Error reading directory:', err);
    return;
  }

  files.forEach(file => {
    // Only compile .php files at root level that are not excluded
    if (path.extname(file) === '.php' && !excludeFiles.includes(file)) {
      const filePath = path.join(targetDir, file);
      
      fs.readFile(filePath, 'utf8', (err, data) => {
        if (err) {
          console.error(`Error reading ${file}:`, err);
          return;
        }

        // 1. Extract title
        let title = getMatch(data, /<title>([\s\S]*?)<\/title>/i);
        
        // Clean up some title strings if they are too long or have spelling mistakes
        if (title.includes('alagamparai Water Falls')) {
          title = title.replace('alagamparai Water Falls', 'Jalagamparai Water Falls');
        }

        // 2. Extract body ID
        const bodyId = getMatch(data, /<body id="([^"]+)"/i, 'index');

        // 3. Extract middle contents
        // Regex searches for contents wrapper and ends when right sidebar or footer starts.
        let mainContent = getMatch(data, /<div class="contents">([\s\S]*?)<\/div>\s*<\/div>\s*(?:<\?php|\/\*|<!--|\s*<\?php include'includes\/right\.php'; \?>)/i);

        if (!mainContent) {
          // Backup match if structure slightly differs
          mainContent = getMatch(data, /<div class="contents">([\s\S]*?)<\/div>\s*<\/div>\s*<\/div>\s*<\?php include'includes\/footer\.php'/i);
        }

        if (!mainContent) {
          console.warn(`WARNING: Could not extract content from ${file}. Trying general contents extract.`);
          // Simple grab
          const contentsIndex = data.indexOf('<div class="contents">');
          if (contentsIndex !== -1) {
            const temp = data.substring(contentsIndex + 22);
            // Count closing divs to find the matching one
            let divCount = 1;
            let i = 0;
            while (divCount > 0 && i < temp.length) {
              if (temp.substring(i, i + 5) === '<div ') {
                divCount++;
              } else if (temp.substring(i, i + 6) === '</div>') {
                divCount--;
              }
              i++;
            }
            mainContent = temp.substring(0, i - 6);
          }
        }

        if (mainContent) {
          // Clean PHP links in content, e.g., index.php -> index.html
          // Match href="something.php" and convert to .html, but exclude mail files
          mainContent = mainContent.replace(/href=["'](?!mail)([^"'\s]+)\.php(["'])/g, (match, p1, p2) => {
            if (excludeFiles.includes(p1 + '.php')) {
              return `href="${p1}.php"${p2}`; // Keep mail targets as PHP
            }
            return `href="${p1}.html"${p2}`;
          });

          // Clean some local file paths if necessary
          // e.g. remove table dimensions to allow CSS to handle responsiveness
          mainContent = mainContent.replace(/width=["']\d+["']/g, '');
          mainContent = mainContent.replace(/width=["']\d+%["']/g, '');
          mainContent = mainContent.replace(/height=["']\d+["']/g, '');
          
          // Fix self-closing images
          mainContent = mainContent.replace(/<img([^>]+)>/g, (match, p1) => {
            if (!p1.endsWith('/')) {
              return `<img${p1.trim()} />`;
            }
            return match;
          });

          // Assemble using layout template
          const outputFilename = file.replace('.php', '.html');
          const outputHtml = getTemplate(title, bodyId, mainContent, outputFilename);

          const outputPath = path.join(targetDir, outputFilename);
          fs.writeFile(outputPath, outputHtml, 'utf8', (err) => {
            if (err) {
              console.error(`Error writing ${outputFilename}:`, err);
            } else {
              console.log(`Successfully compiled: ${file} -> ${outputFilename}`);
            }
          });
        } else {
          console.error(`ERROR: Failed to extract contents from ${file}`);
        }
      });
    }
  });
});
