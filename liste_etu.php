<h1> Liste des étudiants </h1>
    <?php foreach ($user as $user):?>
      <table class="tab-style">
        <tbody>
          <tr>
            <td><?php echo " nom: " ?></td>
            <td><?php echo  $user['nom']?></td>
          </tr>
          <tr>
            <td><?php echo " prenom: " ?></td>
            <td><?php echo  $user['prenom']?></td>
          </tr>
          <tr>
            <td><?php echo " age: " ?></td>
            <td><?php echo  $user['age']?></td>
          </tr>
          <tr>
            <td><?php echo " Numéro étudiant: " ?></td>
            <td><?php echo  $user['Numetu']?></td>
          </tr>
          <tr>
            <td><?php echo " groupe de TP: " ?></td>
            <td><?php echo  $user['TP']?></td>
          </tr>
        </tbody>
      </table>
    <?php endforeach; ?>