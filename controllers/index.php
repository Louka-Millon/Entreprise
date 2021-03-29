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






$smarty->assign("title", "Injob");
$smarty->assign("page_name", $page_n);
$smarty->assign("entreprise", $entreprise);

$entreprisebyname = $siteC->showentreprisebyname($entreprise);
$entreprisedetails = $siteC->showentreprisebydetails();
$competence = $siteC->showcompetence($entreprise);
$competences = $siteC->showcompetences();

$smarty->assign("competences", $competences);
$smarty->assign("competence", $competence);
$smarty->assign("entreprisedetails", $entreprisedetails);
$smarty->assign("entreprisebyname", $entreprisebyname);



