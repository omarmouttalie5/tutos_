<?php


// testing the class

require_once "Categorie.php";


$categorie1 = new Categorie(3, "UI/UX", "Blue", "XS");
$categorie2 = new Categorie(3, "Functional programming", "Red", "XO");

$categorie1->afficher();
$categorie2->afficher();