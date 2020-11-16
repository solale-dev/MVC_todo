<?php
class UnterrubrikModel extends Model
{
    public function create($Unterrubrik, $hauptrubrikenID)
    {
        $sql = "INSERT INTO unterrubriken (Unterrubrik, hauptrubrikenID) VALUES (:Unterrubrik, :hauptrubrikenID)";
        // $sql = "INSERT INTO hauptrubriken (hauptrubrik) VALUES (:hauptrubrik)";

        $req = Database::getBdd()->prepare($sql);
        return $req->execute([
            'Unterrubrik' => $Unterrubrik,
            'hauptrubrikenID' => $hauptrubrikenID
            ]);
    }

    public function showUnterrubrik($unterrubrikenID)
    {
        $sql = "SELECT * FROM unterrubriken WHERE unterrubrikenID =" . $unterrubrikenID;
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetch();
    }

    public function showAllUnterrubriken()
    {
        $sql = "SELECT * FROM unterrubriken";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }

    public function edit($unterrubrikenID, $Unterrubrik, $hauptrubrikenID)
    {
        $sql = "UPDATE unterrubriken SET Unterrubrik = :Unterrubrik, hauptrubrikenID = :hauptrubrikenID WHERE unterrubrikenID = :unterrubrikenID";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'unterrubrikenID' => $unterrubrikenID,
            'Unterrubrik' => $Unterrubrik,
            'hauptrubrikenID' => $hauptrubrikenID
            ]);
    }

    public function delete($unterrubrikenID)
    {
        $sql = 'DELETE FROM unterrubriken WHERE unterrubrikenID = ?';
        $req = Database::getBdd()->prepare($sql);
        return $req->execute([$unterrubrikenID]);
    }
    public function getAllHauptrubriken() {
        $sql = "SELECT * FROM hauptrubriken";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }
}
?>