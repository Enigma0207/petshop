<!-- 
    CONSIGNES
    // creer la classe DbConnect permettant de se connecter a la base de donnees
 -->


<?php

// METHODE 1

class dbConnect{
    
    public function dbConnexion(){ 
    
        $connexionDb = null;
    
        try{ 
            $connexionDb = new PDO("mysql:host=localhost;dbname=pet_shop","root", "" ); 
            //  debug($connexionDb); die ('ok');
        }catch(PDOException $e){ // si la connexion échoue ...
            $connexionDb = $e->getMessage(); 
        }
        return $connexionDb; //retourne un objet de connexion ou une erreur
    }


}


// METHODE 2

// class DbConnect{
//     public $connexioDataBase;
    
//     public function __construct(){
//     try{
//         $this->connexioDataBase = new PDO("mysql:host=db.poo.com;dbname=hotel_db", "admin", "admin");
//     }catch(PDOException $e){
//         $this->connexioDataBase = $e->getMessage();
//     }
// }