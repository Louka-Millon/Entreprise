<?php
/* Smarty version 3.1.39, created on 2021-03-30 21:51:34
  from 'C:\xampp\htdocs\Entreprise\tpl\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60638146108845_00326557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '792c85d0b16ead61acd37e86a714ce203094f236' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Entreprise\\tpl\\header.tpl',
      1 => 1617109845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60638146108845_00326557 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="../core/css/header.css" media="screen" />
        <link rel="stylesheet" href="../core/css/footer.css" media="screen" />
        <link rel="stylesheet" href="../core/css/home.css" media="screen" />
        <link rel="stylesheet" href="../core/css/offre.css" media="screen" />
        <link rel="stylesheet" href="../core/css/recherche.css" media="screen" />
        <link rel="shortcut icon" href="images/favicon.ico" />
        <!-- On importe jQuery -->
        
        <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<header>
        <div class="bg"></div>
        <div class="container-head">
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
                        <div class="items"><a href="?page=home">Home</a></div>
                        <div class="items"><a href="?page=recherche">Recherche d'emplois</a></div>
                        <div class="items"><a href="?page=contact">Contact</a></div>
                        <div class="items"><a href="<?php echo $_smarty_tpl->tpl_vars['fieldconnexionlink']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['fieldconnexion']->value;?>
</a></div>
                        <div class="items"><a href="<?php echo $_smarty_tpl->tpl_vars['fieldinscriptionlink']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['fieldinscription']->value;?>
</a></div>
                        <a href="#" id="close" onclick="hide();">X</a>
                </div>
                <div class="row-search">
                        <form action="index.php" method="get">
                                <input type="hidden" name="page" value="recherche">
                                <input type="text" name="offre" id="premier" placeholder="Offre...">
                                <input type="text" name="competence"  placeholder="Compétence...">
                                <input type="text" name="lieu" id="last_input"  placeholder="Lieu...">
                                <input type="submit" name="rechercher" value="Rechercher">
                        </form>
                </div>

        </div>
        <?php echo '<script'; ?>
 src="../core/js/navbar.js"><?php echo '</script'; ?>
>
</header><?php }
}
