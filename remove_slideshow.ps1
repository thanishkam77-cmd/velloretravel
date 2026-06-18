$pattern = '(?s)\s*<!-- Hero Slideshow Banner -->\s*<section class="hero-slideshow">.*?</section>'
$files = Get-ChildItem -Path "C:\xampp\htdocs\vellore trevels\*.php"
foreach ($f in $files) {
    $content = Get-Content $f.FullName -Raw
    $newContent = [regex]::Replace($content, $pattern, '')
    Set-Content -Path $f.FullName -Value $newContent
}
Write-Host "Removed hero slideshow from all PHP files."
