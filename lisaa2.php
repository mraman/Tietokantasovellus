<?php

//Käsittelee lomaketta lisaa_ratkaisu.php
//parametrina ratkaisun kuvaus, stunnus
include ("istunto.php");
include ("yhteys.php");
include ("lisays_yla.php");
include ("Tulostaja.php");
$tulostus = new Tulostaja();
?>

<?php

if (empty($_POST['uusi_ratkaisu'])) {
    echo "Tekstikenttä oli tyhjä!";
    die();
} else {
    $ratkaisu = $_POST["uusi_ratkaisu"];
    $ratkaisu = htmlspecialchars($ratkaisu);

    $lisays = $yhteys->prepare("INSERT into ratkaisu (kuvaus) VALUES (?)");
    $lisays->execute(array($ratkaisu));
    $tulostus->tulosta_ratkaisu();
}
if (empty($_POST["syy"])) {
    echo "Et valinnut yhtään syytä!";
    die();
} else {
    $ratkaisu = $_POST["uusi_ratkaisu"];
    $ratkaisu = htmlspecialchars($ratkaisu);

    $rtunnus = $tulostus->get_rtunnus($ratkaisu);
    $stunnus = $_POST["syy"];
    $syy = $tulostus->get_syykuvaus($stunnus);
    echo "Tietokantaan lisättiin uusi ratkaisu: " . $rtunnus . " " . $ratkaisu . "<br>";
    $ratkaisu = $tulostus->get_ratkaisu($_POST["ratkaisu"]);

    $lisays = $yhteys->prepare("INSERT into syy_ratkaisu (syy_id, ratkaisu_id)
VALUES (? , ?)");
    $lisays->execute(array($stunnus, $rtunnus));
}
?>
<?php include("ala.php"); ?>


