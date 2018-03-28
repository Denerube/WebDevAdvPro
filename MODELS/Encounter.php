<?php
include_once 'Monster.php';
include_once 'Loot.php';
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
    private $Loot=array();

    /**
     * Encounter constructor.
     * @param $ID
     * @param $Moeilijkheidsgraad
     * @param array $Monsters
     * @param array $Loot
     */
    public function __construct($ID, $Moeilijkheidsgraad, array $Monsters, array $Loot)
    {
        $this->ID = $ID;
        $this->Moeilijkheidsgraad = $Moeilijkheidsgraad;
        $this->Monsters = $Monsters;
        $this->Loot = $Loot;
    }

    /**
     * @return array
     */
    public function getLoot()
    {
        return $this->Loot;
    }

    /**
     * @param array $Loot
     */
    public function setLoot($Loot)
    {
        $this->Loot = $Loot;
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
             // if ($this->Monsters[i] == $Monster)
            if ($this->Monsters[i]->getID()==$Monster->GetID())
            {
                unset($this->Monsters[$i]);
            }
        }
    }
    public function  addLoot($Loot){
        array_push($this->Loot,$Loot);
    }
    public function deleteLoot($Loot){
        for ($i=0;i< count($this->Loot);$i++){
           // if ($this->Loot[i] == $Loot)
            if ($this->Loot[i]->getID()==$Loot->GetID())
            {
                unset($this->Loot[$i]);
            }
        }
    }

}