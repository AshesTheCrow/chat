<?php
    include_once "header.php";
    echo(Date("Y-m-d H:i:s"));
    try {
        
        $stmt = $bdd->query("SELECT  message, time, prenom FROM messages LEFT JOIN utilisateurs ON messages.id_utilisateur = utilisateurs.id ORDER BY time ASC;");
        
        // $donnees = $stmt->fetchAll();
        while($messages = $stmt->fetch()){
            ?>
            <div class="messages">
                <p><?= $messages["prenom"]." : ".$messages["message"] ."<br> ".$messages["time"]?></p>
            </div>
    <?php
    }}
    catch (PDOException $exception) {
        die('Erreur fonction query : ' . $exception->getMessage());
    }

    
?>