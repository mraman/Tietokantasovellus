<?php
//Käsittelee muuta_ratkaisu.php:tä
//parametrina rtunnus
include("istunto.php");
include("muutos_yla.php");
include("yhteys.php");
?>

<?php
if (empty($_POST["ratkaisu"])) {
    header("Location: muuta_ratkaisu.php");
}
$id = $_POST["ratkaisu"];
$valinta = $yhteys->prepare("SELECT kuvaus FROM ratkaisu WHERE rtunnus = ?");
$valinta->execute(array($id));
$kuvaus = $valinta->fetch();
?>
<p>
    <?php
    if (empty($_POST['uusi_ratkaisu'])) {
        header("Location: muuta_ratkaisu.php");
    } else {
        $muutos = $_POST['uusi_ratkaisu'];
        $valinta = $yhteys->prepare("UPDATE ratkaisu SET kuvaus= ?WHERE rtunnus= ?");
        $valinta->execute(array($muutos, $id));
        echo "Ratkaisu: " . $kuvaus['kuvaus'] . " <br>
On muutettu tekstilla: " . $_POST["uusi_ratkaisu"] . "<br>";
    }
    ?>
</p>

<?php
include("muutos_ala.php");
?>


