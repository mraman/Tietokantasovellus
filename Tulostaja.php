<?php

class Tulostaja {

// Tulostaa kaikki ongelmat
    public function tulosta_ongelma() {
        include("yhteys.php");
        echo "Kaikki ongelmat: <br>";
        try {
            $kysely = $yhteys->prepare("SELECT * FROM ongelma ORDER BY otunnus");
            $kysely->execute();
            while ($rivi = $kysely->fetch()) {
                echo $rivi['otunnus'] . " " . $rivi['kuvaus'] . "<br>";
            }
        } catch (Exception $e) {
            die("VIRHE: " . $e->getMessage());
        }
    }

//Tulostaa kaikki ongelma_syyt
    public function tulosta_ongelma_syy() {
        include("yhteys.php");
        try {
            $lisays = $yhteys->prepare("SELECT * FROM ongelma_syy");
            $lisays->execute();
            echo "ongelma_id syy_id <br>";
            while ($rivi = $lisays->fetch()) {
                echo $rivi['ongelma_id'] . " " . $rivi['syy_id'] . "<br>";
            }
        } catch (Exception $e) {
            die("VIRHE: " . $e->getMessage());
        }
    }

//tulostaa kaikki syy_ratkaisut
    public function tulosta_syy_ratkaisu() {
        include("yhteys.php");
        try {
            $lisays = $yhteys->prepare("SELECT * FROM syy_ratkaisu");
            $lisays->execute();
            echo "syy_id ratkaisu_id <br>";
            while ($rivi = $lisays->fetch()) {
                echo $rivi['syy_id'] . " " . $rivi['ratkaisu_id'] . "<br>";
            }
        } catch (Exception $e) {
            die("VIRHE: " . $e->getMessage());
        }
    }

//tulostaa kaikki syyt
    public function tulosta_syy() {
        include("yhteys.php");
        try {
            echo "Kaikki syyt: <br>";
            $kysely = $yhteys->prepare("SELECT * FROM syy ORDER BY stunnus");
            $kysely->execute();
            while ($rivi = $kysely->fetch()) {
                echo $rivi['stunnus'] . " " . $rivi['kuvaus'] . "<br>";
            }
        } catch (Exception $e) {
            die("VIRHE: " . $e->getMessage());
        }
    }

//tulostaa kaikki ratkaisut
    public function tulosta_ratkaisu() {
        include("yhteys.php");
        try {
            echo "Kaikki ratkaisut: <br>";
            $kysely = $yhteys->prepare("SELECT * FROM ratkaisu ORDER BY rtunnus");
            $kysely->execute();
            while ($rivi = $kysely->fetch()) {
                echo $rivi['rtunnus'] . " " . $rivi['kuvaus'] . "<br>";
            }
        } catch (Exception $e) {
            die("VIRHE: " . $e->getMessage());
        }
    }

//Parametrina tekstikuvaus
//return otunnus
    public function get_otunnus($ongelma) {
        include("yhteys.php");
        try {
            $lisays = $yhteys->prepare("SELECT otunnus FROM ongelma WHERE kuvaus = ?");
            $lisays->execute(array($ongelma));
            $otunnus = $lisays->fetch();
            return $otunnus["otunnus"];
        } catch (Exception $e) {
            die("VIRHE: " . $e->getMessage());
        }
    }

//Parametrina otunnus
//return kuvaus
    public function get_otunnus1($id) {
        include("yhteys.php");
        try {
            $lisays = $yhteys->prepare("SELECT kuvaus FROM ongelma WHERE otunnus = ?");
            $lisays->execute(array($id));
            $otunnus = $lisays->fetch();
            return $otunnus["kuvaus"];
        } catch (Exception $e) {
            die("VIRHE: " . $e->getMessage());
        }
    }

//Parametrina kuvaus
//return stunnus
    public function get_stunnus($syy) {
        try {
            include("yhteys.php");
            $kuvaus = $yhteys->prepare("SELECT * FROM syy WHERE kuvaus = ?");

            $kuvaus->execute(array($syy));
            $teksti = $kuvaus->fetch();
            // echo $teksti["stunnus"] . " " . $teksti["kuvaus"] . "<br>";
            return $teksti["stunnus"];
        } catch (Exception $e) {
            die("VIRHE: " . $e->getMessage());
        }
    }

//Parametrina kuvaus
//return rtunnus
    public function get_rtunnus($ratkaisu) {
        include("yhteys.php");
        try {
            $kuvaus = $yhteys->prepare("SELECT * FROM ratkaisu WHERE kuvaus = ?");

            $kuvaus->execute(array($ratkaisu));
            $teksti = $kuvaus->fetch();
            // echo $teksti["stunnus"] . " " . $teksti["kuvaus"] . "<br>";
            return $teksti["rtunnus"];
        } catch (Exception $e) {
            die("VIRHE: " . $e->getMessage());
        }
    }

//Parametrina rtunnus
//return kuvaus
    public function get_ratkaisu($id) {
        include("yhteys.php");
        try {
            $kuvaus = $yhteys->prepare("SELECT * FROM ratkaisu WHERE rtunnus = ?");

            $kuvaus->execute(array($id));
            $teksti = $kuvaus->fetch();
            //echo $teksti["rtunnus"] . " " . $teksti["kuvaus"] . "<br>";
            return $teksti["kuvaus"];
        } catch (Exception $e) {
            die("VIRHE: " . $e->getMessage());
        }
    }

//Parametrina stunnus
//return kuvaus
    public function get_syykuvaus($syy) {
        include("yhteys.php");
        try {
            $kuvaus = $yhteys->prepare("SELECT * FROM syy WHERE kuvaus = ?");

            $kuvaus->execute(array($syy));
            $teksti = $kuvaus->fetch();
            return $teksti["kuvaus"];
        } catch (Exception $e) {
            die("VIRHE: " . $e->getMessage());
        }
    }

}

?>
