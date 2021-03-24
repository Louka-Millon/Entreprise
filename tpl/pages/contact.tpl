
    <div class= "header">
    <h2>Contactez-nous </h2>
    </div>
    <form action="page-de-contact" method="post">
        <div>
            <label for="name">Nom :</label>
            <input style = "text-align: center"type ="nom" id="name" name="user_name" placeholder="Entrer votre nom" required>
        </div>
        <div>
            <label for="titre">Titre :</label>
            <input style="text-align: center;" type="titre" placeholder="Entrer votre Titre" id="titre" name="Titre" required >
        </div>

        <div>
            <label for="msg">Message :</label>
            <textarea  style="text-align: center;" id="msg" name="user_message" placeholder="Entrer votre Message" required></textarea>
        </div>

        <div class="button">
            <button type="submit">Envoyer</button>
        </div>
    </form>
    
</body>
</html>