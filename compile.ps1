# PowerShell Script to compile Vellore Travels PHP files into static responsive HTML pages

$excludeFiles = @("mail.php", "mail1.php", "mail-right.php", "where-to-stay.php")

# Master template using single-quoted here-string to avoid PowerShell variable interpolation issues
$template = @'
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Vellore City Travel Information, tourist places, hotels, taxi and bank details.">
  <meta name="keywords" content="Vellore Travels, Vellore Fort, Golden Temple, Yelagiri, Kavalur Observatory, Amirthi Forest, Jalagamparai Falls, hotels in vellore, vellore taxi">
  <title>{{TITLE}}</title>
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  
  <!-- Custom Responsive Stylesheet -->
  <link rel="stylesheet" href="css/style.css">
  
  <!-- FontAwesome for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body id="{{BODY_ID}}">

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
        <li><a href="index.html" class="{{NAV_ACTIVE_HOME}}">Home</a></li>
        <li class="has-dropdown">
          <a href="tourist-places.html" class="{{NAV_ACTIVE_TOURIST}}">Tourist Places <i class="fa-solid fa-chevron-down"></i></a>
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
        <li><a href="vellore-hotels.html" class="{{NAV_ACTIVE_HOTELS}}">Hotels to Stay</a></li>
        <li><a href="vellore-atm.html" class="{{NAV_ACTIVE_ATM}}">ATM</a></li>
        <li><a href="vellore-banks.html" class="{{NAV_ACTIVE_BANKS}}">Banks</a></li>
        <li><a href="vellore-taxiservice.html" class="{{NAV_ACTIVE_TAXI}}">Taxi</a></li>
        <li><a href="tour-operator.html" class="{{NAV_ACTIVE_OPERATORS}}">Tour Operators</a></li>
        <li><a href="contactus.html" class="{{NAV_ACTIVE_CONTACT}}">Contact Us</a></li>
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
          {{CONTENT}}
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
</html>
'@

# Retrieve all .php files in the current folder
$phpFiles = Get-ChildItem -Filter *.php

