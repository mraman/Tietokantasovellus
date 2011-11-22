<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Rööriklinikka</title>
<style>	<!--
		H1,H2, H3
		{font-style: italic}
	--> </style>

	<LINK REL="stylesheet" TYPE="text/css" HREF="tyylit.css">

    </head>
    
        <h1> Tervetuloa Rööriklinikkaan!</h1>
	<p> Valitse alla olevasta listasta ongelma, johon tarvitset apua <br>

<!-- Haetaan ongelma taulusta sisaltoa valikkoon -->

	<form action="index.php" method="post">
	<SELECT NAME="Ongelma"	
	 
        <?php
//  yhteyden muodostus tietokantaan 
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
	?>

 <!--  haettujen rivien tulostus -->

  <!--        echo "<table border>"; -->

	<?php
        while ($rivi = $kysely->fetch()) {



  //          echo "<tr>";
  //          echo "<td>" . $rivi["nimi"] . "</td>";
  //          echo "</tr>";

	$muuttuja = $rivi["nimi"];
        echo "<OPTION>" . $muuttuja; 
	
        }
//        echo "</table>";

        ?>
	</SELECT></p>
	<INPUT TYPE="submit" VALULE = "Ok! ">
 	</form> 

    </body>
</html>

