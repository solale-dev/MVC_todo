<h1>Login</h1>
<?php
  if (!empty($Fehler) || !empty($SQLFehler)) {
      echo $Fehler, $SQLFehler;
  }
?>
<form method='post' action='#'> 

<div class="form-group">
        <label for="Anmeldename">Anmeldename</label>
        <input type="text" class="form-control" id="Anmeldename" name="Anmeldename" value ="">
    </div>

    <div class="form-group">
        <label for="Password">Passwort</label>
        <input type="password" class="form-control" id="Password" placeholder="Geben Sie das Password ein" name="Password" value ="">
    </div>

    <button name="aktion" id="aktion" type="submit" class="btn btn-primary">Submit</button>
</form>