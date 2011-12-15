<?php include ("yhteys.php"); ?>
<?php include ("yllapito_yla.php"); ?>

<?php

    if (empty($_POST['uusi_ongelma'])) {
        echo "Tekstikenttä oli tyhjä!";
    }

	 else {
	 $ongelma = $_POST["uusi_ongelma"];
         echo "<br>" . "Ongelma lisätty: " . $ongelma;
        }
    
   // die();

 $lisays = $yhteys->prepare("INSERT into ongelma (kuvaus)
 VALUES (?));
 $lisays->execute(array($ongelma));

?> 


<?php include("ala.php"); ?>
