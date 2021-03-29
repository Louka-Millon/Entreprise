<?php 
session_start();
require "SiteController.php";
$siteC = new SiteController();
if(isset($_GET["offre"])){
    $offreid = htmlspecialchars($_GET["offre"]);
    if(!$siteC->testfavori($_SESSION["id"], $offreid)){
        $siteC->addfavori($_SESSION["id"], $offreid);
    }
    header("Location:../tpl/index.php?page=recherche");
}
