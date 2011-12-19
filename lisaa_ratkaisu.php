<?php
include("istunto.php");
include("lisays_yla.php");
include ("yhteys.php");
include("Tulostaja.php");
?>

<?php
$tulosta = new Tulostaja();
?>

<p> Kirjoita tekstialueeseen ratkaisu, jonka haluat lisätä.
<form action="lisaa2.php" method="post">

    <textarea name="uusi_ratkaisu"
              cols=40 rows=2></textarea>
    <p> Valitse syy, johon ratkaisu liittyy </p>
    <?php
    $kysely1 = $yhteys->prepare("SELECT * FROM syy");
    $kysely1->execute();
    while ($rivi1 = $kysely1->fetch()) {
        ?>
        <input type=radio name="syy" value= <?php echo $rivi1["stunnus"]; ?> >
        <?php
        echo $rivi1["kuvaus"] . "<br>";
    }
    ?>

    <br>
    <input type="submit" name="nappi" value="Lisää">
</form>
<?php include("ala.php") ?>

