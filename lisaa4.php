<?php
include ("istunto.php");
include ("yhteys.php");
include ("lisays_yla.php");
include ("Tulostaja.php");
$tulostus = new Tulostaja();
?>

<?php

if(empty($_POST["ratkaisu"])){
  echo "Et valinnut yhtaan ratkaisua!";
die();
}
if(empty($_POST["syy"])){
  echo "Et valinnut yhtaan syyta!";
die();
}

else {
$rtunnus = $_POST["ratkaisu"];
$stunnus = $_POST["syy"];
/*
$lisays = $yhteys->prepare("INSERT into syy_ratkaisu (syy_id, ratkaisu_id)
VALUES (? , ?)");
$lisays->execute(array($stunnus , $rtunnus));
*/
$tulostus->tulosta_syy_ratkaisu();

echo "uuden yhteyden lisaaminen onnistui! ";
}

?>
<?php include("ala.php"); ?>


