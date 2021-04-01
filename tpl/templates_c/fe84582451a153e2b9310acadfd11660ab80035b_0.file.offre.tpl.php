<?php
/* Smarty version 3.1.39, created on 2021-03-31 23:36:04
  from 'C:\xampp\htdocs\Entreprise\tpl\pages\offre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6064eb44d2deb1_19661190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe84582451a153e2b9310acadfd11660ab80035b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Entreprise\\tpl\\pages\\offre.tpl',
      1 => 1617177677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6064eb44d2deb1_19661190 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section>
    <article>
        <div class="offre-container">
            <!--Barre de droite avec les informations propres de l'entreprise-->
            <div class="offre-row infos">
                <div class="offre-avatar">
                    
                    <h3><?php echo $_smarty_tpl->tpl_vars['entreprisebyname']->value['nom_entreprise'];?>
</h3>
                </div>
                <p><?php echo $_smarty_tpl->tpl_vars['entreprisebyname']->value['localisation'];?>
</p>
                <p><?php echo $_smarty_tpl->tpl_vars['entreprisebyname']->value['telephone'];?>
</p>
                <p>Secteur(s) d'activité :</p>
                <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['competence']->value, 'skill');
$_smarty_tpl->tpl_vars['skill']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['skill']->value) {
$_smarty_tpl->tpl_vars['skill']->do_else = false;
?>
                    <li><?php echo $_smarty_tpl->tpl_vars['skill']->value['competence_recherchee'];?>
</li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
                <p>Évaluation des stagiaires :</p>
                <span><?php echo sprintf("%.1f",$_smarty_tpl->tpl_vars['moyenneetudiant']->value['moyenne']);?>
 / 5 : nombre de votant : <?php echo $_smarty_tpl->tpl_vars['moyenneetudiant']->value['compte'];?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['statut']->value == "student" || $_smarty_tpl->tpl_vars['statut']->value == "representative") {?>
                <?php if ($_smarty_tpl->tpl_vars['voteep']->value == "yes") {?>
                <form method="POST" action="../controllers/noteetudiant.php?offre=<?php echo $_smarty_tpl->tpl_vars['entreprisebyname']->value['id_offre'];?>
"><input type="number" name="noteeleve" min="0" max="5" value="0"><input type="submit" value="Notez"></form>
                <?php }?>
                <?php }?>
                <p>Évaluation des pilotes :</p>

                <span><?php echo sprintf("%.1f",$_smarty_tpl->tpl_vars['moyennetuteur']->value['moyenne']);?>
 / 5 : nombre de votant : <?php echo $_smarty_tpl->tpl_vars['moyennetuteur']->value['compte'];?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['statut']->value == "Tutor") {?>
                <?php if ($_smarty_tpl->tpl_vars['votetp']->value == "yes") {?>
                <form method="POST" action="../controllers/notepilote.php?offre=<?php echo $_smarty_tpl->tpl_vars['entreprisebyname']->value['id_offre'];?>
"><input type="number" name="notepilote" min="0" max="5" value="0"><input type="submit" value="Notez"></form>
                <?php }?>
                <?php }?>
                <p>Nombre d’élèves du CESI ayant été pris en stage dans cette entreprise :</p>
                <span><?php echo $_smarty_tpl->tpl_vars['entreprisebyname']->value['nombre_stagiaires'];?>
</span>
            </div>
            <!--Détails de l'offre et description des attendus-->
            <div class="offre-row details">
                <div class="details-texte">
                    <h2><?php echo $_smarty_tpl->tpl_vars['entreprisebyname']->value['titre_offre'];?>
</h2>
                    <p><?php echo $_smarty_tpl->tpl_vars['entreprisebyname']->value['desc_offre'];?>
</p>
                    <p>Début de l'offre : <?php echo $_smarty_tpl->tpl_vars['entreprisebyname']->value['date_offre'];?>
</p>
                    <p>Durée de l'offre : <?php echo $_smarty_tpl->tpl_vars['entreprisebyname']->value['duree_offre'];?>
 semaines</p>
                    <p>Rémunération : <?php echo $_smarty_tpl->tpl_vars['entreprisebyname']->value['remuneration'];?>
 €</p>
                </div>
                <div class="details-boutons">
                    <a href="../controllers/favori.php?offre=<?php echo $_smarty_tpl->tpl_vars['entreprisebyname']->value['id_offre'];?>
"><button id="btn_wishlist">Ajouter à la wishlist</button></a>
                    <button id="btn_postuler">Postuler</button>
                </div>
            </div>
        </div>
    </article>
</section>
<?php }
}
