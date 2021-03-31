<?php 
require "SiteController.php";
require_once "../libs/Smarty.class.php";
session_start();

$siteC = new siteController();
$smarty = new Smarty();
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
}else{
    $smarty->assign("fieldconnexion", "Connexion");
    $smarty->assign("fieldconnexionlink", "index.php?page=connexion");
    $smarty->assign("fieldinscription", "S'inscrire");
    $smarty->assign("fieldinscriptionlink", "index.php?page=inscription");
}
$range = 10;
$index = 1;
$nbpage = 1;
$disppage = "yes";
/*call function */


if(isset($_GET["offre"]) || isset($_GET["competence"]) || isset($_GET["lieu"])){
    if(!isset($_GET["offre"])){
        $_GET["offre"] = "";
    }
    if(!isset($_GET["competence"])){
        $_GET["competence"] = "";
    }
    if(!isset($_GET["lieu"])){
        $_GET["lieu"] = "";
    }

    $offre = htmlspecialchars($_GET["offre"]);
    $competence = htmlspecialchars($_GET["competence"]);
    $lieu = htmlspecialchars($_GET["lieu"]);
    $offre = "%".$offre."%";
    $competence = "%".$competence."%";
    $lieu = "%".$lieu."%";
    $val = $siteC->showrecherche($offre,$competence,$lieu);
    $disppage = "no";
    
}else{
    if(isset($_GET["index"])){
        $index = htmlspecialchars($_GET["index"]);
        $index = $index - 1;
        if($index < 0){
            header("location:index.php?page=recherche&index=1");
        }
        
    }else{
        header("location:index.php?page=recherche&index=1");
    }
    
}



if(!isset($val)){
    $nb = $siteC->shownbligneentreprise();
    $nbpage = ceil($nb / 10);
    $val = $siteC->showentreprise($index*$range, $index*$range+$range);
    $smarty->assign("nbpage",$nbpage);
    
}

if($index+1 > $nbpage){
    header("location:index.php?page=recherche&index=".$nbpage);
}
$smarty->assign("currentpage",$index);
$smarty->assign("pagesuivant", $index+2);
$smarty->assign("pageprecedent", $index);
$smarty->assign("disppage", $disppage);


$smarty->assign("title", "Injob");
$smarty->assign("page_name", $page_n);
$smarty->assign("entreprise", $entreprise);

/*use function */

$smarty->assign("enliste", $val);
$output = $smarty->fetch("../tpl/pages/search.tpl");
echo $output;
?>