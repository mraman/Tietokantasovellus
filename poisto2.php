<?php
//Käsittelee lomakkeen poista_ratkaisu.php:n tiedot
//Parametrina rtunnus
include("istunto.php");
include("yhteys.php");
include("poisto_yla.php");
include("Tulostaja.php");
$tulostus = new Tulostaja();
?>

<p>
    <?php
    if (empty($_POST['ratkaisu'])) {
        echo "Et valinnut ratkaisua!";
    } else {
        $id = $_POST["ratkaisu"];
        $kuvaus = $tulostus->get_ratkaisu($id);

        $valinta = $yhteys->prepare("DELETE FROM ratkaisu WHERE rtunnus = ?");
        $valinta->execute(array($id));
        echo "Ratkaisu: " . $kuvaus . " on poistettu. <br>";


        $valinta = $yhteys->prepare("DELETE FROM syy_ratkaisu WHERE ratkaisu_id = ?");
        $valinta->execute(array($id));
    }
    ?>
</p>

<?php include("poisto__ala.php"); ?>



