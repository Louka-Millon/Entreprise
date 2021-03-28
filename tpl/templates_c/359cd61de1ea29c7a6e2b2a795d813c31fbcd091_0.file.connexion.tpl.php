<?php
/* Smarty version 3.1.39, created on 2021-03-28 13:16:31
  from 'C:\xamp\htdocs\Entreprise\tpl\pages\connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6060658f419f70_20468651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '359cd61de1ea29c7a6e2b2a795d813c31fbcd091' => 
    array (
      0 => 'C:\\xamp\\htdocs\\Entreprise\\tpl\\pages\\connexion.tpl',
      1 => 1616930180,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_other.tpl' => 1,
  ),
),false)) {
function content_6060658f419f70_20468651 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header_other.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-inscription">
    <div class="row-titre">
        <h2>Connexion</h2>
    </div>
    <div class="row-form">
        <form action="connexion.php">
            <p>E-mail :</p>
            <input type="email" name="mail">
            <p>Mot de passe :</p>
            <input type="password" name="pass">
            <input type="submit" value="Connexion" id="btn_connexion">
        </form>
    </div>
</div><?php }
}
