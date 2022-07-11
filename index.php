<?php include_once "header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include_once "nav.php"; ?>

<div class="container">

    <h1 class="text-center">Bienvenue sur le chat</h1>


    <div class="centrale">

        <div id="chatbox" class="mt-5" style="text-align:left;
            margin:0 auto;
            margin-bottom:25px;
            padding:10px;
            background:#fff;
            height:400px;
            width:600px;
            border:1px solid #ACD8F0;
            overflow-x:hidden;
            overflow-y:scroll;">
        </div>
            

        <div  style="width:600px; margin-left:48px;">
            <!-- <form name="message" action=""> -->
            <input name="usermsg" type="text" id="usermsg" size="63" />
            <input name="submitmsg" type="button"  id="submitmsg" value="Envoyer" />
            <!-- </form> -->
        </div>
    </div> 
</div>

  <script>

    document.querySelector('#submitmsg').addEventListener('click', function(e) {
        e.preventDefault();
        const message = document.querySelector('#usermsg').value;
        const options = {
            method: 'POST',
            // ?? FormData ?? 
            body: JSON.stringify({
                message: message
            })
        };
        fetch('ajoutMessage.php', options)
            .then(response => response.json())
            .then(data => {
                console.log(data);
                document.querySelector('#chatbox').innerHTML = data.chat;
            });
        
    });


    setInterval(function(){
      fetch('messages.php')
      .then(response => response.text())
      .then(data => {
        document.querySelector('#chatbox').innerHTML = data;
      })
    }, 1000);

  </script>

</body>
</html>