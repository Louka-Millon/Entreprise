<?php
/* Smarty version 3.1.39, created on 2021-03-28 21:16:38
  from 'C:\xamp\htdocs\Entreprise\tpl\pages\recherche.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6060d616b31d71_07978550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d3b9c7cfaefaffb2ea5a829aaabdb4d2d32ab82' => 
    array (
      0 => 'C:\\xamp\\htdocs\\Entreprise\\tpl\\pages\\recherche.tpl',
      1 => 1616958993,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6060d616b31d71_07978550 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <a href="#" class="bot"><button>Favori</button></a><a href="index.php?page=offre&offre=<?php echo $_smarty_tpl->tpl_vars['entreprise']->value['nom_entreprise'];?>
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
        for(let i = 0; i < taille; i++){
            str = desc[i].innerHTML;
            desc[i].innerHTML = str.substr(0,300) + "...";
        }
    };
<?php echo '</script'; ?>
><?php }
}
