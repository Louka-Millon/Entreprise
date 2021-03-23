<?php
/* Smarty version 3.1.39, created on 2021-03-23 15:05:44
  from 'C:\xamp\htdocs\Entreprise\tpl\header_other.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6059f5b87f3524_72694303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9398173ea6592d41c15da1c4bfc5a2ea27e86be' => 
    array (
      0 => 'C:\\xamp\\htdocs\\Entreprise\\tpl\\header_other.tpl',
      1 => 1616508329,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6059f5b87f3524_72694303 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div class="bg"></div>
        <div class="container">
                <a href="#row-nav" id="open" onclick="display();">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="34px" height="27px" viewBox="0 0 34 27" enable-background="new 0 0 34 27" xml:space="preserve">
                                <rect fill="#000" width="34" height="4"/>
                                <rect y="11" fill="#000" width="34" height="4"/>
                                <rect y="23" fill="#000" width="34" height="4"/>
                        </svg>
                </a>
               
                <div class="row-nav">
                        
                        <div class="items-left">
                                <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
                        </div>
                        <div class="items"><a href="#">Home</a></div>
                        <div class="items"><a href="#">Recherche d'emplois</a></div>
                        <div class="items"><a href="#">A propos</a></div>
                        <div class="items"><a href="#">Contact</a></div>
                        <div class="items"><a href="#">Connexion</a></div>
                        <div class="items"><a href="#">S'inscrire</a></div>
                        <a href="#" id="close" onclick="hide();">X</a>
                </div>
                <div class="row-search">
                        <h2 id="titre"><?php echo $_smarty_tpl->tpl_vars['page_name']->value;?>
</h2>
                </div>

        </div>
        <?php echo '<script'; ?>
 src="../core/js/navbar.js"><?php echo '</script'; ?>
>
</header><?php }
}
