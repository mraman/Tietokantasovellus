<?php
class Tulostaja {

public function tulosta_ongelma(){
	include("yhteys.php");
    echo "Kaikki ongelmat: <br>";
    $kysely = $yhteys->prepare("SELECT * FROM ongelma ORDER BY otunnus");
    $kysely->execute();
    while ($rivi = $kysely->fetch()) {
        echo $rivi['otunnus'] . " " . $rivi['kuvaus'] . "<br>";
    }
}


 public function tulosta_ongelma_syy(){
	include("yhteys.php");
        $lisays = $yhteys->prepare("SELECT * FROM ongelma_syy");
        $lisays->execute();
	echo "ongelma_id   syy_id <br>";
        while ($rivi = $lisays->fetch()) {
        echo  $rivi['ongelma_id'] . " " . $rivi['syy_id'] . "<br>";
        } 
}

public function get_otunnus($ongelma) {
        include("yhteys.php");
        $lisays = $yhteys->prepare("SELECT otunnus FROM ongelma WHERE kuvaus = ?");
        $lisays->execute(array($ongelma));
        $otunnus = $lisays->fetch();
        return $otunnus["otunnus"];
}

public function get_stunnus($syy){
        include("yhteys.php");
        $kuvaus = $yhteys->prepare("SELECT * FROM syy WHERE stunnus = ?");

                $kuvaus->execute(array($syy));
                $teksti = $kuvaus->fetch();
		echo $teksti["stunnus"] . " " . $teksti["kuvaus"] . "<br>";
                return  $teksti["stunnus"];
}




}
?>



