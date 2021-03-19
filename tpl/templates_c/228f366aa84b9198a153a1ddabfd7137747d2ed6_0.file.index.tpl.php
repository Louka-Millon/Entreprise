<?php
/* Smarty version 3.1.39, created on 2021-03-16 09:47:29
  from 'C:\xamp\htdocs\prosit_en_mvc\tpl\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605070a1bdf472_45147785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '228f366aa84b9198a153a1ddabfd7137747d2ed6' => 
    array (
      0 => 'C:\\xamp\\htdocs\\prosit_en_mvc\\tpl\\index.tpl',
      1 => 1615884448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605070a1bdf472_45147785 (Smarty_Internal_Template $_smarty_tpl) {
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
</body>
</html><?php }
}
