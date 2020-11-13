<h1>Edit Unterrubrik</h1>
<br><br>
<form method='post' action='#'>
     <select name="unterrubrik"> 
     <?php
    for ($i=0; $i < count($unterrubrikenID); $i++) {
    $selected = "";
    if ($unterrubrikenID == $unterrubrikenID[$i]) {
      $selected = " selected";
    }
    echo "<option$selected>$unterrubrikenID[$i]</option>";
  }
  ?>
</select><br><br><br>

    <div class="form-group">
        <label for="Unterrubrik">Neue Unterrubrik</label>
        <input type="text" class="form-control" id="Unterrubrik" placeholder="Geben Sie die Unterrubrik ein" name="Unterrubrik" value ="<?php if (isset($unterrubriken["Unterrubrik"])) echo $unterrubriken["Unterrubrik"];?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>