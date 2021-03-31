<?php
/* Smarty version 3.1.39, created on 2021-03-31 13:58:06
  from 'C:\xampp\htdocs\Entreprise\tpl\pages\recherche.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606463ce593bb0_13583467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18f1b0ae3389457c8075ee706870e428f8b0feb6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Entreprise\\tpl\\pages\\recherche.tpl',
      1 => 1617191426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_606463ce593bb0_13583467 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section>
    <article>
        <div class="container-recherche">
            <div class="row-recherche">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['enliste']->value, 'entreprise');
$_smarty_tpl->tpl_vars['entreprise']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['entreprise']->value) {
$_smarty_tpl->tpl_vars['entreprise']->do_else = false;
?>
                
            
                <div class="items titre-entreprise">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['entreprise']->value['pathimage'];?>
" alt="nomentreprise">
                    <h4><?php echo $_smarty_tpl->tpl_vars['entreprise']->value['nom_entreprise'];?>
</h4>
                    <h5>Description de l'offre</h5>
                    <p class="description"><?php echo $_smarty_tpl->tpl_vars['entreprise']->value['description'];?>
</p>
                    <a href="../controllers/favori.php?offre=<?php echo $_smarty_tpl->tpl_vars['entreprise']->value['id_offre'];?>
" class="bot"><button>Favori</button></a><a href="index.php?page=offre&offre=<?php echo $_smarty_tpl->tpl_vars['entreprise']->value['id_offre'];?>
" class="bot"><button>Voir l'offre</button></a>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
                
            
                
                
            </div>
        </div>
    </article>
</section>
<?php echo '<script'; ?>
>
    var desc = document.getElementsByClassName("description");
    window.onload = function(){
        taille = desc.length;
        if(taille > 300){
            for(let i = 0; i < taille; i++){
                str = desc[i].innerHTML;
                desc[i].innerHTML = str.substr(0,300) + "...";
            }
        }
    };
<?php echo '</script'; ?>
><?php }
}
