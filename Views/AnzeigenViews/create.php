<h1>Create Anzeige</h1>
<form method='post' action='#'>
    <div class="form-group">
    <input type="radio" name="BieteSuche" value ="">
     <label for="BieteSuche">Biete</label><br>
     <input type="radio" name="BieteSuche" value ="">
     <label for="BieteSuche">Suche</label><br><br>
    </div>

    <div class="form-group">
        <label for="unterrubrikenID">unterrubrikenID</label>
        <input type="text" class="form-control" id="unterrubrikenID" placeholder="Geben Sie die Unterrubriken ein" name="unterrubrikenID">
    </div>

    <div class="form-group">
        <label for="Anzeigetext">Anzeigetext</label>
        <input type="text" class="form-control" id="Anzeigetext" placeholder="Geben Sie den Anzeigetext ein" name="Anzeigetext">
    </div>

    <div class="form-group">
        <label for="veröffentlichungsdatum">veröffentlichungsdatum</label>
        <input type="date" class="form-control" id="veröffentlichungsdatum" placeholder="Geben Sie das veröffentlichungsdatum ein" name="veröffentlichungsdatum">
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