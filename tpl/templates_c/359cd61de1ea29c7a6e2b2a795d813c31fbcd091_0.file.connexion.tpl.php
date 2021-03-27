<?php
/* Smarty version 3.1.39, created on 2021-03-27 15:28:03
  from 'C:\xamp\htdocs\Entreprise\tpl\pages\connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605f40f3c3e6c2_60052113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '359cd61de1ea29c7a6e2b2a795d813c31fbcd091' => 
    array (
      0 => 'C:\\xamp\\htdocs\\Entreprise\\tpl\\pages\\connexion.tpl',
      1 => 1616855056,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_605f40f3c3e6c2_60052113 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class= "header">
    <h2>Connectez-vous </h2>
    </div>
    <div class = "container">
    <form method="POST" action="connexion.php">
        <fieldset>
        <p style="text-align: center;"> Veuillez vous connectez avec votre compte:</p>
    <label style="text-align: center;">E-mail:</label> 
     <input style="text-align: center" type="text" placeholder="Entrer votre e-mail" name="username" required> <br> <br> <br> <br> <br>
     <label style="text-align: center;">Password:</label>
     <input style="text-align: center" type="Password" placeholder="Entrer votre password" name="password" required>
    <p style="text-align: center;"> <input type="submit" id="submit" value="Connexion"> </p>
     </fieldset>

    </form>
</div><?php }
}
