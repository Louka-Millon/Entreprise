<?php
/* Smarty version 3.1.39, created on 2021-03-27 17:02:33
  from 'C:\xamp\htdocs\Entreprise\tpl\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605f57198622f4_15972081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97dc7755e611c09ca20f3e2fc52341bcb614c316' => 
    array (
      0 => 'C:\\xamp\\htdocs\\Entreprise\\tpl\\footer.tpl',
      1 => 1616860815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605f57198622f4_15972081 (Smarty_Internal_Template $_smarty_tpl) {
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
