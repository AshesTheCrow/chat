<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
</head>
<body>
    <h1>Chat</h1>

    <div id="wrapper">
        <div id="menu">
              <p class="welcome">Welcome, <b></b></p>
              <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
              <div style="clear:both"></div>
          </div>
           
          <div id="chatbox"></div>
           
          <form name="message" action="">
              <input name="usermsg" type="text" id="usermsg" size="63" />
              <input name="submitmsg" type="submit"  id="submitmsg" value="Send" />
          </form>
      </div>
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
      <script type="text/javascript">
      // jQuery Document
      $(document).ready(function(){
       
      });
      </script>
      </body>
      </html>


</body>
</html>