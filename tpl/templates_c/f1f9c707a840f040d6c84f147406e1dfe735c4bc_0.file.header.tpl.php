<?php
/* Smarty version 3.1.39, created on 2021-03-26 16:59:51
  from 'C:\xamp\htdocs\prosit_en_mvc\tpl\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605e04f7d5cca8_73699242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1f9c707a840f040d6c84f147406e1dfe735c4bc' => 
    array (
      0 => 'C:\\xamp\\htdocs\\prosit_en_mvc\\tpl\\header.tpl',
      1 => 1615886831,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605e04f7d5cca8_73699242 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
        <title>Prosit</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="../core/web/css/base.css" media="screen" />
        <link rel="shortcut icon" href="/web/images/favicon.ico" />
        <!-- On importe jQuery -->
        <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<header>
    <div class="header">
        <a href="#default" class="logo">Unamed</a>
        <div class="header-right">
            <a class="active" href="index.php">Home</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['fieldconnexionlink']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['fieldconnexion']->value;?>
</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['fieldinscriptionlink']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['fieldinscription']->value;?>
</a>
        </div>
    </div>
<header><?php }
}
