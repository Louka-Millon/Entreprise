<?php
session_start();
require "SiteController.php";
$siteC = new SiteController();
if($_POST["modifier"]){
    if(!empty($_POST["debut-offre"]) && !empty($_POST["duree-offre"]) && (!empty($_POST["salaire-offre"]) || $_POST["salaire-offre"] == 0 ) && !empty($_POST["titre-offre"]) && !empty($_POST["desc-offre"]) && (!empty($_POST["nbplace"]) || $_POST["nbplace"] == 0) && !empty($_POST["select-offre"])){
        $debuto = htmlspecialchars($_POST["debut-offre"]);
        $dureeo = htmlspecialchars($_POST["duree-offre"]);
        $salaireo = htmlspecialchars($_POST["salaire-offre"]);
        $titreo = htmlspecialchars($_POST["titre-offre"]);
        $desco = htmlspecialchars($_POST["desc-offre"]);
        $nbplace = htmlspecialchars($_POST["nbplace"]);
        $typeoffre = htmlspecialchars($_POST["select-offre"]);
        $id = htmlspecialchars($_GET["id"]);
        $siteC->updateoffre($titreo, $desco, $debuto, $dureeo, $nbplace, $salaireo,$typeoffre, $id);
        header("Location:../tpl/index.php?page=profil");
        echo "hello";
    }
}

if($_POST["supprimer"]){
    $id = htmlspecialchars($_GET["id"]);
    $siteC->deloffre($id);
    header("Location:../tpl/index.php?page=profil");
}
echo "hello";