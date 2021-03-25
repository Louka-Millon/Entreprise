<?php
/* Smarty version 3.1.39, created on 2021-03-25 09:49:42
  from 'C:\xampp\htdocs\Entreprise\tpl\pages\connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605c4ea6ea1c76_81673415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a81b3c7924f405b94e0784c0c99e2952ad318a53' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Entreprise\\tpl\\pages\\connexion.tpl',
      1 => 1616662179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605c4ea6ea1c76_81673415 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="connexion.css">
    <title>Connexion</title>
</head>
<header>
    <img src="projetphoto.png">

</header>
<body>
    <div class= "header">
    <h2>Connectez-vous </h2>
    </div>
    <div class = "container">
    <form method="POST" action="connexion.php">
       
        <p style="text-align: center;"> Veuillez vous connectez avec votre compte:</p>
     <label><p style="text-align: center;">E-mail:</p></label> 
     <input style="text-align: center" type="E-mail" placeholder="Entrer votre e-mail" name="username" required>
     <label><p>Password:</p></label>
     <input style="text-align: center" type="Password" placeholder="Entrer votre password" name="password" required>
     <div class="button">
        <button type="submit">Connexion</button>
    </div>
  

    </form>
    </div>
</body>
</html><?php }
}
