<?php
//Käsittelee lomaketta muuta_ongelma.php
//parametrina otunnus
include("istunto.php");
include("muutos_yla.php");
include("yhteys.php");
?>

<?php
$id = $_POST["ongelma"];
$valinta = $yhteys->prepare("SELECT kuvaus FROM ongelma WHERE otunnus = ?");
$valinta->execute(array($id));
$kuvaus = $valinta->fetch();
?>
<p>
    <?php
    if (empty($_POST['muutettu_ongelma'])) {
        header("Location: muuta_ongelma.php");
    } else {
        $muutos = $_POST['muutettu_ongelma'];
        $valinta = $yhteys->prepare("UPDATE ongelma SET kuvaus= ? WHERE otunnus = ?");
        $valinta->execute(array($muutos, $id));
        echo "Ongelma: " . $kuvaus['kuvaus'] . " <br>
On muutettu tekstilla: " . $_POST["muutettu_ongelma"] . "<br>";
    }
    ?>
</p>
<?php
include("muutos_ala.php");
?>



