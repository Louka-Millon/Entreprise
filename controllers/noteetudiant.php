<?php
session_start();
require "SiteController.php";

$siteC = new SiteController();

if(isset($_POST['noteeleve'])){
    $note = $_POST['noteeleve'];
    $note = htmlspecialchars($note);
    if($note > 5){
        $note = 5;
    }elseif($note < 0){
        $note = 0;
    }

    $idoffre = htmlspecialchars($_GET["offre"]);
    $siteC->addnoteetudiant($note, $_SESSION["id"], $idoffre);
    $siteC->liaisonetudiant($idoffre);
    header("location:../tpl/index.php?page=offre&offre=".$_GET["offre"]);
}