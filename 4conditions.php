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
    $response = true;
    if($response) { //response est true par défaut donc pas besoin de mettre == true
      echo "Bravo";
    } else {
      echo "Pas cool";
    }
    $variable = 12;
    if($variable <= 15 ) { 
      echo "Moyen pas ouf";
    } else {
      echo "Magnifique";
    }
    // != signifie différent de
    // === vérifie le contenu et le type

    //opérateur combiné
    $a = 50;
    $b = 40;
    echo ($a <=> $b);
    // -1 si a est inférieur à b
    // 0 si a = b
    // 1 si a est plus grand que b

    //switch 
    $animal = "Chat";
    switch ($animal) {
      case "Chat":
        echo "Félin";
        break;
      case "Poisson rouge":
        echo "Poisson";
        break;
      case "Perroquet":
        echo "Oiseau";
        break;
    }
  ?>
</body>
</html>