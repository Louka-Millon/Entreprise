<?php
/* Smarty version 3.1.39, created on 2021-03-22 13:57:03
  from 'C:\xampp\htdocs\Entreprise\tpl\pages\inscription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6058941f0ed758_31194262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb9793440f4410abd864bdeb97fa96809a9cf362' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Entreprise\\tpl\\pages\\inscription.tpl',
      1 => 1616417821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6058941f0ed758_31194262 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row-titre">
        <h2>Inscription</h2>
    </div>
    <div class="row-form">
        <form action="">
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
