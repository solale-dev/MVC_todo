<?php
class HauptrubrikModel extends Model
{
    public function create($hauptrubrik)
    {
        $sql = "INSERT INTO hauptrubriken (hauptrubrik) VALUES (:hauptrubrik)";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'hauptrubrik' => $hauptrubrik
            ]);
    }

    public function showHauptrubrik($hauptrubrikenID)
    {
        $sql = "SELECT * FROM hauptrubriken WHERE hauptrubrikenID =" . $hauptrubrikenID;
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetch();
    }

    public function showAllHauptrubriken()
    {
        $sql = "SELECT * FROM hauptrubriken";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }

    public function edit($hauptrubrikenID, $hauptrubrik)
    {
        $sql = "UPDATE hauptrubriken SET hauptrubrik = :hauptrubrik WHERE hauptrubrikenID = :hauptrubrikenID";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'hauptrubrikenID' => $hauptrubrikenID,
            'hauptrubrik' => $hauptrubrik
            ]);
    }

    public function delete($hauptrubrikenID)
    {
        $sql = 'DELETE FROM hauptrubriken WHERE hauptrubrikenID = ?';
        $req = Database::getBdd()->prepare($sql);
        return $req->execute([$hauptrubrikenID]);
    }
}
?>