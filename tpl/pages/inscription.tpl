{include file='header_other.tpl'}
<div class="container-inscription">
    <div class="row-titre">
        <h2>Inscription</h2>
    </div>
    <div class="row-form">
        <form action="inscription.php">
            <p>Prénom :</p>
            <input type="text" name="prenom">
            <p>Nom :</p>
            <input type="text" name="nom">
            <p>E-mail :</p>
            <input type="email" name="mail">
            <p>Statut :</p>
            <input type="text" name="statut">
            <p>Mot de passe :</p>
            <input type="password" name="pass">
            <p>Confirmation du mot de passe :</p>
            <input type="password" name="confirmpass"><br>
            <input type="submit" value="S'inscrire" id="btn_inscription">
        </form>
    </div>
</div>