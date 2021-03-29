{include file='header_other.tpl'}
<section>
    <article>
        <div class="container-inscription">
            <div class="row-titre">
                <h2>Inscription</h2>
            </div>
            <div class="row-form">
                <form method="GET" action="../controllers/inscription.php">
                    <p>Prénom :</p>
                    <input type="text" name="prenom">
                    <p>Nom :</p>
                    <input type="text" name="nom">
                    <p>E-mail :</p>
                    <input type="email" name="mail">
                    <p>Statut :</p>
                    <select name="select-statut" id="select-statut">
                        <option value="" selected>-- Sélectionnez un statut --</option>
                        <option value="student">Élève</option>
                        <option value="representative">Délégué</option>
                        <option value="tutor">Pilote</option>
                        <option value="company">Entreprise</option>
                    </select>
                    <p>Mot de passe :</p>
                    <input type="password" name="pass">
                    <p>Confirmation du mot de passe :</p>
                    <input type="password" name="confirmpass"><br>
                    <input type="submit" value="S'inscrire" id="btn_inscription">
                </form>
                <p>{$erreurinsc}</p>
            </div>
        </div>
    </article>
</section>