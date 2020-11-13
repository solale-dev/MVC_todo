<?php
class BankModel extends Model
{
    public function create($Bankleitzahl, $Bezeichnung, $PLZ, $Ort, $Kurzbezeichnung, $BIC)
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

    public function showAllBanken($bezeichnung = "")
    {
        //zum Bezeichnungfilter
        if ($bezeichnung == "")
          $sql = "SELECT * FROM banken Limit 50;";
        else
          $sql = "SELECT * FROM banken WHERE Bezeichnung Like '$bezeichnung%' Limit 50;";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }

    public function edit($Bankleitzahl, $Bezeichnung, $PLZ, $Ort, $Kurzbezeichnung, $BIC, $bankenID)
    {
        $sql = "UPDATE banken SET Bankleitzahl = :Bankleitzahl, Bezeichnung = :Bezeichnung , PLZ = :PLZ , Ort = :Ort , Kurzbezeichnung = :Kurzbezeichnung , BIC = :BIC WHERE bankenID = :bankenID";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'Bankleitzahl' => $Bankleitzahl,
            'Bezeichnung' => $Bezeichnung,
            'PLZ' => $PLZ,
            'Ort' => $Ort,
            'Kurzbezeichnung' => $Kurzbezeichnung,
            'BIC' => $BIC,
            'bankenID' => $bankenID

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