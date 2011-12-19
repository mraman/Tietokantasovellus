<?php
include("istunto.php");
include("lisays_yla.php");
include ("yhteys.php");
include("Tulostaja.php");
?>

<?php
$tulosta = new Tulostaja();
?>

<p> Kirjoita tekstialueeseen syy, jonka haluat lisätä.
<form action="lisaa1.php" method="post">

    <textarea name="uusi_syy"
              cols=40 rows=2></textarea>
    <p> Valitse ongelma, johon syy liittyy </p>
    <?php
    $kysely1 = $yhteys->prepare("SELECT * FROM ongelma");
    $kysely1->execute();
    while ($rivi1 = $kysely1->fetch()) {
        ?>
        <input type=radio name="ongelma" value= <?php echo $rivi1["otunnus"]; ?> >
        <?php
        echo $rivi1["kuvaus"] . "<br>";
    }
    ?>


    <p> Valitse syyhyn liittyvä ratkaisu </p>

    <?php
    $kysely1 = $yhteys->prepare("SELECT * FROM ratkaisu");
    $kysely1->execute();
    while ($rivi1 = $kysely1->fetch()) {
        ?>
        <input type=radio name="ratkaisu" value= <?php echo $rivi1["rtunnus"]; ?> >
        <?php
        echo $rivi1["kuvaus"] . "<br>";
    }
    ?>
    <br>
    <input type="submit" name="nappi" value="Lisää">
</form>


<?php include("ala.php") ?>


