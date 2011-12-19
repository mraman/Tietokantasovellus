<?php
//Parametrina lomakkeen poista_ongelma.php:n tiedot: otunnus

include("istunto.php");
include("yhteys.php");
include("poisto_yla.php");
include("Tulostaja.php");
$tulostus = new Tulostaja();
?>

<p>
    <?php
    if (empty($_POST['ongelma'])) {
        echo "Et valinnut ongelmaa!";
    } else {
        try {
            $id = $_POST["ongelma"];
            $valinta = $yhteys->prepare("DELETE FROM ongelma_syy WHERE ongelma_id = ?");
            $valinta->execute(array($id));

            $kuvaus = $tulostus->get_otunnus1($id);
            $valinta = $yhteys->prepare("DELETE FROM ongelma WHERE otunnus = ?");
            $valinta->execute(array($id));
            echo "Ongelma: " . $kuvaus . " on poistettu. <br>";

        } catch (Exception $e) {
            die("VIRHE poistossa! ");
        }
    }
    ?>
</p>

<?php include("ala.php"); ?>



