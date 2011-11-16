<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Rööriklinikka</title>
    </head>
    <body>
        <h1> Tervetuloa Rööriklinikkaan! :)</h1>
        
        <!--        näyttää taulun tuotteet tiedot:-->

        <?php
// yhteyden muodostus tietokantaan
        try {
            $yhteys = new PDO("pgsql:host=localhost;dbname=mraman",
                            "mraman", "f165dd3859864b0c");
        } catch (PDOException $e) {
            die("VIRHE: " . $e->getMessage());
        }
        $yhteys->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// kyselyn suoritus
        $kysely = $yhteys->prepare("SELECT * FROM tuotteet");
        $kysely->execute();

// haettujen rivien tulostus
        echo "<table border>";
        while ($rivi = $kysely->fetch()) {
            echo "<tr>";
            echo "<td>" . $rivi["nimi"] . "</td>";
            echo "<td>" . $rivi["hinta"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </body>
</html>
