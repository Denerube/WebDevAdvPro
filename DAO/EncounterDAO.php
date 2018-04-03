<?php
/**
 * Created by PhpStorm.
 * User: ruben
 * Date: 28/03/2018
 * Time: 18:44
 */
include_once "MODELS/Encounter.php";
class EncounterDAO
{
    private static function getVerbinding() {
        return DatabaseFactory::getDatabase();
    }

    public static function getAll() {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM ENCOUNTER");
        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }

    public static function getEncounterByID($ID){
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM ENCOUNTER WHERE ID=?".array($ID));
        if ($resultaat->num_rows == 1) {
            $databaseRij = $resultaat->fetch_array();
            return self::converteerRijNaarObject($databaseRij);
        } else {
            //Er is waarschijnlijk iets mis gegaan
            return false;
        }

    }
    public static function  insertNewMonster($monster){
         return self::getVerbinding()->voerSqlQueryUit("INSERT INTO MONSTERS(ID, Naam, Type, Levenspunten, Schildwaarde) VALUES ('?','?','?','?','?')", array($monster->getID(),$monster->getNaam(),$monster->getType(),$monster->getLevenspunten(),$monster->getSchildwaarde()));

     }
    public static function deleteEncounterByID($id) {
        return self::getVerbinding()->voerSqlQueryUit("DELETE FROM ENCOUNTER where ID=?", array($id));
    }

    public static function deleteEncounter($encounter) {
        return self::deleteMonsterById($encounter->getID());
    }



    protected static function converteerRijNaarObject($databaseRij) {
        return new Monster($databaseRij['ID'], $databaseRij['Moeilijkheidsgraad	'], $databaseRij['UserID']);
    }
}