foreach ($file in $phpFiles) {
    $filename = $file.Name
    if ($excludeFiles -contains $filename) {
        continue
    }

    Write-Host "Processing $filename..."
    $content = Get-Content -Path $file.FullName -Raw

    # 1. Extract Title
    $title = ""
    if ($content -match '(?i)<title>([\s\S]*?)<\/title>') {
        $title = $Matches[1].Trim()
    }
    
    # Spell-check and polish some titles
    if ($title -like "*jalagamparai Water Falls*") {
        $title = $title -replace "jalagamparai Water Falls", "Jalagamparai Water Falls"
    }
    if ($title -eq "Sitemap") {
        $title = "Vellore Travels - Sitemap"
    }

    # 2. Extract Body ID
    $bodyId = "index"
    if ($content -match '(?i)<body id="([^"]+)"') {
        $bodyId = $Matches[1].Trim()
    }

    # 3. Extract Main Content
    $mainContent = ""
    # Try typical grid6 contents wrap structure
    if ($content -match '(?i)<div class="contents">([\s\S]*?)<\/div>\s*<\/div>\s*(?:<\?php|\/\*|<!--|\s*<\?php include\s*[''"]includes/right\.php[''"])') {
        $mainContent = $Matches[1].Trim()
    }
    # Try fallback footer structure
    elseif ($content -match '(?i)<div class="contents">([\s\S]*?)<\/div>\s*<\/div>\s*<\/div>\s*<\?php include\s*[''"]includes/footer\.php') {
        $mainContent = $Matches[1].Trim()
    }
    # Manual fallback parser
    else {
        $startIndex = $content.IndexOf('<div class="contents">')
        if ($startIndex -ne -1) {
            $temp = $content.Substring($startIndex + 22)
            $divCount = 1
            $i = 0
            while ($divCount -gt 0 -and $i -lt $temp.Length) {
                if ($temp.Substring($i, 5) -eq "<div ") { $divCount++ }
                elseif ($temp.Substring($i, 6) -eq "</div>") { $divCount-- }
                $i++
            }
            $mainContent = $temp.Substring(0, $i - 6).Trim()
        }
    }

    if ([string]::IsNullOrEmpty($mainContent)) {
        Write-Host "ERROR: Could not extract content from $filename" -ForegroundColor Red
        continue
    }

    # 4. Clean PHP links inside the content (e.g. index.php -> index.html)
    # Match href="somepage.php" where somepage does not start with "mail" and convert it to html
    # In PowerShell regex, we can do it via -replace
    $mainContent = [regex]::Replace($mainContent, 'href=["''](?!mail)([^"''\s]+)\.php(["''])', {
        param($m)
        $p1 = $m.Groups[1].Value
        return "href=`"$p1.html`""
    })

    # 5. Make tables and media responsive
    $mainContent = $mainContent -replace 'width=["'']\d+["'']', ''
    $mainContent = $mainContent -replace 'width=["'']\d+%["'']', ''
    $mainContent = $mainContent -replace 'height=["'']\d+["'']', ''
    
    # Wrap tables in responsive div wrapper
    $mainContent = $mainContent -replace '<table([^>]+)>', '<div class="table-responsive"><table$1>'
    $mainContent = $mainContent -replace '</table>', '</table></div>'

    # Fix unclosed images to be valid HTML5/XHTML self-closing tags
    $mainContent = [regex]::Replace($mainContent, '<img([^>]+)>', {
        param($m)
        $p1 = $m.Groups[1].Value.Trim()
        if (-not $p1.EndsWith("/")) {
            return "<img $p1 />"
        }
        return $m.Value
    })

    # 6. Apply template replacements
    $outputHtml = $template.Replace("{{TITLE}}", $title)
    $outputHtml = $outputHtml.Replace("{{BODY_ID}}", $bodyId)
    $outputHtml = $outputHtml.Replace("{{CONTENT}}", $mainContent)

    # Calculate active nav class based on output filename
    $outputName = $filename -replace '\.php$', '.html'
    
    $navHome = if ($outputName -eq "index.html") { "active" } else { "" }
    $navTourist = if ($bodyId -eq "tourist" -or $outputName -eq "tourist-places.html" -or @("vellore-fort.html", "golden-temple.html", "govt-museum.html", "observatory.html", "yelagiri.html", "amrithi-forest.html", "jalagamparai-falls.html") -contains $outputName) { "active" } else { "" }
    $navHotels = if ($outputName -eq "vellore-hotels.html") { "active" } else { "" }
    $navAtm = if ($outputName -eq "vellore-atm.html") { "active" } else { "" }
    $navBanks = if ($outputName -eq "vellore-banks.html") { "active" } else { "" }
    $navColleges = if ($outputName -eq "vellore-colleges.html") { "active" } else { "" }
    $navBooking = if ($outputName -eq "online_booking.html") { "active" } else { "" }
    $navTaxi = if ($outputName -eq "vellore-taxiservice.html") { "active" } else { "" }
    $navOperators = if ($outputName -eq "tour-operator.html") { "active" } else { "" }
    $navContact = if ($outputName -eq "contactus.html") { "active" } else { "" }

    $outputHtml = $outputHtml.Replace("{{NAV_ACTIVE_HOME}}", $navHome)
    $outputHtml = $outputHtml.Replace("{{NAV_ACTIVE_TOURIST}}", $navTourist)
    $outputHtml = $outputHtml.Replace("{{NAV_ACTIVE_HOTELS}}", $navHotels)
    $outputHtml = $outputHtml.Replace("{{NAV_ACTIVE_ATM}}", $navAtm)
    $outputHtml = $outputHtml.Replace("{{NAV_ACTIVE_BANKS}}", $navBanks)
    $outputHtml = $outputHtml.Replace("{{NAV_ACTIVE_COLLEGES}}", $navColleges)
    $outputHtml = $outputHtml.Replace("{{NAV_ACTIVE_BOOKING}}", $navBooking)
    $outputHtml = $outputHtml.Replace("{{NAV_ACTIVE_TAXI}}", $navTaxi)
    $outputHtml = $outputHtml.Replace("{{NAV_ACTIVE_OPERATORS}}", $navOperators)
    $outputHtml = $outputHtml.Replace("{{NAV_ACTIVE_CONTACT}}", $navContact)

    # Save output to disk using UTF8 encoding
    $outputPath = Join-Path $file.DirectoryName $outputName
    [System.IO.File]::WriteAllText($outputPath, $outputHtml, [System.Text.Encoding]::UTF8)
    
    Write-Host "Successfully compiled: $filename -> $outputName" -ForegroundColor Green
}
