<?php 
session_start();
$_SESSION["prenom"] = "";
$_SESSION["nom"] = "";
$_SESSION["centre"] = "";
$_SESSION["promotion"] = "";
$_SESSION["email"] = "";
session_destroy();
header("Location:../tpl/index.php?page=connexion");
