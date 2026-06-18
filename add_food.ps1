$content = Get-Content "C:\xampp\htdocs\vellore trevels\vellore-hotels.php" -Raw
$regex = '(?s)<div class="table-responsive">.*?<\/table>\s*<\/div>'
$desc = '<div style="margin-bottom: 20px;"><img src="images/food.png" alt="Famous Food in Vellore" style="max-width: 100%; border-radius: 8px; box-shadow: var(--shadow-sm);" /></div>
<div class="table-responsive"><table border="0" cellpadding="1" cellspacing="1" class="sub-tab">
<tr class="head"><td>Famous Food Places in Vellore</td></tr>
<tr class="light"><td><strong>Vellore Kitchen</strong><br />1, Green Circle, Vellore-632004<br />Specialty: Authentic South Indian Meals & Biryani</td></tr>
<tr class="light"><td><strong>Hundreds Heritage</strong><br />Katpadi Road, Vellore-632004<br />Specialty: North Indian & Mughlai Cuisine</td></tr>
<tr class="light"><td><strong>Earth Plate (Fortune Park)</strong><br />Gandhi Nagar, Vellore-632006<br />Specialty: Premium Multi-Cuisine Buffet</td></tr>
<tr class="light"><td><strong>Darling Bakery & Residency</strong><br />Officers Line, Vellore-632001<br />Specialty: Baked Goods & Family Dining</td></tr>
<tr class="light"><td><strong>Baby Restaurant</strong><br />Arcot Road, Vellore-632004<br />Specialty: Famous Vellore Style Biryani</td></tr>
</table></div>'
$content = [regex]::Replace($content, $regex, $desc)
$content = $content -replace "<h1>Hotels <span>to Stay </span></h1>", "<h1>Famous <span>Food </span></h1>"
$content = $content -replace "<title>.*?<\/title>", "<title>Famous Food | Vellore Travels</title>"
Set-Content "C:\xampp\htdocs\vellore trevels\famous-food.php" -Value $content

$files = Get-ChildItem -Path "C:\xampp\htdocs\vellore trevels\*.php"
$findStr = '<li><a href="contactus.php"'
$replaceStr = "<li><a href=`"famous-food.php`" class=`"`">Famous Food</a></li>`n          " + $findStr

foreach ($f in $files) {
    $text = Get-Content $f.FullName -Raw
    if ($text -match [regex]::Escape($findStr) -and $text -notmatch "famous-food.php") {
        $text = $text -replace [regex]::Escape($findStr), $replaceStr
        Set-Content -Path $f.FullName -Value $text
    }
}
Write-Host "Created food page and updated navigation."
