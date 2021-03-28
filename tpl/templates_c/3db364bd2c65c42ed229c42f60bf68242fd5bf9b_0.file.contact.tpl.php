<?php
/* Smarty version 3.1.39, created on 2021-03-28 14:04:36
  from 'C:\xamp\htdocs\Entreprise\tpl\pages\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606070d4d94cc7_52306481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3db364bd2c65c42ed229c42f60bf68242fd5bf9b' => 
    array (
      0 => 'C:\\xamp\\htdocs\\Entreprise\\tpl\\pages\\contact.tpl',
      1 => 1616932888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_other.tpl' => 1,
  ),
),false)) {
function content_606070d4d94cc7_52306481 (Smarty_Internal_Template $_smarty_tpl) {
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
