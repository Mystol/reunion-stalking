<?php
    // Connexion à la base de donnée
    include('connect.php');
    
    // Insertion des données dans la table presence

    $requete = $bdd->prepare('INSERT INTO user VALUES(?, ?, ?, ?, ?, ?)');
    $requete->execute(array(
        $_POST['user_name'],
        $_POST['user_firstname'],
        $_POST['user_code'],
        $_POST['user_contact'],
        $_POST['user_status'],
        $_POST['user_sex']
    ));

    
    header('Location: dashboard.html');

?>