<?php
/* Smarty version 3.1.39, created on 2021-04-01 00:50:03
  from 'C:\xampp\htdocs\Entreprise\tpl\pages\gestion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6064fc9bba6381_13818636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53dbe8f7b024456143f268dd887868a3abca5a38' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Entreprise\\tpl\\pages\\gestion.tpl',
      1 => 1617230994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_other.tpl' => 1,
  ),
),false)) {
function content_6064fc9bba6381_13818636 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header_other.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section>
    <article>
        <div class="container-gestion">
            <div class="row-gestion">
                <h3>Information management</h3>
                <table id="table-gestion">
                     <!-- Tuteur -->
                    <?php if ($_smarty_tpl->tpl_vars['statut']->value == "company" || $_smarty_tpl->tpl_vars['statut']->value == "Administrator" || $_smarty_tpl->tpl_vars['statut']->value == "Tutor" || $_smarty_tpl->tpl_vars['statut']->value == "Representative" || $_smarty_tpl->tpl_vars['statut']->value == "Student") {?>
                    <tr>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Academy</th>
                        <th>Status</th>
                        <th>Management</th>
                        <th>Consult</th>
                    </tr>
                    <?php }?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['studentdisp']->value, 'student');
$_smarty_tpl->tpl_vars['student']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['student']->value) {
$_smarty_tpl->tpl_vars['student']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['statut']->value == "company" || ($_smarty_tpl->tpl_vars['statut']->value == "Student" && $_smarty_tpl->tpl_vars['userid']->value != $_smarty_tpl->tpl_vars['student']->value['id_personne'])) {?>
                    
                    
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
                            <button type="submit" id="btn_gestion">Save</button>
                        </td>
                        <td>
                            <button id="btn_gestion"><a href="index.php?page=profil&id=<?php echo $_smarty_tpl->tpl_vars['student']->value['id_personne'];?>
">Go to</a></button>
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
                                <option value="Student">Student</option>
                                <?php if ($_smarty_tpl->tpl_vars['statut']->value == "Administrator" || $_smarty_tpl->tpl_vars['statut']->value == "Tutor" || $_smarty_tpl->tpl_vars['statut']->value == "Representative") {?><option value="Student">Student</option><?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['statut']->value == "Administrator" || $_smarty_tpl->tpl_vars['statut']->value == "Tutor") {?><option value="Tutor">Tutor</option><?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['statut']->value == "Administrator") {?><option value="administrator">Administrator</option><?php }?>
                            </select>
                        </td>
                        <td>
                            <button type="submit" name="student" id="btn_gestion">Save</button>
                        </td>
                        <td>
                            <button id="btn_gestion"><a href="index.php?page=profil&id=<?php echo $_smarty_tpl->tpl_vars['student']->value['id_personne'];?>
">Go to</a></button>
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
                    <?php if ($_smarty_tpl->tpl_vars['statut']->value == "company" || $_smarty_tpl->tpl_vars['statut']->value == "Student" || ($_smarty_tpl->tpl_vars['statut']->value == "Representative" && $_smarty_tpl->tpl_vars['userid']->value != $_smarty_tpl->tpl_vars['repre']->value['id_personne'])) {?>
                    
                    
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
                            <button type="submit" id="btn_gestion">Save</button>
                        </td>
                        <td>
                            <button  id="btn_gestion"><a href="index.php?page=profil&id=<?php echo $_smarty_tpl->tpl_vars['repre']->value['id_personne'];?>
">Go to</a></button>
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
                                <?php if ($_smarty_tpl->tpl_vars['statut']->value == "Administrator" || $_smarty_tpl->tpl_vars['statut']->value == "Tutor") {?><option value="Student">Student</option><?php }?>
                                <option value="Representative">Representative</option>
                                <?php if ($_smarty_tpl->tpl_vars['statut']->value == "Administrator" || $_smarty_tpl->tpl_vars['statut']->value == "Tutor") {?><option value="Tutor">Tutor</option><?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['statut']->value == "Administrator") {?><option value="administrator">Administrator</option><?php }?>
                            </select>
                        </td>
                        <td>
                            <button type="submit" name="repre" id="btn_gestion">Save</button>
                        </td>
                        <td>
                            <button  id="btn_gestion"><a href="index.php?page=profil&id=<?php echo $_smarty_tpl->tpl_vars['repre']->value['id_personne'];?>
">Go to</a></button>
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
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Academy</th>
                        <th>Status</th>
                        <th>Management</th>
                        <th>Consult</th>
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
                            <button type="submit" id="btn_gestion">Save</button>
                        </td>
                        <td>
                            <button id="btn_gestion"><a href="index.php?page=profil&id=<?php echo $_smarty_tpl->tpl_vars['tutor']->value['id_personne'];?>
">Go to</a></button>
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
                                <option value="Tutor">Tutor</option>
                                <?php if ($_smarty_tpl->tpl_vars['statut']->value == "Administrator") {?><option value="administrator">Administrator</option><?php }?>
                            </select>
                        </td>
                        <td>
                            <button type="submit" name="tutor" id="btn_gestion">Save</button>
                        </td>
                        <td>
                            <button id="btn_gestion"><a href="index.php?page=profil&id=<?php echo $_smarty_tpl->tpl_vars['tutor']->value['id_personne'];?>
">Go to</a></button>
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
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Academy</th>
                        <th>Status</th>
                        <th>Management</th>
                        <th>Consult</th>
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
                            <button type="submit" id="btn_gestion">Save</button>
                        </td>
                        <td>
                            <button type="submit" id="btn_gestion"><a href="index.php?page=profil&id=<?php echo $_smarty_tpl->tpl_vars['company']->value['id_personne'];?>
">Go to</a></button>
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
                                <option value="company">company</option>
                                <?php if ($_smarty_tpl->tpl_vars['statut']->value == "Administrator") {?><option value="administrator">Administrator</option><?php }?>
                            </select>
                        </td>
                        <td>
                            <button type="submit" name="company" id="btn_gestion">Save</button>
                        </td>
                        <td>
                            <button type="submit" id="btn_gestion"><a href="index.php?page=profil&id=<?php echo $_smarty_tpl->tpl_vars['company']->value['id_personne'];?>
">Go to</a></button>
                        </td>
                        </form>
                    </tr>
                    
                    <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    
                    
                    
                    <?php if ($_smarty_tpl->tpl_vars['statut']->value == "Administrator") {?>
                    <tr>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Academy</th>
                        <th>Status</th>
                        <th>Management</th>
                        <th>Consult</th>
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
                                <option value="aucun">None</option>
                            </select>
                        </td>
                        <td>
                            <select name="select-role" id="select-role">
                                <option value="administrator">Administrator</option>
                            </select>
                        </td>
                        <td>
                            <button type="submit" name="admin" name="admin" id="btn_gestion">Save</button>
                        </td>
                        <td>
                            <button type="submit" id="btn_gestion"><a href="index.php?page=profil&id=<?php echo $_smarty_tpl->tpl_vars['admin']->value['id_personne'];?>
">Go to</a></button>
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
