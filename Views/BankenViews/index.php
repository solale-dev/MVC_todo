<h1>Banken</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="/webroot/banken/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new Bank</a><br>
        <tr>
   <!-- <p><span id="txtHint"></span></p>-->
    <form method="post" action = "/webroot/banken/index">
    <p>Bank Filter: <input type="text" name="bezeichnung" id="bezeichnung" onkeup="showHint(this.value)">
    <input type="submit" value="go" name="go"></p>
    </form>
   <!-- <script>
function showHint(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "/webroot/banken/index/"+str, true);
  xhttp.send();   
}
</script>-->
            <th>Bankleitzahl</th>
            <th>Bezeichnung</th>
            <th>PLZ</th>
            <th>Ort</th>
            <th>Kurzbezeichnung</th>
            <th>BIC</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($banken as $bank)
        {
            echo '<tr>';
            echo "<td>" . $bank['Bankleitzahl'] . "</td>";
            echo "<td>" . $bank['Bezeichnung'] . "</td>";
            echo "<td>" . $bank['PLZ'] . "</td>";
            echo "<td>" . $bank['Ort'] . "</td>";
            echo "<td>" . $bank['Kurzbezeichnung'] . "</td>";
            echo "<td>" . $bank['BIC'] . "</td>";
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/webroot/banken/edit/" . $bank["bankenID"] . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='/webroot/banken/delete/" . $bank["bankenID"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
            echo "</tr>\n";
        }
        ?>
        </tbody>
    </table>
</div>