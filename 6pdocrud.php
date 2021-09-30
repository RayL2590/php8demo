<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD PDO ETC</title>
</head>
<body>
  <?php 
    //Constantes d'environnement
    define("DBHOST", "localhost");
    define("DBUSER", "root");
    define("DBPASS", "01129210");
    define("DBNAME", "tutophp8");

    // DSN de connexion
    $dsn = "mysql:dbname=".DBNAME.";host=".DBHOST;

    //connexion
    try {
      //instanciation de PDO
      $db = new PDO($dsn, DBUSER, DBPASS);
      //on s'assure d'envoyer en utf8
      $db->exec("SET NAMES utf8");
      //on définit le mode de "fetch" par défaut
      $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      
    } catch(PDOException $e) {
      die("Error: ".$e->getMessage());
    }

    //récuparation de la liste des users
    $sql = "SELECT * FROM `users`";
    //on execute la requete
    $requete = $db->query($sql);

    //on récupère les données(fetch ou fetchAll)
    $user = $requete->fetchAll();
    echo "<pre>";
    var_dump($user);
    echo "</pre>";

    //ajouter un user
    $sqladd = "INSERT INTO `users`(`email`, `password`, `roles`) VALUES ('demo2@gmail.com', 'osef', '[\"ROLE_USER\"]')";
    $requete = $db->query($sqladd);

    //modifier un user
    $sqlupdate = "UPDATE `users` SET `password` = 'wooow' WHERE `id` = 3";
    $requete = $db->query($sqlupdate);

    //delete un user
    $sqldelete = "DELETE FROM `users` WHERE `id` > 3";
    $requete = $db->query($sqldelete);

    //savoir combien de lignes ont été supprimées
    echo $requete->rowCount();

  ?>
</body>
</html>