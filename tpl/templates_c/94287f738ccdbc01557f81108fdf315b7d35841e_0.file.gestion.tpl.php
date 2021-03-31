<?php
/* Smarty version 3.1.39, created on 2021-03-31 14:03:52
  from 'C:\xamp\htdocs\Entreprise\tpl\pages\gestion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60646528b1de91_36989833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94287f738ccdbc01557f81108fdf315b7d35841e' => 
    array (
      0 => 'C:\\xamp\\htdocs\\Entreprise\\tpl\\pages\\gestion.tpl',
      1 => 1617191148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_other.tpl' => 1,
  ),
),false)) {
function content_60646528b1de91_36989833 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header_other.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section>
    <article>
        <div class="container-gestion">
            <div class="row-gestion">
                <h3>Gestion des informations</h3>
                <table id="table-gestion">
                     <!-- Tuteur -->
                    <?php if ($_smarty_tpl->tpl_vars['statut']->value == "Administrator" || $_smarty_tpl->tpl_vars['statut']->value == "Tutor" || $_smarty_tpl->tpl_vars['statut']->value == "Representative" || $_smarty_tpl->tpl_vars['statut']->value == "Student") {?>
                    <tr>
                        <th>Nom complet</th>
                        <th>E-mail</th>
                        <th>Centre</th>
                        <th>Statut</th>
                        <th>Gestion</th>
                    </tr>
                    <?php }?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['studentdisp']->value, 'student');
$_smarty_tpl->tpl_vars['student']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['student']->value) {
$_smarty_tpl->tpl_vars['student']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['statut']->value == "Student" && $_smarty_tpl->tpl_vars['userid']->value != $_smarty_tpl->tpl_vars['student']->value['id_personne']) {?>
                    
                    
                    <tr>
                        
                        
                        <td><?php echo $_smarty_tpl->tpl_vars['student']->value['prenom'];?>
 <?php echo $_smarty_tpl->tpl_vars['student']->value['nom'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['student']->value['mail'];?>
</td>
                        <td>
                            
                            <?php echo $_smarty_tpl->tpl_vars['student']->value['centre'];?>

                               
                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['student']->value['statut'];?>

                        </td>
                        <td>
                            <button type="submit" id="btn_gestion">Enregistrer</button>
                        </td>
                    
                    </tr>
                    <?php }?>

                    <!-- vue admin -->
                    <?php if ($_smarty_tpl->tpl_vars['statut']->value == "Administrator" || $_smarty_tpl->tpl_vars['statut']->value == "Tutor" || $_smarty_tpl->tpl_vars['statut']->value == "Representative" || ($_smarty_tpl->tpl_vars['statut']->value == "Student" && $_smarty_tpl->tpl_vars['userid']->value == $_smarty_tpl->tpl_vars['student']->value['id_personne'])) {?>
                    
                    
                    <tr>
                        <form action="../controllers/updategestion.php?id=<?php echo $_smarty_tpl->tpl_vars['student']->value['id_personne'];?>
" method="POST">
                        
                        <td><input type="text" name="prenom" value="<?php echo $_smarty_tpl->tpl_vars['student']->value['prenom'];?>
"> <input type="text" name="nom" value="<?php echo $_smarty_tpl->tpl_vars['student']->value['nom'];?>
"></td>
                        <td><input type="text" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['student']->value['mail'];?>
"></td>
                        <td>
                            <select name="select-centre" id="select-centre">
                                <option selected value="<?php echo $_smarty_tpl->tpl_vars['student']->value['centre'];?>
"><?php echo $_smarty_tpl->tpl_vars['student']->value['centre'];?>
</option>
                                <option value="arras">Arras</option>
                                <option value="brest">Brest</option>
                                <option value="nanterre">Nanterre</option>
                                <option value="rouens">Rouens</option>
                                <option value="saint-nazaire">Saint-Nazaire</option>
                                <option value="entreprise">entreprise</option>
                            </select>
                        </td>
                        <td>
                            <select name="select-role" id="select-role">
                                <option value="Student">Etudiant</option>
                                <?php if ($_smarty_tpl->tpl_vars['statut']->value == "Administrator" || $_smarty_tpl->tpl_vars['statut']->value == "Tutor" || $_smarty_tpl->tpl_vars['statut']->value == "Representative") {?><option value="Representative">Délégué</option><?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['statut']->value == "Administrator" || $_smarty_tpl->tpl_vars['statut']->value == "Tutor") {?><option value="Tutor">Tuteur</option><?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['statut']->value == "Administrator") {?><option value="administrator">Administrateur</option><?php }?>
                            </select>
                        </td>
                        <td>
                            <button type="submit" name="student" id="btn_gestion">Enregistrer</button>
                        </td>
                        </form>
                    </tr>
                    
                    <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    
                    





                <!-- Délégué -->
                   
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['representativedisp']->value, 'repre');
$_smarty_tpl->tpl_vars['repre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['repre']->value) {
$_smarty_tpl->tpl_vars['repre']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['statut']->value == "Representative" && $_smarty_tpl->tpl_vars['userid']->value != $_smarty_tpl->tpl_vars['repre']->value['id_personne']) {?>
                    
                    
                    <tr>
                        
                        
                        <td><?php echo $_smarty_tpl->tpl_vars['repre']->value['prenom'];?>
 <?php echo $_smarty_tpl->tpl_vars['repre']->value['nom'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['repre']->value['mail'];?>
</td>
                        <td>
                            
                            <?php echo $_smarty_tpl->tpl_vars['repre']->value['centre'];?>

                               
                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['repre']->value['statut'];?>

                        </td>
                        <td>
                            <button type="submit" id="btn_gestion">Enregistrer</button>
                        </td>
                    
                    </tr>
                    <?php }?>

                    <!-- vue admin -->
                    <?php if ($_smarty_tpl->tpl_vars['statut']->value == "Administrator" || $_smarty_tpl->tpl_vars['statut']->value == "Tutor" || ($_smarty_tpl->tpl_vars['statut']->value == "Representative" && $_smarty_tpl->tpl_vars['userid']->value == $_smarty_tpl->tpl_vars['repre']->value['id_personne'])) {?>
                    
                    
                    <tr>
                        <form action="../controllers/updategestion.php?id=<?php echo $_smarty_tpl->tpl_vars['repre']->value['id_personne'];?>
" method="POST">
                        
                        <td><input type="text" name="prenom" value="<?php echo $_smarty_tpl->tpl_vars['repre']->value['prenom'];?>
"> <input type="text" name="nom" value="<?php echo $_smarty_tpl->tpl_vars['repre']->value['nom'];?>
"></td>
                        <td><input type="text" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['repre']->value['mail'];?>
"></td>
                        <td>
                            <select name="select-centre" id="select-centre">
                                <option selected value="<?php echo $_smarty_tpl->tpl_vars['repre']->value['centre'];?>
"><?php echo $_smarty_tpl->tpl_vars['repre']->value['centre'];?>
</option>
                                <option value="arras">Arras</option>
                                <option value="brest">Brest</option>
                                <option value="nanterre">Nanterre</option>
                                <option value="rouens">Rouens</option>
                                <option value="saint-nazaire">Saint-Nazaire</option>
                                <option value="entreprise">entreprise</option>
                            </select>
                        </td>
                        <td>
                            <select name="select-role" id="select-role">
                                <option value="Representative">Délégué</option>
                                <?php if ($_smarty_tpl->tpl_vars['statut']->value == "Administrator" || $_smarty_tpl->tpl_vars['statut']->value == "Tutor") {?><option value="Tutor">Tuteur</option><?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['statut']->value == "Administrator") {?><option value="administrator">Administrateur</option><?php }?>
                            </select>
                        </td>
                        <td>
                            <button type="submit" name="repre" id="btn_gestion">Enregistrer</button>
                        </td>
                        </form>
                    </tr>
                    
                    <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>







                    <!-- Tuteur -->
                    <?php if ($_smarty_tpl->tpl_vars['statut']->value == "Administrator" || $_smarty_tpl->tpl_vars['statut']->value == "Tutor") {?>
                    <tr>
                        <th>Nom complet</th>
                        <th>E-mail</th>
                        <th>Centre</th>
                        <th>Statut</th>
                        <th>Gestion</th>
                    </tr>
                    <?php }?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tutordisp']->value, 'tutor');
$_smarty_tpl->tpl_vars['tutor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tutor']->value) {
$_smarty_tpl->tpl_vars['tutor']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['statut']->value == "Tutor" && $_smarty_tpl->tpl_vars['userid']->value != $_smarty_tpl->tpl_vars['tutor']->value['id_personne']) {?>
                    
                    
                    <tr>
                        
                        
                        <td><?php echo $_smarty_tpl->tpl_vars['tutor']->value['prenom'];?>
 <?php echo $_smarty_tpl->tpl_vars['tutor']->value['nom'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['tutor']->value['mail'];?>
</td>
                        <td>
                            
                            <?php echo $_smarty_tpl->tpl_vars['tutor']->value['centre'];?>

                               
                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['tutor']->value['statut'];?>

                        </td>
                        <td>
                            <button type="submit" id="btn_gestion">Enregistrer</button>
                        </td>
                    
                    </tr>
                    <?php }?>

                    <!-- vue admin -->
                    <?php if ($_smarty_tpl->tpl_vars['statut']->value == "Administrator" || ($_smarty_tpl->tpl_vars['statut']->value == "Tutor" && $_smarty_tpl->tpl_vars['userid']->value == $_smarty_tpl->tpl_vars['tutor']->value['id_personne'])) {?>
                    
                    
                    <tr>
                        <form action="../controllers/updategestion.php?id=<?php echo $_smarty_tpl->tpl_vars['tutor']->value['id_personne'];?>
" method="POST">
                        
                        <td><input type="text" name="prenom" value="<?php echo $_smarty_tpl->tpl_vars['tutor']->value['prenom'];?>
"> <input type="text" name="nom" value="<?php echo $_smarty_tpl->tpl_vars['tutor']->value['nom'];?>
"></td>
                        <td><input type="text" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['tutor']->value['mail'];?>
"></td>
                        <td>
                            <select name="select-centre" id="select-centre">
                                <option selected value="<?php echo $_smarty_tpl->tpl_vars['tutor']->value['centre'];?>
"><?php echo $_smarty_tpl->tpl_vars['tutor']->value['centre'];?>
</option>
                                <option value="arras">Arras</option>
                                <option value="brest">Brest</option>
                                <option value="nanterre">Nanterre</option>
                                <option value="rouens">Rouens</option>
                                <option value="saint-nazaire">Saint-Nazaire</option>
                                <option value="entreprise">entreprise</option>
                            </select>
                        </td>
                        <td>
                            <select name="select-role" id="select-role">
                                <option value="Tutor">Tuteur</option>
                                <?php if ($_smarty_tpl->tpl_vars['statut']->value == "Administrator") {?><option value="administrator">Administrateur</option><?php }?>
                            </select>
                        </td>
                        <td>
                            <button type="submit" name="tutor" id="btn_gestion">Enregistrer</button>
                        </td>
                        </form>
                    </tr>
                    
                    <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>










                    
                    <!-- vue entreprise -->
                    <?php if ($_smarty_tpl->tpl_vars['statut']->value == "Administrator" || $_smarty_tpl->tpl_vars['statut']->value == "company") {?>
                    <tr>
                        <th>Nom complet</th>
                        <th>E-mail</th>
                        <th>Centre</th>
                        <th>Statut</th>
                        <th>Gestion</th>
                    </tr>
                    <?php }?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['companydisp']->value, 'company');
$_smarty_tpl->tpl_vars['company']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['company']->value) {
$_smarty_tpl->tpl_vars['company']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['statut']->value == "company" && $_smarty_tpl->tpl_vars['userid']->value != $_smarty_tpl->tpl_vars['company']->value['id_personne']) {?>
                    
                    
                    <tr>
                        
                        
                        <td><?php echo $_smarty_tpl->tpl_vars['company']->value['prenom'];?>
 <?php echo $_smarty_tpl->tpl_vars['company']->value['nom'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['company']->value['mail'];?>
</td>
                        <td>
                            
                            <?php echo $_smarty_tpl->tpl_vars['company']->value['centre'];?>

                               
                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['company']->value['statut'];?>

                        </td>
                        <td>
                            <button type="submit" id="btn_gestion">Enregistrer</button>
                        </td>
                    
                    </tr>
                    <?php }?>

                    <!-- vue admin -->
                    <?php if ($_smarty_tpl->tpl_vars['statut']->value == "Administrator" || ($_smarty_tpl->tpl_vars['statut']->value == "company" && $_smarty_tpl->tpl_vars['userid']->value == $_smarty_tpl->tpl_vars['company']->value['id_personne'])) {?>
                    
                    
                    <tr>
                        <form action="../controllers/updategestion.php?id=<?php echo $_smarty_tpl->tpl_vars['company']->value['id_personne'];?>
" method="POST">
                        
                        <td><input type="text" name="prenom" value="<?php echo $_smarty_tpl->tpl_vars['company']->value['prenom'];?>
"> <input type="text" name="nom" value="<?php echo $_smarty_tpl->tpl_vars['company']->value['nom'];?>
"></td>
                        <td><input type="text" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['company']->value['mail'];?>
"></td>
                        <td>
                            <select name="select-centre" id="select-centre">
                                <option selected value="<?php echo $_smarty_tpl->tpl_vars['company']->value['centre'];?>
"><?php echo $_smarty_tpl->tpl_vars['company']->value['centre'];?>
</option>
                                <option value="arras">Arras</option>
                                <option value="brest">Brest</option>
                                <option value="nanterre">Nanterre</option>
                                <option value="rouens">Rouens</option>
                                <option value="saint-nazaire">Saint-Nazaire</option>
                                <option value="entreprise">entreprise</option>
                            </select>
                        </td>
                        <td>
                            <select name="select-role" id="select-role">
                                <option value="company">Entreprise</option>
                                <?php if ($_smarty_tpl->tpl_vars['statut']->value == "Administrator") {?><option value="administrator">Administrateur</option><?php }?>
                            </select>
                        </td>
                        <td>
                            <button type="submit" name="company" id="btn_gestion">Enregistrer</button>
                        </td>
                        </form>
                    </tr>
                    
                    <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    
                    
                    
                    <?php if ($_smarty_tpl->tpl_vars['statut']->value == "Administrator") {?>
                    <tr>
                        <th>Nom complet</th>
                        <th>E-mail</th>
                        <th>Centre</th>
                        <th>Statut</th>
                        <th>Gestion</th>
                    </tr>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['admindisp']->value, 'admin');
$_smarty_tpl->tpl_vars['admin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['admin']->value) {
$_smarty_tpl->tpl_vars['admin']->do_else = false;
?>
                    <tr>
                        <form action="../controllers/updategestion.php?id=<?php echo $_smarty_tpl->tpl_vars['admin']->value['id_personne'];?>
" method="POST">
                        
                        <td><?php echo $_smarty_tpl->tpl_vars['admin']->value['prenom'];?>
 <?php echo $_smarty_tpl->tpl_vars['admin']->value['nom'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['admin']->value['mail'];?>
</td>
                        <td>
                            <select name="select-centre" id="select-centre">
                                <option selected value="<?php echo $_smarty_tpl->tpl_vars['admin']->value['centre'];?>
"><?php echo $_smarty_tpl->tpl_vars['admin']->value['centre'];?>
</option>
                                <option value="arras">Arras</option>
                                <option value="brest">Brest</option>
                                <option value="nanterre">Nanterre</option>
                                <option value="rouens">Rouens</option>
                                <option value="saint-nazaire">Saint-Nazaire</option>
                                <option value="aucun">aucun</option>
                            </select>
                        </td>
                        <td>
                            <select name="select-role" id="select-role">
                                <option value="administrator">Administrateur</option>
                            </select>
                        </td>
                        <td>
                            <button type="submit" name="admin" name="admin" id="btn_gestion">Enregistrer</button>
                        </td>
                        </form>
                    </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                </table>
            </div>
        </div>
    </article>
</section><?php }
}
