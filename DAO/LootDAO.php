<?php
/**
 * Created by PhpStorm.
 * User: ruben
 * Date: 28/03/2018
 * Time: 18:39
 */
include_once 'MODELS/Loot.php';
include_once '../DAO/DatabaseFactory.php';


class LootDAO
{
    private static function getVerbinding() {
        return DatabaseFactory::getDatabase();
    }

    public static function getAll() {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM LOOT");
        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }
    public static function getAllByEncounterID($ID) {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT LOOT.ID,LOOT.Naam,LOOT.Waarde FROM LOOT INNER JOIN ENCOUNTERLOOT ON LOOT.ID=ENCOUNTERLOOT.LootID WHERE ENCOUNTERLOOT.EncounterID=?",array($ID));
        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }

    public static function getLootByID($ID){
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM LOOT WHERE ID=?".array($ID));
        if ($resultaat->num_rows == 1) {
            $databaseRij = $resultaat->fetch_array();
            return self::converteerRijNaarObject($databaseRij);
        } else {
            //Er is waarschijnlijk iets mis gegaan
            return false;
        }

    }
     public static function  insertNewLoot($loot){
         return self::getVerbinding()->voerSqlQueryUit("INSERT INTO LOOT(Naam, Waarde) VALUES ('?','?','?')", array($loot->getID(),$loot->getNaam(),$loot->getWaarde()));

     }
    public static function deleteMonsterById($id) {
        return self::getVerbinding()->voerSqlQueryUit("DELETE FROM MONSTERS where ID=?", array($id));
    }

    public static function deleteLoot($loot) {
        return self::deleteMonsterById($loot->getID());
    }



    protected static function converteerRijNaarObject($databaseRij) {
        return new Loot($databaseRij['ID'], $databaseRij['Naam'], $databaseRij['Waarde']);
    }
}