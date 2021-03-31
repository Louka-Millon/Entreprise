{include file='header_other.tpl'}
<section>
    <article>
        <div class="container-inscription">
            <div class="row-titre">
                <h2>Log in</h2>
            </div>
            <div class="row-form">
                <form action="../controllers/login.php" method="POST">
                    <p>E-mail :</p>
                    <input type="email" name="mail">
                    <p>Password :</p>
                    <input type="password" name="pass">
                    <input type="submit" value="Log in" id="btn_connexion">
                </form>
            </div>
        </div>
    </article>
</section>