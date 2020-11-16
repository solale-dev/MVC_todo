<?php
class AnzeigeModel extends Model
{
    public function create($BieteSuche, $unterrubrikenID, $Anzeigetext, $veröffentlichungsdatum, $KundenID, $Telefon, $Preis)
    {
        $sql = "INSERT INTO anzeigen (BieteSuche, unterrubriken, Anzeigetext, veröffentlichungsdatum, Aufnahmedatum, KundenID, Telefon, Preis) VALUES (:BieteSuche, :unterrubrikenID, :Anzeigetext, :veröffentlichungsdatum, :Aufnahmedatum, :KundenID, :Telefon, :Preis)";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'BieteSuche' => $BieteSuche,
            'unterrubrikenID' => $unterrubrikenID,
            'Anzeigetext' => $Anzeigetext,
            'veröffentlichungsdatum' => date('Y-m-d'),
            'KundenID' => $KundenID,
            'Tlefon' => $Telefon,
            'Preis' => $Preis

        ]);
    }

    public function showAnzeige($anzeigenID)
    {
        $sql = "SELECT * FROM anzeigen WHERE anzeigenID =" . $anzeigenID;
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetch();
    }

    public function showAllAnzeigen()
    {
        $sql = "SELECT * FROM anzeigen";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }

    public function edit($anzeigenID, $BieteSuche, $unterrubrikenID, $Anzeigetext, $veröffentlichungsdatum, $KundenID, $Telefon, $Preis)
    {
        $sql = "UPDATE anzeigen SET BieteSuche = :BieteSuche , unterrubrikenID = :unterrubrikenID , Anzeigetext = :Anzeigetext , veröffentlichungsdatum = :veroeffentlichungsdatum , KundenID = :KundenID , Telefon = :Telefon , Preis = :Preis WHERE anzeigenID = :anzeigenID";
        //$sql = "UPDATE anzeigen SET BieteSuche = ?, unterrubrikenID =?, Anzeigetext =?, veröffentlichungsdatum =?, KundenID =?, Telefon =?, Preis =? WHERE anzeigenID =?";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'anzeigenID' => $anzeigenID,
            'BieteSuche' => $BieteSuche,
            'unterrubrikenID' => $unterrubrikenID,
            'Anzeigetext' => $Anzeigetext,
            'veroeffentlichungsdatum' => $veröffentlichungsdatum,
            'KundenID' => $KundenID,
            'Telefon' => $Telefon,
            'Preis' => $Preis

        ]);
    }

    public function delete($anzeigenID)
    {
        $sql = 'DELETE FROM anzeigen WHERE anzeigenID = ?';
        $req = Database::getBdd()->prepare($sql);
        return $req->execute([$anzeigenID]);
    }
    public function getAllUnterrubriken() {
        $sql = "SELECT * FROM unterrubriken";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }
}
?>