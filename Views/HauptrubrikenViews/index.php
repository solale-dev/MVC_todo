<h1>Hauptrubriken</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="/webroot/hauptrubriken/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new Hauptrubrik</a>
        <tr>
            <th>Hauptrubrik</th>
           <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        foreach ($hauptrubriken as $hauptrubrik)
        {
            echo '<tr>';
            echo "<td>" . $hauptrubrik['hauptrubrik'] . "</td>";
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/webroot/hauptrubriken/edit/" . $hauptrubrik["hauptrubrikenID"] . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='/webroot/hauptrubriken/delete/" . $hauptrubrik["hauptrubrikenID"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>