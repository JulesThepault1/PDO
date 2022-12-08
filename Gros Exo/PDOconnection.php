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
?>
</body>
</html>