<?php 

if(isset($_GET['page'])){
    $page_n = $_GET["page"];
}else{
    $page_n = "Accueil";
}
$smarty->assign("title", "Injob");
$smarty->assign("page_name", $page_n);