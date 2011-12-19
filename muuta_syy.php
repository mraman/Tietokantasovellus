<?php
include ("istunto.php");
include ("muutos_yla.php");
include ("yhteys.php");
?>
<h2> Muuta syytä </h2>
<p> Valitse syy, jota haluat muuttaa. </p>
<form action="muuta1.php" method="post">
    <select name="syy">
        <?php
        $kysely1 = $yhteys->prepare("SELECT * FROM syy");
        $kysely1->execute();


        while ($rivi1 = $kysely1->fetch()) {
            ?>
            <option value=<?php echo $rivi1["stunnus"]; ?> > <?php echo $rivi1["kuvaus"]; ?>
            </option>
            <?php
        }
        ?>
    </select>
    <p> Kirjoita syyn kuvaus uudelleen haluamallasi muutoksella </p>
    <textarea name="uusi_syy"
              cols=40 rows=2></textarea>
    <p>
        <input type="submit" value="OK">
    </p>
</form>

<?php include ("ala.php"); ?>


