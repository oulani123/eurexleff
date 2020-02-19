<?php
include '../application/bdd_connection.php';

// $query=
// '
// SELECT
//     id,nom,password,email
// FROM
//     admin
// ';
// $resultSet = $pdo->query($query);
// $tableau = $resultSet->fetch();



if (isset($_POST['add'])) {
$query=
'
INSERT INTO
    admin
VALUES
    (DEFAULT,?,?,?,NOW())
';

$resultSet = $pdo->prepare($query);
$resultSet->execute([$_POST['nom'],$_POST['pass'],$_POST['email']]);

// header('Location:add_produit.php?ok=1');
}else{

}
 ?>

 <?php include '../site/header2.php' ?>

 <form action="" method="post">

 <input type="text" name="nom" placeholder="Nom"><br>
 <input type="password" name="pass" placeholder="Password"><br>
 <input type="email" name="email" placeholder="Email"><br>
 <input type="submit" name="add" value="Soumettre">


 </form>