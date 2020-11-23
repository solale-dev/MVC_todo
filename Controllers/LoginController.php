<?php
class LoginController extends Controller
{
    function index()
    {
        require(ROOT . 'Models/LoginModel.php');

        $Login = new LoginModel();

        if (isset($_POST["Anmeldename"])) {
          if ($Login->checkLogin($_POST["Anmeldename"], $_POST["Password"])) {
            session_start();
            $_SESSION["Anmeldename"] = $_POST["Anmeldename"];
            $_SESSION["Gruppe"] = "Kunde|Mitarbeiter|Admins";  
            
            header("Location: /webroot/anzeigen/index");
          }
        }
        $this->render("index");
    }
}
?>