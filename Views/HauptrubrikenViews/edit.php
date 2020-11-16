<h1>Edit Hauptrubrik</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="hauptrubrik">Hauptrubrik</label>
        <input type="text" class="form-control" id="hauptrubrik" placeholder="Geben Sie die Hauptrubrik ein" name="hauptrubrik" value ="<?php if (isset($hauptrubrik["hauptrubrik"])) echo $hauptrubrik["hauptrubrik"];?>">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>