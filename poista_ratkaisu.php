
<?php
include("istunto.php");
include("yhteys.php");
include("poisto_yla.php");
?>
<p>Valitse listasta poistettava ratkaisu ja paina OK. </p>
<form action="poisto2.php" method="post">
<?php
        $kysely = $yhteys->prepare("SELECT * FROM ratkaisu");
        $kysely->execute();

        while ($rivi = $kysely->fetch()) {

            ?>
           <input type= radio name="ratkaisu" value=<?php echo $rivi[rtunnus];?> >
		 <?php echo $rivi["kuvaus"]; ?> <br>
       <?php } ?>

<p>
<INPUT TYPE="submit" VALUE="OK">
</p>
</form>

<?php include("ala.php"); ?>

