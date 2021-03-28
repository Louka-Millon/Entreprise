<?php
/* Smarty version 3.1.39, created on 2021-03-28 12:47:22
  from 'C:\xamp\htdocs\Entreprise\tpl\pages\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60605ebad1bb45_82172988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3db364bd2c65c42ed229c42f60bf68242fd5bf9b' => 
    array (
      0 => 'C:\\xamp\\htdocs\\Entreprise\\tpl\\pages\\contact.tpl',
      1 => 1616928410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_other.tpl' => 1,
  ),
),false)) {
function content_60605ebad1bb45_82172988 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header_other.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-inscription">
    <div class="row-titre">
        <h2>Contact</h2>
    </div>
    <div class="row-form">
        <form action="inscription.php">
            <p>Objet du mail :</p>
            <input type="text" name="objet">
            <p>Nom :</p>
            <textarea class="area" name="message" cols="10" rows="10"></textarea>
            
            <input type="submit" value="Envoyer" id="btn_mail">
        </form>
    </div>
</div><?php }
}
