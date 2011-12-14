<?php
$viesti = $_POST["viesti"];
$ok = mail("mirva.raman@helsinki.fi",
           "Palaute",
           "Viesti: $viesti");
if ($ok) {
    header("Location: kiitos.php");
} else {
    header("Location: virhe.php");
}
?>
