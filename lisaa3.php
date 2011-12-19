<?php
//Parametrina otunns, stunnus
//kasittelee lomakkeen lisaa_ongelma_syy.php tietoja
include ("istunto.php");
include ("yhteys.php");
include ("lisays_yla.php");
include ("Tulostaja.php");
$tulostus = new Tulostaja();
?>

<?php

if (empty($_POST["ongelma"])) {
    echo "Et valinnut yhtään ongelmaa!";
    die();
}
if (empty($_POST["syy"])) {
    echo "Et valinnut yhtään syytä!";
    die();
} else {
    $otunnus = $_POST["ongelma"];
    $stunnus = $_POST["syy"];

    $lisays = $yhteys->prepare("INSERT into ongelma_syy (ongelma_id, syy_id)
VALUES (? , ?)");
    $lisays->execute(array($otunnus, $stunnus));
    $tulostus->tulosta_ongelma_syy();

    echo "uuden yhteyden lisääminen onnistui! ";
}
?>
<?php include("ala.php"); ?>
