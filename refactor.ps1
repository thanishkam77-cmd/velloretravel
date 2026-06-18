$files = Get-ChildItem -Path ".\*.php" -Exclude "mail*.php", "config.php"

foreach ($file in $files) {
    $content = Get-Content $file.FullName -Raw
    
    # 1. Extract Title
    $title = ""
    if ($content -match "<title>(.*?)<\/title>") {
        $title = $matches[1]
    }
    
    # 2. Extract Body ID
    $bodyId = ""
    if ($content -match "<body[^>]*id=`"([^`"]*)`"[^>]*>") {
        $bodyId = $matches[1]
    }
    
    # 3. Extract Hero Slideshow if present
    $hero = ""
    if ($content -match "(?s)(<!-- Hero Slideshow Banner -->.*?<\/section>)") {
        $hero = $matches[1]
    }
    
    # 4. Extract Main Content
    $mainContent = ""
    if ($content -match "(?s)<main class=`"page-content`">(.*?)<\/main>") {
        $mainContent = $matches[1]
    } else {
        Write-Host "Could not find <main> in $($file.Name)"
        continue
    }

    # Build New File Content
    $newContent = @"
<?php
`$page_title = "$title";
`$body_id = "$bodyId";
require_once 'includes/header.php';
?>

$hero

<div class="main-content-grid">
  <?php require_once 'includes/left_sidebar.php'; ?>

  <main class="page-content">
$mainContent
  </main>

  <?php require_once 'includes/footer.php'; ?>
"@

    Set-Content -Path $file.FullName -Value $newContent -Encoding UTF8
    Write-Host "Refactored $($file.Name)"
}
