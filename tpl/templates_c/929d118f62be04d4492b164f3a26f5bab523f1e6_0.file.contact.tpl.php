<?php
/* Smarty version 3.1.39, created on 2021-03-27 11:44:47
  from 'C:\xampp\htdocs\Entreprise\tpl\pages\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605f0c9f92db66_43942850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '929d118f62be04d4492b164f3a26f5bab523f1e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Entreprise\\tpl\\pages\\contact.tpl',
      1 => 1616841880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605f0c9f92db66_43942850 (Smarty_Internal_Template $_smarty_tpl) {
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
    </form>

 
  <?php }
}
