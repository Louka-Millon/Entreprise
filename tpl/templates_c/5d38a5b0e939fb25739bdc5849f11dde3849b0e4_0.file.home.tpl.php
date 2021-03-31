<?php
/* Smarty version 3.1.39, created on 2021-03-31 23:58:40
  from 'C:\xampp\htdocs\Entreprise\tpl\pages\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6064f090a78317_72882776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d38a5b0e939fb25739bdc5849f11dde3849b0e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Entreprise\\tpl\\pages\\home.tpl',
      1 => 1617227915,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6064f090a78317_72882776 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section>
      <article>
            
            <div class="container-home">
                  <div class="row-home">
                        <h3 class="sectionname text-center">Most sought-after fields</h3></br>
                  </div>
                  <div class="row-home">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secteur']->value, 'top');
$_smarty_tpl->tpl_vars['top']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['top']->value) {
$_smarty_tpl->tpl_vars['top']->do_else = false;
?>
                        <div class="items-home" style="background:#E8EBF5;background-position: 50% 50%;background-size: cover;"><div class="centered"><?php echo $_smarty_tpl->tpl_vars['top']->value['secteur_activite'];?>
</div></div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </div>
            </div>
      </article>
      <article>
            <div class="container-suggestion">
                  <div class="row-suggestion">
                        <h3 class="sectionname text-center">Proposals according to your fields</h3></br>
                  </div>
                  <div class="row-suggestion">

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['entreprisedetails']->value, 'details');
$_smarty_tpl->tpl_vars['details']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['details']->value) {
$_smarty_tpl->tpl_vars['details']->do_else = false;
?>
                              
                        
                        <div class="items-suggest">
                              <div class="left-square">
                                    <div class="top-square">
                                          <h4 class="text-center nameentreprise"><?php echo $_smarty_tpl->tpl_vars['details']->value['titre_offre'];?>
</h4>
                                    </div>
                                    <div class="bottom-square">
                                          <div class="sub-square">
                                                <p class="text-center"><?php echo $_smarty_tpl->tpl_vars['details']->value['localisation'];?>
</p>
                                          </div>
                                          <div class="sub-square">
                                                <p class="text-center">
                                                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['competences']->value, 'skills', false, NULL, 'comp', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['skills']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['skills']->value) {
$_smarty_tpl->tpl_vars['skills']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_comp']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_comp']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_comp']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_comp']->value['total'];
?>
                                                            <?php if ($_smarty_tpl->tpl_vars['skills']->value['nom_entreprise'] == $_smarty_tpl->tpl_vars['details']->value['nom_entreprise']) {?>
                                                                  <span><?php echo $_smarty_tpl->tpl_vars['skills']->value['competence_recherchee'];
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_comp']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_comp']->value['last'] : null)) {?>.<?php } else { ?>,<?php }?></span>
                                                            <?php }?>
                                                            
                                                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></p>
                                          </div>
                                    </div>
                              </div>
                              <div class="main-right">
                                    <div class="right-square removable">
                                          <p class="center"><?php echo $_smarty_tpl->tpl_vars['details']->value['remuneration'];?>
 €</p>
                                    </div>
                                    <div class="right-square button-container">
                                          <button class="button-offre"><a style="color:black;" href="index.php?page=offre&offre=<?php echo $_smarty_tpl->tpl_vars['details']->value['id_offre'];?>
">Consult</a></button>
                                    </div>
                              </div>
                              
                        </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        

                  </div>
            </div>
      </article>
</section><?php }
}
