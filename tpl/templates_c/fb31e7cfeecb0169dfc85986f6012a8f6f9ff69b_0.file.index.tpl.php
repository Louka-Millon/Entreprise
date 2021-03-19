<?php
/* Smarty version 3.1.39, created on 2021-03-15 11:30:17
  from 'C:\xampp\htdocs\corbeille\tpl\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604f37398285e6_78220517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb31e7cfeecb0169dfc85986f6012a8f6f9ff69b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\corbeille\\tpl\\index.tpl',
      1 => 1615804216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_604f37398285e6_78220517 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<style>
    tr{
        background:grey;
    }
    tr:nth-child(2n+1){
        background:darkgray;
    }

</style>
<body>
    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1>hello les gens</h1>
    <p>The forests of middle Earth : 
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MyArray']->value, 'foo', false, NULL, 'film', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['foo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_film']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_film']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_film']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_film']->value['total'];
?>
    <?php echo $_smarty_tpl->tpl_vars['foo']->value;
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_film']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_film']->value['last'] : null)) {?>.<?php } else { ?>,<?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </p>
    <table><tr><th>id</th><th>nom</th>prenom<th>id</th></tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sections']->value, 're');
$_smarty_tpl->tpl_vars['re']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['re']->value) {
$_smarty_tpl->tpl_vars['re']->do_else = false;
?> <tr><td><?php echo $_smarty_tpl->tpl_vars['re']->value['id'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['re']->value['nom'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['re']->value['prenom'];?>
</td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></table>
    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
