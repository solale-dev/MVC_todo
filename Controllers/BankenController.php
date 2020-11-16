<?php
class BankenController extends Controller
{
    function index()
    {
        require(ROOT . 'Models/BankModel.php');

        $Banken = new BankModel();
        //zum Bezeichnungfilter
        $bezeichnung = isset ($_POST["bezeichnung"])?$_POST["bezeichnung"]:"";
        $d['banken'] = $Banken->showAllBanken($bezeichnung);
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["Bankleitzahl"]) && isset($_POST["Kurzbezeichnung"]) && isset($_POST["BIC"]))
        {
            require(ROOT . 'Models/BankModel.php');

            $Bank= new BankModel();

            if ($Bank->create($_POST["Bankleitzahl"], $_POST["Bezeichnung"], $_POST["PLZ"], $_POST["Ort"], $_POST["Kurzbezeichnung"], $_POST["BIC"]))
            {
                //echo "Location: /webroot/banken/index";
                header("Location: /webroot/banken/index");
            }
        }

        $this->render("create");
    }
    function edit($bankenID)
    {
        require(ROOT . 'Models/BankModel.php');
        $Bank= new BankModel();

        $d["banken"] = $Bank->showBank($bankenID);

        if (isset($_POST["Bankleitzahl"]) && isset($_POST["Kurzbezeichnung"]) && isset($_POST["BIC"]))
        {
            if ($Bank->edit($_POST["Bankleitzahl"], $_POST["Bezeichnung"], $_POST["PLZ"], $_POST["Ort"], $_POST["Kurzbezeichnung"], $_POST["BIC"], $bankenID))
            {
                header("Location: /webroot/banken/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($bankenID)
    {
        require(ROOT . 'Models/BankModel.php');

        $Bank = new BankModel();
        if ($Bank->delete($bankenID))
        {
            header("Location: /webroot/banken/index");
        }
    }
}
?>