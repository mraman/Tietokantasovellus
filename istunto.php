<?php
session_start();
if (!isset($_SESSION["kayttaja"])) {
    header("Location: kirjautuminen.php");
    die();
}
?>
