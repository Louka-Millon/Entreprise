<?php
/* Smarty version 3.1.39, created on 2021-03-31 08:49:29
  from 'C:\xamp\htdocs\Entreprise\tpl\pages\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60641b79a57da6_66978471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae323fe5a4d9d151b01b1aaab40502a9c2e80572' => 
    array (
      0 => 'C:\\xamp\\htdocs\\Entreprise\\tpl\\pages\\profil.tpl',
      1 => 1617173276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_other.tpl' => 1,
  ),
),false)) {
function content_60641b79a57da6_66978471 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header_other.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section>
    <article>
        <div class="container-profil">
            <div class="row-profil">
                <!--<img src="../core/images/background-header.png" alt="Profil">-->
                <h3><?php echo $_smarty_tpl->tpl_vars['pseudo']->value;?>
</h3>
                <p><?php echo $_smarty_tpl->tpl_vars['statut']->value;?>
</p>

                <p>Voici ci-joint mon CV</p>
                <p>Voici ci-joint ma Lettre de motivation</p>
                <p>Voici nos offres d'emplois</p>
                
                <?php if ($_smarty_tpl->tpl_vars['statut']->value == "company") {?>
                <button id="btn_creation_offre" onclick="document.getElementById('modal').style.display='block'">Ajouter une offre</button>
                <table id="customers">
                    <tr>
                        <th>Nom de l'offre</th>
                        <th>description de l'offre</th>
                        <th>date de l'offre</th>
                        <th>Durée de l'offre</th>
                        <th>Nombre de places</th>
                        <th>rémunération</th>
                        <th>Type d'offre</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
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
                        <td><input type="submit" value="Modifier" name="modifier"></td>
                        <td><input type="submit" value="Supprimer" name="supprimer"></td>
                        </form>
                    </tr>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
                <div id="modal" class="modal">
                    <form class="modal-content animate" action="../controllers/addoffre.php" method="POST">
                        <div class="modal-header">
                            <h3>Création d'une offre</h3>
                            <span onclick="document.getElementById('modal').style.display='none'" class="close" title="Close Modal">&times;</span>
                        </div>
                        <div class="container-modal">
                            <div class="element-modal">
                                <p>Date de début</p>
                                <input type="date" name="debut-offre" id="debut-offre" required>
                                <p>Durée (en semaines)</p>
                                <input type="number" placeholder="Durée de l'offre..." name="duree-offre" id="duree-offre" required>
                                <p>Rémunération (par mois)</p>
                                <input type="number" placeholder="Salaire..." name="salaire-offre" id="salaire-offre" required>
                                <p>Nombre de place</p>
                                <input type="number" placeholder="Nombre de place..." name="nbplace" id="nbplace" required>
                                <p>Type d'offre</p>
                                <select id="selectedcom" name="select-offre" class="select">
                                    <option value="" selected>-- Sélectionnez une offre --</option>
                                    <option value="CDI">CDI</option>
                                    <option value="CDD">CDD</option>
                                    <option value="Alternance">Alternance</option>
                                    <option value="Stage">Stage</option>
                                </select>
                            </div>
                            <div class="element-modal">
                                <p>Titre</p>
                                <input type="text" placeholder="Titre de l'offre..." name="titre-offre" id="titre-offre" required>
                                <p>Description</p>
                                <input type="text" placeholder="Description de l'offre..." name="desc-offre" id="desc-offre" required>
                            </div>
                        </div>
                        <div class="container-modal modal-bottom">
                            <button type="submit" id="btn_creer">Publier l'offre</button>
                            <button type="button" onclick="document.getElementById('modal').style.display='none'" id="btn_annuler">Annuler</button>
                        </div>
                    </form>
                </div>
                <?php } else { ?>
                <table id="customers">
                    <tr>
                        <th>Nom de l'offre</th>
                        <th>Suppression</th>
                      </tr>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['favori']->value, 'favorie');
$_smarty_tpl->tpl_vars['favorie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['favorie']->value) {
$_smarty_tpl->tpl_vars['favorie']->do_else = false;
?>
                    <tr>
                        <td><a style="color:black;" href="index.php?page=offre&offre=<?php echo $_smarty_tpl->tpl_vars['favorie']->value['id_offre'];?>
"><?php echo $_smarty_tpl->tpl_vars['favorie']->value['nom_entreprise'];?>
</a></td>
                        <td><a style="color:black;" href="../Controllers/delfavori.php?offre=<?php echo $_smarty_tpl->tpl_vars['favorie']->value['id_offre'];?>
">supprimer</a></td>
                    </tr>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
                <?php }?>
            </div>
            
        </div>
    </article>
</section>

<?php echo '<script'; ?>
 src="../core/js/modal.js"><?php echo '</script'; ?>
><?php }
}
