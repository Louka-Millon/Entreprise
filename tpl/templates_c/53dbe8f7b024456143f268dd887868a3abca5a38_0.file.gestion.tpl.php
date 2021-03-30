<?php
/* Smarty version 3.1.39, created on 2021-03-30 21:48:42
  from 'C:\xampp\htdocs\Entreprise\tpl\pages\gestion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6063809a297f35_14032397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53dbe8f7b024456143f268dd887868a3abca5a38' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Entreprise\\tpl\\pages\\gestion.tpl',
      1 => 1617133718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_other.tpl' => 1,
  ),
),false)) {
function content_6063809a297f35_14032397 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header_other.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section>
    <article>
        <div class="container-gestion">
            <div class="row-gestion">
                <h3>Gestion des informations</h3>
                <table id="table-gestion">
                    <tr>
                        <th>Nom complet</th>
                        <th>E-mail</th>
                        <th>Centre</th>
                        <th>Statut</th>
                        <th>Gestion</th>
                    </tr>
                    <tr>
                        <td>Nom + prénom</td>
                        <td>test@test.com</td>
                        <td>
                            <select name="select-centre" id="select-centre">
                                <option value="arras">Arras</option>
                                <option value="brest">Brest</option>
                                <option value="nanterre">Nanterre</option>
                                <option value="rouens">Rouens</option>
                                <option value="saint-nazaire">Saint-Nazaire</option>
                            </select>
                        </td>
                        <td>
                            <select name="select-role" id="select-role">
                                <option value="student">Étudiant</option>
                                <option value="representative">Délégué</option>
                                <option value="tutor">Pilote</option>
                                <option value="company">Entreprise</option>
                                <option value="administrator">Administrateur</option>
                            </select>
                        </td>
                        <td>
                            <button id="btn_gestion">Enregistrer</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </article>
</section><?php }
}
