<h1>Edit Unterrubrik</h1>
<br><br>
<form method='post' action='#'>
<select name="unterrubriken" onchange="showUnterrubrik(this.value)">
<?php
  for ($i=0; $i < count($Unterrubrik); $i++) {
    $selected = "";
    if ($unterrubriken == $Unterrubrik[$i]) {
      $selected = " selected";
    }
    echo "<option$selected>$Unterrubrik[$i]</option>";
  }
  ?>
</select><br><br><br>
</form>
<br>
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
  xhttp.open("GET", "/webroot/unterrubriken/edit"+str, true);
  xhttp.send();
}
</script>


    <div class="form-group">
        <label for="Unterrubrik">Neue Unterrubrik</label>
        <input type="text" class="form-control" id="Unterrubrik" placeholder="Geben Sie die Unterrubrik ein" name="Unterrubrik" value ="<?php if (isset($unterrubriken["Unterrubrik"])) echo $unterrubriken["Unterrubrik"];?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>