$htmlFiles = Get-ChildItem -Filter *.html
foreach ($file in $htmlFiles) {
    $content = Get-Content $file.FullName -Raw
    $content = $content -replace 'href="([^"]+)\.html"', 'href="$1.php"'
    $newPath = [io.path]::ChangeExtension($file.FullName, '.php')
    Set-Content -Path $newPath -Value $content
    Remove-Item $file.FullName
}
Write-Host "Conversion completed."
