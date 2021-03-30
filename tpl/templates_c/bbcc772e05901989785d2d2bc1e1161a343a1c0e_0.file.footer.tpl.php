<?php
/* Smarty version 3.1.39, created on 2021-03-30 15:01:47
  from 'C:\xampp\htdocs\Entreprise\tpl\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6063213bc70f21_94134631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbcc772e05901989785d2d2bc1e1161a343a1c0e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Entreprise\\tpl\\footer.tpl',
      1 => 1616941681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6063213bc70f21_94134631 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="popup-cookies">
       <div class="popup-mention">
              <p>Ce site utilise des cookies. Pour plus d'informations, consultez notre politique de confidentialité.</p>
       </div>
       <div class="popup-bouton">
              <button onclick="removecookie()">Accepter</button>
              <button onclick="redirectcookie()">En savoir plus</button>
       </div>
</div>
<footer>
       <div class="footer-block">
              <a class="footer-item" href="#">Home</a>
              <a class="footer-item" href="#">Contact</a>
              <a class="footer-item" href="#">Mentions légales</a>
       </div>
       <div class="footer-block">
              <span>Ce site a été développé par Lucile BRIAND, Nissrine ESSAHLAOUI et Louka MILLON.</span>
       </div> 
</footer>

<?php echo '<script'; ?>
 src="../core/js/footer.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
