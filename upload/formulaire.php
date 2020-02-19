<?php
include '../application/bdd_connection.php';



if (isset($_POST['add'])) {
$query=
'
INSERT INTO
    analyse
VALUES
    (DEFAULT,?,?,?,?,?,?,?,?,?,?)
';

$resultSet = $pdo->prepare($query);
$resultSet->execute([$_POST['nom'],$_POST['societe'],
$_POST['adresse'],$_POST['telephone'],
$_POST['email'],$_POST['activite'],$_POST['creation_societe'],
$_POST['nombre_sa'],$_POST['chiffre'],
$_POST['resume']]) ;

// header('Location:add_produit.php?ok=1');
}

 ?>


<?php include '../site/header2.php' ; ?>

    <main>
        <h1 class="formu">Demande d'analyse projet</h1>
        <form  method="post">
            <label for="civilite">Civilité :</label>
            <select name="civilite" id="civilite">
                <option value="madame">Madame</option>
                <option value="mademoiselle">Mademoiselle</option>
                <option value="monsieur">Monsieur</option>   
            </select><br>    

            <label for="nom">Nom :</label>
            <input type="text" size="30" name="nom" id="nom" value=""><br>

            <!-- <label for="prenom">Prenom :</label>
            <input type="text" name="prenom" size="30" id="id" value=""></br> -->

            <label for="societe">Nom de la société :</label>
            <input type="text" size="30" name="societe" id="societe" value=""><br>

            <label for="adresse">Adresse :</label>
            <input type="text" size="30" name="adresse" id="adresse" value=""><br>

            <label for="telelephone">Telephone:</label>
            <input type="tel" size="30" name="telephone" id="" value=""><br>

            <label for="email">Email:</label>
            <input type="email" size="30" name="email" id="email" value=""><br>

            



            <!-- <h2 class="type">Type d'operation envisagée</h2>

            <label for="fonds">Levee de fonds</label><input type="checkbox" name="fonds" id="fonds"/><br/>
            <label for="cession">Acquisition/cession</label><input type="checkbox" name="cession" id="cession"/><br/> -->

            <h2 class="type">Votre société</h2>

            <label for="secteur">Secteur d'activité :</label>
            <input type="text" name="activite" id="secteur" value=""><br>
            <label for="Datecreation">Date de la creation de la société:</label>
            <input type="text" name="creation_societe" id="Datecreation" value=""><br>
            <label for="salaire">Nombre de salarié :</label>
            <input type="text" name="nombre_sa" id="salaire" value=""><br>
            <label for="chiffre">Dernier chiffre d'affaire connu :</label>
            <input type="text" name="chiffre" id="chiffre" value=""><br>
            <label for="activite">Résumé général de votre activité et des motifs de l'opération envisagée :</label><br>
            <textarea name="resume"  rows="10" cols="100" id="activite"></textarea><br>
          
            <input  type="submit" name="add" value="Envoyer" />

        </form>
        
        <p><a class="log" href="../dossier.php">Veuillez telecharger les differents documents relatifs à votre demande</a></p>
        
    </main>



  <?php include '../site/footer.php' ?>