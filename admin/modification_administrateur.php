<?php

include '../application/bdd_connection.php';
// include 'nav.phtml';

if(isset($_POST['update'])){ // On a appuyé sur Enregistré

  if(isset($_GET['idadmin'])){ // Est ce user connu

    $query =
    '
    UPDATE admin SET  nom=? , password=?
    WHERE id=?

    ';
    $resultSet = $pdo->prepare($query);
    $resultSet->execute([$_POST['nom'], $_POST['password'],$_GET['idadmin']]);

    header('Location: modification_administrateur.php?idamin='.$_GET['idadmin']);
  }
  else {
    $query =
    '
    INSERT INTO admin (id,nom,password)
    VALUES
    (default,?, ?);
    ';
    $resultSet = $pdo->prepare($query);
    $resultSet->execute([$_POST['nom'], $_POST['password']]);

    /// C'est un Ajout
    header('Location: modification_administrateur.php');

  }

// header('Location: index.php');
}
$post=[
'id' => "",
'nom'=> "",
'password'=> ""];
if(isset($_GET['idadmin'])){
  $query =
  '
  SELECT
   id,
   nom,
   password
  FROM
   admin
  WHERE
   id = ?
  ';

$resultSet = $pdo->prepare($query);
$resultSet->execute([$_GET['idadmin']]);
$post = $resultSet->fetch();



}
// ----- Liste des categories ---------------
$query =
'
 SELECT
 id,
 nom,
 password
 FROM
   admin
';

$resultSet = $pdo->query($query);     //faire une requete
$cats = $resultSet->fetchAll();     //renvoie tout dans un tableau
// ----- FIN Liste des categories ---------------

?>

<?php include '../site/header2.php' ?>
<form  method="post">
                <table>

                <!-- <fieldset class="modif"> -->
                    <tr>
                        <td>
                            <label for="titre">User :</label>
                        </td>
                        <td>
                            <input type="text" id="titre" name="user" value="<?= $post['nom'] ?>">
                        </td>
                    </tr>
                    <tr>
                      <td>
                          <label class="textarea" for="contents">Password :</label>
                        </td>
                        <td>
                          <input id="contents" name="password" row="15" value="<?= $post['password'] ?>">
                      </td>
                    </tr>
                    <tr>

                    <tr>
                      <td>
                        <a href="index.php">
                        <button  type="submit" name="update">Enregister</button></a>
                      </td>
                      <td>
                        <input type="reset" value="Annuler">
                      </td>
                    </tr>
                <!-- </fieldset> -->
              </table>
              </form>
