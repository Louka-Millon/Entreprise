<?php
/* Smarty version 3.1.39, created on 2021-03-27 16:04:00
  from 'C:\xamp\htdocs\Entreprise\tpl\pages\parametre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605f4960172314_28976926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a83aa4f5b43a425754308162ab9fde4449f2119' => 
    array (
      0 => 'C:\\xamp\\htdocs\\Entreprise\\tpl\\pages\\parametre.tpl',
      1 => 1616857439,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_other.tpl' => 1,
  ),
),false)) {
function content_605f4960172314_28976926 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header_other.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-param">
    <div class="row-param">
        <form action="../../controllers/index.php" method="get">
            <div class="items titre-items">
                <h3>Information</h3>
            </div>
            <br>
            <div class="items">
                <img src="https://www.presse-citron.net/app/uploads/2019/12/avatarsuite.jpg" alt="avatar" width="144px" height="144px" style="object-fit:cover"><br>
                <input type="file" name="img" >
            </div>
            <div class="items inputbox">
                <label for="">Prénom</label><input type="text" name="prenom" >
                <label for="">Nom</label><input type="text" name="nom" >
                <label for="">Mot de passe</label><input type="text" name="mot_de_passe">
                <label for="">Centre</label><input type="text" name="centre">
                <label for="">Promotion</label><input type="text" name="promotion">
                <label for="">E-mail</label><input type="text" name="email">
                
            </div>
            <div class="items">
                <input type="file" name="CV" >
                <input type="file" name="LM" >
            </div>
            <div class="items">
                <input type="submit" value="Changer">
            </div>
        </form>
    </div>
</div><?php }
}
