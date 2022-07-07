<?php
include_once "header.php";

// inserer les messages
if(isset($_POST['submitmsg'])){
$sql = "INSERT into messages (message, date, time) values (?, ?, ?)";
$message = $_POST['usermsg'];
$date = $_POST['dateNow()'];
$time = $_POST['timeNow()'];
$requete=$chat->prepare($sql);
    $requete->execute(array($message, $date, $time));
}





// afficher les messsages
            $sql = "select * from messages ORDER BY date desc";
            $requete = $chat->prepare($sql);
            $requete->execute();
            $messages= $requete->fetchAll();
            
            foreach($messages as $m){
                echo "<p>".$f["id"]." ".$f["message"]."</p>";
            }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>messages</title>
</head>
<body>

<div style="text-align:left;
    margin:0 auto;
    margin-bottom:25px;
    padding:10px;
    background:#fff;
    height:400px;
    width:600px;
    border:1px solid #ACD8F0;
    overflow:auto;"></div>


    <div style="width:600px; height:400px">
              <form method="POST" action="">
              <input name="usermsg" type="text" id="usermsg" size="63" />
              <input name="submitmsg" type="submit"  id="submitmsg" value="Send" />
              </form>
    </div>
</body>
</html>