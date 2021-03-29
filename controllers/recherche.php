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





if(isset($_GET["rechercher"])){
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
}
/*call function */

if(!isset($val)){
    $val = $siteC->showentreprise();
}




$smarty->assign("title", "Injob");
$smarty->assign("page_name", $page_n);
$smarty->assign("entreprise", $entreprise);

/*use function */

$smarty->assign("enliste", $val);
?>