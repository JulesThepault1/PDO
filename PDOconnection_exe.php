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
    //On instancie PDO
    $db = new PDO("mysql:host=". HOST .";dbname=" . DB_NAME, USER, PASS);

    //On s'assurer d'envoyer les données en UTF8
    $db->exec("SET NAMES utf8");

    //vérification de la connection
    echo "On est connectés";

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Si la connection ne fonctionne pas on renvoie l'erreur
    } catch(PDOException $e){
      die("Erreur de connection:".$e->getMessage());
    }
  
    //On est connectés à la base
    //On peut récupérer la liste des étudiants
    //On prépare une requête sql
    $sql = "SELECT * FROM `etudiant_l3`";

    //On éxecute directement la requête
    $requete = $db->query($sql);

    //On récupère les données avec fetch et/ou fetchll
    //https://www.php.net/manual/fr/pdostatement.fetch.php
    $user = $requete->fetch();

    //https://www.php.net/manual/fr/class.pdostatement.php
    //$user = $requete->rowCount();

    //Afficher les résultats
    echo "<pre>";
    //https://www.php.net/manual/fr/function.var-dump.php
    var_dump($user);
    echo "<pre>";

    //exercice 1 : ajouter un utilisateur dans la BD à l'aide d'une requête



    //exercice 2 : Modifier votre age dans la BD



    //exercice 3 : supprimer un utilisateur



?>
</body>
</html>