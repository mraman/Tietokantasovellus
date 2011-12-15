<?php include ("yla.php"); ?>
<h2>
Täällä voit antaa palautetta tai korjausehdotuksia ylläpitäjälle. 
</h2>
<p>
Kirjoita palaute tähän ja paina lähetä-nappia!
</p>

<form action="lahetys.php" method="post">
<textarea name="viesti"
cols=40 rows=10>  </textarea>
<br>
<input type="submit" value="Lähetä">
<input type="reset" value = "Tyhjennä">
</form>
<?php	include("ala.php"); ?>
