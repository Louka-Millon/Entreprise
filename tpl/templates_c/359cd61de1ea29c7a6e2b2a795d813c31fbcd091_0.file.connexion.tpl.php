<?php
/* Smarty version 3.1.39, created on 2021-03-29 21:33:41
  from 'C:\xamp\htdocs\Entreprise\tpl\pages\connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60622b95bcd0d5_64836828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '359cd61de1ea29c7a6e2b2a795d813c31fbcd091' => 
    array (
      0 => 'C:\\xamp\\htdocs\\Entreprise\\tpl\\pages\\connexion.tpl',
      1 => 1617046363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_other.tpl' => 1,
  ),
),false)) {
function content_60622b95bcd0d5_64836828 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header_other.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section>
    <article>
        <div class="container-inscription">
            <div class="row-titre">
                <h2>Connexion</h2>
            </div>
            <div class="row-form">
                <form action="../controllers/login.php" method="POST">
                    <p>E-mail :</p>
                    <input type="email" name="mail">
                    <p>Mot de passe :</p>
                    <input type="password" name="pass">
                    <input type="submit" value="Connexion" id="btn_connexion">
                </form>
            </div>
        </div>
    </article>
</section><?php }
}
