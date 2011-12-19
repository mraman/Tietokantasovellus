<?php
include("istunto.php");
include("yhteys.php");
include("poisto_yla.php");
?>
<p>Valitse listasta poistettava ongelma ja paina OK. </p>
<form action="poisto.php" method="post">
    <?php 
    $kysely = $yhteys->prepare("SELECT * FROM ongelma");
    $kysely->execute();

    while ($rivi = $kysely->fetch()) {
        ?>
        <input type= radio name="ongelma" value=<?php echo $rivi[otunnus]; ?> > <?php echo $rivi["kuvaus"]; ?> <br>
    <?php } ?>
    <p>
        <INPUT TYPE="submit" VALUE="OK">
    </p>
</form>

<?php include("poisto__ala.php"); ?>
