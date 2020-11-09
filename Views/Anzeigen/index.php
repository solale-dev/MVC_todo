<h1>Anzeigen</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="/MVC_schnaeppchen/anzeigen/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new Anzeige</a>
        <tr>
            <th>anzeigenID</th>
            <th>BieteSuche</th>
            <th>unterrubrikenID</th>
            <th>Anzeigetext</th>
            <th>veröffentlichungsdatum</th>
            <th>KundenID</th>
            <th>Telefon</th>
            <th>Preis</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        foreach ($anzeigen as $Anzeige)
        {
            echo '<tr>';
            echo "<td>" . $Anzeige['BieteSuche'] . "</td>";
            echo "<td>" . $Anzeige['unterrubrikenID'] . "</td>";
            echo "<td>" . $Anzeige['Anzeigetext'] . "</td>";
            echo "<td>" . $Anzeige['veröffentlichungsdatum'] . "</td>";
            echo "<td>" . $Anzeige['KundenID'] . "</td>";
            echo "<td>" . $Anzeige['Telefon'] . "</td>";
            echo "<td>" . $Anzeige['Preis'] . "</td>";
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/MVC_todo/anzeigen/edit/" . $Anzeige["id"] . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='/MVC_schnaeppchen/anzeigen/delete/" . $Anzeige["anzeigenID"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>