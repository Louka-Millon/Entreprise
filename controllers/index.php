<?php 
session_start();
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
    if($_GET["page"] == "profil" && !isset($_SESSION["prenom"])){
        header("Location:index.php?page=connexion");
    }
    if($_GET["page"] == "connexion" && isset($_COOKIE["user_id"])){
        $cookies = $siteC->checkcookies();
        foreach($cookies as $value){
            if($value["password"] == $_COOKIE["user_id"]){
                $idpersonne = $value["id_personne"];
                $val = $siteC->login($idpersonne);
                $_SESSION["id"] = $value["id_personne"];
                $_SESSION["prenom"] = $value["prenom"];
                $_SESSION["nom"] = $value["nom"];
                $_SESSION["centre"] = $value["centre"];
                $_SESSION["promotion"] = $value["promo"];
                $_SESSION["statut"] = $value["statut"];
                $_SESSION["email"] = $value["mail"];
                header("Location:../tpl/index.php");
                exit;
                var_dump($_SESSION);
            }
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
    $smarty->assign("favori", $siteC->showfavori($_SESSION["id"]));

    $smarty->assign("pseudo", $_SESSION["prenom"]. " " . $_SESSION["nom"]);
    $smarty->assign("statut", $_SESSION["statut"]);

}else{
    $smarty->assign("fieldconnexion", "Connexion");
    $smarty->assign("fieldconnexionlink", "index.php?page=connexion");
    $smarty->assign("fieldinscription", "S'inscrire");
    $smarty->assign("fieldinscriptionlink", "index.php?page=inscription");
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




$smarty->assign("competences", $competences);
$smarty->assign("competence", $competence);
$smarty->assign("entreprisedetails", $entreprisedetails);
$smarty->assign("entreprisebyname", $entreprisebyname);
$smarty->assign("secteur", $topsecteur);


