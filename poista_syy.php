
<?php
include("istunto.php");
include("yhteys.php");
include("poisto_yla.php");
?>
<p>Valitse listasta poistettava syy ja paina OK. </p>
<form action="poisto1.php" method="post">
<?php
        $kysely = $yhteys->prepare("SELECT * FROM syy");
        $kysely->execute();

        while ($rivi = $kysely->fetch()) {

            ?>
           <input type= radio name="syy" value=<?php echo $rivi[stunnus];?> > 
	<?php echo $rivi["kuvaus"]; ?> <br>
       <?php } ?>

<p>
<INPUT TYPE="submit" VALUE="OK">
</p>
</form>

<?php include("poisto__ala.php"); ?>

