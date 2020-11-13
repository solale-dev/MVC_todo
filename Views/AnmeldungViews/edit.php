<h1>Edit Anmeldung</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="Anmeldename">Anmeldename</label>
        <input type="text" class="form-control" id="Anmeldename" placeholder="Geben Sie den Anmeldenamen ein" name="Anmeldename" value ="<?php if (isset($anmeldungen["Anmeldename"])) echo $anmeldungen["Anmeldename"];?>">
    </div>

    <div class="form-group">
        <label for="Password">Password</label>
        <input type="text" class="form-control" id="Password" placeholder="Geben Sie das Password ein" name="Password" value ="<?php if (isset($anmeldungen["Password"])) echo $anmeldungen["password"];?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>