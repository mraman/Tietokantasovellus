<?php
include("istunto.php");
include("lisays_yla.php");
include ("yhteys.php");
include("Tulostaja.php");
?>

<?php
$tulosta = new Tulostaja();
?>

<p> Kirjoita tekstialueeseen ongelma, jonka haluat lisätä. </p>
<form action="lisaa.php" method="post">

    <textarea name="uusi_ongelma"
              cols=40 rows=2></textarea>

    <p> Valitse ongelmaan liittyvä syyt. Jätä tyhjäksi,
        jos haluat lisätä pelkän ongelman ja paina nappia "Lisää". </p>

    <?php
    $kysely1 = $yhteys->prepare("SELECT * FROM syy");
    $kysely1->execute();
    while ($rivi1 = $kysely1->fetch()) {
        ?>
        <input type=checkbox name="syyt[]" value= <?php echo $rivi1["stunnus"]; ?> >
        <?php
        echo $rivi1["kuvaus"] . "<br>";
    }
    ?>

    <br>
    <input type="submit" name="nappi" value="Lisää">
</form>
</p>

<?php include("ala.php") ?>


