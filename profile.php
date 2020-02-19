<?php 
session_start() ;

include 'site/header.php' ;
include 'application/bdd_connection.php' ;

if ( isset($_SESSION['iduser']))  {
            $req =
         '
         SELECT
          nom
         FROM
           user
         WHERE id = ?
       ';
        $resultSet = $pdo ->prepare($req);
        $resultSet->execute([$_SESSION['iduser']]);
        $post = $resultSet ->fetch();
        var_dump($post);

      
}


echo "Bienvenue sur ton profile".' '.$_SESSION['user'] ?><br>
<a class="deconnex" href="deconnexion.php">Deconnexion</a>

<h3 class="statut">Statut de votre dossier</h3>

<table class="table">
  <tr>
    <th>
      Projet receptionné
    </th>
    <th>
      Projet soumis à l'etude
    </th>
    <th>
      Projet validé ou refusé
    </th>
  </tr>
  <tr>
    <td>Completer le dossier</td>
    <td>Reponse sous 24h</td>
    <td>Reponse pour projet</td>
  </tr>
</table>

<?php include 'site/footer.php' ?>