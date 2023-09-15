<!--
    CONSIGNES
// creer un formulaire avec les champs:
// nom, prenom, login, mot de passe
// la validation du formulaire redirige vers action.php
 -->

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Espace animal</title>
</head>
<body>

    <form method="POST" action="./model/action.php">

        <input type="text" name="name" placeholder=" Animal Name" require><br><br>

        <select name="type" id="">
            <option value="herbivorous"></option>
            <option value="carnivorous"></option>
        </select>

        <input type="text" name="breed" placeholder=" Breed Name" require><br><br>

        <div class="flexy">
            <input type="submit" class="inscription submit" name="submit" value=" submit">
        </div>
        
    </form>
</body>
</html>
<!-- 1. formulaire
2. retrait info dans action.php
3. -->