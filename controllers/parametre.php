<?php 
require "SiteController.php";

$siteC = new siteController();

$entreprise = "";
if(isset($_GET['page'])){
    $page_n = $_GET["page"];
    if($_GET['page'] == "offre"){
        if(isset($_GET['offre'])){
            $entreprise = $_GET["offre"];
        }else{
            header("location:index.php?page=recherche");
        }
    }
}else{
    $page_n = "Accueil";
}


$_SESSION["prenom"] = "Lucile";
$_SESSION["nom"] = "Briand";
$_SESSION["centre"] = "Saint-Nazaire";
$_SESSION["promotion"] = "CPI A2 IT";
$_SESSION["email"] = "lucile.briand@viacesi.fr";


$smarty->assign("title", "Injob");
$smarty->assign("page_name", $page_n);
$smarty->assign("entreprise", $entreprise);