
<?php

if(isset($_POST['formsend'])) {

    //La méthode POST, transmet les informations du formulaire d'inscription 
    //On récupère les valeurs du formulaire d'inscription

    $nom = ($_POST['nom']);//nom
    $prenom = ($_POST['prenom']);//prenom
    $Numetu = ($_POST['Numetu']);//Num etudiant
    $age = ($_POST['age']);//age
    $TP = ($_POST['TP']);//groupe TP
    $sousgroupe = ($_POST['sousgroupe']);//Sousgroupe

    //on vérifie que ce pseudo n'est pas déjà utilisé par un autre membre
    if(mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM etudiant_L3 WHERE nom = '".$nom."' AND prenom = '".$prenom."'"))==0){
        $sql = "INSERT INTO `etudiant_L3`(`Numetu`, `TP`, `sousgroupe`, `nom`, `prenom`, `age`) VALUES ('$Numetu','$TP','$sousgroupe','$nom','$prenom','$age')";
        $requete = $db->query($sql);
        echo "le compte de  " . $nom . "a bien été crée ";
    } else {
        echo "Erreur cette utilisateurs existe déjà .";
    }
}
?>
