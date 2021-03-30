<?php
/* Smarty version 3.1.39, created on 2021-03-30 12:08:03
  from 'C:\xampp\htdocs\Entreprise\tpl\pages\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6062f883598be5_18266525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83852978223edb712882bb5abed4c97adcb98399' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Entreprise\\tpl\\pages\\profil.tpl',
      1 => 1617098881,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_other.tpl' => 1,
  ),
),false)) {
function content_6062f883598be5_18266525 (Smarty_Internal_Template $_smarty_tpl) {
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
                <button id="btn_creation_offre" onclick="document.getElementById('modal').style.display='block'">Ajouter une offre</button>
            </div>
            <div id="modal" class="modal">
                <form class="modal-content animate" action="" method="POST">
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
        </div>
    </article>
</section>

<?php echo '<script'; ?>
 src="../core/js/modal.js"><?php echo '</script'; ?>
><?php }
}
