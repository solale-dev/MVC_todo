<?php
class AnzeigenController extends Controller
{
    function index()
    {
        require(ROOT . 'Models/AnzeigeModel.php');

        $Anzeigen = new AnzeigeModel();

        $d['anzeigen'] = $Anzeigen->showAllAnzeigen();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["BieteSuche"]) && isset($_POST["unterrubrikenID"]) && isset($_POST["Anzeigetext"]) && isset($_POST["KundenID"]) && isset($_POST["Telefon"]))
        {
            require(ROOT . 'Models/AnzeigeModel.php');

            $Anzeige= new AnzeigeModel();

            if ($Anzeige->create($_POST["BieteSuche"], $_POST["unterrubrikenID"], $_POST["Anzeigetext"], $_POST["veröffentlichungsdatum"], $_POST["KundenID"], $_POST["Telefon"], $_POST["Preis"]))
            {
                echo "Location: /webroot/anzeigen/index";
                //header("Location: " . WEBROOT . "tasks/index");
            }
        }

        $this->render("create");
    }

    function edit($anzeigenID)
    {
        require(ROOT . 'Models/AnzeigeModel.php');
        $Anzeige= new AnzeigeModel();

        $d["anzeigen"] = $Anzeige->showAnzeige($anzeigenID);
        if (isset($_POST["BieteSuche"]) && isset($_POST["unterrubrikenID"]) && isset($_POST["Anzeigetext"]) && isset($_POST["KundenID"]) && isset($_POST["Telefon"]))
        {
            if ($Anzeige->edit($anzeigenID, $_POST["BieteSuche"], $_POST["unterrubrikenID"], $_POST["Anzeigetext"], $_POST["veröffentlichungsdatum"], $_POST["KundenID"], $_POST["Telefon"], $_POST["Preis"]))
            {
                header("Location: /webroot/anzeigen/index");
            }

        }

        $this->set($d);
        $this->render("edit");
    }

    function delete($anzeigenID)
    {
        require(ROOT . 'Models/AnzeigeModel.php');

        $Anzeige = new AnzeigeModel();
        if ($Anzeige->delete($anzeigenID))
        {
            header("Location: /webroot/anzeigen/index");
        }
    }
}
?>