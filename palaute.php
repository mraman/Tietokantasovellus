<?php include ("yla.php"); ?>
<h2>
Taalla voit antaa palautetta tai korjausehdotuksia yllapitajalle. 
</h2>
<p>
Kirjoita palaute tahan ja paina laheta-nappia!
</p>

<form action="lahetys.php" method="post">
<textarea name="viesti"
cols=40 rows=10>  </textarea>
<br>
<input type="submit" value="Laheta">
<input type="reset" value = "Tyhjenna">
</form>
<?php	include("ala.php"); ?>
