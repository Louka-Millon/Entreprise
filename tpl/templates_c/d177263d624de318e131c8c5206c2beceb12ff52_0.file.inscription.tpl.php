<?php
/* Smarty version 3.1.39, created on 2021-03-22 09:46:03
  from 'C:\xamp\htdocs\prosit_en_mvc\tpl\pages\inscription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6058594b65ad88_38219459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd177263d624de318e131c8c5206c2beceb12ff52' => 
    array (
      0 => 'C:\\xamp\\htdocs\\prosit_en_mvc\\tpl\\pages\\inscription.tpl',
      1 => 1615889778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6058594b65ad88_38219459 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
  <form action="../controllers/gestionconnexion.php" action="POST">
    <div class="container_r">
      <h1>Register</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>

      <label for="pseudo"><b>Pseudo</b></label>
      <input type="text" placeholder="Entrez votre pseudo..." name="pseudo"  required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Entrez votre Password..." name="password" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password..." name="passwordr" required>
      <hr>
      <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

      <button type="submit" class="registerbtn">Register</button>
    </div>
    
  </form>
</div><?php }
}
