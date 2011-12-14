<?php include("yllapito_yla.php"); ?>
<p> Lisaa  uusi ongelma: </p>
<p> Ongelman kuvaus </p>
<p>
<form action="lisaa.php" method="post">
<textarea name="uusi_ongelma"
cols=40 rows=2> </textarea>

<p> Siihen liittyva syy </p>
<textarea name="uusi_syy"
cols=40 rows=2> </textarea>

<p> Syyhyn liittyva ratkaisu </p>
<textarea name="uusi_ratkaisu"
cols=40 rows=5> </textarea>

<br>
<input type="submit" value="Lisaa">
</form>
</p>

<?php include("yllapito_ala.php")?>
