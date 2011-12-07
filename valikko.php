	<?php include ("yhteys.php"); ?>

	<?php // kyselyn suoritus
        $kysely = $yhteys->prepare("SELECT * FROM ongelma");
        $kysely->execute();
        ?>

	 <p> Valitse allaolevasta listasta ongelma, johon tarvitset apua
	 <br> </p>
	
	<form action="valikko1.php" method="post">
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
	
