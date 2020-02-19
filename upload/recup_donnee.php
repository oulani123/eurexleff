<?php

var_dump([$_FILES]);

$cheminetnomtemporaire = $_FILES['fichier']['tmp_name'];
$cheminetnomdefinitif = '../upload/'.$_FILES['fichier']['name'];

$moveisok = move_uploaded_file($cheminetnomtemporaire, $cheminetnomdefinitif);

if ($moveisok){

    $message = "le fichier a été uploadé dans".$cheminetnomdefinitif;
}else {
    $message = "suite à une erreur , le fichier n'a pas été uploadé" ;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Traitement upload</title>
</head>
<body>
    <h1>Upload</h1>

    <p><?= $message ?></p>
</body>
</html>