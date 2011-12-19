<?php
include("istunto.php");
include("lisays_yla.php");
include ("yhteys.php");
include("Tulostaja.php");
?>

<?php
$tulosta = new Tulostaja();
?>

<p> Valitse ratkaisu johon haluat liittaa uuden syy-yhteyden. </p>
<form action="lisaa4.php" method="post">

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


<p> Valitse syyhyn liittyvä ratkaisu</p>

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
