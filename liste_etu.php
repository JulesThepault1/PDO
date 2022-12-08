<h1> Liste des étudiants </h1>
    <?php foreach ($user as $value):?>
      <table class="tab-style">
        <tbody>
          <tr>
            <td><?php echo " nom: " ?></td>
            <td><?php echo  $value['nom']?></td>
          </tr>
          <tr>
            <td><?php echo " prenom: " ?></td>
            <td><?php echo  $value['prenom']?></td>
          </tr>
          <tr>
            <td><?php echo " age: " ?></td>
            <td><?php echo  $value['age']?></td>
          </tr>
          <tr>
            <td><?php echo " Numéro étudiant: " ?></td>
            <td><?php echo  $value['Numetu']?></td>
          </tr>
        </tbody>
      </table>
    <?php endforeach; ?>

    