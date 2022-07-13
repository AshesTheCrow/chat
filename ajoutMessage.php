<?php
    include_once "header.php";
    // // Logique d'insertion d'un message
    // $message = "Message envoyé !";
    $message = $_POST['usermsg'];


    $sql = 'INSERT INTO messages (id_utilisateur, message) VALUES (:id_utilisateur, :message)';

    try {
        $requete = $bdd->prepare($sql);
        $requete->execute(array(':id_utilisateur' => 1, ':message' => $message));
        echo "Message envoyé";
    } catch(PDOException $e) {
        echo("Erreur: " .$e->getMessage());
    }


?>