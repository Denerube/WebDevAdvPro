<?php
/**
 * Created by PhpStorm.
 * User: ruben
 * Date: 24/03/2018
 * Time: 20:06
 */
include_once '../MODELS/Monster.php';
include_once '../DAO/DatabaseFactory.php';

class MonsterDAO
{
    private static function getVerbinding() {
        return DatabaseFactory::getDatabase();
    }

    public static function getAll() {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM MONSTERS");
        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }
    public static function getAllByEncounterID($ID) {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT MONSTERS.ID,MONSTERS.Naam,MONSTERS.Type,MONSTERS.Levenspunten,MONSTERS.Schildwaarde FROM MONSTERS INNER JOIN ENCOUNTERMONSTERS ON MONSTERS.ID=ENCOUNTERMONSTERS.MonsterID WHERE ENCOUNTERMONSTERS.EncounterID=?",array($ID));
        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }

    public static function getMonsterById($ID){
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM MONSTERS WHERE ID=?",array($ID));
        if ($resultaat->num_rows == 1) {
            $databaseRij = $resultaat->fetch_array();
            return self::converteerRijNaarObject($databaseRij);
        } else {
            //Er is waarschijnlijk iets mis gegaan
            return false;
        }

    }
    public static  function  getLatestMonsterID(){
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT MAX(ID) FROM MONSTERS ");
        if ($resultaat->num_rows == 1) {
            $databaseRij = $resultaat->fetch_row();
            return $databaseRij[0];
        } else {
            //Er is waarschijnlijk iets mis gegaan
            return false;
        }
    }
    public static function  insertNewMonster($monster)
    {
        return self::getVerbinding()->voerSqlQueryUit("INSERT INTO MONSTERS( Naam, Type, Levenspunten, Schildwaarde) VALUES ('?','?','?','?','?')", array( $monster->getNaam(), $monster->getType(), $monster->getLevenspunten(), $monster->getSchildwaarde(),$monster->getFoto()));
    }
    public static function deleteMonsterById($id) {
        return self::getVerbinding()->voerSqlQueryUit("DELETE FROM MONSTERS where ID=?", array($id));
    }

    public static function deleteMonster($monster) {
        return self::deleteMonsterById($monster->getID());
    }
    public static function getBlob($ID){
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT Foto FROM MONSTERS WHERE ID=?",array($ID));
        if ($resultaat->num_rows == 1) {
            $databaseRij = $resultaat->fetch_array();
            return self::converteerRijNaarObject($databaseRij);
        } else {
            //Er is waarschijnlijk iets mis gegaan
            return false;
        }
    }

    protected static function converteerRijNaarObject($databaseRij) {
        return new Monster($databaseRij['ID'], $databaseRij['Naam'], $databaseRij['Type'], $databaseRij['Levenspunten'], $databaseRij['Schildwaarde'],$databaseRij["Foto"]);
    }


}