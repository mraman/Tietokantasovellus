<h1> Tervetuloa Rööriklinikkaan </h1>

<?php include ("yhteys.php"); ?>
<?php include ("valikko.php");?>


<p>
<?php echo "valittu muuttuja: ";
echo $_REQUEST["ongelma"]; 
 ?>
</p>

<p>Valitse listasta vaihtoehtoja, joita et ole vielä tarkistanut
	ja hae sitten resepti. </p>


<?php $kyssari = $yhteys->prepare("SELECT * FROM syy");
$kyssari->execute();
?>

<form action="valikko1.php" method="post">
<?php
while ($rivi = $kyssari->fetch()) { ?>

<input type=checkbox name= "syy" value = "syy_id" >

  <?php   echo $rivi["kuvaus"]; 
echo "<br>";
}
?> 


<p> Syyt: (Haetaan tähän valittuun ongelmaan liittyvät syyt) <br> 
          <input NAME="syy[]" type=checkbox VALUE ="1" </p> 


  
       //  <?php 
        //  if (!empty($_POST['syy']) { 
        //        foreach($_POST['syy'] as $syy) { 

          //      } 
         //       $_POST['syy'][2]; 
        //        "Update Ongelma set nimi = 'Kala' where id = 3" 
       // } 
       // ?> 
 
<p> <input type="submit" value="Hae resepti"> </p>
</form>

