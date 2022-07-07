<?php
include_once('header.php');


if(isset($_POST['inscription'])){
    $sql="INSERT INTO utilisateurs (prenom, nom, pseudo, mail, motdepasse) VALUES (:prenom, :nom, :pseudo, :mail, :motdepasse)";
    $requete=$chat->prepare($sql);
    $requete->execute(array(
        ':prenom' => $_POST['prenom'],
        ':nom' => $_POST['nom'],
        ':pseudo' => $_POST['pseudo'],
        ':mail' => $_POST['mail'],
        ':motdepasse' => $_POST['motdepasse']
    )
    );
    header("Location: connexion.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription au chat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<style>
    *{
        box-sizing:border-box;
    }
    body{
        padding:0;
        margin:0;
    }
    .centre{
        
        margin: 15% auto;
    }

</style>
<body>
    <?php
    include_once "nav.php";
    ?>
    <div class="container centre">
    <form method="POST">
        <div class="row g-2">
            <div class="col-md-4">
                <input type="text" name="prenom" class="form-control" id="inputPrenom" placeholder="prenom">
            </div>
            <div class="col-md-4">
                <input type="text" name="nom" class="form-control" id="inputNom" placeholder="nom">
            </div>
            <div class="col-md-4">
                <input type="text" name="pseudo" class="form-control" id="inputPseudo" placeholder="pseudo">
            </div>
        </div>
        <div class="row g-2 mt-3">
            <div class="col-md-6">
                <input type="email" name="mail" class="form-control" id="inputEmail" placeholder="mail">
            </div>
            <div class="col-md-4">
                <input type="password" name="motdepasse" class="form-control" id="inputPassword" placeholder="password">
            </div>
            <div class="col-md-2">
                <button type="submit" name="inscription" class="btn btn-primary">S'inscrire</button>
            </div>
        </div>
    </form>
    </div>
</body>
</html>