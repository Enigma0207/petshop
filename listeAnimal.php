<?php
require_once "../inc/database.php";

require_once("../inc/functions.php");

// Inclure votre classe et les fonctions de connexion à la base de données ici

// Créez une instance de votre classe Animal
$animal = new Animal();

// Appelez la fonction findAll() pour obtenir la liste des animaux
$animaux = $animal->findAll();

// Maintenant, vous pouvez parcourir et afficher la liste des animaux
foreach ($animaux as $animal) {
    echo "Nom : " . $animal['name'] . "<br>";
    echo "Type : " . $animal['type'] . "<br>";
    echo "Race : " . $animal['breed'] . "<br><br>";
}
?>