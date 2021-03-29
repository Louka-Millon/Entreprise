<?php
/* Smarty version 3.1.39, created on 2021-03-28 23:14:10
  from 'C:\xamp\htdocs\Entreprise\tpl\pages\offre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6060f1a2970b95_49532224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf46749fef3ed758b87374d5bd03a7248c0aa2ef' => 
    array (
      0 => 'C:\\xamp\\htdocs\\Entreprise\\tpl\\pages\\offre.tpl',
      1 => 1616966047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6060f1a2970b95_49532224 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section>
    <article>
        <div class="offre-container">
            <!--Barre de droite avec les informations propres de l'entreprise-->
            <div class="offre-row infos">
                <div class="offre-avatar">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['entreprisebyname']->value['pathimage'];?>
" alt="IMAGE">
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
                <span>NOMBRE</span>
                <p>Évaluation des pilotes :</p>
                <span>NOMBRE</span>
                <p>Nombre d’élèves du CESI ayant été pris en stage dans cette entreprise :</p>
                <span><?php echo $_smarty_tpl->tpl_vars['entreprisebyname']->value['nombre_stagiaires'];?>
</span>
            </div>
            <!--Détails de l'offre et description des attendus-->
            <div class="offre-row details">
                <div class="details-texte">
                    <h2>TITRE DE L'OFFRE</h2>
                    <p><?php echo $_smarty_tpl->tpl_vars['entreprisebyname']->value['description'];?>
</p>
                </div>
                <div class="details-boutons">
                    <button id="btn_wishlist">Ajouter à la wishlist</button>
                    <button id="btn_postuler">Postuler</button>
                </div>
            </div>
        </div>
    </article>
</section>
<?php }
}
