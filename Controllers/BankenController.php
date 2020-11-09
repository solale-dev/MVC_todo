<?php
class BankenController extends Controller
{
    function index()
    {
        require(ROOT . 'Models/Banken.php');

        $Banken = new Bank();

        $d['Banken'] = $Banken->showAllBanken();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["title"]))
        {
            require(ROOT . 'Models/Bank.php');

            $Bank= new Bank();

            if ($Bank->create($_POST["title"], $_POST["description"]))
            {
                echo ROOT;
                echo "Location: " . WEBROOT . "Banken/index";
                //header("Location: " . WEBROOT . "tasks/index");
            }
        }

        $this->render("create");
    }

    function edit($id)
    {
        require(ROOT . 'Models/Bank.php');
        $Bank= new Bank();

        $d["Bank"] = $Bank->showBank($bankenID);

        if (isset($_POST["title"]))
        {
            if ($Bank->edit($id, $_POST["title"], $_POST["description"]))
            {
                header("Location: " . WEBROOT . "Banken/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($bankenID)
    {
        require(ROOT . 'Models/Bank.php');

        $Bank = new Bank();
        if ($Bank->delete($bankenID))
        {
            header("Location: " . WEBROOT . "Banken/index");
        }
    }
}
?>