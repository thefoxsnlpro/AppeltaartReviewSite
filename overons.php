<?php
include("includes/head.php");
?>

<body>
    <?php
    // Includes
    include("includes/nav.php");
    ?>

    <div class="over-onno">
        <h1>Over mij</h1>


        <div class="overonno-text">
            <img class="onno" src="images/onno.png" alt="">
            <div class="onno-text">
                <p>In de heerlijk geurende wereld van appeltaarten, is er één naam die boven de rest uitsteekt: Onno timmermans, de gepassioneerde eigenaar van "Appeltaart.nl". Met een glimlach die net zo zoet is als zijn favoriete lekkernij, heeft Onno een missie om de wereld te verleiden met de perfecte appeltaart.</p>
                <p>Zijn liefde voor appeltaarten begon in zijn grootmoeders keuken, waar hij als kind werd betoverd door de kunst van het bakken. Jaren van experimenteren en proeven leidden hem naar het idee van een online platform waar appeltaartliefhebbers van over de hele wereld elkaar konden ontmoeten.</p>
                <p>Met een scherp oog voor detail en verfijnde smaakpapillen, gaat Onno door een zorgvuldige selectie van de beste appeltaarten die er zijn. </p>
                <p>Maar achter deze glinsterende wereld van krokante korsten en sappige vullingen schuilt een ware perfectionist. Onno is altijd op zoek naar nieuwe smaken, texturen en technieken om zijn lezers te verrassen en te betoveren. Voor hem is een appeltaart niet zomaar een dessert; het is een symfonie van smaken en herinneringen die mensen samenbrengt en harten verwarmt.</p>
                <p>Met zijn toewijding en liefde voor het vak, blijft Onno de trotse hoeder van de appeltaart, en zijn site blijft een onmisbare bestemming voor iedereen die de magie van dit tijdloze gebak wil ontdekken.</p>
            </div>
        </div>
    </div>

    <div>
        <?php
        function readReviews($conn)
        {
            // Selecteer alle reviews uit database.
            $stmt = $conn->prepare("SELECT * FROM review WHERE gebruikersnaam = 'Onno '  ORDER BY plaats ASC");
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $review = $stmt->fetchAll();

            // Print alle reviews.
            echo "<div class='reviews'>";
            foreach ($review as $record) {
                // echo $key . ": " . $value . "<br>";
                echo '
                <div class="review ">
                <h2>' . $record['restaurant'] . " " . $record['plaats'] . '</h2>
                <h3>' . $record['gebruikersnaam'] . '</h3>
                <div class="sterren">
                ';
                showAppeltaart($record['appeltaarten']);
                showCoffee($record["koffie"]);

                $restaurant = $record['restaurant'];
                $plaats = $record['plaats'];
                echo '
                </div>
                    <p>' . $record['review']  . '</p>
                    <p>' . $record['datum'] . '</p>                    <iframe  width="300" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" loading="lazy" src="http://maps.google.nl/maps?f=q&amp;source=s_q&amp;hl=nl&amp;geocode=&amp;q=' . $restaurant . '+' . $plaats . '&amp;z=15&amp;t=k&amp;output=embed"></iframe>
                </div>
                ';


                // echo '
                // <p>' . $value . '</p>

                // ';

                echo "<br>";
            }
            echo "</div>";
        }

        function showAppeltaart($appeltaarten)
        {
            echo '<div class="ster">';
            for ($i = 0; $i < $appeltaarten; $i++) {
                echo '<img class="kleur" src="images/appeltaart.png" alt="appeltaart-kleur">';
            }
            for ($i = 0; $i < 5 - $appeltaarten; $i++) {
                echo '<img class="zwartwit" src="images/appeltaart.png" alt="appeltaart-zwartwit">';
            }
            echo '</div>';
        }

        function showCoffee($coffee)
        {
            echo '<div class="ster">';
            for ($i = 0; $i < $coffee; $i++) {
                echo '<img class="kleur" src="images/coffee.png" alt="coffee-kleur">';
            }
            for ($i = 0; $i < 5 - $coffee; $i++) {
                echo '<img class="zwartwit" src="images/coffee.png" alt="coffee-zwartwit">';
            }
            echo '</div>';
        }

        // Roept de functie op.
        readReviews($conn);
        ?>

    </div>




    <?php
    include("includes/footer.php");


    ?>


</body>

</html>