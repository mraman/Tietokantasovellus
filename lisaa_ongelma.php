<?php include("yllapito_yla.php"); ?>
<p> Lisää  uusi ongelma: </p>
<p> Ongelman kuvaus </p>


<?php
include ("yhteys.php");
// 

?>

<p> Valitse allaolevasta listasta ongelma.
<br> </p>

<form action="valikko1.php" method="post">
<SELECT NAME="ongelma" >

<?php

$kysely = $yhteys->prepare("SELECT * FROM ongelma");
$kysely->execute();
 
       while ($rivi = $kysely->fetch()) {

            $muuttuja = $rivi["kuvaus"];
            echo "<OPTION value='$rivi[otunnus]'>" . $muuttuja . '</OPTION>';
        }
        ?>
<OPTION>   </OPTION>
</SELECT>

<p>
<INPUT TYPE="submit" VALUE="OK">
</p>
</form>


<p>
<form action="lisaa.php" method="post">

<textarea name="uusi_ongelma"
cols=40 rows=2> </textarea>

<p> Valitse siihen liittyvä syy </p>

<form action="" method="post">
<select name="syy">
<?php
 
 $kysely1 = $yhteys->prepare("SELECT * FROM syy");
 $kysely1->execute();


 while ($rivi1 = $kysely1->fetch()){
	 ?>
	<input type=checkbox name="syyt[]" value= <?php echo $rivi1["stunnus"]; ?> >
	 <?php echo $rivi1["kuvaus"] . "<br>";
}
 ?>
</form>

<textarea name="uusi_syy"
cols=40 rows=2> </textarea>

<p> Syyhyn liittyvä ratkaisu </p>
<textarea name="uusi_ratkaisu"
cols=40 rows=5> </textarea>

<br>
<input type="submit" name="nappi" value="Lisää">
</form>
</p>

<?php include("yllapito_ala.php")?>
