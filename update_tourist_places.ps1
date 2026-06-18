$content = Get-Content "C:\xampp\htdocs\vellore trevels\tourist-places.php" -Raw
$regex = '(?s)<div class="table-responsive">.*?</table>\s*</div>'

$desc = @"
<style>
.tourist-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 30px;
    margin-top: 20px;
}
.tourist-card {
    background: var(--card-bg);
    border: 1px solid var(--border-color);
    border-radius: 12px;
    overflow: hidden;
    box-shadow: var(--shadow-md);
    transition: var(--transition-all);
    display: flex;
    flex-direction: column;
}
.tourist-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-lg);
}
.tourist-card img {
    width: 100%;
    height: 220px;
    object-fit: cover;
    display: block;
}
.tourist-content {
    padding: 20px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}
.tourist-content h2 {
    margin: 0 0 15px 0;
    color: var(--primary-color);
    font-size: 1.4rem;
}
.tourist-content ul {
    list-style: none;
    padding: 0;
    margin: 0 0 20px 0;
    flex-grow: 1;
}
.tourist-content li {
    position: relative;
    padding-left: 20px;
    margin-bottom: 8px;
    color: var(--text-color);
    font-size: 0.95rem;
}
.tourist-content li::before {
    content: "\f105";
    font-family: "Font Awesome 6 Free";
    font-weight: 900;
    position: absolute;
    left: 0;
    color: var(--accent-color);
}
.tourist-btn {
    display: inline-block;
    padding: 10px 0;
    text-align: center;
    background: var(--primary-light);
    color: var(--primary-color);
    text-decoration: none;
    font-weight: bold;
    border-radius: 6px;
    transition: var(--transition-all);
}
.tourist-btn:hover {
    background: var(--primary-color);
    color: white;
}
</style>

<div class="tourist-grid">
    <div class="tourist-card">
        <img src="scroll/1.png" alt="Vellore Fort" />
        <div class="tourist-content">
            <h2>Vellore Fort</h2>
            <ul>
                <li>Major attraction in Vellore</li>
                <li>Built in the 16th century</li>
                <li>Stunning granite block architecture</li>
            </ul>
            <a href="vellore-fort.php" class="tourist-btn">More Info &raquo;</a>
        </div>
    </div>
    <div class="tourist-card">
        <img src="scroll/2.png" alt="Government Museum" />
        <div class="tourist-content">
            <h2>Government Museum</h2>
            <ul>
                <li>Opened in 1985</li>
                <li>Has over 2,896 historical exhibits</li>
                <li>Features 8 distinct galleries</li>
            </ul>
            <a href="govt-museum.php" class="tourist-btn">More Info &raquo;</a>
        </div>
    </div>
    <div class="tourist-card">
        <img src="scroll/3.png" alt="Kavalur Observatory" />
        <div class="tourist-content">
            <h2>Kavalur Observatory</h2>
            <ul>
                <li>Located in the scenic Javadu Hills</li>
                <li>725m above mean sea level</li>
                <li>Largest telescope in Asia</li>
            </ul>
            <a href="observatory.php" class="tourist-btn">More Info &raquo;</a>
        </div>
    </div>
    <div class="tourist-card">
        <img src="scroll/4.png" alt="Yelagiri Hills" />
        <div class="tourist-content">
            <h2>Yelagiri Hills</h2>
            <ul>
                <li>Known locally as "Mini Ooty"</li>
                <li>1,410m above mean sea level</li>
                <li>Surrounded by beautiful orchards</li>
            </ul>
            <a href="yelagiri.php" class="tourist-btn">More Info &raquo;</a>
        </div>
    </div>
    <div class="tourist-card">
        <img src="scroll/5.png" alt="Amirthi Forest" />
        <div class="tourist-content">
            <h2>Amirthi Forest</h2>
            <ul>
                <li>25 km from Vellore city</li>
                <li>Features a gorgeous small waterfall</li>
                <li>Great wildlife and play park for kids</li>
            </ul>
            <a href="amrithi-forest.php" class="tourist-btn">More Info &raquo;</a>
        </div>
    </div>
    <div class="tourist-card">
        <img src="scroll/6.png" alt="Jalagamparai Falls" />
        <div class="tourist-content">
            <h2>Jalagamparai Falls</h2>
            <ul>
                <li>Created by the beautiful Attaru river</li>
                <li>Spectacular forest trek</li>
                <li>Nearby Murugan temple</li>
            </ul>
            <a href="jalagamparai-falls.php" class="tourist-btn">More Info &raquo;</a>
        </div>
    </div>
    <div class="tourist-card">
        <img src="scroll/7.png" alt="Ratnagiri Temple" />
        <div class="tourist-content">
            <h2>Ratnagiri Temple</h2>
            <ul>
                <li>Ancient Hindu temple on a hillock</li>
                <li>Built in the 14th century</li>
                <li>Prominent spiritual destination</li>
            </ul>
            <a href="ratnagiri-temple.php" class="tourist-btn">More Info &raquo;</a>
        </div>
    </div>
    <div class="tourist-card">
        <img src="scroll/8.png" alt="Jalakandeswarar Temple" />
        <div class="tourist-content">
            <h2>Jalakandeswarar Temple</h2>
            <ul>
                <li>Inside the Vellore Fort</li>
                <li>Intricate Dravidian stone carvings</li>
                <li>Massive ancient gopuram</li>
            </ul>
            <a href="jalakandeswarar-temple.php" class="tourist-btn">More Info &raquo;</a>
        </div>
    </div>
</div>
"@

$content = [regex]::Replace($content, $regex, $desc)
Set-Content "C:\xampp\htdocs\vellore trevels\tourist-places.php" -Value $content
Write-Host "Modernized tourist-places.php layout"
