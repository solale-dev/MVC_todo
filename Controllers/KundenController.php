<?php
class KundenController extends Controller
{
    function index()
    {
        require(ROOT . 'Models/KundeModel.php');

        $Kunden = new KundeModel();

        $d['kunden'] = $Kunden->showAllKunden();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["Anrede"]) && isset($_POST["Name"]) && isset($_POST["Telefon"]) && isset($_Post["Email"]) && isset($_POST["Bankauswahl"]) && isset($_POST["Kontonummer"]))
        {
            require(ROOT . 'Models/KundeModel.php');

            $Kunde= new KundeModel();

            if ($Kunde->create($_POST["Anrede"], $_POST["Name"], $_POST["Vorname"], $_POST["Telefon"], $_POST["Email"], $_POST["Straße"], $_POST["PLZ"], $_POST["Ort"], $_POST["Bankauswahl"], $_POST["Kontonummer"]))
            {
                echo ROOT;
                echo "Location: /webroot/kunden/index";
                //header("Location: " . WEBROOT . "tasks/index");
            }
        }

        $this->render("create");
    }

    function edit($KundenID)
    {
        require(ROOT . 'Models/KundeModel.php');
        $Kunde= new KundeModel();

        $d["kunden"] = $Kunde->showKunde($KundenID);

        if (isset($_POST["Anrede"]) && isset($_POST["Name"]) && isset($_POST["Telefon"]) && isset($_Post["Email"]) && isset($_POST["Bankauswahl"]) && isset($_POST["Kontonummer"]))
        {
            if ($Kunde->edit($KundenID, $_POST["Anrede"], $_POST["Name"], $_POST["Vorname"], $_POST["Telefon"], $_POST["Email"], $_POST["Straße"], $_POST["PLZ"], $_POST["Ort"], $_POST["Bankauswahl"], $_POST["Kontonummer"]))
            {
                header("Location: /webroot/kunden/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($KundenID)
    {
        require(ROOT . 'Models/KundeModel.php');

        $Kunde = new KundeModel();
        if ($Kunde->delete($KundenID))
        {
            header("Location: /webroot/kunden/index");
        }
    }
}
?>