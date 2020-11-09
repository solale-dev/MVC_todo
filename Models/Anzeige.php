<?php
class Anzeige extends Model
{
    public function create($title, $description)
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

    public function edit($BieteSuche, $unterrubrikenID, $Anzeigetext, $veröffentlichungsdatum, $KundenID, $Telefon, $Preis)
    {
        $sql = "UPDATE anzeigen SET BieteSuche = :BieteSuche , unterrubrikenID = :unterrubrikenID , Anzeigetext = :Anzeigetext , veröffentlichungsdatum = :veröffentlichungsdatum , KundenID = :KundenID , Telefon = :Telefon , Preis = :Preis WHERE anzeigenID = :anzeigenID";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'BieteSuche' => $BieteSuche,
            'unterrubrikenID' => $unterrubrikenID,
            'Anzeigetext' => $ASnzeigetext,
            'veröffentlichungsdatum' => date('Y-m-d'),
            'KundenID' => $KundenID,
            'Telefon' => $Telefon,
            'Preis' => $Preis

        ]);
    }

    public function delete($anzeigenID)
    {
        $sql = 'DELETE FROM anzeigen WHERE anzeigenID = ?';
        $req = Database::getBdd()->prepare($sql);
        return $req->execute([$id]);
    }
}
?>