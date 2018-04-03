<?php
/**
 * Created by PhpStorm.
 * User: ruben
 * Date: 28/03/2018
 * Time: 18:45
 */
include_once "../MODELS/Gebruiker.php";

class GebruikerDAO
{
    private static function getVerbinding() {
        return DatabaseFactory::getDatabase();
    }

    public static function getAll() {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM GEBRUIKERS");
        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }

    public static function getGebruikerByID($ID){
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM GEBRUIKERS WHERE ID=?".array($ID));
        if ($resultaat->num_rows == 1) {
            $databaseRij = $resultaat->fetch_array();
            return self::converteerRijNaarObject($databaseRij);
        } else {
            //Er is waarschijnlijk iets mis gegaan
            return false;
        }

    }
     public static function  insertNewGebruiker($gebruiker){
         return self::getVerbinding()->voerSqlQueryUit("INSERT INTO GEBRUIKERS (Email, Naam, Passwoord) VALUES ('?','?','?')", array($gebruiker->getEmail(),$gebruiker->getNaam(),$gebruiker->getPasswoord()));

     }
    public static function deleteGebruikerByID($id) {
        return self::getVerbinding()->voerSqlQueryUit("DELETE FROM GEBRUIKERS where ID=?", array($id));
    }

    public static function deleteGebruiker($gebruiker) {
        return self::deleteGebruikerByID($gebruiker->getID());
    }



    protected static function converteerRijNaarObject($databaseRij) {
        return new Gebruiker($databaseRij['ID'], $databaseRij['Email'], $databaseRij['Naam'], $databaseRij['Passwoord'], $databaseRij['IsAdmin']);
    }
    public static function  logIn ($email,$passwoord){
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM GEBRUIKERS WHERE Email=? AND Passwoord=?".array($email,$passwoord));
        if ($resultaat->num_rows == 1) {
            $databaseRij = $resultaat->fetch_array();
            return self::converteerRijNaarObject($databaseRij);
        } else {
            //Er is waarschijnlijk iets mis gegaan
            return false;
        }
    }
}