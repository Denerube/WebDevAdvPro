<?php
/**
 * Created by PhpStorm.
 * User: ruben
 * Date: 24/03/2018
 * Time: 19:41
 */

class Gebruiker
{
    private  $ID;
    private  $Email;
    private  $Naam;
    private  $Wachtwoord;

    /**
     * Gebruiker constructor.
     * @param $ID
     * @param $Email
     * @param $Naam
     * @param $Wachtwoord
     */
    public function __construct($ID, $Email, $Naam, $Wachtwoord)
    {
        $this->ID = $ID;
        $this->Email = $Email;
        $this->Naam = $Naam;
        $this->Wachtwoord = $Wachtwoord;
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
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param mixed $Email
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
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
    public function getWachtwoord()
    {
        return $this->Wachtwoord;
    }

    /**
     * @param mixed $Wachtwoord
     */
    public function setWachtwoord($Wachtwoord)
    {
        $this->Wachtwoord = $Wachtwoord;
    }


}