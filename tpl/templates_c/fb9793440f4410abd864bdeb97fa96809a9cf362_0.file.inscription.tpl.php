<?php
/* Smarty version 3.1.39, created on 2021-04-01 00:05:10
  from 'C:\xampp\htdocs\Entreprise\tpl\pages\inscription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6064f2164536c5_62293618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb9793440f4410abd864bdeb97fa96809a9cf362' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Entreprise\\tpl\\pages\\inscription.tpl',
      1 => 1617228300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_other.tpl' => 1,
  ),
),false)) {
function content_6064f2164536c5_62293618 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header_other.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section>
    <article>
        <div class="container-inscription">
            <div class="row-titre">
                <h2>Sign up</h2>
            </div>
            <div class="row-form">
                <form method="GET" action="../controllers/signin.php">
                    <p>Status :</p>
                    <select id="selectedcom" name="select-statut" class="select">
                        <option value="" selected>-- Select a status --</option>
                        <option value="student">Student</option>
                        <option value="company">Company</option>
                    </select>
                    <p>First name :</p>
                    <input type="text" name="prenom">
                    <p>Last name :</p>
                    <input type="text" name="nom">
                    <p>E-mail :</p>
                    <input type="email" name="mail">
                    
                    
                    <p>Password :</p>
                    <input type="password" name="pass">
                    <p>Confirm password :</p>
                    <input type="password" name="confirmpass"><br>
                    <div id="entreprise" style="display:none">
                        <p>Company name :</p>
                        <input type="text" name="nom_entreprise">
                        <p>Location :</p>
                        <input type="text" name="localisation">
                        <p>Number of interns already recieved :</p>
                        <input type="text" name="nombre_stagiaire">
                        <p>Description :</p>
                        <textarea name="description"></textarea>
                        <p>Company phone :</p>
                        <input type="text" name="telephone">
                        <p>Company e-mail :</p>
                        <input type="mail" name="maile">
                        
                    </div>
                    <input type="submit" value="Sign up" id="btn_inscription">
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
