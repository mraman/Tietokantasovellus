<?php
include ("istunto.php");
include ("yhteys.php");
include ("lisays_yla.php");
include ("Tulostaja.php");
$tulostus = new Tulostaja();
?>

<?php
/*
En pystynyt ketjuttamaan ehtoja, joten siksi laitoin syyn, ongelman ja
ratkaisun tarkistamisen perakkain.
if (empty($_POST["ongelma"]) && empty($_POST["ratkaisu"])) ei toiminut...
*/

if(empty($_POST["ongelma"])){
  echo "Et valinnut yhtaan ongelmaa!";
die();
}
if(empty($_POST["syy"])){
  echo "Et valinnut yhtaan syyta!";
die();
}

else {
$otunnus = $_POST["ongelma"];
$stunnus = $_POST["syy"];
/*
$lisays = $yhteys->prepare("INSERT into ongelma_syy (ongelma_id, syy_id)
VALUES (? , ?)");
$lisays->execute(array($otunnus , $stunnus));
$tulostus->tulosta_ongelma_syy();
*/
echo "uuden yhteyden lisaaminen onnistui! ";
}

?>
<?php include("ala.php"); ?>


