<!--
    CONSIGNES
// creer un formulaire Connexion:
// login, mot de passe
// la validation du formulaire redirige vers action.php
 -->

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Connexion</title>
</head>
<body>

    <form method="POST" action="./model/action.php">

        <input type="email" name="email" placeholder=" Votre email" require><br><br>

        <input type="password" name="mdp" placeholder=" Mot de Passe" require><br><br>

        <div class="flexy">
            <input type="submit" class="inscription submit" name="connexion" value=" Connexion">
        </div>
        
    </form>
</body>
</html>