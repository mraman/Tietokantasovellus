<?php
include("istunto.php");
include("muutos_yla.php");
include("yhteys.php");
?>

<?php
$id = $_POST["syy"];
$valinta = $yhteys->prepare("SELECT kuvaus FROM syy WHERE stunnus = ?");
$valinta->execute(array($id));
$kuvaus = $valinta->fetch();
?>

<p>
    <?php
    if (empty($_POST['uusi_syy'])) {
        header("Location: muuta_syy.php");
    } else {
        $muutos = $_POST['uusi_syy'];
        $valinta = $yhteys->prepare("UPDATE syy SET kuvaus= ? WHERE stunnus = ?");
        $valinta->execute(array($muutos, $id));
        echo "Syy: " . $kuvaus['kuvaus'] . " <br>
        On muutettu tekstilla: " . $_POST["uusi_syy"] . "<br>";
    }
    ?>
</p>

<p>
<?php
    echo "Kaikki syyt: <br>";
    $kysely = $yhteys->prepare("SELECT * FROM syy ORDER BY stunnus");
    $kysely->execute();

    while ($rivi = $kysely->fetch()) {

        echo $rivi['stunnus'] . " " . $rivi['kuvaus'] . "<br>";
    }
?>
</p>
    <?php
    include("muutos_ala.php");
    ?>

