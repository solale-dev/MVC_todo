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
        //echo isset($_POST["Password"])?$_POST["Password"] . "-" . password_hash($_POST["Password"], PASSWORD_DEFAULT):"edit";
        if (isset($_POST["Password"]) && isset($_POST["neu"]) && isset($_POST["wiederholt"])
            && $_POST["neu"] === $_POST["wiederholt"] 
            && password_verify($_POST["Password"], $d["anmeldungen"]["Password"]))
        {
            if ($Anmeldung->edit($Anmeldename, $_POST["Password"], $_POST["neu"]))
            {
                header("Location: /webroot/anmeldungen/index");
            }
        } else if (isset($_POST["Password"]) && isset($_POST["neu"]) && isset($_POST["wiederholt"])
        && $_POST["neu"] != $_POST["wiederholt"] 
        && password_verify($_POST["Password"], $d["anmeldungen"]["Password"])) {
            echo "<br>Password nicht identisch";
        }
       /* else {
            if (isset($_POST["Password"]))
            echo "<br>",$_POST["Password"], "<br>", password_verify($_POST["Password"], $d["anmeldungen"]["Password"]), "<br>"
          ,$_POST["neu"], "<br>", $_POST["wiederholt"];
        }*/
        
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