<?php
/* Smarty version 3.1.39, created on 2021-04-01 00:36:23
  from 'C:\xampp\htdocs\Entreprise\tpl\pages\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6064f9679fb928_88551271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83852978223edb712882bb5abed4c97adcb98399' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Entreprise\\tpl\\pages\\profil.tpl',
      1 => 1617230170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_other.tpl' => 1,
  ),
),false)) {
function content_6064f9679fb928_88551271 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header_other.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section>
    <article>
        <div class="container-profil">
            <div class="row-profil">
                <!--<img src="../core/images/background-header.png" alt="Profil">-->
                <h3><?php echo $_smarty_tpl->tpl_vars['profile']->value['prenom'];?>
 <?php echo $_smarty_tpl->tpl_vars['profile']->value['nom'];?>
</h3>
                <p>Status : <?php echo $_smarty_tpl->tpl_vars['profile']->value['statut'];?>
</p>

                <p>Here is my resume.</p>
                <p>Here is my cover letter.</p>
                
                <?php if ($_smarty_tpl->tpl_vars['profile']->value['statut'] == "company") {?>
                <?php if ($_smarty_tpl->tpl_vars['profile']->value['id_personne'] == $_smarty_tpl->tpl_vars['userid']->value) {?>
                <button id="btn_creation_offre" onclick="document.getElementById('modal').style.display='block'">Add an offer</button>
                <table id="customers">
                    <tr>
                        <th>Name of the offer</th>
                        <th>Description</th>
                        <th>Beginning</th>
                        <th>Duration</th>
                        <th>Number of places</th>
                        <th>Remuneration</th>
                        <th>Type of the offer</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeoffre']->value, 'offre');
$_smarty_tpl->tpl_vars['offre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['offre']->value) {
$_smarty_tpl->tpl_vars['offre']->do_else = false;
?>
                    <tr>
                        <form action="../controllers/updateoffre.php?id=<?php echo $_smarty_tpl->tpl_vars['offre']->value['id_offre'];?>
" method="POST">
                        <td><input name="titre-offre" type="text" value="<?php echo $_smarty_tpl->tpl_vars['offre']->value['titre_offre'];?>
"></td>
                        <td><input name="desc-offre" type="text" value="<?php echo $_smarty_tpl->tpl_vars['offre']->value['desc_offre'];?>
"></td>
                        <td><input name="debut-offre" type="date" value="<?php echo $_smarty_tpl->tpl_vars['offre']->value['date_offre'];?>
"></td>
                        <td><input name="duree-offre" min="1" type="number" value="<?php echo $_smarty_tpl->tpl_vars['offre']->value['duree_offre'];?>
"></td>
                        <td><input name="nbplace" type="number" value="<?php echo $_smarty_tpl->tpl_vars['offre']->value['nombre_places'];?>
"></td>
                        <td><input name="salaire-offre" type="number" value="<?php echo $_smarty_tpl->tpl_vars['offre']->value['remuneration'];?>
"></td>
                        <td>
                            <select style="width:100px;" id="selectedcom" name="select-offre" class="select">
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['offre']->value['type_offre'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['offre']->value['type_offre'];?>
</option>
                                    <option value="CDI">CDI</option>
                                    <option value="CDD">CDD</option>
                                    <option value="Alternance">Alternance</option>
                                    <option value="Stage">Stage</option>
                            </select>
                        </td>
                        <td><input type="submit" value="Edit" name="modifier"></td>
                        <td><input type="submit" value="Delete" name="supprimer"></td>
                        </form>
                    </tr>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
                <div id="modal" class="modal">
                    <form class="modal-content animate" action="../controllers/addoffre.php" method="POST">
                        <div class="modal-header">
                            <h3>Create an offer</h3>
                            <span onclick="document.getElementById('modal').style.display='none'" class="close" title="Close Modal">&times;</span>
                        </div>
                        <div class="container-modal">
                            <div class="element-modal">
                                <p>Beginning</p>
                                <input type="date" name="debut-offre" id="debut-offre" required>
                                <p>Duration (weeks)</p>
                                <input type="number" placeholder="Duration of the offer..." name="duree-offre" id="duree-offre" required>
                                <p>Remuneration (per month)</p>
                                <input type="number" placeholder="Remuneration..." name="salaire-offre" id="salaire-offre" required>
                                <p>Number of places</p>
                                <input type="number" placeholder="Number of places..." name="nbplace" id="nbplace" required>
                                <p>Type of the offer</p>
                                <select id="selectedcom" name="select-offre" class="select">
                                    <option value="" selected>-- Select an offer --</option>
                                    <option value="CDI">Permanent contract</option>
                                    <option value="CDD">Fixed-term contract</option>
                                    <option value="Alternance">Alternation</option>
                                    <option value="Stage">Internship</option>
                                </select>
                            </div>
                            <div class="element-modal">
                                <p>Title</p>
                                <input type="text" placeholder="Title of the offer..." name="titre-offre" id="titre-offre" required>
                                <p>Description</p>
                                <input type="text" placeholder="Description of the offer..." name="desc-offre" id="desc-offre" required>
                            </div>
                        </div>
                        <div class="container-modal modal-bottom">
                            <button type="submit" id="btn_creer">Post</button>
                            <button type="button" onclick="document.getElementById('modal').style.display='none'" id="btn_annuler">Cancel</button>
                        </div>
                    </form>
                </div>
                <?php } else { ?>
                <table id="customers">
                    <tr>
                        <th>Name of the offer</th>
                        <th>Description</th>
                        <th>Beginning</th>
                        <th>Duration</th>
                        <th>Number of places</th>
                        <th>Remuneration</th>
                        <th>Type of the offer</th>
                    </tr>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeoffre']->value, 'offre');
$_smarty_tpl->tpl_vars['offre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['offre']->value) {
$_smarty_tpl->tpl_vars['offre']->do_else = false;
?>
                    <tr>
                        
                        <td><?php echo $_smarty_tpl->tpl_vars['offre']->value['titre_offre'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['offre']->value['desc_offre'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['offre']->value['date_offre'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['offre']->value['duree_offre'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['offre']->value['nombre_places'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['offre']->value['remuneration'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['offre']->value['type_offre'];?>
</td>
                    </tr>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
                <?php }?>
                <?php } elseif ($_smarty_tpl->tpl_vars['profile']->value['statut'] == "Student" || $_smarty_tpl->tpl_vars['profile']->value['statut'] == "Representative") {?>
                <?php if ($_smarty_tpl->tpl_vars['profile']->value['id_personne'] == $_smarty_tpl->tpl_vars['userid']->value) {?>
                <table id="customers">
                    <tr>
                        <th>Name of the offer</th>
                        <th>Options</th>
                      </tr>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['favori']->value, 'favorie');
$_smarty_tpl->tpl_vars['favorie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['favorie']->value) {
$_smarty_tpl->tpl_vars['favorie']->do_else = false;
?>
                    <tr>
                        <td><a style="color:black;" href="index.php?page=offre&offre=<?php echo $_smarty_tpl->tpl_vars['favorie']->value['id_offre'];?>
"><?php echo $_smarty_tpl->tpl_vars['favorie']->value['titre_offre'];?>
</a></td>
                        <td><a style="color:black;" href="../Controllers/delfavori.php?offre=<?php echo $_smarty_tpl->tpl_vars['favorie']->value['id_offre'];?>
">Remove from wishlist</a></td>
                    </tr>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
                <?php } else { ?>
                <table id="customers">
                    <tr>
                        <th>Name of the offer</th>
                      </tr>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['favori']->value, 'favorie');
$_smarty_tpl->tpl_vars['favorie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['favorie']->value) {
$_smarty_tpl->tpl_vars['favorie']->do_else = false;
?>
                    <tr>
                        <td><a style="color:black;" href="index.php?page=offre&offre=<?php echo $_smarty_tpl->tpl_vars['favorie']->value['id_offre'];?>
"><?php echo $_smarty_tpl->tpl_vars['favorie']->value['titre_offre'];?>
</a></td>
                    </tr>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
                <?php }?>
                <?php }?>
            </div>
            
        </div>
    </article>
</section>

<?php echo '<script'; ?>
 src="../core/js/modal.js"><?php echo '</script'; ?>
><?php }
}
