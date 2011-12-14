<?php include ("yhteys.php");
	include("yla.php"); ?>
<?php
// kyselyn suoritus
$kysely = $yhteys->prepare("SELECT * FROM ongelma");
$kysely->execute();
?>

<p> Valitse allaolevasta listasta ongelma, johon tarvitset apua
    <br> </p>

<form action="valikko1.php"  method="post">
    <SELECT NAME="ongelma" >

        <?php
        while ($rivi = $kysely->fetch()) {

            $muuttuja = $rivi["kuvaus"];
            echo "<OPTION value='$rivi[otunnus]'>" . $muuttuja . '</OPTION>';
        }
        ?>
        <OPTION SELECTED> Valitse ongelma  </OPTION>
    </SELECT>
    <p>
        <INPUT TYPE="submit" VALUE="OK">
    </p>
</form>

