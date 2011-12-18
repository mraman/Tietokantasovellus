<?php
include("istunto.php");
include("yllapito_yla.php");
include ("yhteys.php");
?>

<p> Kirjoita tekstialueeseen ongelma, jonka haluat lisata.
<form action="lisaa.php" method="post">

<textarea name="uusi_ongelma"
cols=40 rows=2></textarea>

<p> Valitse ongelmaan liittyvä syy t</p>

<?php
 
 $kysely1 = $yhteys->prepare("SELECT * FROM syy");
 $kysely1->execute();
 while ($rivi1 = $kysely1->fetch()){
	 ?>
	<input type=checkbox name="syyt[]" value= <?php echo $rivi1["stunnus"]; ?> >
	 <?php echo $rivi1["kuvaus"] . "<br>";
}
 ?>
<p> Tai lisaa sille uusi syy. <br>
<textarea name="uusi_syy"
cols=40 rows=2></textarea>
</p>

<p> Syyhyn liittyvä ratkaisu </p>
<textarea name="uusi_ratkaisu"
cols=40 rows=5></textarea>

<br>
<input type="submit" name="nappi" value="Lisää">
</form>
</p>

<?php include("yllapito_ala.php")?>
