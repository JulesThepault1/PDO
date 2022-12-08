<?php
    //si le bouton "Connexion" est appuyé
    //La méthode POST, transmet les informations du form de connection
if(isset($_POST['formconnect'])) { // si le bouton "Connexion" est appuyé
    // on vérifie que le champ "Identifiant" n'est pas vide
    // empty vérifie à la fois si le champ est vide et si le champ existe belle et bien (is set)
    if(empty($_POST['nom'])) {
        echo "Le champ nom est vide.";
    } else {
        // on vérifie maintenant si le champ "Mot de passe" n'est pas vide"
        if(empty($_POST['prenom'])) {
            echo "Le champ prenom est vide.";
        } else {
            
            $nom = ($_POST['nom']); 
            $prenom = ($_POST['prenom']);

            //on vérifie si l'utilisateurs existe déjà
            if(mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM etudiant_L3 WHERE nom = '".$nom."' AND prenom = '".$prenom."'"))==0){
                echo "L'utilisateurs n'existe pas";
            } else {

            //On effectue la requête pour insérer l'étudiant
            $sql = "SELECT * FROM etudiant_L3 WHERE nom = '".$nom."' AND prenom = '".$prenom."'";
            $requete = $db->query($sql);

            // on ouvre la session avec $_SESSION:
            $_SESSION['nom'] = $nom; // la session peut être appelée différemment et son contenu aussi peut être autre chose que le pseudo
            echo "Bonjour  " . $nom ."  Vous êtes à présent connecté !";
        
            }    
        }
    }   
}
?>