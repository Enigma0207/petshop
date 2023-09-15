<?php
require_once "inc/database.php";
// Créer la classe utilisateur avec les proprietes:
class Utilisateur{

    // nom, prenom, email, mot de passe
    private $id_utilisateur;
    private $nom;
    private $prenom;
    private $email;
    private $motDePasse;

    public function __construct($nom,$prenom,$email,$motDePasse){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->motDePasse = $motDePasse;
    }

    // Les méthodes : s'inscrire, se connecter, se deconnecter


    // ----------  METHODE INSCRIRE ---------- //
    
    public function inscrire(){
        // Créer une instance DbConnect
        $db = new dbConnect();

        // se connecter à la bd
        $connexionDb = $db->dbConnexion(); // methode 1
        // $db = $dbConnect->connexioDataBase; // methode 2

        //préparation de la requête
        $request = $connexionDb->prepare("INSERT INTO utilisateur (nom, prenom, email, mdp) VALUES (?, ?, ?, ?) ");

        //exécution de la requete
        try{ // essayer d'enregister les infos dans la table utilisateur
            $request->execute(array($this->nom, $this->prenom, $this->email, $this->motDePasse));
            
        }catch(PDOException $e){
            echo $e->getMessage(); // afficher l'erreur sql généré
        }
    }

    // ----------  METHODE CONNEXION ---------- //

    // une methode stiatique c'est une methode qui appartient a la classe elle meme et pas aux instances de cette classe
    // une methode statique peut etre executer sans instancier la classe qui l'encapsule

    public static function connexion($email, $password){
        // Création d'une méthode statique pour que le code puisse s'exécuter malgré le fait que nous ne pouvons instancer pour la classe utilisateur 

        // Créer une instance DbConnect (de la base de donnée)
        $db = new dbConnect();

        // se connecter à la bd
        $connexionDb = $db->dbConnexion(); // methode 1

        // préparer la requête
        $request = $connexionDb->prepare("SELECT * FROM utilisateur WHERE email = ?");

        try {
            $request->execute(array($email));
            $user = $request->fetch(); // si $user est vide 
            if(empty($user)){
                echo "utilisateur inconnue";
            }else{ // sinon
                if(password_verify($password, $user['mdp'])){
                    //création des variables de session et redirection vers la bonne page
                    $_SESSION['prenom'] = $user['prenom'];
                    header("Location: ../accueil.php");
                }else{
                    echo "mot de passe incorrect";
                }
            }
        } catch (PDOException $e){
            echo $e->getMessage();
        }

        // exécuter la requête


        // Pour accéder à la methode connexion sans instancier la classe à laquelle il appartient. On utilise la propriété statique.
        // pour éviter de modifier le construteur
        // on ne peut pas créer l'instance car le constructeur 
        // sans constructeur on ne peut pas appeler cette methode pour cause, elle la méthode connexion ne contient pas le même nombre de paramètre que la methode constructeur.

    }   
    
}





?>