<h1>Edit Kunde</h1>
<form method='post' action='#'>
   
<input type="radio" name="Anrede" value ="<?php if (isset($kunden["Anrede"])) echo $kunden["Anrede"];?>">
     <label for="Anrede">Frau</label><br>
     <input type="radio" name="Anrede" value ="<?php if (isset($kunden["Anrede"])) echo $kunden["Anrede"];?>">
     <label for="Anrede">Herr</label><br>
     <input type="radio" name="Anrede" value ="<?php if (isset($kunden["Anrede"])) echo $kunden["Anrede"];?>">
     <label for="Anrede">Divers</label><br><br>

    <div class="form-group">
        <label for="Name">Anrede</label>
        <input type="text" class="form-control" id="Name" placeholder="Enter a Name" name="Name" value ="<?php if (isset($kunden["Name"])) echo $kunden["Name"];?>">
    </div>

    <div class="form-group">
        <label for="Vorname">Vorname</label>
        <input type="text" class="form-control" id="Vorname" placeholder="Enter a Vorname" name="Vorname" value ="<?php if (isset($kunden["Vorname"])) echo $kunden["Vorname"];?>">
    </div>

    <div class="form-group">
        <label for="Telefon">Telefon</label>
        <input type="text" class="form-control" id="Telefon" placeholder="Enter a Telefon" name="Name" value ="<?php if (isset($kunden["Telefon"])) echo $kunden["Telefon"];?>">
    </div>

    <div class="form-group">
        <label for="Email">Email</label>
        <input type="text" class="form-control" id="Email" placeholder="Enter a Email" name="Email" value ="<?php if (isset($kunden["Email"])) echo $kunden["Email"];?>">
    </div>

    <div class="form-group">
        <label for="Straße">Straße</label>
        <input type="text" class="form-control" id="Straße" placeholder="Enter a Straße" name="Straße" value ="<?php if (isset($kunden["Straße"])) echo $kunden["Straße"];?>">
    </div>

    <div class="form-group">
        <label for="PLZ">PLZ</label>
        <input type="text" class="form-control" id="PLZ" placeholder="Enter a PLZ" name="PLZ" value ="<?php if (isset($kunden["PLZ"])) echo $kunden["PLZ"];?>">
    </div>

    <div class="form-group">
        <label for="Ort">Ort</label>
        <input type="text" class="form-control" id="Ort" placeholder="Enter a Ort" name="Ort" value ="<?php if (isset($kunden["Ort"])) echo $kunden["Ort"];?>">
    </div>

    <div class="form-group">
        <label for="Bankauswahl">Bankauswahl</label>
        <input type="text" class="form-control" id="Bankauswahl" placeholder="Enter a Bankauswahl" name="Bankauswahl" value ="<?php if (isset($kunden["Bankauswahl"])) echo $kunden["Bankauswahl"];?>">
    </div>

    <div class="form-group">
        <label for="Kontonummer">Kontonummer</label>
        <input type="text" class="form-control" id="Kontonummer" placeholder="Enter a Kontonummer" name="Kontonummer" value ="<?php if (isset($kunden["Kontonummer"])) echo $kunden["Kontonummer"];?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>