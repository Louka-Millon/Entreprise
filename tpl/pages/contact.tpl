{include file='header_other.tpl'}
<div class="container-inscription">
    <div class="row-titre">
        <h2>Contact</h2>
    </div>
    <div class="row-form">
        <form action="inscription.php">
            <p>Objet du mail :</p>
            <input type="text" name="objet">
            <p>Nom :</p>
            <textarea class="area" name="message" cols="10" rows="10"></textarea>
            
            <input type="submit" value="Envoyer" id="btn_mail">
        </form>
    </div>
</div>