<h1>Kunden</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="/webroot/kunden/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new Kunde</a>
        <tr>
            <th>Anrede</th>
            <th>Name</th>
            <th>Vorname</th>
            <th>Telefon</th>
            <th>Email</th>
            <th>Straße</th>
            <th>PLZ</th>
            <th>Ort</th>
            <th>Bankauswahl</th>
            <th>Kontonummer</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        foreach ($kunden as $kunde)
        {
            echo '<tr>';
            echo "<td>" . $kunde['Anrede'] . "</td>";
            echo "<td>" . $kunde['Name'] . "</td>";
            echo "<td>" . $kunde['Vorname'] . "</td>";
            echo "<td>" . $kunde['Telefon'] . "</td>";
            echo "<td>" . $kunde['Email'] . "</td>";
            echo "<td>" . $kunde['Straße'] . "</td>";
            echo "<td>" . $kunde['PLZ'] . "</td>";
            echo "<td>" . $kunde['Ort'] . "</td>";
            echo "<td>" . $kunde['Bankauswahl'] . "</td>";
            echo "<td>" . $kunde['Kontonummer'] . "</td>";
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/webroot/kunden/edit/" . $kunde["KundenID"] . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='/webroot/kunden/delete/" . $kunde["KundenID"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>