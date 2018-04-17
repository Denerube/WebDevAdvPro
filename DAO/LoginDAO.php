<?php
/**
 * Created by PhpStorm.
 * User: ruben
 * Date: 16/04/2018
 * Time: 17:37
 */
include_once "../MODELS/Gebruiker.php";
class LoginDAO
{
    private static function getVerbinding() {
        return DatabaseFactory::getDatabase();
    }
    public static function login($email,$passwoord){
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM GEBRUIKERS WHERE Email=? AND Passwoord=?".array($email,$passwoord));
        if ($resultaat->num_rows == 1) {
            $databaseRij = $resultaat->fetch_array();
            return self::converteerRijNaarObject($databaseRij);
        } else {
            //Er is waarschijnlijk iets mis gegaan
            return false;
        }

    }
    protected static function converteerRijNaarObject($databaseRij) {
        return new Gebruiker($databaseRij['ID'], $databaseRij['Email'],$databaseRij['Naam'], $databaseRij['Passwoord'],$databaseRij['isAdmin']);
    }
}