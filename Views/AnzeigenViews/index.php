<h1>Anzeigen</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="/webroot/anzeigen/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new Anzeige</a>
        <tr>
            <th>BieteSuche</th>
            <th>unterrubrikenID</th>
            <th>Anzeigetext</th>
            <th>veröffentlichungsdatum</th>
            <th>KundenID</th>
            <th>Telefon</th>
            <!--<th>Preis</th>-->
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        foreach ($anzeigen as $anzeige)
        {
            echo '<tr>';
            echo "<td>" . $anzeige['BieteSuche'] . "</td>";
            echo "<td>" . $anzeige['unterrubrikenID'] . "</td>";
            echo "<td>" . $anzeige['Anzeigetext'] . "</td>";
            echo "<td>" . $anzeige['veröffentlichungsdatum'] . "</td>";
            echo "<td>" . $anzeige['KundenID'] . "</td>";
            echo "<td>" . $anzeige['Telefon'] . "</td>";
            //echo "<td>" . $anzeige['Preis'] . "</td>";
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/webroot/anzeigen/edit/" . $anzeige["anzeigenID"] . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='/webroot/anzeigen/delete/" . $anzeige["anzeigenID"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>