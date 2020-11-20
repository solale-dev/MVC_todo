<?php
class AnmeldungenController extends Controller
{
    function index()
    {
        require(ROOT . 'Models/AnmeldungModel.php');

        $Anmeldungen = new AnmeldungModel();

        $d['anmeldungen'] = $Anmeldungen->showAllAnmeldungen();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["Anmeldename"]) && isset($_POST["Password"]) && isset($_POST["KundenID"]))
        {
            require(ROOT . 'Models/AnmeldungModel.php');

            $Anmeldung= new AnmeldungModel();

            if ($Anmeldung->create($_POST["Anmeldename"], $_POST["Password"], $_POST["KundenID"]))
            {
                //echo "Location: /webroot/anmeldungen/index";
                header("Location: /webroot/anmeldungen/index");
            }
        }
       
        $this->render("create");
    }

    function edit($Anmeldename)
    {
        require(ROOT . 'Models/AnmeldungModel.php');
        $Anmeldung= new AnmeldungModel();

        $d["anmeldungen"] = $Anmeldung->showAnmeldung($Anmeldename);
        $d["SQLFehler"] = "";
        $d["Fehler"] = "";
        if (isset($_POST["aktion"])
            && $_POST["neu"] === $_POST["wiederholt"] 
            && password_verify($_POST["alt"], $d["anmeldungen"]["Password"]))
        {
            if ($Anmeldung->edit($Anmeldename, $_POST["alt"], $_POST["neu"]))
            {
                header("Location: /webroot/anzeigen/index");
            }
           $d["SQLFehler"] = "<br>DB_Fehler: Passwort wurde nicht aktualisiert";
        }
        else {
            if (isset($_POST["aktion"]))
              $d["Fehler"] = "<br>Falsche Passwort oder <br>Passworte stimmen nicht überein";
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($Anmeldename)
    {
        require(ROOT . 'Models/AnmeldungModel.php');

        $Anmeldung = new AnmeldungModel();
        if ($Anmeldung->delete($Anmeldename))
        {
            header("Location: /webroot/anmeldungen/index");
        }
    }
}
?>