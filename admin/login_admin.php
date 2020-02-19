<?php
  session_start();
  include '../application/bdd_connection.php';
  include '../site/header2.php' ;
  

  if(isset($_POST['login'])){
  $query=
  '
    SELECT
      id
    FROM
      admin
    WHERE
      Nom="'.$_POST['nom'].'" AND password="'.$_POST['password'].'"

  ';
  $resultSet = $pdo->query($query);
  $user=$resultSet->fetch();

  if (isset($user['id'])){
    $_SESSION['user']=$_POST['nom'];
    header('Location: profile.php');
  }else{
       echo"<script>alert('Nom ou mot de passe incorrect');</script>";
  }
  }

  ?>


  <p class="connecter">veuillez vous connecter ci-dessous<p>


<form method="post" >
  <label for="Nom">Nom</label>
  <input type="text" id="Nom" name="nom"><br>
  <label for="password">Password</label>
  <input type="password" id="password" name="password"><br>
  <input type="submit" name="login" value="Submit"><br>
<form>  
<a href="register.php">veuillez vous enregistrer</a>

<!-- <?php include 'site/footer.php'; ?>  -->