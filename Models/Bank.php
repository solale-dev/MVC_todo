<?php
class Bank extends Model
{
    public function create($title, $description)
    {
        $sql = "INSERT INTO banken (Bankleitzahl, Bezeichnung, PLZ, Ort, Kurzbezeichnung, BIC) VALUES (:Bankleitzahl, :Bezeichnung, :PLZ, :Ort, :Kurzbezeichnung, :BIC)";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'Bankleitzahl' => $Bankleitzahl,
            'Bezeichnung' => $Bezeichnung,
            'PLZ' => $PLZ,
            'Ort' => $Ort,
            'Kurzbezeichnung' => $Kurzbezeichnung,
            'BIC' => $BIC

        ]);
    }

    public function showBank($bankenID)
    {
        $sql = "SELECT * FROM banken WHERE bankenID =" . $bankenID;
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetch();
    }

    public function showAllBanken()
    {
        $sql = "SELECT * FROM banken";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }

    public function edit($Bankleitzahl, $Bezeichnung, $PLZ, $Ort, $Kurzbezeichnung, $BIC)
    {
        $sql = "UPDATE banken SET Bankleitzahl = :Bankleitzahl, Bezeichnung = :Bezeichnung , PLZ = :PLZ , Ort = :Ort , Kurzbezeichnung = :Kurzbezeichnung , BIC = :BIC WHERE bankenID = :bankenID";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'Bankleitzahl' => $Bankleitzahl,
            'Bezeichnung' => $Bezeichnung,
            'PLZ' => $PLZ,
            'Ort' => $Ort,
            'Kurzbezeichnung' => $Kurzbezeichnung,
            'BIC' => $BIC

        ]);
    }

    public function delete($bankenID)
    {
        $sql = 'DELETE FROM banken WHERE bankenID = ?';
        $req = Database::getBdd()->prepare($sql);
        return $req->execute([$bankenID]);
    }
}
?>