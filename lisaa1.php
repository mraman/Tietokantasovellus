<?php

// Käsittelee lomaketta lisaa_syy.php
//Parametrina syyn kuvaus, otunnus, rtunnus
include ("istunto.php");
include ("yhteys.php");
include ("lisays_yla.php");
include ("Tulostaja.php");
$tulostus = new Tulostaja();
?>

<?php

if (empty($_POST["uusi_syy"])) {
    echo "Tekstikenttä oli tyhjä!";
    die();
} else {
    $syy = $_POST["uusi_syy"];
    $syy = htmlspecialchars($syy);

    $lisays = $yhteys->prepare("INSERT into syy (kuvaus) VALUES (?)");
    $lisays->execute(array($syy));
    $tulostus->tulosta_syy();
    
}
if (empty($_POST["ongelma"])) {
    echo "Et valinnut yhtään ongelmaa!";
    die();
}
if (empty($_POST["ratkaisu"])) {
    echo "Et valinnut yhtään ratkaisua!";
    die();
} else {
    $syy = $_POST["uusi_syy"];
    $syy = htmlspecialchars($syy);

    $stunnus = $tulostus->get_stunnus($syy);
    $otunnus = $_POST["ongelma"];
    $rtunnus = $_POST["ratkaisu"];

    echo "Tietokantaan lisättiin uusi syy: " . $stunnus . " " . $syy . "<br>";

    $ongelma = $tulostus->get_otunnus1($_POST["ongelma"]);
    $ratkaisu = $tulostus->get_ratkaisu($_POST["ratkaisu"]);

    echo "lisättyyn syyhyn liittyvä ongelma: " . $otunnus . " "
    . $ongelma . " ratkaisu: " . $rtunnus . " " . $ratkaisu;

    $lisays = $yhteys->prepare("INSERT into ongelma_syy (ongelma_id, syy_id)
VALUES (? , ?)");
    $lisays->execute(array($otunnus, $stunnus));
    $tulostus->tulosta_ongelma_syy();

    $lisays = $yhteys->prepare("INSERT into syy_ratkaisu (syy_id, ratkaisu_id)
VALUES (? , ?)");
    $lisays->execute(array($stunnus, $rtunnus));
    $tulostus->tulosta_syy_ratkaisu();
}
?>
<?php include("ala.php"); ?>


