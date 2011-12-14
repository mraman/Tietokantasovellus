<?php include ("yhteys.php"); ?>

<?php
// kyselyn suoritus
$kysely = $yhteys->prepare("SELECT * FROM ongelma");
$kysely->execute();
?>



<form action="lisaa.php" method="post">
<SELECT NAME="ongelma" >

<?php
        while ($rivi = $kysely->fetch()) {

            $muuttuja = $rivi["kuvaus"];
            echo "<OPTION value='$rivi[otunnus]'>" . $muuttuja . '</OPTION>';
        }
        ?>
<OPTION SELECTED> <?php echo "Valitse ongelma" ?> </OPTION>
</SELECT>
<p>
<INPUT TYPE="submit" VALUE="OK">
</p>
</form>
