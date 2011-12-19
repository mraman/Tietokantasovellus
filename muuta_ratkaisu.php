<?php
include ("istunto.php");
include ("muutos_yla.php");
include ("yhteys.php");
?>

<h2>Muuta ratkaisua </h2>
<p> Valitse ratkaisu, jota haluat muuttaa. </p>
<form action="muuta2.php" method="post">
    <?php
    $kysely = $yhteys->prepare("SELECT * FROM ratkaisu");
    $kysely->execute();

    while ($rivi = $kysely->fetch()) {
        ?>
        <input type=radio name="ratkaisu" value=<?php echo $rivi["rtunnus"]; ?> > <?php echo $rivi["kuvaus"]; ?>
        <br>
        <?php
    }
    ?>
    <p> Kirjoita valitsemasi ratkaisun kuvaus uudelleen haluamallasi muutoksella </p>
    <textarea name="uusi_ratkaisu"
              cols=40 rows=2></textarea>
    <p>
        <input type="submit" value="OK">
    </p>
</form>

<?php include ("ala.php"); ?>


