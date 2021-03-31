<?php
/* Smarty version 3.1.39, created on 2021-03-31 15:25:06
  from 'C:\xamp\htdocs\Entreprise\tpl\pages\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60647832ab13d3_64553170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad133f29e3ac22170397fbd21c057673ebccc1d3' => 
    array (
      0 => 'C:\\xamp\\htdocs\\Entreprise\\tpl\\pages\\home.tpl',
      1 => 1617197105,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_60647832ab13d3_64553170 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section>
      <article>
            
            <div class="container-home">
                  <div class="row-home">
                        <h3 class="sectionname text-center">Les domaines les plus recherchés</h3></br>
                  </div>
                  <div class="row-home">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secteur']->value, 'top');
$_smarty_tpl->tpl_vars['top']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['top']->value) {
$_smarty_tpl->tpl_vars['top']->do_else = false;
?>
                        <div class="items-home" style="background:url('../core/image/secteur/<?php echo $_smarty_tpl->tpl_vars['top']->value['secteur_activite'];?>
.jpg');background-position: 50% 50%;background-size: cover;"><div class="centered"><?php echo $_smarty_tpl->tpl_vars['top']->value['secteur_activite'];?>
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
                        <h3 class="sectionname text-center">Propositions selon votre domaines</h3></br>
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
">Voir l'offre</a></button>
                                    </div>
                              </div>
                              
                        </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        

                  </div>
            </div>
      </article>
</section>
<!--
      <div class="header">
        <h2> Les domaines les plus recherchés</h2>
      </div>
    
      <div class="main">
       
            <img src="https://lh3.googleusercontent.com/proxy/LjJXTv8Y6zUlXHYjOF3VxiLdQiGEPKKDAJmCgXPSZ_gVERQkTri32sUlYwmjrIJ12A07iNWNLbDp-JCO8tP-lA2sVz_TaGQd-9CSMpeFnc6dcJ9lFaFyZoYVZ-5RHxu_HWCbYIGjNQ" alt=""  height="200" width="250">
            <img src="https://lh3.googleusercontent.com/proxy/LjJXTv8Y6zUlXHYjOF3VxiLdQiGEPKKDAJmCgXPSZ_gVERQkTri32sUlYwmjrIJ12A07iNWNLbDp-JCO8tP-lA2sVz_TaGQd-9CSMpeFnc6dcJ9lFaFyZoYVZ-5RHxu_HWCbYIGjNQ" alt=""  height="200" width="250">
            <img src="https://lh3.googleusercontent.com/proxy/LjJXTv8Y6zUlXHYjOF3VxiLdQiGEPKKDAJmCgXPSZ_gVERQkTri32sUlYwmjrIJ12A07iNWNLbDp-JCO8tP-lA2sVz_TaGQd-9CSMpeFnc6dcJ9lFaFyZoYVZ-5RHxu_HWCbYIGjNQ" alt=""  height="200" width="250">
            <img src="https://lh3.googleusercontent.com/proxy/LjJXTv8Y6zUlXHYjOF3VxiLdQiGEPKKDAJmCgXPSZ_gVERQkTri32sUlYwmjrIJ12A07iNWNLbDp-JCO8tP-lA2sVz_TaGQd-9CSMpeFnc6dcJ9lFaFyZoYVZ-5RHxu_HWCbYIGjNQ" alt=""  height="200" width="250">
            <img src="https://lh3.googleusercontent.com/proxy/LjJXTv8Y6zUlXHYjOF3VxiLdQiGEPKKDAJmCgXPSZ_gVERQkTri32sUlYwmjrIJ12A07iNWNLbDp-JCO8tP-lA2sVz_TaGQd-9CSMpeFnc6dcJ9lFaFyZoYVZ-5RHxu_HWCbYIGjNQ" alt=""  height="200" width="250">
            <img src="https://lh3.googleusercontent.com/proxy/LjJXTv8Y6zUlXHYjOF3VxiLdQiGEPKKDAJmCgXPSZ_gVERQkTri32sUlYwmjrIJ12A07iNWNLbDp-JCO8tP-lA2sVz_TaGQd-9CSMpeFnc6dcJ9lFaFyZoYVZ-5RHxu_HWCbYIGjNQ" alt=""  height="200" width="250">
            
            <img src="https://lh3.googleusercontent.com/proxy/LjJXTv8Y6zUlXHYjOF3VxiLdQiGEPKKDAJmCgXPSZ_gVERQkTri32sUlYwmjrIJ12A07iNWNLbDp-JCO8tP-lA2sVz_TaGQd-9CSMpeFnc6dcJ9lFaFyZoYVZ-5RHxu_HWCbYIGjNQ" alt=""  height="200" width="250">
      
            <img src="https://lh3.googleusercontent.com/proxy/LjJXTv8Y6zUlXHYjOF3VxiLdQiGEPKKDAJmCgXPSZ_gVERQkTri32sUlYwmjrIJ12A07iNWNLbDp-JCO8tP-lA2sVz_TaGQd-9CSMpeFnc6dcJ9lFaFyZoYVZ-5RHxu_HWCbYIGjNQ" alt=""  height="200" width="250">
      
      </div>
      
      <h2>Propositions selon votre domaines</h2>
      <fieldset>
            <p style="margin-left: 5%;">Nom du stage</p>
            <p>Localisation &nbsp; &nbsp; Rémunération  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Domaine</p>
            <div style= "position: absolute; margin-left: 90%; background-color: aqua; top: 80%;" class="bouton"> <input type="submit" value="Allez à"> </div>
      </fieldset>
      
      <fieldset>
            <p style="margin-left: 5%;">Nom du stage</p>
            <p>Localisation &nbsp; Rémunération &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Domaine</p>
            <div style="position: absolute; margin-left: 90%; background-color: aqua; bottom: 1%" class="bouton"><input type="submit" value="Allez à"></div>
      </fieldset>
      
      <fieldset>
            <p style="margin-left: 5%;">Nom du stage</p>
            <p>Localisation &nbsp; Rémunération &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Domaine</p>
            <div style= "position: absolute; margin-left: 90%; border-color: aqua; top: 111%" class="bouton"> <input type="submit" value="Allez à"> </div>
      </fieldset>
      
      <fieldset>
            <p style="margin-left: 5%;" >Nom du stage</p>
            <p>Localisation &nbsp; Rémunération &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Domaine</p>
            <div style= "position: absolute; margin-left: 90%; background-color: aqua; top: 124%" class="bouton"> <input type="submit" value="Allez à"> </div>
      
      </fieldset>
--><?php }
}
