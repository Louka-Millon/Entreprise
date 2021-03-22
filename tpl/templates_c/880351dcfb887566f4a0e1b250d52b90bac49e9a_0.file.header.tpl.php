<?php
/* Smarty version 3.1.39, created on 2021-03-22 10:02:23
  from 'C:\xamp\htdocs\Entreprise\tpl\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60585d1f086ed0_13681741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '880351dcfb887566f4a0e1b250d52b90bac49e9a' => 
    array (
      0 => 'C:\\xamp\\htdocs\\Entreprise\\tpl\\header.tpl',
      1 => 1616403714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60585d1f086ed0_13681741 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="../core/css/header.css" media="screen" />
        <link rel="shortcut icon" href="images/favicon.ico" />
        <!-- On importe jQuery -->
        <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<header>

        <div class="container">
                <div class="items-left">
                        <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
                </div>
                <div class="items">Home</div>
                <div class="items">Recherche d'emplois</div>
                <div class="items">A propos</div>
                <div class="items">Contact</div>
                <div class="items">Connexion</div>
                <div class="items">S'inscrire</div>
        </div>

</header><?php }
}
