<!doctype html>
<head>
    <meta charset="utf-8">

    <title>MVC Todo</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet">

    <link href="starter-template.css" rel="stylesheet">

    <style>
        body {
            padding-top: 5rem;
        }
        .starter-template {
            padding: 3rem 1.5rem;
            text-align: center;
        }
        ul {
           list-style-type: none;
           margin: 0;
           padding: 0;
    }
 
      li {
         display: inline;
    }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="http://localhost/webroot/anzeigen/index">Schnäppchen</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="http://localhost/webroot/login/index">Login <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="http://localhost/webroot/anmeldungen/index">Anmeldung <span class="sr-only">(current)</span></a>
            </li>
        
            <li class="nav-item active">
                <a class="nav-link" href="http://localhost/webroot/banken/index">Bankverbindung <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="http://localhost/webroot/kunden/create">Registerierung <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="http://localhost/schnaeppchen/kontakt.php">Kontakt <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" ><?php echo "Angemeldet als: ", $_SESSION["Anmeldename"]; ?><span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>

<main role="main" class="container">

    <div class="starter-template">

        <?php
        echo $content_for_layout;
        ?>

    </div>

</main>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</body>
</html>
