<?php
/* Smarty version 3.1.39, created on 2021-04-01 01:12:24
  from 'C:\xampp\htdocs\Entreprise\tpl\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606501d8d5ef82_35037980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbcc772e05901989785d2d2bc1e1161a343a1c0e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Entreprise\\tpl\\footer.tpl',
      1 => 1617232341,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606501d8d5ef82_35037980 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="popup-cookies">
       <div class="popup-mention">
              <p>This site uses cookies. For more information, see our privacy policy.</p>
       </div>
       <div class="popup-bouton">
              <button onclick="removecookie()">Accept</button>
              <button onclick="redirectcookie()"><a href="index.php?page=mentions">See more...</a></button>
       </div>
</div>
<footer>
       <div class="footer-block">
              <a class="footer-item" href="/index.php">Home</a>
              <a class="footer-item" href="index.php?page=mentions">Terms of use</a>
       </div>
       <div class="footer-block">
              <span>This website was developed by Lucile BRIAND, Nissrine ESSAHLAOUI et Louka MILLON.</span>
       </div> 
</footer>

<?php echo '<script'; ?>
 src="../core/js/footer.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src = "../service-worker.js"> <?php echo '</script'; ?>
>
</body>
</html><?php }
}
