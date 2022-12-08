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

    // Paramètres à utiliser pour la connexion
    // • Adresse localhost
    // • Port 1521
    // • Base de données son nom est votre identifiant de compte SEL
    // • Identifiant votre identifiant de compte SEL
    // • Mot de passe de compte SEL votre numéro étudiant

    $HOST = "localhost"; 
    $DB_NAME = "jthepault"; 
    $PASSWORD = "!Promo-2023!!";
    $USER = "adminM2";
   
    

     // On crée une connection 
    $mysqli = mysqli_connect($HOST, $USER, $PASSWORD, $DB_NAME);



    
    //On instancie l'objet PDO pour utiliser les méthodes de la classe PDO
    $db = new PDO("mysql:host=". $HOST .";dbname=" . $DB_NAME, $USER, $PASSWORD);
   
    if($mysqli) {
        echo "Connection success"; 
    } else {
        die("Error". mysqli_connect_error()); 
    } 

    //Ici on est connectés à la base

    //On peut récupérer la liste des étudiants
    //On prépare une requête sql
    $sql = "SELECT * FROM `etudiant_L3`";

    //On éxecute directement la requête
    //PDO::query — Prépare et Exécute une requête SQL
    //https://www.php.net/manual/fr/class.pdo.php
    $requete = $db->query($sql);

    //On récupère les données avec fetch 
    //https://www.php.net/manual/fr/pdostatement.fetch.php
    $user = $requete->fetch();

    //Afficher les résultats -------------------------------------------------------------------------
    //var_dump — Affiche les informations d'une variable
    echo "<pre>";
    var_dump($user);
    echo "<pre>";

    //exercice 0 : Mieux afficher les résultats



    //exercice 1 : Ajouter un utilisateur dans la BD à l'aide d'une requête préparée.



    //exercice 2 : Modifier votre age dans la BD dans la BD à l'aide d'une requête préparée.



    //exercice 3 : Supprimer un utilisateur dans la BD à l'aide d'une requête préparée.



?>
</body>
</html>