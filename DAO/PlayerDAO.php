<?php
/**
 * Created by PhpStorm.
 * User: ruben
 * Date: 2/04/2018
 * Time: 15:07
 */
include_once "MODELS/Player.php";
include_once '../DAO/DatabaseFactory.php';

class PlayerDAO
{
    private static function getVerbinding() {
        return DatabaseFactory::getDatabase();
    }

    public static function getAll() {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM PLAYERS");
        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }

    public static function getPlayerByID($ID){
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM PLAYERS WHERE ID=?",array($ID));
        if ($resultaat->num_rows == 1) {
            $databaseRij = $resultaat->fetch_array();
            return self::converteerRijNaarObject($databaseRij);
        } else {
            //Er is waarschijnlijk iets mis gegaan
            return false;
        }

    }
    public static function  insertNewPlayer($player){
         return self::getVerbinding()->voerSqlQueryUit("INSERT INTO PLAYERS (Nickname, Race, Class,EncounterID) VALUES ('?','?','?','?')", array($player->getNickname(),$player->getRace(),$player->getClass(),$player->getEncounterID()));

     }
    public static function deletePlayerByID($id) {
        return self::getVerbinding()->voerSqlQueryUit("DELETE FROM PLAYERS where ID=?", array($id));
    }

    public static function deletePlayer($player) {
        return self::deleteGebruikerByID($player->getID());
    }



    protected static function converteerRijNaarObject($databaseRij) {
        return new Player($databaseRij['ID'], $databaseRij['Nickname'], $databaseRij['Race'], $databaseRij['Class'], $databaseRij['EncounterID']);
    }

}