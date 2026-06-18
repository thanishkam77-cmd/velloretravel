$headerTpl = Get-Content ".\includes\header.php" -Raw
$leftTpl = Get-Content ".\includes\left_sidebar.php" -Raw
$footerTpl = Get-Content ".\includes\footer.php" -Raw

$files = Get-ChildItem -Path ".\*.php" -Exclude "mail*.php", "config.php"

foreach ($file in $files) {
    $content = Get-Content $file.FullName -Raw
    
    # 1. Extract variables from the current PHP file
    $title = "Vellore Travels"
    if ($content -match '(?s)\$page_title\s*=\s*"([^"]+)"') {
        $title = $matches[1]
    }
    
    $bodyId = ""
    if ($content -match '(?s)\$body_id\s*=\s*"([^"]+)"') {
        $bodyId = $matches[1]
    }
    
    # 2. Extract Hero Slideshow if present
    $hero = ""
    if ($content -match "(?s)(<!-- Hero Slideshow Banner -->.*?<\/section>)") {
        $hero = $matches[1]
    }
    
    # 3. Extract Main Content
    $mainContent = ""
    if ($content -match "(?s)<main class=`"page-content`">(.*?)<\/main>") {
        $mainContent = $matches[1]
    } else {
        Write-Host "Skipping $($file.Name) - No main content found."
        continue
    }

    # 4. Construct Header
    $pageHeader = $headerTpl
    
    # Calculate active nav class based on output filename
    $outputName = $file.Name -replace '\.php$', '.html'
    
    $navHome = if ($outputName -eq "index.html") { "active" } else { "" }
    $navTourist = if ($bodyId -eq "tourist" -or $outputName -eq "tourist-places.html" -or @("vellore-fort.html", "golden-temple.html", "govt-museum.html", "observatory.html", "yelagiri.html", "amrithi-forest.html", "jalagamparai-falls.html") -contains $outputName) { "active" } else { "" }
    $navHotels = if ($outputName -eq "vellore-hotels.html") { "active" } else { "" }
    $navFood = if ($outputName -eq "vellore-food.html") { "active" } else { "" }
    $navAtm = if ($outputName -eq "vellore-atm.html") { "active" } else { "" }
    $navBanks = if ($outputName -eq "vellore-banks.html") { "active" } else { "" }
    $navTaxi = if ($outputName -eq "vellore-taxiservice.html") { "active" } else { "" }
    $navOperators = if ($outputName -eq "tour-operator.html") { "active" } else { "" }
    $navContact = if ($outputName -eq "contactus.html") { "active" } else { "" }

    # Replace title and body_id in PHP tags
    $pageHeader = $pageHeader -replace '<\?php echo \$page_title; \?>', $title
    $pageHeader = $pageHeader -replace '<\?php echo \$body_id; \?>', $bodyId

    # Replace active states
    $pageHeader = $pageHeader -replace '<\?php echo \(\$active_nav == ''home''\) \? ''active'' : ''''; \?>', $navHome
    $pageHeader = $pageHeader -replace '<\?php echo \(\$active_nav == ''tourist''\) \? ''active'' : ''''; \?>', $navTourist
    $pageHeader = $pageHeader -replace '<\?php echo \(\$active_nav == ''hotels''\) \? ''active'' : ''''; \?>', $navHotels
    $pageHeader = $pageHeader -replace '<\?php echo \(\$active_nav == ''food''\) \? ''active'' : ''''; \?>', $navFood
    $pageHeader = $pageHeader -replace '<\?php echo \(\$active_nav == ''atm''\) \? ''active'' : ''''; \?>', $navAtm
    $pageHeader = $pageHeader -replace '<\?php echo \(\$active_nav == ''banks''\) \? ''active'' : ''''; \?>', $navBanks
    $pageHeader = $pageHeader -replace '<\?php echo \(\$active_nav == ''taxi''\) \? ''active'' : ''''; \?>', $navTaxi
    $pageHeader = $pageHeader -replace '<\?php echo \(\$active_nav == ''operators''\) \? ''active'' : ''''; \?>', $navOperators
    $pageHeader = $pageHeader -replace '<\?php echo \(\$active_nav == ''contact''\) \? ''active'' : ''''; \?>', $navContact

    # Clean up any remaining PHP code in page header (like config, isset logic at top)
    $pageHeader = $pageHeader -replace "(?s)<\?php.*?\?>\s*", ""

    # 5. Build full HTML
    $fullHtml = @"
$pageHeader

$hero

<div class="main-content-grid">
$leftTpl

  <main class="page-content">
$mainContent
  </main>

$footerTpl
"@

    # 6. Replace .php links with .html
    # Protect backend scripts
    $fullHtml = $fullHtml -replace 'mail\.php', 'BACKEND_MAIL_PHP'
    $fullHtml = $fullHtml -replace 'mail1\.php', 'BACKEND_MAIL1_PHP'
    $fullHtml = $fullHtml -replace 'mail-right\.php', 'BACKEND_MAILRIGHT_PHP'
    
    # Replace remaining .php to .html
    $fullHtml = $fullHtml -replace '\.php', '.html'
    
    # Restore backend scripts
    $fullHtml = $fullHtml -replace 'BACKEND_MAIL_PHP', 'mail.php'
    $fullHtml = $fullHtml -replace 'BACKEND_MAIL1_PHP', 'mail1.php'
    $fullHtml = $fullHtml -replace 'BACKEND_MAILRIGHT_PHP', 'mail-right.php'

    # Save as .html
    $htmlName = $file.Name -replace '\.php$', '.html'
    Set-Content -Path ".\$htmlName" -Value $fullHtml -Encoding UTF8
    Write-Host "Generated $htmlName with title: $(if($title.length -gt 30){$title.substring(0,30)+'...'}else{$title})"
}
