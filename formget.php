<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="get">
    <div>
      <label for="number1">
        Nombre 1:
      </label>
      <input type="number" id="number1" name="nb1">
      <label for="number2">
        Nombre 2:
      </label>
      <input type="number" id="number2" name="nb2">
      <button type="submit" name="">Calculer</button>
    </div>
  </form>
  <?php 
  //http://localhost/tutorielphpgraphikart/formget.php?nb1=1&nb2=2
  //echo "<pre>";
  $total = $_GET["nb1"] + $_GET["nb2"];
  echo "<p>total : $total</p>";
  //echo "</pre>";
  ?>
</body>
</html>