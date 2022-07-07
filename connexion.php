<?php include_once "header.php"; ?>
<?php include_once "nav.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row g-3 mt-5">
            <form method="POST">
                <input type="text" placeholder="mail" name="mail"/>
                <input type="text" placeholder="mot de passe" name="motdepasse"/>
                <button name="connexion">Connexion</button>
            </form>
        </div>
    </div>
    
</body>
</html>

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


