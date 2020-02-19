<?php

require 'application/bdd_connection.php' ;
require 'site/header.php' ;


 


if(isset($_POST['add'])){

    $query=
'
INSERT INTO
    user
VALUES
    (DEFAULT,?,?,?,?,?,NOW())
';

$mdp= $_POST['password'];

$resultSet = $pdo->prepare($query);
$resultSet->execute([$_POST['pseudo'],$_POST['nom'],password_hash('$mdp',PASSWORD_DEFAULT),$_POST['email'],$_POST['adresse']]) ;



}


//  header('Location:login.php');

?>


<!-- if([ $_POST['nom']==$_POST['pass']])
 {
     header('Location: profile.php');
 }


else{ -->
    





<section class="register">


<!-- <div class="connection_m">
    <p> conncetion membre</p>
     <form action="" method="post">
        <div>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom"/>
        </div>

        <div>
            <label for="pass">Password</label>
            <input type="password" name="pass"/>
        </div>

        <button type="submit" name="valide" class="">Valider</button>
     <form>   

</div> -->

<div class="enregistrement">

<p>Enregister un nouveau membre</p>

    <form action="" method="POST">

        <div>
            <label for="">Pseudo</label>
            <input type="text" name="pseudo"/>
        </div>

        <div >
            <label for="">Nom</label>
            <input type="text" name="nom" class=""/>
        </div>
        <div >
            <label for="">Adresse</label>
            <input type="text" name="adresse" class=""/>
        </div>
        <div>
            <label for="">Email</label>
            <input type="text" name="email" class=""/>
        </div>

        <div >
            <label for="">Mot de passe</label>
            <input type="password" name="password" class=""/>
        </div>

        <div >
            <label for="">confirmer votre mot de passe </label>
            <input type="password" name="password_confirm" class=""/>
        </div>

        <button type="submit" name="add" class="">Valider</button>

    </form>

  </div>  

  </section>
