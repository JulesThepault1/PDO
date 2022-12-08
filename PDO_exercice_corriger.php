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
   
    try{
        // On crée une connection 
        $mysqli = mysqli_connect($HOST, $USER, $PASSWORD, $DB_NAME);

        //On instancie l'objet PDO pour utiliser les méthodes de la classe PDO
        $db = new PDO("mysql:host=". $HOST .";dbname=" . $DB_NAME, $USER, $PASSWORD);
        
        //vérification de la connection
        echo "Connection avec la base de donnée établi";
    
        //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //Si la connection ne fonctionne pas on renvoie l'erreur
        } catch(PDOException $e){
          die("Erreur de connection:".$e->getMessage());
        }

    
    //Ici on est connectés à la base

    //On est connectés à la base
    //On peut récupérer la liste des étudiants
    //On prépare une requête sql
    $sql = "SELECT * FROM `etudiant_L3`";

    //On éxecute directement la requête
    //https://www.php.net/manual/fr/class.pdo.php
    $requete = $db->query($sql);

    //On récupère les données avec fetch 
    //https://www.php.net/manual/fr/pdostatement.fetch.php
    $user = $requete->fetchAll();

    //Afficher les résultats -------------------------------------------------------------------------
    //var_dump — Affiche les informations d'une variable
    // echo "<pre>";
    // var_dump($user);
    // echo "<pre>";

    //exercice 0 : Mieux afficher les résultats

    include"liste_etu.php";

    //exercice 1 : Ajouter un utilisateur dans la BD à l'aide d'une requête préparée.

    // $sql = "INSERT INTO `etudiant_L3`(`Numetu`, `TP`, `sousgroupe`, `nom`, `prenom`, `age`)
    // VALUES (2155,1,1,'Toto','Titi',12)";
    // $requete = $db->query($sql);

    //exercice 2 : Modifier votre age dans la BD dans la BD à l'aide d'une requête préparée.

    // $sql = "UPDATE `etudiant_L3` SET `age`=18 WHERE `nom`='Toto';";
    // $requete = $db->query($sql);

    //exercice 3 : Supprimer un utilisateur dans la BD à l'aide d'une requête préparée.

    // $sql = "DELETE FROM `etudiant_L3` WHERE `nom`='Toto';";
    // $requete = $db->query($sql);

?>
</body>
</html>