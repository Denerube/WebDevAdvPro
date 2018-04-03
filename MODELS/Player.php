<?php
/**
 * Created by PhpStorm.
 * User: ruben
 * Date: 2/04/2018
 * Time: 15:01
 */

class Player
{
    private $ID;
    private $Nickname;
    private $Race;
    private $Class;
    private $EncounterID;

    /**
     * Player constructor.
     * @param $ID
     * @param $Nickname
     * @param $Race
     * @param $Class
     * @param $EncounterID
     */
    public function __construct($ID, $Nickname, $Race, $Class, $EncounterID)
    {
        $this->ID = $ID;
        $this->Nickname = $Nickname;
        $this->Race = $Race;
        $this->Class = $Class;
        $this->EncounterID = $EncounterID;
    }


    /**
     * @return mixed
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param mixed $ID
     */
    public function setID($ID)
    {
        $this->ID = $ID;
    }

    /**
     * @return mixed
     */
    public function getNickname()
    {
        return $this->Nickname;
    }

    /**
     * @param mixed $Nickname
     */
    public function setNickname($Nickname)
    {
        $this->Nickname = $Nickname;
    }

    /**
     * @return mixed
     */
    public function getRace()
    {
        return $this->Race;
    }

    /**
     * @param mixed $Race
     */
    public function setRace($Race)
    {
        $this->Race = $Race;
    }

    /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->Class;
    }

    /**
     * @param mixed $Class
     */
    public function setClass($Class)
    {
        $this->Class = $Class;
    }

    /**
     * @return mixed
     */
    public function getEncounterID()
    {
        return $this->EncounterID;
    }

    /**
     * @param mixed $EncounterID
     */
    public function setEncounterID($EncounterID)
    {
        $this->EncounterID = $EncounterID;
    }



}