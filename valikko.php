        <?php // yhteyden muodostus tietokantaan
        try {
            $yhteys = new PDO("pgsql:host=localhost;dbname=mraman",
                            "mraman", "f165dd3859864b0c");
        } catch (PDOException $e) {
            die("VIRHE: " . $e->getMessage());
        }
        $yhteys->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	?>


	<?php // kyselyn suoritus
        $kysely = $yhteys->prepare("SELECT * FROM ongelma");
        $kysely->execute();
        ?>

	 <p> Valitse allaolevasta listasta ongelma, johon tarvitset apua
	 <br> </p>
	
	<form action="valikko.php" method="post">
	<SELECT NAME="ongelma" 

	<?php
         while ($rivi = $kysely->fetch()) {

	$muuttuja = $rivi["kuvaus"];
        echo "<OPTION>" .  $muuttuja;
	
        } ?>

	<OPTION SELECTED>  <?php echo $_REQUEST["ongelma"]; ?>

	</SELECT>
	<p>
	<INPUT TYPE="submit" VALUE="OK">
	</p>
	</form>


	<br>
	<?php echo "valittu muuttuja: "; 
	echo $_REQUEST["ongelma"];  ?>

	<?php $kyssari = $yhteys->prepare("SELECT * FROM syy");
	$kyssari->execute();
	?>


	<form>
	<?php
	while ($rivi = $kyssari->fetch()) {

		echo "<input type=checkbox name=\"syy\">";
   		 echo  $rivi["kuvaus"];
		echo "<br>";
	}
	 ?>
	
	<input type=checkbox name="syy"
	value="syy_id" /> syyn kuvaus
	<p> <input type="submit" value="Hae resepti"> </p>
	</form>
	
