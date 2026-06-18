$backendFiles = @("mail.php", "mail1.php", "mail-right.php")
$files = Get-ChildItem -Path "C:\xampp\htdocs\vellore trevels\*.php"

foreach ($f in $files) {
    if ($backendFiles -notcontains $f.Name) {
        $newName = $f.Name -replace '\.php$', '.html'
        Rename-Item -Path $f.FullName -NewName $newName -Force
    }
}

$htmlFiles = Get-ChildItem -Path "C:\xampp\htdocs\vellore trevels\*.html"
foreach ($f in $htmlFiles) {
    $content = Get-Content $f.FullName -Raw
    
    # Protect backend scripts
    $content = $content -replace 'mail\.php', 'BACKEND_MAIL_PHP'
    $content = $content -replace 'mail1\.php', 'BACKEND_MAIL1_PHP'
    $content = $content -replace 'mail-right\.php', 'BACKEND_MAILRIGHT_PHP'
    
    # Replace all remaining .php references to .html
    $content = $content -replace '\.php', '.html'
    
    # Restore backend scripts
    $content = $content -replace 'BACKEND_MAIL_PHP', 'mail.php'
    $content = $content -replace 'BACKEND_MAIL1_PHP', 'mail1.php'
    $content = $content -replace 'BACKEND_MAILRIGHT_PHP', 'mail-right.php'
    
    Set-Content -Path $f.FullName -Value $content
}
Write-Host "Conversion complete."
