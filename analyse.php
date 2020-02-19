<?php
require 'site/header.php' ; 

session_start();

echo $_POST['nom'] .'<br>';
echo $_POST['adresse'] .'<br>';
echo $_POST['ville'] .'<br>';
echo $_POST['tel'] .'<br>';
echo $_POST['email'] .'<br>';
echo $_POST['chiffre'] .'<br>';
echo $_POST['salaire'] .'<br>';
echo $_POST['societe'] .'<br>';
echo $_POST['secteur'] .'<br>';
echo $_POST['Datecreation'] .'<br>';
echo $_POST['id'] .'<br>';

echo $_SESSION['user']['username'].'<br>';

?>