<?php
class AnmeldungModel extends Model
{
    public function create($Anmeldename, $Password, $KundenID)
    {
        $sql = "INSERT INTO anmeldungen (Anmeldename, Password, KundenID) VALUES (:Anmeldename, :Password, :KundenID)";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'Anmeldename' => $Anmeldename,
            'Password' => $Password, 
            'KundenID' => $KundenID
            ]);
    }

    public function showAnmeldung($Anmeldename)
    {
        $sql = "SELECT * FROM anmeldungen WHERE Anmeldename = ?";
        $req = Database::getBdd()->prepare($sql);
        $req->execute([$Anmeldename]);
        return $req->fetch();
    }

    public function showAllAnmeldungen()
    {
        $sql = "SELECT * FROM anmeldungen";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }

    public function edit($Anmeldename, $Password, $neuesPassword)
    {
        $passwordhash = password_hash($neuesPassword, PASSWORD_DEFAULT);
        $sql = "UPDATE anmeldungen SET Password = :passwordhash WHERE Anmeldename = :Anmeldename";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'Anmeldename' => $Anmeldename,
            'passwordhash' => $passwordhash
            ]);
    }

    public function delete($Anmeldename)
    {
        $sql = 'DELETE FROM anmeldungen WHERE Anmeldename = ?';
        $req = Database::getBdd()->prepare($sql);
        return $req->execute([$Anmeldename]);
    }
}
?>