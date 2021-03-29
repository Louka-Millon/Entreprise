<?php
require "SiteController.php";

$siteCtrl = new SiteController();
$erreur = "";

if(isset($_GET["prenom"]) && isset($_GET["nom"]) && isset($_GET["mail"]) && 
    isset($_GET["select-statut"]) && isset($_GET["pass"]) && 
    isset($_GET["confirmpass"]) && !empty($_GET["prenom"]) && 
    !empty($_GET["nom"]) && !empty($_GET["mail"]) && !empty($_GET["select-statut"]) 
    && !empty($_GET["pass"]) && !empty($_GET["confirmpass"])){
    
    //Récupération des input dans des variables
    $prenom = htmlspecialchars($_GET['prenom']);
    $nom = htmlspecialchars($_GET['nom']);
    $mail = htmlspecialchars($_GET['mail']);
    $statut = htmlspecialchars($_GET['select-statut']);
    $pass = htmlspecialchars($_GET["pass"]);
    $confirmpass = htmlspecialchars($_GET["confirmpass"]);

    //Transformation du statut en id
    $dictionnary = array("student" => 5, "company" => 9);
    $idstatut = $dictionnary[$statut];
    var_dump($idstatut);

    //Confirmation du password
    if($pass == $confirmpass){
        $verif = $siteCtrl->verifiexistence($prenom,$nom,$mail);
        //Si le compte n'existe pas
        if(!$verif){
            $pass = crypt($pass, '$6$453654$securitedemotdepasse$');
            $send = $siteCtrl->inscriptioncompte($prenom,$nom,$mail,$pass,$idstatut);
            //$_SESSION["pseudo"] = $user;
            $erreur = "?page=connexion";
        }else{
            $erreur = "?page=inscription&erreur="."Ce compte existe déjà.";
        }

    }else{
        $erreur = "?page=inscription&erreur="."Mot de passe incorrect.";
    }

}else{
    $erreur = "?page=inscription&erreur="."Vous n'avez pas complété tous les champs.";
    
}

header("location:../tpl/index.php$erreur");
exit;
?>