<?php
class KundeModel extends Model
{
    public function create($Anrede, $Name, $Vorname, $Telefon, $Email, $Straße, $PLZ, $Ort, $Bankauswahl, $Kontonummer)
    {
        $sql = "INSERT INTO kunden (Anrede, Name, Vorname, Telefon, Email, Straße, PLZ, Ort, Bankauswahl, Kontonummer) VALUES (:Anrede, :Name, :Vorname, :Telefon, :Email, :straße, :PLZ, :Ort, :Bankauswahl, :Kontonummer)";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'Anrede' => $Anrede,
            'Name' => $Name,
            'Vorname' => $Vorname,
            'Telefon' => $Telefon,
            'Email' => $Email,
            'Straße' => $Straße,
            'PLZ' => $PLZ,
            'Ort' => $Ort,
            'Bankauswahl' => $Bankauswahl,
            'Kontonummer' => $Kontonummer

        ]);
    }
    public function showKunde($KundenID)
    {
        $sql = "SELECT * FROM kunden WHERE KundenID =" . $KundenID;
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetch();
    }

    public function showAllKunden()
    {
        $sql = "SELECT * FROM kunden";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }

    public function edit($KundenID, $Anrede, $name, $Vorname, $Telefon, $Email, $Streße, $PLZ, $Ort, $Bankauswahl, $Kontonummer)
    {
        $sql = "UPDATE kunden SET Anrede = :Anrede, Name = :Name , Vorname = :Vorname, Telefon = :Telefon, Email = :Email, Straße = :Straße, PLZ = :PLZ, Ort = :Ort, Bankauswahl = :Bankauswahl, Kontonummer = :Kontonummer WHERE KundenID = :KundenID";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'KundenID' => $KundenID,
            'Anrede' => $Anrede,
            'Name' => $Name,
            'Vorname' => $Vorname,
            'Telefon' => $Telefon,
            'Emai' => $Email,
            'Straße' => $Straße,
            'PLZ' => $PLZ,
            'Ort' => $Ort,
            'Bankauswahl' => $Bankauswahl,
            'Kontonummer' => $Kontonummer

        ]);
    }

    public function delete($KundenID)
    {
        $sql = 'DELETE FROM kunden WHERE KundenID = ?';
        $req = Database::getBdd()->prepare($sql);
        return $req->execute([$KundenID]);
    }
}
?>