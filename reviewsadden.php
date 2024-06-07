<?php
include("includes/head.php");
?>

<body>

    <?php
    // Includes
    include("includes/nav.php");
    ?>
    <div class="form-center">
        <form id="adden" method="post">
            <div class="username">
                <label class="username-laber" for="username">Gebruikersnaam</label>
                <input type="text" name="username" id="username" required>
            </div>

            <div id="appeltaart" class="appeltaart-rating">

                <img src="../project-4-appeltaart/images/appeltaart.png" class="appeltaart" data-value="1">
                <img src="../project-4-appeltaart/images/appeltaart.png" class="appeltaart" data-value="2">
                <img src="../project-4-appeltaart/images/appeltaart.png" class="appeltaart" data-value="3">
                <img src="../project-4-appeltaart/images/appeltaart.png" class="appeltaart" data-value="4">
                <img src="../project-4-appeltaart/images/appeltaart.png" class="appeltaart" data-value="5">
                <input type="hidden" name="appeltaart" id="appeltaarten" maxlength="5" required>

            </div>
            <div class="username">
                <label for="place">Plaats</label>
                <input type="text" name="place" id="place" list="places" autocomplete="on" required>
            </div>
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
            <div class="username">
                <label for="restaurant">restaurant</label>
                <input type="text" name="restaurant" id="restaurant" required>
            </div>
            <div class="username">
                <label for="review">schrijf review</label>
                <input type="text" name="review" id="review" required>
            </div>
            <div id="koffie" class="koffie-rating">
                <img src="../project-4-appeltaart/images/coffee.png" class="coffee" data-value="1">
                <img src="../project-4-appeltaart/images/coffee.png" class="coffee" data-value="2">
                <img src="../project-4-appeltaart/images/coffee.png" class="coffee" data-value="3">
                <img src="../project-4-appeltaart/images/coffee.png" class="coffee" data-value="4">
                <img src="../project-4-appeltaart/images/coffee.png" class="coffee" data-value="5">
                <input type="hidden" name="coffee" id="coffee" maxlength="5" required>
            </div>

            <div id="submit-container">
                <button id="submit" name="submit">Verzenden</button>
            </div>
    </div>
    </form>


    <?php
    include("includes/footer.php");


    ?>

    <script src="script.js"></script>
</body>

</html>
<?php

function addReview($conn)
{
    if (isset($_POST['submit'])) {
        try {
            $username = htmlspecialchars($_POST['username']);
            $appeltaarten = htmlspecialchars($_POST['appeltaart']);
            $place = htmlspecialchars($_POST['place']);
            $restaurant = htmlspecialchars($_POST['restaurant']);
            $review = htmlspecialchars($_POST['review']);
            $coffee = htmlspecialchars($_POST['coffee']);
            $datum = date("d-m-y");

            $stmt = $conn->prepare("INSERT INTO review  
    (gebruikersnaam, datum, appeltaarten, plaats, restaurant, review, koffie) VALUES (:username, :datum, :appeltaarten, :place, :restaurant, :review, :coffee)");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':appeltaarten', $appeltaarten);
            $stmt->bindParam(':place', $place);
            $stmt->bindParam(':restaurant', $restaurant);
            $stmt->bindParam(':review', $review);
            $stmt->bindParam(':coffee', $coffee);
            $stmt->bindParam(':datum', $datum);
            $stmt->execute();
            echo "<script type=\"text/javascript\">toastr.success('success toegevoegd')</script>";
        } catch (PDOException $e) {
            echo $e->getMessage();
            echo "<script type=\"text/javascript\">toastr.error('$e')</script>";
        }
    }
}
addReview($conn);
?>