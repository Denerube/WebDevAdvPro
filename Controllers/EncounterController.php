<?php

$listEncounterMonsters=array();
if(isset($_POST["monsterID"])){
    if(!empty($_POST["monsterID"])){

        $monsterrID=$_POST["monsterID"];
        array_push($listEncounterMonsters,$monsterrID);
        echo $listEncounterMonsters[1];
    }
    else {
        echo "error";
    }
}
else {
    echo "error";
}








?>
