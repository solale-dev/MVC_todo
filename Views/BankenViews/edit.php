<h1>Edit Bank</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="Bankleitzahl">Bankleitzahl</label>
        <input type="text" class="form-control" id="Bankleitzahl" placeholder="Geben Sie die Bankleitzahl ein" name="Bankleitzahl" value ="<?php if (isset($banken["Bankleitzahl"])) echo $banken["Bankleitzahl"];?>">
    </div>

    <div class="form-group">
        <label for="Bezeichnung">Bezeichnung</label>
        <input type="text" class="form-control" id="Bezeichnung" placeholder="Geben Sie die Bezeichnung ein" name="Bezeichnung" value ="<?php if (isset($banken["Bezeichnung"])) echo $banken["Bezeichnung"];?>">
    </div>

    <div class="form-group">
        <label for="PLZ">PLZ</label>
        <input type="text" class="form-control" id="PLZ" placeholder="Geben Sie die PLZ ein" name="PLZ" value ="<?php if (isset($banken["PLZ"])) echo $banken["PLZ"];?>">
    </div>

    <div class="form-group">
        <label for="Ort">Ort</label>
        <input type="text" class="form-control" id="Ort" placeholder="Geben Sie den Ort ein" name="Ort" value ="<?php if (isset($banken["Ort"])) echo $banken["Ort"];?>">
    </div>

    <div class="form-group">
        <label for="Kurzbezeichnung">Kurzbezeichnung</label>
        <input type="text" class="form-control" id="Kurzbezeichnung" placeholder="Geben Sie die Kurzbezeichnung ein" name="Kurzbezeichnung" value ="<?php if (isset($banken["Kurzbezeichnung"])) echo $banken["Kurzbezeichnung"];?>">
    </div>

    <div class="form-group">
        <label for="BIC">BIC</label>
        <input type="text" class="form-control" id="BIC" placeholder="Geben Sie den BIC ein" name="BIC" value ="<?php if (isset($banken["BIC"])) echo $banken["BIC"];?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>