
<?php
session_start();
require_once 'database.php';
if (isset( $_POST['mail']) && isset( $_POST['pass']))
{
    $mail = htmlspecialchars($_POST['mail']);
    $pass = htmlspecialchars($_POST['pass']);

    $check =  $bdd->prepare('SELECT `id_personne`,`mail`,`password` FROM `personne` WHERE `mail` = ?');
    $check->execute(array($mail));
    $data = $check->fetch();
    $row =  $check->rowCount();

    if( $row == 1)
    {
        if(filter_var(  $mail, FILTER_VALIDATE_EMAIL))
        {
            $password = hash ('sha256',  $pass);
            if( $data['password'] ===   $pass)
            {
                $_SESSION['personne'] =  $data['id_personne'];
                //header('Location:Landing.php');
                echo 'connexion réussi';

            }
            else 
            {
                header('Location:index.php?login_err=password');
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

?>