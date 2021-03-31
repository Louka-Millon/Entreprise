<?php 
session_start();
require_once "../tpl/config/config_init.php";
require "SiteController.php";

$siteC = new siteController();

$entreprise = "";
if(isset($_GET['page'])){
    $page_n = $_GET["page"];

    /* ------------------------ */
    /* --------- offre -------- */
    /* ------------------------ */
    if($_GET['page'] == "offre"){
        /* obtention moyenne étudiant */
        $getoffre = htmlspecialchars($_GET["offre"]);
        $moyenneetudiant = $siteC->moyenneetudiant($getoffre);
        if(isset($moyenneetudiant)){
            $smarty->assign("moyenneetudiant", $moyenneetudiant);
        }else{
            $smarty->assign("moyenneetudiant", "Pas d'évaluation");
        }

        /* obtention moyenne tuteur */
        $moyennetuteur = $siteC->moyennetuteur($getoffre);
        if(isset($moyennetuteur)){
            $smarty->assign("moyennetuteur", $moyennetuteur);
        }else{
            $smarty->assign("moyennetuteur", "Pas d'évaluation");
        }
        
        
        /* test si étudiant à voté */
        $evote = $siteC->testetudiantvote($getoffre, $_SESSION["id"]);
        if(!empty($evote["id_personne"])){
            $smarty->assign("voteep", "non");
            
        }else{
            $smarty->assign("voteep", "yes");
        }
        
        /* test si le tuteur à voté */
        $tvote = $siteC->testtuteurvote($getoffre, $_SESSION["id"]);

        if(!empty($tvote["id_personne"])){
            $smarty->assign("votetp", "non");
            
        }else{
            $smarty->assign("votetp", "yes");
        }

        /* test si une offre est demandé */
        if(isset($_GET['offre'])){
            $entreprise = $_GET["offre"];
        }else{
            header("location:index.php?page=recherche");
        }
        
    }

    /* ------------------------ */
    /* --------- profil ------- */
    /* ------------------------ */
    /* test si une personne sur login est connecter */
    if($_GET["page"] == "profil" && !isset($_SESSION["prenom"])){
        header("Location:index.php?page=connexion");
    }

    /* envoie les valeurs pour le profil */
    if($_GET["page"] == "profil"){
        $idpage = htmlspecialchars($_GET['id']);
        $profile = $siteC->getinfobyid($idpage);
        $listoffre = $siteC->getoffre($idpage);
        $smarty->assign("listeoffre", $listoffre);
        $smarty->assign("profile", $profile);
        $smarty->assign("favori", $siteC->showfavori($idpage));
        
    }
    /* ------------------------ */
    /* ------ connexion ------- */
    /* ------------------------ */
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
    $smarty->assign("fieldconnexionlink", "index.php?page=profil&id=".$_SESSION['id']);
    $smarty->assign("fieldinscription", "Déconnexion");
    $smarty->assign("fieldinscriptionlink", "../controllers/disconnect.php");
    

    $smarty->assign("pseudo", $_SESSION["prenom"]. " " . $_SESSION["nom"]);
    $smarty->assign("statut", $_SESSION["statut"]);
    $smarty->assign("userid", $_SESSION["id"]);

}else{
    $smarty->assign("fieldconnexion", "Connexion");
    $smarty->assign("fieldconnexionlink", "index.php?page=connexion");
    $smarty->assign("fieldinscription", "S'inscrire");
    $smarty->assign("fieldinscriptionlink", "index.php?page=inscription");
}



/* gestion des erreurs inscription */

if(!isset($_GET["erreur"])){
    $erreur = "";
}else{
    $erreur = htmlspecialchars($_GET["erreur"]);
}
$smarty->assign("erreurinsc", $erreur);





/* entete et nom des pages */
$smarty->assign("title", "Injob");
$smarty->assign("page_name", $page_n);





/* recherche des différents secteurs */
$entreprisebyname = $siteC->showentreprisebyname($entreprise);
$entreprisedetails = $siteC->showentreprisebydetails();
$competence = $siteC->showcompetence($entreprise);
$competences = $siteC->showcompetences();
$topsecteur = $siteC->showtopsecteur();


$smarty->assign("competences", $competences);
$smarty->assign("competence", $competence);
$smarty->assign("entreprisedetails", $entreprisedetails);
$smarty->assign("entreprisebyname", $entreprisebyname);
$smarty->assign("secteur", $topsecteur);


