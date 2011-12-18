
<?php

include ("istunto.php");
include ("yhteys.php");
include ("lisays_yla.php");
?>

<?php

if (empty($_POST['uusi_ongelma'])) {
    echo "Tekstikenttä oli tyhjä!";
    die();
} else {
    $ongelma = $_POST["uusi_ongelma"];

	//$lisays = $yhteys->prepare("INSERT into ongelma (kuvaus)
	//VALUES (?)");
	//$lisays->execute(array($ongelma));
   	echo "<br>" . "Ongelma lisätty: " . $ongelma; ."<br>"
	}
?>
<?php
if(empty($_POST["syyt"])){
 	echo "Et valinnut yhtaan syyta!";
	die();
	}
	else{
	$kuvaus = $yhteys->prepare("SELECT kuvaus FROM syy WHERE stunnus = ?");
	        echo "Valitut syyt: <br>" ;
	echo "<ul>";

        foreach ($_POST['syyt'] as $valinta){
		$kuvaus->execute(array($valinta));
		$teksti = $kuvaus->fetch();
		echo "<li>" . $teksti["kuvaus"];
		}
	echo "</ul>";
} 
?>
<?php include("tulosta_ongelmat.php");?>
<?php include("ala.php"); ?>

