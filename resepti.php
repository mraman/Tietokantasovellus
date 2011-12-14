<?php include ("yla.php") ?>

<?php
$kysely = $yhteys->prepare("SELECT kuvaus, rtunnus FROM syy_ratkaisu
        JOIN ratkaisu ON ratkaisu_id = rtunnus WHERE syy_id = ?");

$kuvaus = $yhteys->prepare("SELECT kuvaus FROM syy WHERE stunnus = ?");

if (isset($_POST['nappi'])) {
    if (empty($_POST['syyt'])) {
        echo "Et valinnut mitaan lukua!";
    } else {

	
        echo "Valitut syyt:  <br>" ;
	echo "<ul>";

        foreach ($_POST['syyt'] as $valinta){
	$kuvaus->execute(array($valinta));
	$teksti = $kuvaus->fetch();
	echo "<li>" . $teksti["kuvaus"];
	}
	echo "</ul>";

	echo "<table border>";

        foreach ($_POST['syyt'] as $luku) {
            $kysely->execute(array($luku));
            $rivi = $kysely->fetch();
            echo  $rivi["kuvaus"] . "<br>";
        }
        echo "</table>";
    }
}
?>

<?php include("ala.php");
