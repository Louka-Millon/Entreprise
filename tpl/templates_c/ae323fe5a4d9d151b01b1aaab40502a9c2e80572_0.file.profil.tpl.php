<?php
/* Smarty version 3.1.39, created on 2021-03-28 14:04:52
  from 'C:\xamp\htdocs\Entreprise\tpl\pages\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606070e40682b1_41564725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae323fe5a4d9d151b01b1aaab40502a9c2e80572' => 
    array (
      0 => 'C:\\xamp\\htdocs\\Entreprise\\tpl\\pages\\profil.tpl',
      1 => 1616932945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_other.tpl' => 1,
  ),
),false)) {
function content_606070e40682b1_41564725 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header_other.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section>
    <article>
        <div class="container-profil">
            <div class="row-profil">
                <!--<img src="../core/images/background-header.png" alt="Profil">-->
                <h3>Nom du compte</h3>
                <p>Je suis un étudiant</p>

                <p>Voici ci-joint mon CV</p>
                <p>Voici ci-joint ma Lettre de motivation</p>
                <p>Voici nos offres d'emplois</p>
            </div>
        </div>
    </article>
</section><?php }
}
