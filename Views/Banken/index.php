<h1>Banken</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="/MVC_schaeneppchen/banken/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new Bank</a>
        <tr>
            <th>Bankleitzahl</th>
            <th>Bezeichnung</th>
            <th>PLZ</th>
            <th>Ort</th>
            <th>Kurzbezeichnung</th>
            <th>BIC</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        foreach ($banken as $bankenID)
        {
            echo '<tr>';
            echo "<td>" . $bank['Bankleitzahl'] . "</td>";
            echo "<td>" . $bank['Bezeichnung'] . "</td>";
            echo "<td>" . $bank['PLZ'] . "</td>";
            echo "<td>" . $bank['Ort'] . "</td>";
            echo "<td>" . $bank['Kurzbezeichnung'] . "</td>";
            echo "<td>" . $bank['BIC'] . "</td>";
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/MVC_schnaeppchen/banken/edit/" . $Bank["bankenID"] . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='/MVC_schnaeppchen/banken/delete/" . $Bank["bankenID"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>