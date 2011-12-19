<?php
include ("istunto.php");
include ("yhteys.php");
include ("lisays_yla.php");
include ("Tulostaja.php");
$tulostus = new Tulostaja();
?>
<?php
/*
Tiedosto saa parametrit lisaa_syy.php:n lomaeelta.
*/
?>
<?php
/*
En pystynyt ketjuttamaan ehtoja, joten siksi laitoin syyn, ongelman ja 
ratkaisun tarkistamisen perakkain.
if (empty($_POST["ongelma"]) && empty($_POST["ratkaisu"])) ei toiminut... 
*/
if (empty($_POST["uusi_syy"])) {
    echo "Tekstikenttä oli tyhjä!";
    die();
}

else {
     $syy = $_POST["uusi_syy"];
$syy = htmlspecialchars($syy);

$lisays = $yhteys->prepare("INSERT into syy (kuvaus) VALUES (?)");
$lisays->execute(array($syy));
$tulostus->tulosta_syy();
}
if(empty($_POST["ongelma"])){
echo "et valinnut yhtaan ongelmaa!";
die();
}
if(empty($_POST["ratkaisu"])){
  echo "Et valinnut yhtaan ratkaisua!";
die();
}
else{
$syy = $_POST["uusi_syy"];
$syy = htmlspecialchars($syy);

$stunnus = $tulostus->get_stunnus($syy);
$otunnus = $_POST["ongelma"];
$rtunnus = $_POST["ratkaisu"];

echo "Tietokantaan lisattiin uusi syy: " . $stunnus . " " . $syy . "<br>";

$ongelma = $tulostus->get_otunnus1($_POST["ongelma"]);
$ratkaisu = $tulostus->get_ratkaisu($_POST["ratkaisu"]);

echo "lisattyyn syyhyn liittyva ongelma: " . $otunnus . " " 
.$ongelma . " ratkaisu: " . $rtunnus . " " .  $ratkaisu;

$lisays = $yhteys->prepare("INSERT into ongelma_syy (ongelma_id, syy_id)
VALUES (? , ?)");
$lisays->execute(array($otunnus , $stunnus));
$tulostus->tulosta_ongelma_syy();

$lisays = $yhteys->prepare("INSERT into syy_ratkaisu (syy_id, ratkaisu_id)
VALUES (? , ?)");
$lisays->execute(array($stunnus , $rtunnus));
$tulostus->tulosta_syy_ratkaisu();

}

?>
<?php include("ala.php"); ?>


