<?php
include '../application/bdd_connection.php';

$query =
'
SELECT *
FROM
admin

';


$resultSet = $pdo->query($query);
$posts = $resultSet->fetchAll();



if (isset($_GET['del'])) {
  $query= '
  DELETE FROM
          admin
  WHERE
          id=?

  ';
  $resultSet = $pdo->prepare($query);
  $resultSet->execute([$_GET['del']]);

  header('Location:gestion_administrateur.php');
}


 ?>

 <?php include '../site/header2.php' ; ?>


<!-- <form action="" method="post">

 <input type="text" name="nom" placeholder="Nom"><br>
 <input type="password" name="pass" placeholder="Password"><br>
 <input type="email" name="email" placeholder="Email"><br>
 <input type="submit" name="add" value="Soumettre">


 </form> -->

 <form method="post" action="gestion_admin.php">
              <table>
                <thead>
                <tr>
                  <th>Noms</th>
                 <th>Modifier vos accès</th>

                </tr>
                </thead>
                <tbody>
                    <?php foreach ($posts as $post): ?>
<tr>

              <td><?= $post['nom'] ?></td>
              <td>
                <a  href="modification_administrateur.php?idadmin=<?= $post['id']?>" ><i class="fa fa-edit"></i></a>
                <a  href="gestion_admin.php?del=<?= $post['id']?>"  onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>
              </td>

</tr>
<?php endforeach; ?>
               </tbody>
             </table>
           </form>