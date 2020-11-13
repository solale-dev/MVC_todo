<h1>Edit Rubrik</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="hauptrubrik">hauptrubrik</label>
        <input type="text" class="form-control" id="hauptrubrik" placeholder="Geben Sie die hauptrubrik ein" name="hauptrubrik" value ="<?php if (isset($hauptrubriken["hauptribrik"])) echo $hauptrubriken["hauptrubrik"];?>">
    </div>

    <div class="form-group">
        <label for="Unterrubrik">Unterrubrik</label>
        <input type="text" class="form-control" id="Unterrubrik" placeholder="Geben Sie die Unterrubrik ein" name="Unterrubrik" value ="<?php if (isset($unterrubriken["Unterrubrik"])) echo $unterrubriken["Unterrubrik"];?>">
    </div>
    
    <div class="form-group">
        <label for="hauptrubrikenID">hauptrubrikenID</label>
        <input type="text" class="form-control" id="hauptrubrikenID" placeholder="Geben Sie die hauptrubrikenID ein" name="hauptrubrikenID" value ="<?php if (isset($unterrubriken["hauptribrikenID"])) echo $unterrubriken["hauptrubrikenID"];?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>