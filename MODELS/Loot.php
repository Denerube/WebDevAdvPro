<?php
/**
 * Created by PhpStorm.
 * User: ruben
 * Date: 24/03/2018
 * Time: 19:42
 */

class Loot
{
    private  $ID;
    private  $Naam;
    private  $Waarde;

    /**
     * Loot constructor.
     * @param $ID
     * @param $Naam
     * @param $Waarde
     */
    public function __construct($ID, $Naam, $Waarde)
    {
        $this->ID = $ID;
        $this->Naam = $Naam;
        $this->Waarde = $Waarde;
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
    public function getWaarde()
    {
        return $this->Waarde;
    }

    /**
     * @param mixed $Waarde
     */
    public function setWaarde($Waarde)
    {
        $this->Waarde = $Waarde;
    }

}