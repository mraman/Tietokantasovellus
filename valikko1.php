<?php
include ("yla.php");
?>


<?php
$id = $_REQUEST["ongelma"];
?>

<?php
$valinta = $yhteys->prepare("SELECT kuvaus FROM ongelma WHERE otunnus = ?");
$valinta->execute(array($id));
$kuvaus = $valinta->fetch();
echo $kuvaus[kuvaus] . "<br>";
?>


<p>Valitse listasta vaihtoehtoja, joita et ole vielä tarkistanut
    ja hae sitten resepti. </p>


<?php
$kyssari = $yhteys->prepare("SELECT kuvaus, stunnus FROM ongelma_syy JOIN
    syy ON syy_id = stunnus WHERE ongelma_id = ?");

$kyssari->execute(array($id));
?>
<form action="resepti.php"  method="post">

    <?php
    while ($rivi = $kyssari->fetch()) {
        ?>

        <input type=checkbox name="syyt[]" value =
               <?php echo $rivi["stunnus"]; ?>  >
               <?php
               echo $rivi[kuvaus];
               echo "<br>";
           }
           ?>


    <p> <input type="submit" name="nappi" value="Hae resepti"> </p>

</form>
<?php
include ("ala.php");
?>

