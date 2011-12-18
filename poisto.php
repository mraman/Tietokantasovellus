<?php
include("istunto.php");
include("yhteys.php");
include("poisto_yla.php"); ?>

<?php
$id = $_POST["ongelma"];
$valinta = $yhteys->prepare("SELECT kuvaus FROM ongelma WHERE otunnus = ?");
$valinta->execute(array($id));
$kuvaus = $valinta->fetch();
?>
<p>
<?php
    if (empty($_POST['ongelma'])) {
        header("Location: poista_ongelma.php");
    } else {
        $valinta = $yhteys->prepare("DELETE FROM ongelma WHERE otunnus = ?");
        $valinta->execute(array($id));
        echo "Ongelma: " . $kuvaus['kuvaus'] . " on poistettu. <br>";
    } ?>
</p>
<p>

<?php
    echo "Kaikki ongelmat: <br>";
    $kysely = $yhteys->prepare("SELECT * FROM ongelma ORDER BY otunnus");
    $kysely->execute();

    while ($rivi = $kysely->fetch()) {

        echo $rivi['otunnus'] . " " . $rivi['kuvaus'] . "<br>";
    }
    ?>
</p>

<?php include("poisto__ala.php"); ?>
