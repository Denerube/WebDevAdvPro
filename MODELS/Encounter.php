<?php
include_once 'Monster.php';
/**
 * Created by PhpStorm.
 * User: ruben
 * Date: 24/03/2018
 * Time: 19:43
 */

class Encounter
{
    private $ID;
    private  $Moeilijkheidsgraad;
    private $Monsters=array();

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
    public function getMoeilijkheidsgraad()
    {
        return $this->Moeilijkheidsgraad;
    }

    /**
     * @param mixed $Moeilijkheidsgraad
     */
    public function setMoeilijkheidsgraad($Moeilijkheidsgraad)
    {
        $this->Moeilijkheidsgraad = $Moeilijkheidsgraad;
    }

    /**
     * @return array
     */
    public function getMonsters()
    {
        return $this->Monsters;
    }

    /**
     * @param array $Monsters
     */
    public function setMonsters($Monsters)
    {
        $this->Monsters = $Monsters;
    }
    public function  addMonster($Monster){
       array_push($this->Monsters,$Monster);
    }
    public function deleteMonster($Monster){
        for ($i=0;i< count($this->Monsters);$i++){
            if ($this->Monsters[i] == $Monster){
                unset($this->Monsters[$i]);
            }
        }
    }

}