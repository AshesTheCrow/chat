<?php
include_once "header.php";
    // // Logique d'insertion d'un message
    // $message = "Message envoyé !";
    $message = $_POST['message'];
    $sql = 'INSERT INTO messages (message) VALUES (:message)';
    try{
        $requete=$chat->prepare($sql);
        $requete->execute(array(':message' => $message));
        echo "Message envoyé";
    }
    catch(PDOException $e){
        echo("Erreur: " .$e->getMessage());
    }


?>