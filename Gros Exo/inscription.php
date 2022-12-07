
<?php

if(isset($_POST['formsend'])) {


    //La méthode POST, quant à elle, transmet les informations 
    //du formulaire d'inscription 
    //htmlspecialchars — Convertit les caractères spéciaux en entités HTML
    //çela améliore la sécurité pour éviter les injections de code SQL dans la table
    //On récupère les valeurs du formulaire d'inscription
    $nom = htmlspecialchars($_POST['nom']);//nom
    $prenom = htmlspecialchars($_POST['prenom']);//prenom
    $Numetu = htmlspecialchars($_POST['Numetu']);//Num etudiant
    $age = htmlspecialchars($_POST['age']);//age
    $TP = htmlspecialchars($_POST['TP']);//groupe TP
    $sousgroupe = htmlspecialchars($_POST['sousgroupe']);//Sousgroupe

    //extract — Importe les variables dans la table des symboles
    extract($_POST);

    //Je prépare ensuite une requête SQL pour insérer un étudiant
    //dans la table avec les valeurs récupérer depuis le formulaire
    //c'est à dire ($nom,$prenom,$Numetu,$age,$TP,$sousgroupe)
    // Voir exercie n°1 de PDOconnection_exe.php

    //PDOStatement qui Prépare une requête à l'exécution et retourne un objet
    $q = $db->prepare("INSERT INTO `etudiant_l3`(`Numetu`, `TP`, `sousgroupe`, `nom`, `prenom`, `age`) 
    VALUES(:Numetu,:TP,:sousgroupe,:nom,:prenom,:age)");
    
    
    //On execute la requête préparer précedement     
    $q->execute([
        'nom'=> $nom,
        'prenom'=> $prenom,
        'Numetu'=> $Numetu,
        'age'=> $age,
        'TP'=> $TP,
        'sousgroupe'=> $sousgroupe,
        ]); echo "le compte a été crée ";}

    //Vérifier si l'étudiant existe déja dans la base
    //alors le compte n'a pas été crée (à faire ?)
?>
