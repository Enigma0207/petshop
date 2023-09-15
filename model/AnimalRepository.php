<!-- Création du fichier model/AnimalRepository.php : -->
<?php

require_once "../inc/database.php";

require_once("../inc/functions.php");
class AnimalRepository
{

    private $id_animal;
    private $name;
    private $type;
    private $breed;

    public function __construct($name, $type, $breed)
    {
        $this->name = $name;
        $this->type = $type;
        $this->breed = $breed;
    }

    public function insert()
    {
        // Créer une instance DbConnect
        $db = new dbConnect();
        // voir si il retourne l'objet pdoon va se connecter dans bdd
         //debugDie($db); 

        // se connecter à la bd
        $connexionDb = $db->dbConnexion(); // methode 1
        // $db = $dbConnect->connexioDataBase; // methode 2

        //préparation de la requête
        $request = $connexionDb->prepare("INSERT INTO animal (name, type, breed) VALUES (?, ?, ?) ");

        //exécution de la requete
        try { // essayer d'enregister les infos dans la table animal
            $request->execute(array($this->name, $this->type, $this->breed));
        } catch (PDOException $e) {
            echo $e->getMessage(); // afficher l'erreur sql généré
        }
    }

    public function findAll (){
        $db=new dbConnect();
        $connexionDb = $db->dbConnexion();
        $connexionRequest = $connexionDb->prepare("SELECT * FROM animal");
        //executer la request
        $connexionRequest->execute();
        // recupere le resultat de la request

        $aninmaux = $connexionRequest->fetchAll(PDO::FETCH_ASSOC);
    }
}
