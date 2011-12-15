<?php
 include ("muutos_yla.php");
include ("yhteys.php");
 ?>

<b> Valitse syy, jota haluat muuttaa. </b>
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


<textarea name="uusi_syy"
cols=40 rows=2> </textarea>
<p>
<input type="submit" value="OK">
</p>
</form>

<?php include ("muutos_ala.php"); ?>
