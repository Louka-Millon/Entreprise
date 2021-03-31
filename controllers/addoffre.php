<?php
session_start();
require "SiteController.php";
$siteC = new SiteController();
if(!empty($_POST["debut-offre"]) && !empty($_POST["duree-offre"]) && !empty($_POST["salaire-offre"]) && !empty($_POST["titre-offre"]) && !empty($_POST["desc-offre"]) && !empty($_POST["nbplace"]) && !empty($_POST["select-offre"])){
    $debuto = htmlspecialchars($_POST["debut-offre"]);
    $dureeo = htmlspecialchars($_POST["duree-offre"]);
    $salaireo = htmlspecialchars($_POST["salaire-offre"]);
    $titreo = htmlspecialchars($_POST["titre-offre"]);
    $desco = htmlspecialchars($_POST["desc-offre"]);
    $nbplace = htmlspecialchars($_POST["nbplace"]);
    $typeoffre = htmlspecialchars($_POST["select-offre"]);
    $identre = $siteC->getEntreprisebyId($_SESSION["id"]);
    $siteC->addoffre($titreo, $desco, $debuto, $dureeo, $nbplace, $salaireo,$typeoffre, $identre["id_entreprise"]);
    header("Location:../tpl/index.php?page=profil");
}