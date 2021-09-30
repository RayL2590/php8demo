<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

  /**
   * Permet de calculer la somme de deux valeurs
   *
   * @param float $num1
   * @param float $num2
   * @return void
   */
  function additionner($num1, $num2) {
    return $num1 + $num2;
  }
  $total = additionner(12, 51);
  function saluer($salutation = "Hello", $nom, $civilite = ""){
    echo "$salutation $civilite $nom";
  }
  echo saluer('Coucou', "Monsieur", 'Zemmour');
  ?>
</body>
</html>