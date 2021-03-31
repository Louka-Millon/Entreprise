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

/*complétion des champs la connexion et l'inscription */
if(isset($_SESSION['prenom'])){
    $smarty->assign("fieldconnexion", $_SESSION["prenom"]);
    $smarty->assign("fieldconnexionlink", "index.php?page=profil&id=".$_SESSION['id']);
    $smarty->assign("fieldinscription", "Déconnexion");
    $smarty->assign("fieldinscriptionlink", "../controllers/disconnect.php");
    $smarty->assign("favori", $siteC->showfavori($_SESSION["id"]));

    $smarty->assign("pseudo", $_SESSION["prenom"]. " " . $_SESSION["nom"]);
    $smarty->assign("statut", $_SESSION["statut"]);

}else{
    $smarty->assign("fieldconnexion", "Connexion");
    $smarty->assign("fieldconnexionlink", "index.php?page=connexion");
    $smarty->assign("fieldinscription", "S'inscrire");
    $smarty->assign("fieldinscriptionlink", "index.php?page=inscription");
}


$smarty->assign("title", "Injob");
$smarty->assign("page_name", $page_n);
$smarty->assign("entreprise", $entreprise);