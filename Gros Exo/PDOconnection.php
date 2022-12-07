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

  //On définie des constantes d'environnement pour ce connectés à la base
  define('HOST', 'localhost');
  define('DB_NAME','pdo');
  define('USER','root');
  define('PASS','root');

  // On va se connecter à la base
  try{
    //On instancie l'objet PDO
    $db = new PDO("mysql:host=". HOST .";dbname=" . DB_NAME, USER, PASS);

    //On s'assurer d'envoyer les données en UTF8
    $db->exec("SET NAMES utf8");

    //vérification de la connection
    echo "Connection avec la base de donnée établi";

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Si la connection ne fonctionne pas on renvoie l'erreur
    } catch(PDOException $e){
      die("Erreur de connection:".$e->getMessage());
    }
?>
</body>
</html>