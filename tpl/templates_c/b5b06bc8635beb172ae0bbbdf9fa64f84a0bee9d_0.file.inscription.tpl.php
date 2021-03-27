<?php
/* Smarty version 3.1.39, created on 2021-03-27 15:34:48
  from 'C:\xamp\htdocs\Entreprise\tpl\pages\inscription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605f4288863033_41575955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5b06bc8635beb172ae0bbbdf9fa64f84a0bee9d' => 
    array (
      0 => 'C:\\xamp\\htdocs\\Entreprise\\tpl\\pages\\inscription.tpl',
      1 => 1616855686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_other.tpl' => 1,
  ),
),false)) {
function content_605f4288863033_41575955 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header_other.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="row-titre">
        <h2>Inscription</h2>
    </div>
    <div class="row-form">
        <form action="inscription.php">
            <p>Prénom :</p>
            <input type="text" name="prenom">
            <p>Nom :</p>
            <input type="text" name="nom">
            <p>E-mail :</p>
            <input type="email" name="mail">
            <p>Statut :</p>
            <input type="text" name="statut">
            <p>Mot de passe :</p>
            <input type="password" name="pass">
            <p>Confirmation du mot de passe :</p>
            <input type="password" name="confirmpass"><br>
            <input type="submit" value="S'inscrire" id="btn_inscription">
        </form>
    </div>
</div><?php }
}
