<?php 
require_once "../tpl/config/config_init.php";
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



if(!isset($_GET["erreur"])){
    $erreur = "";
}else{
    $erreur = htmlspecialchars($_GET["erreur"]);
}
$smarty->assign("erreurinsc", $erreur);



$entreprisebyname = $siteC->showentreprisebyname($entreprise);
$entreprisedetails = $siteC->showentreprisebydetails();
$competence = $siteC->showcompetence($entreprise);
$competences = $siteC->showcompetences();
$topsecteur = $siteC->showtopsecteur();




$smarty->assign("title", "Injob");
$smarty->assign("page_name", $page_n);
$smarty->assign("entreprise", $entreprise);



$smarty->assign("competences", $competences);
$smarty->assign("competence", $competence);
$smarty->assign("entreprisedetails", $entreprisedetails);
$smarty->assign("entreprisebyname", $entreprisebyname);
$smarty->assign("secteur", $topsecteur);


