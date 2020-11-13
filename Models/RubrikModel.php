<?php
class RubrikModel extends Model
{
    public function create($hauptrubrik, $Unterrubrike, $hauptrubrikenID)
    {
        $sql = "INSERT INTO hauptrubriken (hauptrubrik, Unterrubrik, hauptrubrikenID) VALUES (:hauptrubrik, :Unterrubrik, :hauptrubrikenID)";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'hauptrubrik' => $hauptrubrik,
            'Unterrubrik' => $Unterrubrik,
            'hauptrubrikenID' => $hauptrubrikenID
        ]);
    }

    public function showRubrik($hauptrubrikenID)
    {
        $sql = "SELECT * FROM hauptrubriken WHERE hauptrubrikenID =" . $hauptrubrikenID;
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetch();
    }

    public function showAllRubriken()
    {
        $sql = "SELECT * FROM hauptrubriken";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }

    public function edit($anzeigenID, $BieteSuche, $unterrubrikenID, $Anzeigetext, $veröffentlichungsdatum, $KundenID, $Telefon, $Preis)
    {
        $sql = "UPDATE hauptrubriken SET hauptrubrik = :hauptrubrik , Unterrubrik = :Unterrubrik , hauptrubrikenID = :hauptrubrikenID WHERE hauptrubrikenID = :hauptrubrikenID";
        //$sql = "UPDATE anzeigen SET BieteSuche = ?, unterrubrikenID =?, Anzeigetext =?, veröffentlichungsdatum =?, KundenID =?, Telefon =?, Preis =? WHERE anzeigenID =?";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'unterrubrikenID' => $unterrubrikenID,
            'hauptrubrik' => $hauptrubrik,
            'Unterrubrik' => $Unterrubrik,
            'hauptrubrikenID' => $hauptrubrikenID
        ]);

        //return $req->execute([$BieteSuche, $unterrubrikenID, $Anzeigetext, $veröffentlichungsdatum, $KundenID, $Telefon, $Preis, $anzeigenID]);
    }

    public function delete($unterrubrikenID)
    {
        $sql = 'DELETE FROM hauptrubriken WHERE hauptrubrikenID = ?';
        $req = Database::getBdd()->prepare($sql);
        return $req->execute([$anzeigenID]);
    }
}
?>