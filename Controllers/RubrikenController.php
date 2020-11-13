<?php
class RubrikenController extends Controller
{
    function index()
    {
        require(ROOT . 'Models/RubrikModel.php');

        $Rubriken = new RubrikModel();
        $d['hauptrubriken'] = $Rubriken->showAllHauptrubriken();
        $this->set($d);
        $d['hauptrubrikenID'] = 10;
        $this->set($d);
        $d['unterrubriken'] = $Rubriken->showAllUnterrubriken(10);
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["hauptrubrik"]) && isset($_POST["Unterrubrik"]) && isset($_POST["hauptrubrikenID"]))
        {
            require(ROOT . 'Models/RubrikModel.php');

            $Rubrik= new RubrikModel();

            if ($Rubrik->create($_POST["hauptrubrik"], $_POST["Unterrubrik"], $_POST["hauptrubrikenID"]))
            {
                echo "Location: /webroot/hauptrubriken/index";
            } 
        }

        $this->render("create");
    }

    function edit($hauptrubrikenID)
    {
        require(ROOT . 'Models/RubrikModel.php');
        $Rubrik= new RubrikModel();

        $d["hauptrubriken"] = $Rubrik->showRubrik($hauptrubrikenID);
       
        if (isset($_POST["hauptrubrik"]) && isset($_POST["Unterrubrik"]) && isset($_POST["hauptrubrikenID"]))
        {
            if ($Rubrik->edit($hauptrubrikenID, $_POST["hauptrubrik"], $unterrubrikenID, $_POST["Unterrubrik"], $_POST["hauptrubrikenID"]))
            {
                header("Location: /webroot/hauptrubriken/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }


    function delete($hauptrubrikenID)
    {
        require(ROOT . 'Models/RubrikModel.php');

        $Rubrik = new RubrikModel();
        if ($Rubrik->delete($hauptrubrikenID))
        {
            header("Location: /webroot/hauptrubriken/index");
        }
    }
}
?>