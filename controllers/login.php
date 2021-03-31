<?php 
session_start();
require "SiteController.php";
$siteC = new SiteController();

if (isset( $_POST['mail']) && isset( $_POST['pass']))
{
    $mail = htmlspecialchars($_POST['mail']);
    $pass = crypt(htmlspecialchars($_POST['pass']), '$6$453654$securitedemotdepasse$');

    $val = $siteC->login($mail);
     
    if($val)
    {
        if(filter_var(  $mail, FILTER_VALIDATE_EMAIL))
        {
            
            if($val["password"] == $pass)
            {
                $_SESSION["id"] = $val["id_personne"];
                $_SESSION["prenom"] = $val["prenom"];
                $_SESSION["nom"] = $val["nom"];
                $_SESSION["centre"] = $val["centre"];
                $_SESSION["promotion"] = $val["promo"];
                $_SESSION["statut"] = $val["statut"];
                $_SESSION["email"] = $val["mail"];
                setcookie('user_pass', $pass, time()+3600*24*30, "/", "", "0");
                setcookie('user_user', $mail, time()+3600*24*30, "/", "", "0");
                header("Location:../tpl/index.php");
                exit;

            }
            else 
            {
                header('Location:../tpl/index.php?page=connexion&erreur=Mot de passe incorrect');
            }
        }else 
        {
            header('Location:../tpl/index.php?page=connexion&erreur=Email incorrect');
        }
    }
    else 
    {
        header('Location:../tpl/index.php?page=connexion&erreur=Mot de passe ou identifiant incorrect');
    }

}
else header ('Location:../tpl/index.php?page=connexion&erreur=Mot de passe ou identifiant incorrect');
