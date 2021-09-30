<?php
$tableau = ["Bonjour", 15, true, 15.14];
//ajouter à la fin avec push
array_push($tableau, "Choubidou", "blabla", 14, "etc.");
//pour ajouter un seul élément =
$tableau[] = "juste à la fin";
//ajouter au début
array_unshift($tableau, "Début");
//suprimer des valeurs
// à la fin 
array_pop($tableau); //on peut la stocker dans une variable evidemment
//au début 
array_shift($tableau);

//diviser tableau en plusieurs parties
//pour diviser en parties de deux valeurs = $tableau2 = array_chunk($tableau, 2, true);
//mélanger un tableau aléatoirement shuffle($tableau);

$tableauAssoc = [
  "Nom" => "Martin",
  "Prenom" => "Hugo",
  "Age" => 15
];

$tableauMultiDim = [
  0 => [
    "Nom" => "Martin",
    "Prenom" => "Hugo",
    "Age" => 15
  ],
  1 => [
    "Nom" => "Osef",
    "Prenom" => "Inho",
    "Age" => 10
  ],
  2 => [
    "Nom" => "Souley",
    "Prenom" => "Paci",
    "Age" => 14
  ],
];
