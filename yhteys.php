<?php

// yhteyden muodostus tietokantaan
try {
    $yhteys = new PDO("pgsql:host=localhost;dbname=mraman",
                    "mraman", "f165dd3859864b0c");
} catch (PDOException $e) {
    die("VIRHE: " . $e->getMessage());
}
$yhteys->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
