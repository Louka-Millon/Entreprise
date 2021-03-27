<?php
/* Smarty version 3.1.39, created on 2021-03-27 15:28:34
  from 'C:\xamp\htdocs\Entreprise\tpl\pages\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605f4112777046_62318834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3db364bd2c65c42ed229c42f60bf68242fd5bf9b' => 
    array (
      0 => 'C:\\xamp\\htdocs\\Entreprise\\tpl\\pages\\contact.tpl',
      1 => 1616855313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_other.tpl' => 1,
  ),
),false)) {
function content_605f4112777046_62318834 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header_other.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="page-de-contact" method="post">
        <div>
            <div class= "header">
                <h2 style="text-align: center;">Contactez-nous </h2>
                </div>
            <label for="name">Nom :</label>
            <input style = "text-align: center" type ="text" id="name" name="user_name" placeholder="Entrer votre nom" required>
        </div>
        <div>
            <label for="titre">Titre :</label>
            <input style="text-align: center;" type="text" placeholder="Entrer votre Titre" id="titre" name="Titre" required >
        </div>

        <div>
            <label for="msg">Message :</label>
            <textarea  style="text-align: center;" id="msg" name="user_message" placeholder="Entrer votre Message" required></textarea>
        </div>

        <div class="button">
            <button type="submit">Envoyer</button>
        </div>
    </form><?php }
}
