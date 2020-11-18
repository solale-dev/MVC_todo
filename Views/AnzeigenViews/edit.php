<h1>Edit Anzeige</h1>
<br><br>
<form method='post' action='#'>

<div class="form-group">
<label for="BieteSuche">Biete</label><br>
    <input type="radio" class="form-control" id="BieteSuche" name="BieteSuche"  value ="Biete"  <?php if ($anzeigen["BieteSuche"] == "Biete") echo "checked";?>>
    <label for="BieteSuche">Suche</label><br>
    <input type="radio" class="form-control" id="BieteSuche" name="BieteSuche"  value ="Suche" <?php if ($anzeigen["BieteSuche"] == "Suche") echo "checked";?>>
    </div>
        <select name="unterrubrikenID">
<?php
for ($i=0; $i <count($unterrubriken); $i++) {
    $selected ="";
    echo "<option value='",$unterrubriken[$i]["unterrubrikenID"],"' $selected>",$unterrubriken[$i]["Unterrubrik"],"</option>";
}
?>
</selected><br><br><br>

    <div class="form-group">
        <label for="Anzeigetext">Anzeigetext</label>
        <input type="text" class="form-control" id="Anzeigetext" placeholder="Geben Sie den Anzeigetext ein" name="Anzeigetext" value ="<?php if (isset($anzeigen["Anzeigetext"])) echo $anzeigen["Anzeigetext"];?>">
    </div>

    <div class="form-group">
        <label for="veroeffentlichungsdatum">veröffentlichungsdatum</label>
        <input type="text" class="form-control" id="veroeffentlichungsdatum" placeholder="Geben Sie das veröffentlichungsdatum ein" name="veroeffentlichungsdatum" value ="<?php if (isset($anzeigen["veroeffentlichungsdatum"])) echo $anzeigen["veroeffentlichungsdatum"];?>">
    </div>
    
    <div class="form-group">
        <label for="KundenID">KundenID</label>
        <input type="text" class="form-control" id="KundenID" placeholder="Geben Sie die KundenID ein" name="KundenID" value ="<?php if (isset($anzeigen["KundenID"])) echo $anzeigen["KundenID"];?>">
    </div>
    
    <div class="form-group">
        <label for="Telefon">Telefon</label>
        <input type="text" class="form-control" id="Telefon" placeholder="Geben Sie die Telefonnummer ein" name="Telefon" value ="<?php if (isset($anzeigen["Telefon"])) echo $anzeigen["Telefon"];?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br><br><br>

<div id="txtHint"></div>

<script>
function showUnterrubrik(str) {
    var xhttp;  
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "/webroot/anzeigen/edit"+str, true);
  xhttp.send();
}
</script>
