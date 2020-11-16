<h1>Create Unterrubrik</h1>
<form method='post' action='#'>
<select name="hauptrubrikenID">
<?php
for ($i=0; $i <count($hauptrubriken); $i++) {
    $selected ="";
    echo "<option value='",$hauptrubriken[$i]["hauptrubrikenID"],"' $selected>",$hauptrubriken[$i]["hauptrubrik"],"</option>";
}
?>
</selected><br><br><br>
<div class="form-group">
        <label for="Unterrubrik">Unterrubrik</label>
        <input type="text" class="form-control" id="Unterrubrik" placeholder="Geben Sie die Unterrubrik ein" name="Unterrubrik">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br>
<div id="txtHint"></div>

<script>
function showHauptrubrik(str) {
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
  xhttp.open("GET", "/webroot/unterrubriken/creat"+str, true);
  xhttp.send();
}
</script>
