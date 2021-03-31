<?php
require "SiteController.php";
session_start();

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

/*complétion des champs la connexion et l'inscription */
if(isset($_SESSION['prenom'])){
    $smarty->assign("fieldconnexion", $_SESSION["prenom"]);
    $smarty->assign("fieldconnexionlink", "index.php?page=profil");
    $smarty->assign("fieldinscription", "Déconnexion");
    $smarty->assign("fieldinscriptionlink", "../controllers/disconnect.php");
    $smarty->assign("pseudo", $_SESSION["prenom"]. " " . $_SESSION["nom"]);
    $smarty->assign("statut", $_SESSION["statut"]);
    $smarty->assign("userid", $_SESSION['id']);
}else{
    $smarty->assign("fieldconnexion", "Connexion");
    $smarty->assign("fieldconnexionlink", "index.php?page=connexion");
    $smarty->assign("fieldinscription", "S'inscrire");
    $smarty->assign("fieldinscriptionlink", "index.php?page=inscription");
}

$student = $siteC->afficheuserbyaccess("Student");
$representative = $siteC->afficheuserbyaccess("Representative");
$tutor = $siteC->afficheuserbyaccess("Tutor");
$company = $siteC->afficheuserbyaccess("company");
$admin = $siteC->afficheuserbyaccess("Administrator");

$smarty->assign("studentdisp", $student);
$smarty->assign("representativedisp", $representative);
$smarty->assign("tutordisp", $tutor);
$smarty->assign("companydisp", $company);
$smarty->assign("admindisp", $admin);

$smarty->assign("title", "Injob");
$smarty->assign("page_name", $page_n);
