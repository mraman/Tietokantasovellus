<p Ollaanko syyt.php:ssa /p>


<?php
$kyssari = $yhteys->prepare("SELECT kuvaus, stunnus FROM ongelma_syy JOIN
    syy ON syy_id = stunnus WHERE ongelma_id = ?");

$kyssari->execute(array($id));
?>


<form  method="post">

    <?php
    while ($rivi = $kyssari->fetch()) {
        ?>

        <input type=checkbox name="syyt[]" value =<?php echo $rivi["stunnus"]; $
        <?php
        echo $rivi[kuvaus];
        echo "<br>";
    }
    ?>


    <p> <input type="submit" name="nappi" value="Hae resepti"> </p>
<?php include ("resepti.php"); ?>

</form>

