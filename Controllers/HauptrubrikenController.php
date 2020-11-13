<?php
class HauptrubrikenController extends Controller
{
    function index()
    {
        require(ROOT . 'Models/HauptrubrikModel.php');

        $Hauptrubriken = new HauptrubrikModel();

        $d['hauptrubriken'] = $Hauptrubriken->showAllHauptrubriken();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["hauptrubrik"]))
        {
            require(ROOT . 'Models/HauptrubrikModel.php');

            $Hauptrubrik= new HauptrubrikModel();

            if ($Hauptrubrik->create($_POST["hauptrubrik"]))
            {
                echo "Location: /webroot/hauptrubriken/index";
                //header("Location: " . WEBROOT . "tasks/index");
            }
        }

        $this->render("create");
    }

    function edit($hauptrubrikenID)
    {
        require(ROOT . 'Models/HauptrubrikModel.php');
        $Hauptrubrik= new HauptrubrikModel();

        $d["hauptrubriken"] = $Hauptrubrik->showHauptrubrik($hauptrubrikID);

        if (isset($_POST["hauptrubrik"]))
        {
            if ($Hauptrubrik->edit($hauptrubrikenID, $_POST["hauptrubrik"]))
            {
                header("Location: /webroot/hauptrubriken/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($hauptrubrikenID)
    {
        require(ROOT . 'Models/HauptrubrikModel.php');

        $Hauptrubrik = new HauptrubrikModel();
        if ($Hauptrubrik->delete($hauptrubrikenID))
        {
            header("Location: /webroot/hauptrubriken/index");
        }
    }
}
?>