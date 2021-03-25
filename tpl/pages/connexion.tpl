<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="connexion.css">
    <title>Connexion</title>
</head>
<header>
    <img src="projetphoto.png">

</header>
<body>
    <div class= "header">
    <h2>Connectez-vous </h2>
    </div>
    <div class = "container">
    <form method="POST" action="connexion.php">
       
        <p style="text-align: center;"> Veuillez vous connectez avec votre compte:</p>
     <label><p style="text-align: center;">E-mail:</p></label> 
     <input style="text-align: center" type="E-mail" placeholder="Entrer votre e-mail" name="username" required>
     <label><p>Password:</p></label>
     <input style="text-align: center" type="Password" placeholder="Entrer votre password" name="password" required>
     <div class="button">
        <button type="submit">Connexion</button>
    </div>
  

    </form>
    </div>
</body>
</html>