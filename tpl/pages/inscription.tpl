{include file='header_other.tpl'}
<section>
    <article>
        <div class="container-inscription">
            <div class="row-titre">
                <h2>Inscription</h2>
            </div>
            <div class="row-form">
                <form method="GET" action="../controllers/signin.php">
                    <p>Statut :</p>
                    <select id="selectedcom" name="select-statut" class="select">
                        <option value="" selected>-- Sélectionnez un statut --</option>
                        <option value="student">Élève</option>
                        <option value="company">Entreprise</option>
                    </select>
                    <p>Prénom :</p>
                    <input type="text" name="prenom">
                    <p>Nom :</p>
                    <input type="text" name="nom">
                    <p>E-mail :</p>
                    <input type="email" name="mail">
                    
                    
                    <p>Mot de passe :</p>
                    <input type="password" name="pass">
                    <p>Confirmation du mot de passe :</p>
                    <input type="password" name="confirmpass"><br>
                    <div id="entreprise" style="display:none">
                        <p>Nom Entreprise :</p>
                        <input type="text" name="nom_entreprise">
                        <p>Localisation :</p>
                        <input type="text" name="localisation">
                        <p>Nombre de stagiaires :</p>
                        <input type="text" name="nombre_stagiaire">
                        <p>Description :</p>
                        <textarea name="description"></textarea>
                        <p>Telephone :</p>
                        <input type="text" name="telephone">
                        <p>E-mail :</p>
                        <input type="mail" name="maile">
                        
                    </div>
                    <input type="submit" value="S'inscrire" id="btn_inscription">
                </form>
                <p>{$erreurinsc}</p>
            </div>
        </div>
    </article>
</section>

<script src="../core/js/inscription.js"></script>