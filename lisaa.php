<?php
include ("istunto.php");
include ("yhteys.php");
include ("lisays_yla.php");
include ("Tulostaja.php");
$tulostus = new Tulostaja();
?>

<?php

if (empty($_POST['uusi_ongelma'])) {
    echo "Tekstikenttä oli tyhjä!";
    die();
} 
if(empty($_POST["syyt"])){
 	echo "Et valinnut yhtaan syyta!";
	die();
	}

else {
    	$ongelma = $_POST["uusi_ongelma"];
	$ongelma = htmlspecialchars($ongelma);

	//$lisays = $yhteys->prepare("INSERT into ongelma (kuvaus)
	//VALUES (?)");
	//$lisays->execute(array($ongelma));
	$otunnus = $tulostus->get_otunnus($ongelma);
	echo "Tietokantaan lisattiin ongelma: " . $otunnus . " " . $ongelma . "<br>";
 
    	$ongelma = $_POST["uusi_ongelma"];
	$ongelma = htmlspecialchars($ongelma);
	$otunnus = $tulostus->get_otunnus($ongelma);
	echo "lisattyyn ongelmaan liittyvat syyt: <br>";

	foreach ($_POST['syyt'] as $valinta){
	//$lisays = $yhteys->prepare("INSERT into ongelma_syy (ongelma_id, syy_id)
	//VALUES (? , ?)");
	//$lisays->execute(array($otunnus , $valinta));
	} 
	//$tulostus->tulosta_ongelma_syy();

}

?>
<?php include("ala.php"); ?>

