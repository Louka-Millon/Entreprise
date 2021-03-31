<?php
/* Smarty version 3.1.39, created on 2021-03-31 11:54:48
  from 'C:\xamp\htdocs\Entreprise\tpl\pages\inscription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606446e88387c3_78027931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5b06bc8635beb172ae0bbbdf9fa64f84a0bee9d' => 
    array (
      0 => 'C:\\xamp\\htdocs\\Entreprise\\tpl\\pages\\inscription.tpl',
      1 => 1617132751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_other.tpl' => 1,
  ),
),false)) {
function content_606446e88387c3_78027931 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header_other.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section>
    <article>
        <div class="container-inscription">
            <div class="row-titre">
                <h2>Inscription</h2>
            </div>
            <div class="row-form">
                <form method="GET" action="../controllers/signin.php">
                    <p>Statut :</p>
                    <select id="selectedcom" name="select-statut" class="select">
                        <option value="" selected>-- Sélectionnez un statut --</option>
                        <option value="student">Élève</option>
                        <option value="company">Entreprise</option>
                    </select>
                    <p>Prénom :</p>
                    <input type="text" name="prenom">
                    <p>Nom :</p>
                    <input type="text" name="nom">
                    <p>E-mail :</p>
                    <input type="email" name="mail">
                    
                    
                    <p>Mot de passe :</p>
                    <input type="password" name="pass">
                    <p>Confirmation du mot de passe :</p>
                    <input type="password" name="confirmpass"><br>
                    <div id="entreprise" style="display:none">
                        <p>Nom Entreprise :</p>
                        <input type="text" name="nom_entreprise">
                        <p>Localisation :</p>
                        <input type="text" name="localisation">
                        <p>Nombre de stagiaires :</p>
                        <input type="text" name="nombre_stagiaire">
                        <p>Description :</p>
                        <textarea name="description"></textarea>
                        <p>Telephone :</p>
                        <input type="text" name="telephone">
                        <p>E-mail :</p>
                        <input type="mail" name="maile">
                        
                    </div>
                    <input type="submit" value="S'inscrire" id="btn_inscription">
                </form>
                <p><?php echo $_smarty_tpl->tpl_vars['erreurinsc']->value;?>
</p>
            </div>
        </div>
    </article>
</section>

<?php echo '<script'; ?>
 src="../core/js/inscription.js"><?php echo '</script'; ?>
><?php }
}
