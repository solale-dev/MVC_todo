<h1>Rubrik</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="/webroot/hauptrubriken/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new Rubrik</a>
        <tr>
            <th>hauptrubrik</th>
            <th>Unterrubrik</th>
            <th>hauptrubrikenID</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        foreach ($hauptrubriken as $hauptrubrik)
        {
            echo '<tr>';
            echo "<td>" . $hauptrubrik['hauptrubrik'] . "</td>";
            echo "<td>" . $hauptrubrik['Unterrubrik'] . "</td>";
            echo "<td>" . $hauptrubrik['hauptrubrikenID'] . "</td>";
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/webroot/hauptrubriken/edit/" . $hauptrubrik["hauptrubrik"] . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='/webroot/hauptrubriken/delete/" . $hauptrubrik["hauptrubrik"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>