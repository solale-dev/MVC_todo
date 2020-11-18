<h1>Create Anzeige</h1>
<form method='post' action='#'>
    <div class="form-group">
    <input type="radio" name="BieteSuche" value ="Biete">
     <label for="BieteSuche">Biete</label><br>
     <input type="radio" name="BieteSuche" value ="Suche">
     <label for="BieteSuche">Suche</label><br><br>
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
        <input type="text" class="form-control" id="Anzeigetext" placeholder="Geben Sie den Anzeigetext ein" name="Anzeigetext">
    </div>

    <div class="form-group">
        <label for="veroeffentlichungsdatum">veröffentlichungsdatum</label>
        <input type="date" class="form-control" id="veroeffentlichungsdatum" placeholder="Geben Sie das veröffentlichungsdatum ein" name="veroeffentlichungsdatum">
    </div>

    <div class="form-group">
        <label for="KundenID">KundenID</label>
        <input type="text" class="form-control" id="KundenID" placeholder="Geben Sie die KundenID ein" name="KundenID">
    </div>

    <div class="form-group">
        <label for="Telefon">Telefon</label>
        <input type="text" class="form-control" id="Telefon" placeholder="Geben Sie die Telefonnummer ein" name="Telefon">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
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
  xhttp.open("GET", "/webroot/anzeigen/create"+str, true);
  xhttp.send();
}
</script>
