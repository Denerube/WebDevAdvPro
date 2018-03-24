<?php
/**
 * Created by PhpStorm.
 * User: ruben
 * Date: 24/03/2018
 * Time: 19:39
 */

class Monster
{
    private $ID;
    private $Naam;
    private $Type;
    private $Levenspunten;
    private $schildwaarde;

    /**
     * Monster constructor.
     * @param $ID
     * @param $Naam
     * @param $Type
     * @param $Levenspunten
     * @param $schildwaarde
     */
    public function __construct($ID, $Naam, $Type, $Levenspunten, $schildwaarde)
    {
        $this->ID = $ID;
        $this->Naam = $Naam;
        $this->Type = $Type;
        $this->Levenspunten = $Levenspunten;
        $this->schildwaarde = $schildwaarde;
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
    public function getNaam()
    {
        return $this->Naam;
    }

    /**
     * @param mixed $Naam
     */
    public function setNaam($Naam)
    {
        $this->Naam = $Naam;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param mixed $Type
     */
    public function setType($Type)
    {
        $this->Type = $Type;
    }

    /**
     * @return mixed
     */
    public function getLevenspunten()
    {
        return $this->Levenspunten;
    }

    /**
     * @param mixed $Levenspunten
     */
    public function setLevenspunten($Levenspunten)
    {
        $this->Levenspunten = $Levenspunten;
    }

    /**
     * @return mixed
     */
    public function getSchildwaarde()
    {
        return $this->schildwaarde;
    }

    /**
     * @param mixed $schildwaarde
     */
    public function setSchildwaarde($schildwaarde)
    {
        $this->schildwaarde = $schildwaarde;
    }

}