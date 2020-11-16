<h1>Edit Unterrubrik</h1>
<br><br>
<form method='post' action='#'>
    <div class="form-group">
        <label for="hauptrubrikenID">Hauptrubrik</label>
        <input type="text" class="form-control" id="hauptrubrikenID" placeholder="Geben Sie die HauptrubrikenID ein" name="hauptrubrikenID" value ="<?php if (isset($unterrubriken["hauptrubrikenID"])) echo $unterrubriken["hauptrubrikenID"];?>">
    </div>

    <div class="form-group">
        <label for="Unterrubrik">Unterrubrik</label>
        <input type="text" class="form-control" id="Unterrubrik" placeholder="Geben Sie die Unterrubrik ein" name="Unterrubrik" value ="<?php if (isset($unterrubriken["Unterrubrik"])) echo $unterrubriken["Unterrubrik"];?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>