<?php 
session_start() ;

include '../site/header2.php' ;
include '../application/bdd_connection.php' ;

if ( isset($_SESSION['idmembre']))  {
            $req =
         '
         SELECT
          nom
         FROM
           user
         WHERE id = ?
       ';
        $resultSet = $pdo ->prepare($req);
        $resultSet->execute([$_SESSION['idmembre']]);
        $post = $resultSet ->fetch();

      
}


echo "Bienvenue sur ton profile".' '.$_SESSION['user'] ?><br>
<a href="deconnexion.php">Deconnexion</a>