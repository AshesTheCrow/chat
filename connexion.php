<?php include_once "header.php"; ?>

<form method="POST">
<input type="text" placeholder="mail" name="mail"/>
<input type="text" placeholder="mot de passe" name="motdepasse"/>
<button name="connexion">Connexion</button>
</form>

<?php

if(isset($_POST['connexion']))
{
    $mail = $_POST["mail"];
    $motdepasse = $_POST["motdepasse"];

    $sql = "SELECT * FROM utilisateurs WHERE mail = ? AND motdepasse = ?";
    $requete = $chat->prepare($sql);
    $requete->execute(array($mail, $motdepasse));
    $user = $requete->fetch();
    // var_dump($user);
    // echo ($user);

                if($user == false)
            {
            echo "bad logins";
            }
                else 
            {
    
                $_SESSION["connecte"] = "oui";
                  header("Location: index.php");
            }
    }


?>

