
<form class="form-horizontal" role="form">
    
    <fieldset>

    <!-- Form Name -->
    <legend>Gebruikersgegevens</legend>

    <!-- Naam -->
    <div class="form-group">
        <label class="col-lg-2 control-label" for="naam">Naam</label>  
        <input id="naam" name="name" placeholder=<?php echo $name; ?> class="form-control input-md-4" type="text">
    </div>

    <!-- Email -->
    <div class="form-group">
        <label class="col-lg-2 control-label" for="email">Email adres</label>  
        <input id="email" name="email" placeholder=<?php echo $email; ?> class="form-control input-md-4" type="text">
    </div>

    <!-- Gebruikersnaam -->
    <div class="form-group">
        <label class="col-lg-2 control-label" for="gebruikersnaam">Gebruikersnaam</label>  
        <input id="gebruikersnaam" name="username" placeholder=<?php echo $username; ?> class="form-control input-md-4" type="text">
    </div>

    <!-- Wachtwoord -->
    <div class="form-group">
        <label class="col-lg-2 control-label" for="passwordinput">Wachtwoord (vereist)</label>
        <input id="passwordinput" name="password" placeholder=wachtwoord class="form-control input-md-4" type="password">
    </div>

    <!-- Update button-->
    <div class="form-group">
      <label class="col-lg-2 control-label" for="update"></label>
      <button id="singlebutton" type="submit" name="submit" value="save" class="btn btn-primary">Opslaan</button>
    </div>
    </fieldset>
</form>

      
    
