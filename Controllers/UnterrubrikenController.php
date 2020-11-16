<?php
class UnterrubrikenController extends Controller
{
    function index()
    {
        require(ROOT . 'Models/UnterrubrikModel.php');

        $Unterrubriken = new UnterrubrikModel();

        $d['unterrubriken'] = $Unterrubriken->showAllUnterrubriken();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        require(ROOT . 'Models/UnterrubrikModel.php');
        $Unterrubrik= new UnterrubrikModel();
        $d["hauptrubriken"] = $Unterrubrik->getAllHauptrubriken();

        if (isset($_POST["Unterrubrik"]) && isset($_POST["hauptrubrikenID"]))
        {
            if ($Unterrubrik->create($_POST["Unterrubrik"], $_POST["hauptrubrikenID"]))
            {
                //echo "Location: /webroot/unterrubriken/index";
                header("Location: /webroot/unterrubriken/index");
            }
        }
        $this->set($d);
        $this->render("create");
    }

    function edit($unterrubrikenID)
    {
        require(ROOT . 'Models/UnterrubrikModel.php');
        $Unterrubrik= new UnterrubrikModel();

        $d["unterrubriken"] = $Unterrubrik->showUnterrubrik($unterrubrikenID);

        if (isset($_POST["Unterrubrik"]) && isset($_POST["hauptrubrikenID"]))
        {
            if ($Unterrubrik->edit($unterrubrikenID, $_POST["Unterrubrik"], $_POST["hauptrubrikenID"]))
            {
                header("Location: /webroot/unterrubriken/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($unterrubrikenID)
    {
        require(ROOT . 'Models/UnterrubrikModel.php');

        $Unterrubrik = new UnterrubrikModel();
        if ($Unterrubrik->delete($unterrubrikenID))
        {
            header("Location: /webroot/unterrubriken/index");
        }
    }
}
?>