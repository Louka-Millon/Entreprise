{include file='header_other.tpl'}

<div class= "header">
    <h2>Connectez-vous </h2>
    </div>
    <div class = "container">
    <form method="POST" action="connexion.php">
        <fieldset>
        <p style="text-align: center;"> Veuillez vous connectez avec votre compte:</p>
    <label style="text-align: center;">E-mail:</label> 
     <input style="text-align: center" type="text" placeholder="Entrer votre e-mail" name="username" required> <br> <br> <br> <br> <br>
     <label style="text-align: center;">Password:</label>
     <input style="text-align: center" type="Password" placeholder="Entrer votre password" name="password" required>
    <p style="text-align: center;"> <input type="submit" id="submit" value="Connexion"> </p>
     </fieldset>

    </form>
</div>