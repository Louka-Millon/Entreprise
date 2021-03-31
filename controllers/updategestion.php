<?php
session_start();
require "SiteController.php";
$siteC = new SiteController();
$iduser = $_GET["id"];
$dictionnary = array("Student" => 5, "Representative" => 6, "Tutor" => 7, "Administrator" => 9, "company" => 9);



if(!empty($_POST["prenom"]) && !empty($_POST["nom"]) && !empty($_POST["mail"]) && !empty($_POST["select-role"])){
    $prenom = htmlspecialchars($_POST["prenom"]);
    $nom = htmlspecialchars($_POST["nom"]);
    $mail = htmlspecialchars($_POST["mail"]);
    $centre = htmlspecialchars($_POST["select-centre"]);
    $role = htmlspecialchars($_POST["select-role"]);
    $idstatut = $dictionnary[$role];
    $siteC->updatepersonne($prenom, $nom, $mail, $centre, $idstatut, $iduser);
    header("Location:../tpl/index.php?page=gestion");
    echo "hello";
}