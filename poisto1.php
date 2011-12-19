
<?php
//Käsittelee lomakkeen poista_syy.php:n tiedot
//Parametrina: stunnus
include("istunto.php");
include("yhteys.php");
include("poisto_yla.php");
include("Tulostaja.php");
$tulostus = new Tulostaja();
?>

<p>
    <?php
    if (empty($_POST['syy'])) {
        echo "Et valinnut syyta!";
    } else {
try{
        $id = $_POST["syy"];
        //echo "id: " . $id;

        $valinta = $yhteys->prepare("DELETE FROM syy_ratkaisu WHERE syy_id = ?");
        $valinta->execute(array($id));

        $kuvaus = $tulostus->get_syykuvaus($id);
        $valinta = $yhteys->prepare("DELETE FROM syy WHERE stunnus = ?");
        $valinta->execute(array($id));
        echo "Syy: " . $kuvaus . " on poistettu. <br>";
	} catch (Excepti $e) {
	 die("VIRHE poistossa!");	
	}

    }
    ?>
</p>

<?php include("ala.php"); ?>



