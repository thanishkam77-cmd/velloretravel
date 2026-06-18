$headerTpl = Get-Content ".\includes\header.php" -Raw
$leftTpl = Get-Content ".\includes\left_sidebar.php" -Raw
$footerTpl = Get-Content ".\includes\footer.php" -Raw

# Clean up PHP code in templates
$headerTpl = $headerTpl -replace "(?s)<\?php.*?\?>\s*", ""
$headerTpl = $headerTpl -replace '<\?php echo \(\$active_nav == ''.*?''\) \? ''active'' : ''''; \?>', ''

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
    $pageHeader = $headerTpl -replace '<\?php echo \$page_title; \?>', $title
    $pageHeader = $pageHeader -replace '<\?php echo \$body_id; \?>', $bodyId
    
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
