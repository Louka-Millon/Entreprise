<?php
/* Smarty version 3.1.39, created on 2021-03-30 16:35:30
  from 'C:\xampp\htdocs\Entreprise\tpl\pages\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606337321045f0_97412234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83852978223edb712882bb5abed4c97adcb98399' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Entreprise\\tpl\\pages\\profil.tpl',
      1 => 1617114910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_other.tpl' => 1,
  ),
),false)) {
function content_606337321045f0_97412234 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header_other.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section>
    <article>
        <div class="container-profil">
            <div class="row-profil">
                <!--<img src="../core/images/background-header.png" alt="Profil">-->
                <h3><?php echo $_smarty_tpl->tpl_vars['pseudo']->value;?>
</h3>
                <p>Statut : <?php echo $_smarty_tpl->tpl_vars['statut']->value;?>
</p>

                <p>Voici ci-joint mon CV</p>
                <p>Voici ci-joint ma Lettre de motivation</p>
                <p>Voici nos offres d'emplois</p>
                <h3>Favoris</h3>
                <?php if ($_smarty_tpl->tpl_vars['statut']->value == "company") {?>
                <?php } else { ?>
                <table id="customers">
                    <tr>
                        <th>Nom de l'offre</th>
                        <th>Gestion</th>
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
">Supprimer</a></td>
                    </tr>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
                <?php }?>
            </div>
        </div>
    </article>
</section><?php }
}
