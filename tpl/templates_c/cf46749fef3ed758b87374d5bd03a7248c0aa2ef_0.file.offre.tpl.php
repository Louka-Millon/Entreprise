<?php
/* Smarty version 3.1.39, created on 2021-03-27 17:34:52
  from 'C:\xamp\htdocs\Entreprise\tpl\pages\offre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605f5eacdfcc99_84046011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf46749fef3ed758b87374d5bd03a7248c0aa2ef' => 
    array (
      0 => 'C:\\xamp\\htdocs\\Entreprise\\tpl\\pages\\offre.tpl',
      1 => 1616862825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_605f5eacdfcc99_84046011 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="offre-container">
    <!--Barre de droite avec les informations propres de l'entreprise-->
    <div class="offre-row infos">
        <div class="offre-avatar">
            <img src="https://w.wallhaven.cc/full/j3/wallhaven-j3339m.jpg" alt="IMAGE">
            <h3><?php echo $_smarty_tpl->tpl_vars['entreprise']->value;?>
</h3>
        </div>
        <p>Localisation</p>
        <p>Coordonnées</p>
        <p>Secteur(s) d'activité :</p>
        <ul>
            <li>Secteur 1</li>
            <li>Secteur 2</li>
            <li>Secteur 3</li>
        </ul>
        <p>Évaluation des stagiaires :</p>
        <span>NOMBRE</span>
        <p>Évaluation des pilotes :</p>
        <span>NOMBRE</span>
        <p>Nombre d’élèves du CESI ayant été pris en stage dans cette entreprise :</p>
        <span>NOMBRE</span>
    </div>
    <!--Détails de l'offre et description des attendus-->
    <div class="offre-row details">
        <div class="details-texte">
            <h2>TITRE DE L'OFFRE</h2>
            <p>Détails de l'offre, durée de l'offre, compétences recherchées, etc...</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non illum odio id veritatis nam facere voluptate adipisci aut dolorem dolor! Beatae necessitatibus facilis quasi, repellendus error ipsa provident atque consectetur! Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus nihil, adipisci autem dolorem nulla quibusdam quaerat labore ut at! Commodi tempora minus, hic nesciunt vero error. Quisquam ab odio deleniti?</p>
        </div>
        <div class="details-boutons">
            <button id="btn_wishlist">Ajouter à la wishlist</button>
            <button id="btn_postuler">Postuler</button>
        </div>
    </div>
</div><?php }
}
