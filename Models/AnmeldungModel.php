<?php
class AnmeldungModel extends Model
{
    public function create($Anmeldename, $Password)
    {
        $sql = "INSERT INTO anmeldungen (Anmeldename, Password) VALUES (:Anmeldename, :Password)";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'Anmeldename' => $Anmeldename,
            'Password' => $Password
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

    public function edit($Anmeldename, $Password, $KundenID)
    {
        $sql = "UPDATE anmeldungen SET Anmeldename = :Anmeldename, Password = :Password, KundenID = :KundenID WHERE Anmeldename = :Anmeldename";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'Anmeldename' => $Anmeldename,
            'Password' => $Password,
            'KundenID' => $KundenID
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