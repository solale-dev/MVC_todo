<h1>Passwordänderung</h1>
<?php
  if (!empty($Fehler) || !empty($SQLFehler)) {
      echo $Fehler, $SQLFehler;
  }
?>
<form method='post' action='#'> 

<div class="form-group">
        <label for="Anmrldename">Anmeldename</label>
        <input type="text" readonly class="form-control" id="Anmeldename" name="Anmeldename" value ="<?php echo $anmeldungen["Anmeldename"];?>">
    </div>

    <div class="form-group">
        <label for="Password">altesPassword</label>
        <input type="password" class="form-control" id="alt" placeholder="Geben Sie das altesPassword ein" name="alt" value ="">
    </div>

    <div class="form-group">
        <label for="neu">neuesPassword</label>
        <input type="password" class="form-control" id="neu" placeholder="Geben Sie das neuesPassword ein" name="neu" value ="">
    </div>

    <div class="form-group">
        <label for="wiederholt">wiederholtesPassword</label>
        <input type="password" class="form-control" id="wiederholt" placeholder="Geben Sie das wiederholtesPassword ein" name="wiederholt" value ="">
    </div>
    <button name="aktion" id="aktion" type="submit" class="btn btn-primary">Submit</button>
</form>