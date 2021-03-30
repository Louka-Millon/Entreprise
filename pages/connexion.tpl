{include file='header_other.tpl'}

<section>
    <article>
        <div class="container-inscription">
            <div class="row-titre">
                <h2>Connexion</h2>
            </div>
            <div class="row-form">
                <form action="../controllers/connexionback.php" method="POST">
                    <p>E-mail :</p>
                    <input type="email" name="mail">
                    <p>Mot de passe :</p>
                    <input type="password" name="pass">
                    <input type="submit" value="Connexion" id="btn_connexion" name="formlogin">
                </form>
            </div>
        </div>
    </article>
</section>