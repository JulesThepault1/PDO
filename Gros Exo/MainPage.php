<!DOCTYPE html>
<?php include 'PDOconnection.php'; ?>
<html>
	<head>
    <title> Gros Exercices PDO + PHP </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://unpkg.com/mvp.css@1.12/mvp.css"> 
  </head>
  <body>
  <div id="">
    <div class="hautbox">
      <ul>
        <form method="post" action="">
          <table>
            <tr><td><label>Nom</label></td><td><input type="text" name="nom" id="nom" placeholder="Votre Nom" required><br/></td></tr>
            <tr><td><label>Prénom</label></td><td><input type="text" name="prenom" id="prenom" placeholder="Votre prenom" required><br/></td></tr>
            <tr><td></td><td><input type="submit" name="formconnect" id="formconnect" value="connection"><br/></td></tr>
          </table>
        </form>
      </ul>
      <?php include 'connection.php'; ?> 


    <div class="basbox">
    <ul>
      <form method="post" action="">
        <table>
          <tr><td><label>Nom</label></td><td><input type="text" name="nom" id="nom" placeholder="Votre nom" required></td></tr>
          <tr><td><label>Prenom</label></td><td><input type="text" name="prenom" id="prenom" placeholder="Votre prenom" required></td></tr>
          <tr><td><label>Numéro étudiant</label></td><td><input type="text" name="Numetu" id="Numetu"placeholder="Votre Numéro etudiant" required></td></tr>
          <tr><td><label>age</label></td><td><input type="text" name="age" id="age" placeholder="Votre age" required></td></tr>
          <tr><td><label>Groupe TP</label></td><td><input type="text" name="TP" id="TP" placeholder="Votre Groupe de TP" required></td></tr>
          <tr><td><label>sousGroupe</label></td><td><input type="text" name="sousgroupe" id="sousgroupe" placeholder="Votre sous-groupe de TP" required></td></tr>
          <tr><td></td><td><input type="submit" name="formsend" id="formsend" value="Je rentre un nouvelle étudiant !"></td></tr>
          </table>
        </form>              
    </ul>
    <?php include 'inscription.php'; ?> 
  </body>
</html>