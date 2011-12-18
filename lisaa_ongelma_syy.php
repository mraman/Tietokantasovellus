<?php
include("istunto.php");
include("lisays_yla.php");
include ("yhteys.php");
include("Tulostaja.php");
?>

<?php
$tulosta = new Tulostaja();
?>

<p> Valitse ongelma johon haluat liittaa uuden syy-yhteyden. </p>
<form action="lisaa3.php" method="post">

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


<p> Valitse ongelmaan liittyvä syy</p>

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


