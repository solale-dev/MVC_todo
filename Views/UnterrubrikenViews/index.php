<h1>Unterrubriken</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="/webroot/unterrubriken/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new Unterrubrik</a>
        <tr>
            <th>Unterrubrik</th>
            <th>hauptrubrikenID</th>
           <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        foreach ($unterrubriken as $Unterrubrik)
        {
            echo '<tr>';
            echo "<td>" . $Unterrubrik['Unterrubrik'] . "</td>";
            echo "<td>" . $Unterrubrik['hauptrubrikenID'] . "</td>";
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/webroot/unterrubriken/edit/" . $Unterrubrik["unterrubrikenID"] . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='/webroot/unterrubriken/delete/" . $Unterrubrik["unterrubrikenID"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>