<?php
/* Smarty version 3.1.39, created on 2021-03-25 00:56:22
  from 'C:\xamp\htdocs\Entreprise\tpl\pages\parametre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605bd1a6a80a69_40302057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a83aa4f5b43a425754308162ab9fde4449f2119' => 
    array (
      0 => 'C:\\xamp\\htdocs\\Entreprise\\tpl\\pages\\parametre.tpl',
      1 => 1616630181,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605bd1a6a80a69_40302057 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
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
                <label for="">Prénom</label><input type="text" name="" id="">
                <label for="">Nom</label><input type="text" name="" id="">
                <label for="">Mot de passe</label><input type="text" name="" id="">
                <br>
                <label for="">Centre</label><input type="text" name="" id="">
                <label for="">Promotion</label><input type="text" name="" id="">
                <label for="">E-mail</label><input type="text" name="" id="">
                
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
