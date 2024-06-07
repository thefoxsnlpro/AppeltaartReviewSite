<nav class="navbar">
    <div class="logo">
        <img src="../project-4-appeltaart/images/logo.png" alt="Logo">
    </div>
    <button class="menu-toggle" aria-label="Toggle navigation">
        &#9776;
    </button>
    <div class="nav-container">
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="reviews.php">Review</a></li>
            <li><a href="reviewsadden.php">Review Maken</a></li>
            <li><a href="overons.php">Over Mij</a></li>
        </ul>
        <form class="search-bar" method="get" action="reviews.php">
            <input type="text" name="zoek" placeholder="Zoeken...">
            <input type="image" src="../project-4-appeltaart/images/zoek.png" alt="zoek" class="zoek">
            <datalist id="places">
                <option value="Aalsmeer">
                <option value="Aerdenhout">
                <option value="Alkmaar">
                <option value="Amstelveen">
                <option value="Amsterdam">
                <option value="Andijk">
                <option value="Ankeveen">
                <option value="Anna Paulowna">
                <option value="Assendelft">
                <option value="Avenhorn">
                <option value="Bakkum">
                <option value="Barsingerhorn">
                <option value="Bergen">
                <option value="Bergen aan Zee">
                <option value="Beverwijk">
                <option value="Blaricum">
                <option value="Bloemendaal">
                <option value="Bovenkarspel">
                <option value="Broek op Langedijk">
                <option value="Bussum">
                <option value="Castricum">
                <option value="Cruquius">
                <option value="De Cocksdorp">
                <option value="Den Helder">
                <option value="De Rijp">
                <option value="De Waal">
                <option value="Den Burg">
                <option value="Den Oever">
                <option value="Diemen">
                <option value="Driehuis">
                <option value="Durgerdam">
                <option value="Edam">
                <option value="Egmond aan den Hoef">
                <option value="Egmond aan Zee">
                <option value="Egmond-Binnen">
                <option value="Enkhuizen">
                <option value="Graft">
                <option value="Groet">
                <option value="Haarlem">
                <option value="Haarlemmerliede">
                <option value="Haarlemmermeer">
                <option value="Hauwert">
                <option value="Heemskerk">
                <option value="Heemstede">
                <option value="Heerhugowaard">
                <option value="Heiloo">
                <option value="Hilversum">
                <option value="Hippolytushoef">
                <option value="Hoofddorp">
                <option value="Hoogkarspel">
                <option value="Hoorn">
                <option value="Huizen">
                <option value="IJmuiden">
                <option value="Julianadorp">
                <option value="Kamerik">
                <option value="Katwoude">
                <option value="Krommenie">
                <option value="Landsmeer">
                <option value="Laren">
                <option value="Limmen">
                <option value="Loosdrecht">
                <option value="Lutjebroek">
                <option value="Medemblik">
                <option value="Middenbeemster">
                <option value="Monnickendam">
                <option value="Muiderberg">
                <option value="Muiden">
                <option value="Naarden">
                <option value="Nieuwe Niedorp">
                <option value="Nieuw-Vennep">
                <option value="Nibbixwoud">
                <option value="Noord-Scharwoude">
                <option value="Obdam">
                <option value="Oosthuizen">
                <option value="Oostzaan">
                <option value="Oterleek">
                <option value="Overveen">
                <option value="Oude Meer">
                <option value="Ouderkerk aan de Amstel">
                <option value="Purmerend">
                <option value="Schagen">
                <option value="Schagerbrug">
                <option value="Schoorl">
                <option value="Spaarndam">
                <option value="Spierdijk">
                <option value="Stede Broec">
                <option value="Texel">
                <option value="Uithoorn">
                <option value="Ursem">
                <option value="Velserbroek">
                <option value="Venhuizen">
                <option value="Volendam">
                <option value="Vredeburg">
                <option value="Vriezenveen">
                <option value="Vroomshoop">
                <option value="West-Graftdijk">
                <option value="Wieringerwerf">
                <option value="Wieringerwaard">
                <option value="Wijdenes">
                <option value="Wijk aan Zee">
                <option value="Winkel">
                <option value="Wognum">
                <option value="Wormerveer">
                <option value="Zaandam">
                <option value="Zandvoort">
                <option value="Zuid-Scharwoude">
                <option value="Zuidoostbeemster">
                <option value="Zwaag">
                <option value="Zwanenburg">
            </datalist>
        </form>
    </div>
</nav>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.querySelector('.menu-toggle');
        const navContainer = document.querySelector('.nav-container');

        menuToggle.addEventListener('click', function() {
            navContainer.classList.toggle('active');
        });
    });
</script>