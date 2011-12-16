	<?php include ("yla.php"); ?>
        <h1> Kirjaudu sisaan </h1>

        <form action="sisaan.php" method="post">
            Tunnus:
            <input type="text" name="tunnus"> <br>
            Salasana:
            <input type="password" name="salasana"> <br>
            <input type="submit" value="Kirjaudu">
        </form>


        <?php include ("ala.php"); ?>

