<h1>Anmeldung</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="/webroot/anmeldungen/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new Anmeldung</a>
        <tr>
            <th>Anmeldename</th>
            <th>Password</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        foreach ($anmeldungen as $anmeldung)
        {
            echo '<tr>';
            echo "<td>" . $anmeldung['Anmeldename'] . "</td>";
            echo "<td>" . $anmeldung['Password'] . "</td>";
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/webroot/anmeldungen/edit/" . $anmeldungen["KundenID"] . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='/webroot/anmeldungen/delete/" . $anmeldungen["KundenID"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>