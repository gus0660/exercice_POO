<?php

class employé
{
    public $nom;
    public $prenoms;
    public $age;
    public function presentation($nom, $prenoms, $age)
    {
        var_dump("Bonjour je m'appelle $nom $prenoms et j'ai $age ans"); {
        }
    }
}
// $nom = "roch";
// $prenom = "Guillaume";
// $age = 25;
// $nom2 = "pernin";
// $prenom2 = "Magali";
// $age2 = 36;
// function presentation($nom, $prenom, $age){
//     var_dump("Bonjour je m'appelle $nom $prenom et j'ai $age ans");
// }
presentation($nom, $prenom, $age);
presentation($nom2, $prenom2, $age2);
