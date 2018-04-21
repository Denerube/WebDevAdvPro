<?php

$listEncounterMonstersID=array();

if (!isset($_POST["passMonsterID"])){
    echo "raar";
}
else{
    //array_push($listEncounterMonstersID,$_POST["passMonsterID"]);
    var_dump($_POST["passMonsterID"]);

    echo "niet raar";

}

/*if (isset($_SESSION["Encounter"])){
    array_push($_SESSION["Encounter"],$listEncounterMonsters);
}
else{
    //vraag user om zich in te loggen
}*/






?>
