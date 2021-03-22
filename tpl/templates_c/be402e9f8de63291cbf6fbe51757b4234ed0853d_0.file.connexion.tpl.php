<?php
/* Smarty version 3.1.39, created on 2021-03-22 09:46:00
  from 'C:\xamp\htdocs\prosit_en_mvc\tpl\pages\connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605859482d5296_13259836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be402e9f8de63291cbf6fbe51757b4234ed0853d' => 
    array (
      0 => 'C:\\xamp\\htdocs\\prosit_en_mvc\\tpl\\pages\\connexion.tpl',
      1 => 1615887980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605859482d5296_13259836 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
  <form action="../controllers/gestionconnexion.php" action="POST">
    <div class="row">
      <h2 style="text-align:center">Login with Social Media or Manually</h2>
      <div class="vl">
        <span class="vl-innertext">or</span>
      </div>

      <div class="col">
        <a href="#" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
         </a>
        <a href="#" class="twitter btn">
          <i class="fa fa-twitter fa-fw"></i> Login with Twitter
        </a>
        <a href="#" class="google btn"><i class="fa fa-google fa-fw">
          </i> Login with Google+
        </a>
      </div>

      <div class="col">
        <div class="hide-md-lg">
          <p>Or sign in manually:</p>
        </div>

        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" name="connexion" value="Login">
      </div>
      
    </div>
  </form>
</div>

<div class="bottom-container">
  <div class="row">
    <div class="col">
      <a href="#" style="color:white" class="btn">Sign up</a>
    </div>
    <div class="col">
      <a href="#" style="color:white" class="btn">Forgot password?</a>
    </div>
  </div>
</div><?php }
}
