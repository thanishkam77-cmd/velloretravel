$content = Get-Content "C:\xampp\htdocs\vellore trevels\golden-temple.php" -Raw
$content = $content -replace "Golden <span>Temple</span>", "Jalakandeswarar <span>Temple</span>"
$regex = '(?s)<p>The golden temple of Sripuram is a spiritual park.*?12 km from sripuram.<\/p>'
$desc = '<div style="margin: 20px 0; text-align: center;"><img src="images/jalakandeswarar.png" alt="Jalakandeswarar Temple" style="max-width: 100%; height: auto; border-radius: 8px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);" /></div><p>The Jalakandeswarar Temple is a fine example of Vijayanagaram Architecture, located inside the Vellore Fort. The temple is dedicated to Lord Shiva and is renowned for its highly intricate and detailed stone carvings.</p><p>Built in the 16th century, the temple boasts a massive gopuram (tower) and stunningly sculpted pillars. The Kalyana Mandapam (marriage hall) inside the temple is considered a masterpiece of Dravidian architecture, with pillars carved to depict horses, dragons, and mythological creatures.</p>'
$content = [regex]::Replace($content, $regex, $desc)
$content = $content -replace '<title>.*?<\/title>', '<title>Jalakandeswarar Temple | Vellore Travels</title>'
Set-Content "C:\xampp\htdocs\vellore trevels\jalakandeswarar-temple.php" -Value $content

$files = Get-ChildItem -Path "C:\xampp\htdocs\vellore trevels\*.php"
$findStr = '<li><a href="ratnagiri-temple.php"><i class="fa-solid fa-angle-right"></i> Ratnagiri Temple</a></li>'
$replaceStr = $findStr + "`r`n            <li><a href=`"jalakandeswarar-temple.php`"><i class=`"fa-solid fa-angle-right`"></i> Jalakandeswarar Temple</a></li>"

foreach ($f in $files) {
    $text = Get-Content $f.FullName -Raw
    if ($text -match [regex]::Escape($findStr)) {
        $text = $text -replace [regex]::Escape($findStr), $replaceStr
        Set-Content -Path $f.FullName -Value $text
    }
}
Write-Host "Created Jalakandeswarar page and updated sidebars."
