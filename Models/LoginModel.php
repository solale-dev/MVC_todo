<?php
class LoginModel extends Model
{

    public function checkLogin($Anmeldename, $Password)
    {
        $sql = "SELECT * FROM anmeldungen WHERE Anmeldename = ?";
        $req = Database::getBdd()->prepare($sql);
        $req->execute([$Anmeldename]);
        $result = $req->fetch(PDO::FETCH_ASSOC);
        return $result && password_verify($Password, $result["Password"]);
    }

}
?>