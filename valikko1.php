<h1> Tervetuloa Rööriklinikkaan </h1>

<?php include ("yhteys.php"); ?>
<?php include ("valikko.php");?>


<p>Valitse listasta vaihtoehtoja, joita et ole vielä tarkistanut
	ja hae sitten resepti. </p>

<?php $id =  $_REQUEST["ongelma"]; ?>

<?php $kyssari = $yhteys->prepare("SELECT kuvaus  FROM ongelma_syy JOIN syy ON syy_id = stunnus WHERE ongelma_id = ?");
$kyssari->execute(array($id));

?>


<form action="valikko1.php" method="post">

<?php

while ($rivi = $kyssari->fetch()) { ?>

	<input type=checkbox name= "syy" value = "syy_id" >
	<?php   echo $rivi["kuvaus"]; 
	echo "<br>";
}
?>

 
<p> <input type="submit" value="Hae resepti"> </p>
</form>

