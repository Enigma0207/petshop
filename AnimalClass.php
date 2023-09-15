<?php
require_once "inc/database.php";
// Créer la classe utilisateur avec les proprietes:
class Animal{

    private $id_animal;
    private $name;
    private $type;
    private $breed;

    public function __construct($name,$type,$breed){
        $this->name = $name;
        $this->type = $type;
        $this->breed = $breed;
    }
    
    public function getId() {
        return $this->id_animal;
    }

    public function getName() {
        return $this->name;
    }
 
    public function setName($name): self {
        $this->name = $name;
        return $this;
    }
 
    public function getType() {
        return $this->type;
    }
    
    public function setType($type): self {
        $this->type = $type;
        return $this;
    }
    
 
    public function getBreed() {
        return $this->breed;
    }
    
 
    public function setBreed($breed): self {
        $this->breed = $breed;
        return $this;
    }
    
}





?>