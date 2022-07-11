<?php
    // Logique d'insertion d'un message
    $message = "Message envoyé !";
    $message = $_GET['message'];
    echo json_encode($message);
?>