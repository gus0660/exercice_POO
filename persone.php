<?php 
class Personne{
    public $nom;
    public $prenoms;
    public $age;

    public function presentation(){
        var_dump("Bonjour je m'appelle $this->nom $this->prenoms et j'ai $this->age ans");
    }

}