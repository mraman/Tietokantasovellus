<?php
include ("istunto.php");
include ("yhteys.php");
include ("muutos_yla.php");
?>
<h2> Muuta ongelmaa </h2>
<p> Valitse listasta ongelma, jonka haluat muuttaa. Kirjoita sitten
    alla olevaan tekstialueeseen ongelman korvaava kuvaus.
    <br> </p>

<form action="muuta.php" method="post">
    <SELECT NAME="ongelma" >

        <?php
        $kysely = $yhteys->prepare("SELECT * FROM ongelma");
        $kysely->execute();

        while ($rivi = $kysely->fetch()) {

            $muuttuja = $rivi["kuvaus"];
            echo "<OPTION value='$rivi[otunnus]'>" . $muuttuja . '</OPTION>';
        }
        ?>
    </SELECT>
    <p>

        <textarea name="muutettu_ongelma"
                  cols=40 rows=2></textarea>
    <p>
        <INPUT TYPE="submit" VALUE="OK">
    </p>
</form>
<?php include ("ala.php"); ?>
