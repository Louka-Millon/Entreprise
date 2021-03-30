<?php 
session_start();
$_SESSION["prenom"] = "";
$_SESSION["nom"] = "";
$_SESSION["centre"] = "";
$_SESSION["promotion"] = "";
$_SESSION["email"] = "";
if(isset($_COOKIE["user_id"])){
    var_dump($_COOKIE);
    setcookie('user_id', null, time()+3600*24*30, "/", "", "0");
}

session_destroy();
header("Location:../tpl/index.php?page=connexion");
