<?php
include("includes/head.php");
?>

<body>
    <?php
    // Includes
    include("includes/nav.php");

    // Read Function.
    function readReviews($conn)
    {
        $zoeken = false;
        if (isset($_GET['zoek'])) {
            $stmt = $conn->prepare("SELECT * FROM review WHERE gebruikersnaam LIKE :search OR plaats LIKE :search OR restaurant LIKE :search");
            $stmt->bindValue(':search', '%' . str_replace(' ', '%', $_GET['zoek']) . '%',);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $review = $stmt->fetchAll();
            $zoeken = true;
        }

        while ($zoeken == false) {
            // Selecteer alle reviews uit database.
            $stmt = $conn->prepare("SELECT * FROM review ORDER BY plaats ASC");
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $review = $stmt->fetchAll();
            $zoeken = true;
        }
            
        // Print alle reviews.
        echo "<div class='reviews'>";
        if ($review) {
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
    } else {
        echo "<h1> Geen reviews gevonden </h1>";
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

    <?php
    include("includes/footer.php");


    ?>


</body>

</html>