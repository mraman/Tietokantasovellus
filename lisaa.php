<?php
include ("istunto.php");
include ("yhteys.php");
include ("lisays_yla.php");
include ("Tulostaja.php");
$tulostus = new Tulostaja();
?>

<?php
$tulostus->tulosta_ongelma();

 function get_stunnus($syy){
        include("yhteys.php");
        $kuvaus = $yhteys->prepare("SELECT stunnus FROM syy WHERE stunnus = ?");

                $kuvaus->execute(array($syy));
                $teksti = $kuvaus->fetch();
                return  $teksti["stunnus"];
}


if (empty($_POST['uusi_ongelma'])) {
    echo "Tekstikenttä oli tyhjä!";
    die();
} else {
    	$ongelma = $_POST["uusi_ongelma"];
	$ongelma = htmlspecialchars($ongelma);

	//$lisays = $yhteys->prepare("INSERT into ongelma (kuvaus)
	//VALUES (?)");
	//$lisays->execute(array($ongelma));
	$otunnus = $tulostus->get_otunnus($ongelma);
	echo "Lisatty: " . $otunnus . " " . $ongelma . "<br>";

	}
?>
<?php 
if(empty($_POST["syyt"]) && empty($_POST["ratkaisut"])){
 	echo "Et valinnut yhtaan syyta tai ratkaisua!";
	die();
	}
	else{ 
    	$ongelma = $_POST["uusi_ongelma"];
	$ongelma = htmlspecialchars($ongelma);
	$otunnus = get_otunnus($ongelma);

	foreach ($_POST['syyt'] as $valinta){
	$stunnus = get_stunnus($valinta);  
	//$lisays = $yhteys->prepare("INSERT into ongelma_syy (ongelma_id, syy_id)
	//VALUES (? , ?)");
	//$lisays->execute(array($otunnus , $stunnus));
	} 
	//$tulostus->tulosta_ongelma_syy();
}

?>
<?php include("tulosta_ongelmat.php"); ?>
<?php include("ala.php"); ?>

