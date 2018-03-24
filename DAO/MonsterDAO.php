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
    protected static function converteerRijNaarObject($databaseRij) {
        return new Monster($databaseRij['ID'], $databaseRij['Naam'], $databaseRij['Type'], $databaseRij['Levenspunten'], $databaseRij['Schildwaarde']);
    }


}