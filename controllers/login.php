<?php 
session_start();
require "SiteController.php";
$siteC = new SiteController();

if (isset( $_POST['mail']) && isset( $_POST['pass']))
{
    $mail = htmlspecialchars($_POST['mail']);
    $pass = crypt(htmlspecialchars($_POST['pass']), '$6$453654$securitedemotdepasse$');

    $val = $siteC->login($mail);
    echo $pass. "<br>" . $val["password"];
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
                setcookie('user_id', $pass, time()+3600*24*30, "/", "", "0");
                header("Location:../tpl/index.php");
                exit;

            }
            else 
            {
                //header('Location:index.php?login_err=password');
            }
        }else 
        {
            header('Location:index.php?login_err=email');
        }
    }
    else 
    {
        header('Location:index.php?login_err=already');
    }

}
else header ('Location:index.php');
