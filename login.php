<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="author" content="Ingrid van den Boom">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/signin.css">
        
    <title>Login</title>        
  </head>

  <body>
      <div class="container" >
          
          <form class="form-signin" method="post" action="index.php">
              
            <div class="panel panel-primary">
                
                <h2 class="panel-heading">Database login</h2>
                
            <div class="panel-body">
                
                <label for="username" class="sr-only">Gebruikersnaam</label>
                <input type="username" id="username" class="form-control" placeholder="Gebruikersnaam">
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="password" class="form-control" placeholder="Wachtwoord">
                
                <div class="form-group">
                    <button type="submit" value="login" name="login" class="btn btn-primary">Login</button>
                    <button type="submit" value="register" name="register" class="btn btn-default">Registreer</button>
                </div>
                
            </div>
            </div>
          </form>
      </div>

      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
