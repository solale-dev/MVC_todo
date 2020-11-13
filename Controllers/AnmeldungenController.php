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
        if (isset($_POST["Anmeldename"]) && isset($_POST["Password"]))
        {
            require(ROOT . 'Models/AnmeldungModel.php');

            $Anmeldung= new AnmeldungModel();

            if ($Anmeldung->create($_POST["Anmeldename"], $_POST["Password"]))
            {
                echo "Location: /webroot/anmeldungen/index";
                //header("Location: " . WEBROOT . "tasks/index");
            }
        }

        $this->render("create");
    }

    function edit($Anmeldename)
    {
        require(ROOT . 'Models/AnmeldungModel.php');
        $Anmeldung= new AnmeldungModel();

        $d["anmeldungen"] = $Anmeldung->showAnmeldung($Anmeldename);

        if (isset($_POST["Anmeldename"]) && isset($_POST["Password"]))
        {
            if ($Anmeldung->edit($KundenID, $_POST["Anmeldename"], $_POST["Password"]))
            {
                header("Location: /webroot/anmeldungen/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($KundenID)
    {
        require(ROOT . 'Models/AnmeldungModel.php');

        $Anmeldung = new AnmeldungModel();
        if ($Anmeldung->delete($KundenID))
        {
            header("Location: /webroot/anmeldungen/index");
        }
    }
}
?>