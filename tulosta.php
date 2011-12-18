<?php
class Tulostaja {
include("yhteys.php");

public function tulosta_ongelma{
    echo "Kaikki ongelmat: <br>";
    $kysely = $yhteys->prepare("SELECT * FROM ongelma ORDER BY otunnus");
    $kysely->execute();
    while ($rivi = $kysely->fetch()) {
        echo $rivi['otunnus'] . " " . $rivi['kuvaus'] . "<br>";
    }
}
}

?>
