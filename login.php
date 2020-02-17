<?php
  session_start();
  include 'application/bdd_connection.php';
  include 'site/header.php' ;

  

 $mdp= $_POST['password'];
 $mdp2=password_hash('$mdp',PASSWORD_DEFAULT);



  

  if(isset($_POST['login'])){
  $query=
  '
    SELECT
      id
    FROM
      user
    WHERE
      pseudo="'.$_POST['pseudo'].'" AND password="'.$_POST['password'].'"

  ';
  $resultSet = $pdo->query($query);
  $user=$resultSet->fetch();

  if (isset($user['id'])){
    $_SESSION['user']=$_POST['pseudo'] ;
    header('Location: profile.php');
  }else{
       echo"<script>alert('pseudo ou mot de passe incorrect');</script>";
  }
}



  ?>
  <H4><?php echo $_SESSION['user'] ?></H4>

  <p class="connecter">veuillez vous connecter ci-dessous<p>


<form method="POST" >
  <label for="pseudo">pseudo</label>
  <input type="text" id="pseudo" name="pseudo"><br>
  <label for="password">password</label>
  <input type="password" id="pass" name="password"><br>
  <input type="submit" name="login" value="Valider"><br>
<form>  
<p><a class="log" href="register.php" >Enregistrement</a></p>

<?php include 'site/footer.php'; ?> 