<?php
session_start();

$salasanat = array();
$salasanat["yLLapito"] = "tesTisana";

$tunnus = $_POST["tunnus"];
$salasana = $_POST["salasana"];

if (isset($salasanat[$tunnus])) {
    if ($salasanat[$tunnus] == $salasana) {
        $_SESSION["kayttaja"] = $tunnus;
        header("Location: yllapito.php");
        die();
    }
}
?>
<h1> Tunnus tai salasana ei ole oikein </h1>
<p><a href="kirjautuminen.php"> Takaisin </a></p>
