<?php

class Employe
{
    public $nom;
    public $prenoms;
    public $age;

    // ce n'est pas une fonction mais une methode
    public function presentation($nom, $prenoms, $age)
    {
        var_dump("Bonjour je m'appelle $nom $prenoms et j'ai $age ans"); {
        }
    }
}
// cette variable($employe1) est une instance, c'est un objet(new) de la "class Employe"
$employe1 = new Employe();
$employe1->nom = "roch";
$employe1->prenoms = "Guillaume";
$employe1->age = 25;

$employe2 = new Employe();
$employe2->nom = "pernin";
$employe2->prenoms = "Magali";
$employe2->age = 36;

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
$employe1->presentation($employe1->nom, $employe1->prenoms, $employe1->age);