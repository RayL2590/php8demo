<?php

for($num = 1; $num <= 10; $num++) {
  echo "<p>$nombre</p>";
}

for($num = 100; $num <= 0; $num-= 5) {
  echo "<p>$nombre</p>";
}

$clients = [
  "ref1" => [
    "nom" => "Martin",
    "prenom" => "Hugo",
  ],
  "ref2" => [
    "nom" => "Loris",
    "prenom" => "Marin",
  ]
];

foreach ($clients as $ref => $client) {
  echo "<p>Référence client : $ref</p>";
  echo "<p>{$client["nom"]} {$client["prenom"]}</p>";
}