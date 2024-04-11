<?php
//                  1ERE PARTIE
// $nom = "roch";
// $prenom = "Guillaume";
// $age = 25;
// $nom2 = "pernin";
// $prenom2 = "Magali";
// $age2 = 36;
// function presentation($nom, $prenom, $age){
//     var_dump("Bonjour je m'appelle $nom $prenom et j'ai $age ans");
// }
// presentation($nom, $prenom, $age);
// presentation($nom2, $prenom2, $age2);

//                  2EME PARTIE
// class Employe
// {// en premier, on définit les propriétés
// public $nom;
// public $prenoms;
// public $age;

// ce n'est pas une fonction mais une methode car elle se situe dans une classe
// public function presentation()
// {
// var_dump("Bonjour je m'appelle $this->nom $this->prenoms et j'ai $this->age ans"); {
// }
// }
// }
// cette variable($employe1) est une instance, c'est un objet(new) de la "class Employe"
// $employe1 = new Employe();
// $employe1->nom = "roch";
// $employe1->prenoms = "Guillaume";
// $employe1->age = 25;
// 
// $employe2 = new Employe();
// $employe2->nom = "pernin";
// $employe2->prenoms = "Magali";
// $employe2->age = 36;
// j'appelle la methode "presentation()" de la classe Employe en passant par l'objet $employe1
// $employe1->presentation();

//                          3EME PARTIE
// class Employe
// { // en premier, on définit les propriétés
    // public $nom;
    // public $prenoms;
    // public $age;

    // public function __construct($nom, $prenoms, $age)
    // {
        // $this->nom = $nom;
        // $this->prenoms = $prenoms;
        // $this->age = $age;
        // var_dump("HELLO $this->nom $this->prenoms");
    // }

    // ce n'est pas une fonction mais une methode car elle se situe dans une classe
    // public function presentation()
    // {
        // var_dump("Bonjour je m'appelle $this->nom $this->prenoms et j'ai $this->age ans"); {
        // }
    // }
// }
// cette variable($employe1) est une instance, c'est un objet(new) de la "class Employe"
// $employe1 = new Employe("roch", "Guillaume", 25);

// $employe2 = new Employe("pernin", "Magali", 36);
// j'appelle la methode "presentation()" de la classe Employe en passant par l'objet $employe1
// $employe1->presentation();
// $employe2->presentation();

//                          4EME PARTIE
// class Employe
// {
    // public $nom;
    // public $prenoms;
    // private $age;
    // public function __construct($nom, $prenoms, $age)
    // {
        // $this->nom = $nom;
        // $this->prenoms = $prenoms;
        // $this->setAge($age);
        // var_dump("HELLO $this->nom $this->prenoms");
    // }
    // public function setAge($age) {
        // if(is_int($age) && $age >= 1 && $age <= 100){
            // $this->age = $age;
        // } else {
            // throw new Exception("L'age d'un employe doit etre comprise entre 1 et 100 !");
        // }
    // }
    // public function getAge() {
        // return $this->age;
    // }
    // 
    // public function presentation()
    // {
        // var_dump("Bonjour je m'appelle $this->nom $this->prenoms et j'ai $this->age ans"); {
        // }
    // }
// }
// $employe1 = new Employe("roch", "Guillaume", 25);
// $employe2 = new Employe("pernin", "Magali", 36);
// $employe1->setAge(54);
// $employe1->presentation();
// $employe2->presentation();

//                          5EME PARTIE
class Employe
{
    public $nom;
    public $prenoms;
    private $age;
    public function __construct($nom, $prenoms, $age)
    {
        $this->nom = $nom;
        $this->prenoms = $prenoms;
        $this->setAge($age);
        var_dump("HELLO $this->nom $this->prenoms");
    }
    public function setAge($age) {
        if(is_int($age) && $age >= 1 && $age <= 100){
            $this->age = $age;
        } else {
            throw new Exception("L'age d'un employe doit etre comprise entre 1 et 100 !");
        }
    }
    public function getAge() {
        return $this->age;
    }
    
    public function presentation()
    {
        var_dump("Bonjour je m'appelle $this->nom $this->prenoms et j'ai $this->age ans"); {
        }
    }
}
$employe1 = new Employe("roch", "Guillaume", 25);
$employe2 = new Employe("pernin", "Magali", 36);
$employe1->setAge(54);
$employe1->presentation();
$employe2->presentation();