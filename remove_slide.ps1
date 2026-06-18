$files = Get-ChildItem -Path ".\*.php"
$pattern = '(?s)\s*<div class="my-slide fade">\s*<img src="slides/p_0003\.jpg" alt="Yelagiri Hill Station">\s*<div class="slide-caption">Unwind in the Serene Hills of Yelagiri</div>\s*</div>'
$count = 0
foreach ($f in $files) {
    $content = Get-Content $f.FullName -Raw
    if ($content -match $pattern) {
        $newContent = [regex]::Replace($content, $pattern, '')
        Set-Content -Path $f.FullName -Value $newContent -Encoding UTF8
        $count++
    }
}
Write-Host "Removed the Yelagiri slide from $count PHP files."
