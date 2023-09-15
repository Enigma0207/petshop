<!-- 
CONSIGNES
// inclure le fichier utilisateur.php
// recuperer les information du formulaire
// creer un instance de la classe Utilisateur
// appeler la methode inscription pour enregistrer les donnees dans bd 

-->

<?php
session_start();
require_once("../utilisateur.php");

if(isset($_POST['inscription'])){
    // récupération des données saisies par l'utilisateur
    $nom=htmlspecialchars($_POST['nom']);
    $prenom=htmlspecialchars($_POST['prenom']);
    $email=htmlspecialchars($_POST['email']);
    $mdp=htmlspecialchars($_POST['mdp']);
    
    $mdp=password_hash($mdp,PASSWORD_DEFAULT);

    // on appel le constructeur
    $utilisateur = new Utilisateur($nom,$prenom,$email,$mdp);
    $utilisateur->inscrire();

    
}
// validation de formulaire animal
require_once("./AnimalRepository.php");

if(isset($_POST['submit'])){

    // fonction debug ou debug die permet de voir silya des erreurs
//     debugDie($_POST);
// {
//     echo "<pre>";
//     var_dump($param);
//     echo "</pre>";
//     die;
// }

    // récupération des données saisies par l'utilisateur
    $name=htmlspecialchars($_POST['name']);
    $type=htmlspecialchars($_POST['type']);
    $breed=htmlspecialchars($_POST['breed']);

    // on appel le constructeur
    $utilisateur = new AnimalRepository($name,$type,$breed);


    $utilisateur->insert();

    
}



if(isset($_POST['connexion'])){
    // récupération des données saisies par l'utilisateur
    $email=htmlspecialchars($_POST['email']);
    $mdp=htmlspecialchars($_POST['mdp']);
    
    // appel de la methode statique connexion
    Utilisateur::connexion($email, $mdp);
    

    
}

?>