<?php
/* Smarty version 3.1.39, created on 2021-03-29 19:29:37
  from 'C:\xampp\htdocs\Entreprise\tpl\pages\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60620e81eef4d1_13045314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '929d118f62be04d4492b164f3a26f5bab523f1e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Entreprise\\tpl\\pages\\contact.tpl',
      1 => 1617027054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_other.tpl' => 1,
  ),
),false)) {
function content_60620e81eef4d1_13045314 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header_other.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section>
    <article>
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
        </div>
    </article>
</section><?php }
}
