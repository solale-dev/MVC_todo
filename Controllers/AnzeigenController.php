<?php
class AnzeigenController extends Controller
{
    function index()
    {
        require(ROOT . 'Models/Anzeige.php');

        $Anzeigen = new Anzeige();

        $d['Anzeigen'] = $Anzeigen->showAllAnzeigen();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["title"]))
        {
            require(ROOT . 'Models/Anzeige.php');

            $Anzeige= new Anzeige();

            if ($Anzeige->create($_POST["title"], $_POST["description"]))
            {
                echo ROOT;
                echo "Location: " . WEBROOT . "Anzeigen/index";
                //header("Location: " . WEBROOT . "tasks/index");
            }
        }

        $this->render("create");
    }

    function edit($id)
    {
        require(ROOT . 'Models/Anzeige.php');
        $Anzeige= new Anzeige();

        $d["Anzeige"] = $Anzeige->showAnzeige($id);

        if (isset($_POST["title"]))
        {
            if ($Anzeige->edit($id, $_POST["title"], $_POST["description"]))
            {
                header("Location: " . WEBROOT . "Anzeigen/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        require(ROOT . 'Models/Anzeige.php');

        $Anzeige = new Anzeige();
        if ($Anzeige->delete($id))
        {
            header("Location: " . WEBROOT . "Anzeigen/index");
        }
    }
}
?>