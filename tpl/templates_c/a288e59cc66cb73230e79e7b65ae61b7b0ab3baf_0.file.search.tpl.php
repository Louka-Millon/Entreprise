<?php
/* Smarty version 3.1.39, created on 2021-04-01 01:00:58
  from 'C:\xampp\htdocs\Entreprise\tpl\pages\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6064ff2ae8aa40_64623606',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a288e59cc66cb73230e79e7b65ae61b7b0ab3baf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Entreprise\\tpl\\pages\\search.tpl',
      1 => 1617231640,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6064ff2ae8aa40_64623606 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-recherche" >
                <div class="row-recherche">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['enliste']->value, 'entreprise');
$_smarty_tpl->tpl_vars['entreprise']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['entreprise']->value) {
$_smarty_tpl->tpl_vars['entreprise']->do_else = false;
?>
                    <div  class="items titre-entreprise">
                        <h4><?php echo $_smarty_tpl->tpl_vars['entreprise']->value['nom_entreprise'];?>
</h4>
                        <h5 style="font-size:15px"><?php echo $_smarty_tpl->tpl_vars['entreprise']->value['titre_offre'];?>
</h5>
                        
                        <p class="description"><?php echo $_smarty_tpl->tpl_vars['entreprise']->value['desc_offre'];?>
</p>
                        <a href="../controllers/favori.php?offre=<?php echo $_smarty_tpl->tpl_vars['entreprise']->value['id_offre'];?>
" class="bot"><button>Add to wishlist</button></a><a href="index.php?page=offre&offre=<?php echo $_smarty_tpl->tpl_vars['entreprise']->value['id_offre'];?>
" class="bot"><button>Consult</button></a>

                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   
                </div> 
            </div>
<?php }
}
