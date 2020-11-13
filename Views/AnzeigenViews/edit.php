<h1>Edit Anzeige</h1>
<br><br>
<form method='post' action='#'>

     <input type="radio" name="BieteSuche" value ="<?php if (isset($anzeigen["BieteSuche"])) echo $anzeigen["BieteSuche"];?>">
     <label for="BieteSuche">Biete</label><br>
     <input type="radio" name="BieteSuche" value ="<?php if (isset($anzeigen["BieteSuche"])) echo $anzeigen["BieteSuche"];?>">
     <label for="BieteSuche">Suche</label><br><br>
     <select name="unterrubrikenID">
  <?php
  for ($i=0; $i < count($unterrubrikenID); $i++) {
    $selected = "";
    if ($unterrubrikenID == $unterrubrikenID[$i]) {
      $selected = " selected";
    }
    echo "<option$selected>$unterrubrikenID[$i]</option>";
  }
  ?>
</select><br><br><br>

    <div class="form-group">
        <label for="Anzeigetext">Anzeigetext</label>
        <input type="text" class="form-control" id="Anzeigetext" placeholder="Geben Sie den Anzeigetext ein" name="Anzeigetext" value ="<?php if (isset($anzeigen["Anzeigetext"])) echo $anzeigen["Anzeigetext"];?>">
    </div>

    <div class="form-group">
        <label for="veröffentlichungsdatum">veröffentlichungsdatum</label>
        <input type="text" class="form-control" id="veröffentlichungsdatum" placeholder="Geben Sie das veröffentlichungsdatum ein" name="veröffentlichungsdatum" value ="<?php if (isset($anzeigen["veröffentlichungsdatum"])) echo $anzeigen["veröffentlichungsdatum"];?>">
    </div>
    
    <div class="form-group">
        <label for="KundenID">KundenID</label>
        <input type="text" class="form-control" id="KundenID" placeholder="Geben Sie die KundenID ein" name="KundenID" value ="<?php if (isset($anzeigen["KundenID"])) echo $anzeigen["KundenID"];?>">
    </div>
    
    <div class="form-group">
        <label for="Telefon">Telefon</label>
        <input type="text" class="form-control" id="Telefon" placeholder="Geben Sie die Telefonnummer ein" name="Telefon" value ="<?php if (isset($anzeigen["Telefon"])) echo $anzeigen["Telefon"];?>">
    </div>
    
    <div class="form-group">
        <label for="Preis">Preis</label>
        <input type="text" class="form-control" id="Preis" placeholder="Geben Sie den Preis ein" name="Preis" value ="<?php if (isset($anzeigen["Preis"])) echo $anzeigen["Preis"];?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>