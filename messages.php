<?php
include_once "header.php";
    echo(Date("Y-m-d H:i:s"));
    try {
        
        $stmt = $chat->query("SELECT  message, time, prenom FROM messages LEFT JOIN utilisateurs ON messages.id_utilisateur = utilisateurs.id;ORDER BY time DESC");
        $donnees = $stmt->fetchAll();
        foreach($donnees as $d){ 
            echo "<p>"." ".$d["prenom"]." : ".$d["message"] ."<br> ".$d["time"]."</p>";                     
            }
    }
    catch (PDOException $exception) {
        die('Erreur fonction query : ' . $exception->getMessage());
    }

    
?>