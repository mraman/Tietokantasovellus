<?php

include ("valikko1.php");
?>

<?php

$kysely = $yhteys->prepare("SELECT kuvaus, rtunnus FROM syy_ratkaisu
        JOIN ratkaisu ON ratkaisu_id = rtunnus WHERE syy_id = ?");


if (isset($_POST['nappi'])) {
    if (empty($_POST['syyt'])) {
        echo "Et valinnut mitaan lukua!";
    } else {

        echo "Valitsit syyn nro: <br>";
        echo "<table border>";

        foreach ($_POST['syyt'] as $luku) {
            $kysely->execute(array($luku));
            $rivi = $kysely->fetch();
            echo "<tr>";
            echo "<td>" . $rivi["kuvaus"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    // die();
}
?>

