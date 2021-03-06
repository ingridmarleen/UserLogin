<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="author" content="Ingrid van den Boom">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="Display/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="Display/css/signin.css">
        
    <title>Registreren</title>        
  </head>

  <body>
      <div class="container" >
          
          <form class="form-horizontal" method="post" action="index.php">
              
            <div class="panel panel-primary">
                
                <h2 class="panel-heading">Registreren</h2>
                <p align="right"><a href="index.php"> Ik heb al een account </a></p>
                
            <div class="panel-body">
                <!--Name-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="name">Naam</label>  
                  <div class="col-md-4">
                  <input id="name" name="name" placeholder="Naam" class="form-control input-md" type="text">

                  </div>
                </div>

                <!--Email adress-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="email">Email adres</label>  
                  <div class="col-md-4">
                  <input id="email" name="email" placeholder="Email adres" class="form-control input-md" type="text">

                  </div>
                </div>

                <!--Username-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="username">Gebruikersnaam</label>  
                  <div class="col-md-4">
                  <input id="username" name="username" placeholder="Gebruikersnaam" class="form-control input-md" type="text">

                  </div>
                </div>

                <!--Password-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="password">Wachtwoord</label>
                  <div class="col-md-4">
                    <input id="password" name="password" placeholder="Wachtwoord" class="form-control input-md" type="password">

                  </div>
                </div>

                <!--Sign up or login-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="register"></label>
                  <div class="col-md-8">
                    <button type="submit" value="register" name="submit" class="btn btn-primary">Registreer</button>
                  </div>
                </div>
            </div>
            </div>
        </form>
    </div>

      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="Display/js/bootstrap.min.js"></script>
  </body>
</html>
