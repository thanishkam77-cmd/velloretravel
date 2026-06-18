$content = Get-Content "C:\xampp\htdocs\vellore trevels\golden-temple.php" -Raw
$content = $content -replace "Golden <span>Temple</span>", "Ratnagiri <span>Murugan Temple</span>"
$regex = '(?s)<p>The golden temple of Sripuram is a spiritual park.*?12 km from sripuram.<\/p>'
$desc = '<p>Ratnagiri Balamurugan Temple is an ancient Hindu temple dedicated to Lord Murugan, located on a small hillock near Vellore. It was built around the 14th century. Over the years, it has become one of the most prominent spiritual destinations in the region.</p><p>The temple is situated on the Chennai-Bengaluru highway, making it easily accessible. Climbing the steps to the top of the hill provides a beautiful panoramic view of the surrounding landscape. The temple is well-maintained with modern amenities for pilgrims while retaining its ancient spiritual charm.</p>'
$content = [regex]::Replace($content, $regex, $desc)
$content = $content -replace '<title>.*?<\/title>', '<title>Ratnagiri Murugan Temple | Vellore Travels</title>'
Set-Content "C:\xampp\htdocs\vellore trevels\ratnagiri-temple.php" -Value $content

$files = Get-ChildItem -Path "C:\xampp\htdocs\vellore trevels\*.php"
$findStr = '<li><a href="jalagamparai-falls.php"><i class="fa-solid fa-angle-right"></i> Jalagamparai Falls</a></li>'
$replaceStr = $findStr + "`r`n            <li><a href=`"ratnagiri-temple.php`"><i class=`"fa-solid fa-angle-right`"></i> Ratnagiri Temple</a></li>"

foreach ($f in $files) {
    $text = Get-Content $f.FullName -Raw
    if ($text -match [regex]::Escape($findStr)) {
        $text = $text -replace [regex]::Escape($findStr), $replaceStr
        Set-Content -Path $f.FullName -Value $text
    }
}
Write-Host "Created Ratnagiri page and updated sidebars."
